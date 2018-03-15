<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <!--<link href="public/css/style.css" rel="stylesheet" /> -->
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Bootstrap core CSS -->
	    <link href="public/css/bootstrap.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="public/css/blog-home.css" rel="stylesheet">

	    <!-- CSS Customization -->
	    <link href="public/css/style.css" rel="stylesheet">
    </head>
        
    <body>
	    	 <!-- Navigation -->
	    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	      <div class="container">
	        <a class="navbar-brand" href="index.php">Mon voyage en Alaska</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item active">
	              <a class="nav-link" href="index.php">Accueil
	                <span class="sr-only">(current)</span>
	              </a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="index.php?action=about">A propos de moi</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="index.php?action=project">Mon projet</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="index.php?action=contactForm">Me contacter</a>
	            </li>
	          </ul>
	        </div>
	      </div>
	    </nav>
        <?= $content ?>
    </body>

     <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
          <a href="index.php?action=logAdmin" class="m-0 text-left text-white">Login Admin</a><br/>
          <a href="index.php?action=adminPageDemo" class="m-0 text-left text-white">Admin Page Demo</a>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Core JavaScript -->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/tinymce/tinymce.min.js"></script>
    <script src="public/js/tinymce/init-tinymce.js"></script>
    <script src="public/js/bootstrap.bundle.js"></script>

</html>