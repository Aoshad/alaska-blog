<?php $title = 'Mes articles'; ?>

<?php ob_start(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Mes articles à modifier
                </h1>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <?php
                    while ($data = $posts->fetch())
                    {
                        ?>
                        <div class="card-body">
                            <p class="card-text"><?= html_entity_decode($data['content']) ?></p>
                            <a href="index.php?action=postToModify&amp;id=<?= $data['id'] ?>" class="btn btn-primary">Lire plus &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <em>le <?= $data['creation_date_fr'] ?></em>
                        </div>
                        <?php
                    }
                    $posts->closeCursor();
                    ?>

                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Plus anciens</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Plus récents &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Recherche</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Vous recherchez...">
                            <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Y aller !</button>
                </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Janvier 2018</a>
                                    </li>
                                    <li>
                                        <a href="#">Février 2018</a>
                                    </li>
                                    <li>
                                        <a href="#">Mars 2018</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Décembre 2017</a>
                                    </li>
                                    <li>
                                        <a href="#">Novembre 2017</a>
                                    </li>
                                    <li>
                                        <a href="#">Octobre 2017</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Tous les chapitres du livre</h5>
                    <div class="card-body">
                        <a href="index.php?action=listPosts">Accéder aux chapitres</a>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>