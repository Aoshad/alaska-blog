<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="offset-1 col-md-10">

            <p>Erreur 404 : désolé mais la page demandée est introuvable !</p>

            <a href="index.php?=returnHome" class="btn btn-success">Retourner à l'accueil</a>

        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

