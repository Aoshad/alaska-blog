<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="offset-1 col-md-10">
            <form action="index.php?action=modifyPass" class="form-horizontal contact-form" method="post">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Modifier le mot de passe</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="newPass">Nouveau mot de passe</label>
                        <div class="col-md-4">
                            <input id="newPass" name="newPass" type="text" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-info">Modifier</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

