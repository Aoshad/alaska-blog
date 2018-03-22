<?php $title = "Editeur de texte"; ?>

<?php ob_start(); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- TinyMce Integration -->
        <div class="col-lg-12">
            <form action="index.php?action=addPost" method="post" >
                <textarea name="content" id="content" class="tinymce"></textarea>
            </form>
        </div>

    </div>


</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

