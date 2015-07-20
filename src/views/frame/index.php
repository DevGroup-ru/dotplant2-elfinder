<!-- Include jQuery, jQuery UI, elFinder (REQUIRED) -->

<script type="text/javascript">
    var FileBrowserDialogue = {
        init: function() {
            // Here goes your code for setting your custom things onLoad.
        },
        mySubmit: function (URL) {
            // pass selected file path to TinyMCE
            parent.tinymce.activeEditor.windowManager.getParams().setUrl(URL);

            // close popup window
            parent.tinymce.activeEditor.windowManager.close();
        }
    }

    $().ready(function() {
        var elf = $('#elfinder').elfinder({
            // set your elFinder options here
            url: <?= \yii\helpers\Json::encode(\yii\helpers\Url::to(['/elfinder/path'])) ?>,  // connector URL
            getFileCallback: function(file) { // editor callback
                // file.url - commandsOptions.getfile.onlyURL = false (default)
                // file     - commandsOptions.getfile.onlyURL = true
                FileBrowserDialogue.mySubmit(file); // pass selected file path to TinyMCE
            }
        }).elfinder('instance');
    });
</script>