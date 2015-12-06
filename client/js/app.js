var fieldWidth = 33;
var fieldHeight = 33;
var frameSize = 24;
var windowWidth = fieldWidth * frameSize;
var windowHeight = fieldHeight * frameSize;

var renderer = PIXI.autoDetectRenderer(windowWidth, windowHeight);
document.body.appendChild(renderer.view);
renderer.backgroundColor = 0x447a2c;

var stage = new PIXI.Container();
var fieldString = '********************************** #   # #  #a#  #  #  &        #**a*a*a*#* * * * *a* * *#*#*a*#*#**#aa  a#   # #a   # a#          ** * *#* *a* * *#* * * * *&* * * **     a          # #            ** * * * *a* * *a*#* * * * * * * **#       # #       b& 2  #  #  #**#*a* *#* * * * * * * * *#* * * **#  # a#               # a   #  ** * *#*#* * * * * * * * * * *#* **   #a #      #                 ** * * * *a* * * * * * * * * * *#**     ## #     #   # #   a      ** * *a* * *#* *#* * *a* * * * * **       #a       #      ## # ###** * * *#* * *#* * *#*#*&* * * * **       #       #    k# #     a ** * * *a* * * * * * * * * * *#* **        ## ## a             # #** * * * * * * * * * * * * * * * **                   &    ###  ##** * * * * * *#* *#* * * * * * * **                   a ##        ** * * * * * * * * * * *a*#* * * **     ##         &#         #   ** * * *#* * * * * * * *#* * * * **   #   #         #     # &     **a* * * * * * * * * * * * *#*#* **  #                    ##   &  ** * * * * *#* * * * * * *#* *#* ** #    # &        #       #     **********************************';

const BOMBERMAN             = 'b'; // this is what he usually looks like
const BOMB_BOMBERMAN        = 'o'; // this is if he is sitting on own bomb
const DEAD_BOMBERMAN        = 'd'; // oops, your Bomberman is dead (don't worry, he will appear
const OTHER_BOMBERMAN       = 'a'; // this is what other Bombermans looks like
const OTHER_BOMB_BOMBERMAN  = 'c'; // this is if player just set the bomb
const OTHER_DEAD_BOMBERMAN  = 'k'; // enemy corpse (it will disappear shortly, right on the next move)
const BOMB_TIMER_5          = '5'; // after bomberman set the bomb, the timer starts (5 tacts)
const BOMB_TIMER_4          = '4'; // this will blow up after 4 tacts
const BOMB_TIMER_3          = '3'; // this after 3
const BOMB_TIMER_2          = '2'; // two
const BOMB_TIMER_1          = '1'; // one
const BOOM                  = 'w'; // Boom! this is what is bomb does, everything that is destroyable
const WALL                  = '*'; // indestructible wall - it will not fall from bomb
const DESTROY_WALL          = '#'; // this wall could be blowed up
const DESTROYED_WALL        = 'H'; // this is how broken wall looks like, it will dissapear on next move
const MEAT_CHOPPER          = '&'; // this guys runs over the board randomly and gets in the way all the time
const DEAD_MEAT_CHOPPER     = 'x'; // this is chopper corpse
const NONE                  = ' '; // this is the only place where you can move your Bomberman

var responseToField = function(string) {
    var fieldObject = { };
    var j = 0;
    var i = 0;
    for (var n = 0; n < string.length; n++) {
        if (i >= (fieldWidth)) {
            i = 0;
            j++;
        }

        if (!fieldObject[j]) {
            fieldObject[j] = { };
        }
        fieldObject[j][i] = string[n];
        i++;
    }

    return fieldObject;
};

var clearStage = function() {
    for (var i = stage.children.length - 1; i >= 0; i--) {
        stage.removeChild(stage.children[i]);
    }
};

createGameField = function(field){
    clearStage();
    for (var row in field) {
        for (var col in field[row]) {
            var zone = false;

            switch (field[row][col]) {
                case WALL:
                    zone = PIXI.Sprite.fromImage('_assets/metal.png');
                    break;
                case DESTROY_WALL:
                    zone = PIXI.Sprite.fromImage('_assets/brick.png');
                    break;
                case BOMBERMAN:
                    zone = PIXI.Sprite.fromImage('_assets/bomber.png');
                    break;
                case BOMB_BOMBERMAN:
                case BOMB_TIMER_5:
                case BOMB_TIMER_4:
                case BOMB_TIMER_3:
                case BOMB_TIMER_2:
                case BOMB_TIMER_1:
                    zone = PIXI.Sprite.fromImage('_assets/bomb.png');
                    break;
                case MEAT_CHOPPER:
                    zone = PIXI.Sprite.fromImage('_assets/enemy.png');
                    break;
            }
            if (zone) {
                zone.anchor.set(0);
                zone.scale.set(1);
                zone.position.x = row * frameSize;
                zone.position.y = col * frameSize;
                stage.addChild(zone);
            }
        }
    }
    //setTimeout(function(){
    //    createGameField(field);
    //}, 1000);
};

requestAnimationFrame(animate);
function animate() {
    renderer.render(stage);
    requestAnimationFrame(animate);
}

// Get data
var host = 'ws://127.0.0.1:8081';
window.onload = function() {
    var socket = new WebSocket(host);
    socket.onerror = function(error) {
        alert('Server temporary unavailable');
    };
    socket.onopen = function(event) {
        console.log(event.type);
        socket.send('test');
    };
    socket.onmessage = function(event) {
        var message = event.data;
        var field = responseToField(message);
        createGameField(field);
    };
};