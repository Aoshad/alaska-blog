<?php $title = "Editeur de texte"; ?>

<?php ob_start(); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- TinyMce Integration -->
        <div class="col-lg-12">
            <form>
                <textarea class="tinymce">$content</textarea>
            </form>
        </div>

    </div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

