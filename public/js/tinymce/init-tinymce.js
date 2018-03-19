tinymce.init({

    /* Replace textarea with tinymce editor */
    selector: "textarea.tinymce",

    /*Customized language */
    language: "fr_FR",
    language_url: "public/js/tinymce/langs/fr_FR.js",

    /* Format of the editor */
    height: 350,
    width: "100%",

    /* Save Button */
    plugins: "save",
    toolbar: "save"

});