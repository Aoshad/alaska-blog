<?php ob_start(); ?>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <img class="jean-pic" src="public/images/jean.png">
            </div>

            <div class="col-md-8 text-center">

                <div class="text-container">

                    <p><strong>Mon nom est Jean Forteroche. Je suis écrivain. Après avoir suivi des études de Lettres à l'université de Miskatonic, je désire explorer le grand nord</strong></p>

                    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>

                </div>
            </div>
        </div>
    </div>



    <?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

