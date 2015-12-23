<!DOCTYPE HTML>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <script src="./js/pixi.js"></script>
    <title>Bomberman game</title>
</head>
<body>
<table style="min-width: 1300px;">
    <tr>
        <td style="width: 800px; height: 800px;"></td>
        <td>
            <input type="button" id="run" value="run" onclick="runCode(); return;"/>
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
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div>
                <ul id="console">

                </ul>
            </div>
        </td>
    </tr>
</table>


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

<script src="./js/app.js"></script>
</body>
</html>
