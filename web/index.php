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
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
            </ul>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/dawn");
    editor.getSession().setMode("ace/mode/javascript");
    function runCode() {
        console.log('Run code:');
        eval(editor.getValue());
    }
</script>

<script src="./js/app.js" defer></script>
</body>
</html>
