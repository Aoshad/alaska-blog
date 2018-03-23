<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="offset-1 col-md-10">

            <form action="index.php?action=enterAdmin" class="form-horizontal" method="post">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Connexion à l'espace administrateur</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Pseudo</label>
                        <div class="col-md-4">
                            <input id="textinput" name="pseudoInput" type="text" placeholder="Entrez votre pseudo" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
                        <div class="col-md-4">
                            <input id="passwordinput" name="passInput" type="password" placeholder="Entrez votre mot de passe" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-success">Se connecter</button>
                        </div>
                    </div>

                </fieldset>
            </form>


        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

