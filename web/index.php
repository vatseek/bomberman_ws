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
<div id="editor">/**
* Enter function (!IMPORTANT NOT REMOVE)
* @param Object data Object[32x32] with data
*/
window.main = function (data) {
    console.log('new data');
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
