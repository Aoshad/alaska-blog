<?php
require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'listPosts') {
            listPosts();
        }

        // To Add Comments
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['content'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['content']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        // To Report Comments
        elseif ($_GET['action'] == 'commentReport') {
            if (isset($_GET['id']) && $_GET['id'] > 0 && ($_GET['postId']) && $_GET['postId'] > 0) {
                commentReport($_GET['id'], $_GET['postId']);
            }
        }

        // Link To Differents sections
        elseif ($_GET['action'] == 'about') {
            about();
        }

        elseif ($_GET['action'] == 'project') {
            project();
        }

        elseif ($_GET['action'] == 'contactForm') {
            contactForm();
        }

        elseif ($_GET['action'] == 'logAdmin') {
            logAdmin();
        }

        elseif ($_GET['action'] == 'adminPageDemo') {
            adminPageDemo();
        }

        // Login For Admin
        elseif ($_GET['action'] == 'enterAdmin') {
            if (!empty($_POST['pseudoInput'])) {
                enterAdmin($_POST['pseudoInput']);
            }
            else {
                echo "Le mot de passe n'est pas celui enregistré dans la base de données";
                logAdmin();
            }
        }

        // Modify Comment For The Admin
        elseif($_GET['action'] == 'addPost') {
            addPost();
        }
        elseif ($_GET['action'] == 'updateDeletePost') {
            listPostsToModify();
        }

        elseif ($_GET['action'] == 'postToModify') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                postToModify($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'deletePost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deletePost($_GET['id']);
            }
            else {
                throw new Exception('La suppression n\'a pas pu être effectuée');
            }
        }

        elseif ($_GET['action'] == 'moderateComment') {
            moderateComment();
        }
    }

    // Show Home Page With Last Post
    else {
        showLastPost();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

