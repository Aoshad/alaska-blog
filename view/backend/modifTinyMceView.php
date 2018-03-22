<?php $title = "Editeur de texte"; ?>

<?php ob_start(); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- TinyMce Integration -->
        <div class="col-lg-12">
            <form action="index.php?action=modifyPost&amp;id=<?= $post['id'] ?>" method="post">
                <textarea name="content" class="tinymce"><?= html_entity_decode($post['content']) ?></textarea>
            </form>
        </div>

    </div>

</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

