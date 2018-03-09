<?php $title = 'Adminstration du site'; ?>

<?php ob_start(); ?>


    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 back-col">
                <a><button class="btn-primary back-primary btn-lg back-btn">Ecrire un article</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 back-col">
                <a href="index.php?action=updateDeleteComment"><button class="btn-success back-success btn-lg back-btn">Modifier ou supprimer un article</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 back-col">
                <a><button class="btn-danger back-danger btn-lg back-btn">Modérer des commentaires</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 back-col">
                <a><button class="btn-warning back-warning btn-lg back-btn">Modifier le mot de passe</button></a>
            </div>
        </div>

    </div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

