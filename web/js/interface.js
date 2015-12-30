var editor = editor || false;

$(document).ready(function(){
    var defaultSkin = 'dawn';
    var skinSettings = $.cookie('data_skin');
    if (!skinSettings) {
        skinSettings = defaultSkin;
    }
    editor = ace.edit("editor");
    $('#skin_theme').change(function(e){
        var theme = $(this).val();
        $.cookie('data_skin', theme);
        editor.setTheme("ace/theme/" + theme);
    });

    $('#skin_theme').val(skinSettings);
    $('#skin_theme').trigger('change');
    editor.getSession().setMode("ace/mode/javascript");
});

function runCode() {
    console.log('Run code:');
    eval(editor.getValue());
}