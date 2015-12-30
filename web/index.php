<!DOCTYPE HTML>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="./js/pixi.js"></script>
    <title>Bomberman game</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bomberman</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Help</a></li>
            </ul>
            <form action="" class="navbar-form navbar-right">
                <fieldset>
                <div class="form-group">
                    <select name="" id="skin_theme" class="form-control">
                        <option value=""></option>
                        <option value="ambiance">ambiance</option>
                        <option value="chaos">chaos</option>
                        <option value="chrome">chrome</option>
                        <option value="clouds">clouds</option>
                        <option value="clouds_midnight">clouds_midnight</option>
                        <option value="cobalt">cobalt</option>
                        <option value="crimson_editor">crimson_editor</option>
                        <option value="dawn">dawn</option>
                        <option value="dreamweaver">dreamweaver</option>
                        <option value="eclipse">eclipse</option>
                        <option value="github">github</option>
                        <option value="idle_fingers">idle_fingers</option>
                        <option value="iplastic">iplastic</option>
                        <option value="katzenmilch">katzenmilch</option>
                        <option value="kr_theme">kr_theme</option>
                        <option value="kuroir">kuroir</option>
                        <option value="merbivore">merbivore</option>
                        <option value="merbivore_soft">merbivore_soft</option>
                        <option value="mono_industrial">mono_industrial</option>
                        <option value="monokai">monokai</option>
                        <option value="pastel_on_dark">pastel_on_dark</option>
                        <option value="solarized_dark">solarized_dark</option>
                        <option value="solarized_light">solarized_light</option>
                        <option value="sqlserver">sqlserver</option>
                        <option value="terminal">terminal</option>
                        <option value="textmate">textmate</option>
                        <option value="tomorrow">tomorrow</option>
                        <option value="tomorrow_night_blue">tomorrow_night_blue</option>
                        <option value="tomorrow_night_bright">tomorrow_night_bright</option>
                        <option value="tomorrow_night_eighties">tomorrow_night_eighties</option>
                        <option value="tomorrow_night">tomorrow_night</option>
                        <option value="twilight">twilight</option>
                        <option value="vibrant_ink">vibrant_ink</option>
                        <option value="xcode">xcode</option>
                    </select>
                </div>
                </fieldset>
            </form>
<!--            <form class="navbar-form navbar-right">-->
<!--                <input type="text" class="form-control" placeholder="Search...">-->
<!--            </form>-->
        </div>
    </div>
</nav>
<div class="container" id="mainblock">
    <div class="row">
        <canvas class="game-field" id="game-field" width="792" height="792">

        </canvas>
        <div class="code-field">
            <div id="editor">
                // 'b' - this is what he usually looks like
                // 'o' - this is if he is sitting on own bomb
                // 'd' - oops, your Bomberman is dead (don't worry, he will appear
                // 'a' - this is what other Bombermans looks like
                // 'c' - this is if player just set the bomb
                // 'k' - enemy corpse (it will disappear shortly, right on the next move)
                // '5' - after bomberman set the bomb, the timer starts (5 tacts)
                // '4' - this will blow up after 4 tacts
                // '3' - this after 3
                // '2' - two
                // '1' - one
                // 'w' - Boom! this is what is bomb does, everything that is destroyable
                // '*' - indestructible wall - it will not fall from bomb
                // '#' - this wall could be blowed up
                // 'H' - this is how broken wall looks like, it will dissapear on next move
                // '&' - this guys runs over the board randomly and gets in the way all the time
                // 'x' - this is chopper corpse
                // ' ' - this is the only place where you can move your Bomberman

                // User commands
                // UP, DOWN, LEFT, RIGHT, BOOM

                /**
                * Enter function (!IMPORTANT NOT REMOVE)
                * @param Object data Object[32x32] with data
                *
                * @returns {string} User command
                */
                window.main = function (data) {
                    console.log('new data');

                    return 'UP';
                };
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-2.1.4.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="./js/app.js" defer></script>
<script src="./js/interface.js" defer></script>
</body>
</html>
