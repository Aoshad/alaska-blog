<?php $title = "Un épisode de Bienvenue en Alaska"; ?>

<?php ob_start(); ?>

<p><a class="postReturn" href="index.php?action=listPosts">Retour à la liste des billets</a></p>


 <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column --> 
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Titre de l'article</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">JForteroche</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>le <?= $post['creation_date_fr'] ?></p>

          <hr>

          <hr>

          <!-- Post Content -->
          <p class="lead"><?= html_entity_decode($post['content']) ?></p>

          <hr>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Laisse un commentaire:</h5>
            <div class="card-body">
              <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post" >
                <div>
                  <label for="author">Auteur</label><br />
                  <input type="text" id="author" name="author" />
                </div><br />
                <div class="form-group">
                  <label for="content">Commentaire</label> 
                  <textarea id="content" name="content" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Soumettre</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <?php
          while ($data = $comments->fetch())
          {
          ?>
          <div class="media mb-4"> 
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              
            <h5 class="mt-0"><?= $data['author'] ?></h5>
                <?= $data['content'] ?>
                <form action="index.php?action=commentReport&amp;id=<?= $data['id'] ?>&amp;postId=<?= $post['id'] ?>" method="post">
                    <?php
                        if($data['report'] == 1) { ?>
                            <div><button type = "submit" class="btn btn-info btn-sm" style="display:none" /> Signaler</button ></div>
                        <?php } else { ?>
                            <div><button type = "submit" class="btn btn-info btn-sm"/> Signaler</button></div>
                        <?php }
                    ?>
                </form>
          
            </div>
            
          </div>
          <?php
          }
          $comments->closeCursor();
          ?>

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
                  <button class="btn btn-secondary" type="button">Y aller!</button>
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

