<?php ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="offset-1 col-md-10">
            <form class="form-horizontal contact-form">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Fomulaire de contact</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Votre nom</label>
                        <div class="col-md-4">
                            <input id="textinput" name="textinput" type="text" placeholder="Entrez votre nom" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="mail">Adresse e-mail</label>
                        <div class="col-md-5">
                            <input id="mail" name="mail" type="text" placeholder="Entrez votre adresse e-mail" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textarea">Votre message</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="textarea" name="textarea">Ecrivez votre message</textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-info">Envoyer le message</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

