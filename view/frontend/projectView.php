<?php ob_start(); ?>



<div class="container">

    <div class="row projectRow">

        <div class="col-md-12">
            <h1><em>Mon projet commença une soirée de pleine lune</em></h1>
        </div>

    </div>

    <div class="row projectRow">

        <div class="col-md-7">
            <img class="projectImg" src="public/images/aurora.jpg" />
        </div>

        <div class="projectText col-md-5">
            <p class="projectTitle">L'immensité du nord et ses mystères m'attirent</p>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem."</p>
        </div>

    </div>

    <div class="row projectRow">

        <div class="projectText col-md-5">
            <p class="projectTitle">Je décidais de me pencher sur mon nouveau livre</p>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem."</p>
        </div>

        <div class="col-md-7">
            <img class="projectImg" src="public/images/book.jpg" />
        </div>

    </div>


    <div class="row projectRow">

        <div class="col-md-7">
            <img class="projectImg" src="public/images/oldCalendar.jpg" />
        </div>

        <div class="projectText col-md-5">
            <p class="projectTitle">et d'en publier un chapitre par mois</p>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem."</p>
        </div>
    </div>

</div>



<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>

