<?php $title = 'Adminstration du site'; ?>

<?php ob_start(); ?>


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 back-col">
                <a href="index.php?action=addPost"><button class="back-primary btn-lg back-btn">Ecrire un article</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 back-col">
                <a href="index.php?action=updateDeletePost"><button class="back-success btn-lg back-btn">Modifier ou supprimer un article</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 back-col">
                <a href="index.php?action=moderateComment"><button class="back-danger btn-lg back-btn">Modérer des commentaires</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 back-col">
                <a><button class="back-warning btn-lg back-btn">Modifier le mot de passe</button></a>
            </div>
        </div>

    </div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

