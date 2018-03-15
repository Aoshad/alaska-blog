<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new \David\alaskaBlog\model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

function post($postId)
{
    $postManager = new \David\alaskaBlog\model\PostManager();
    $commentManager = new \David\alaskaBlog\model\CommentManager();

    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);

    require('view/frontend/postView.php');
}

function showLastPost() 
{
    $postManager = new \david\alaskaBlog\model\PostManager();
    $post = $postManager->getLastPost();

    require('view/frontend/homeView.php');

}

function addComment($postId, $author, $content)
{
    $commentManager = new \David\alaskaBlog\model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $content);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function commentReport($ID, $postId) {
    $commentManager = new \David\alaskaBlog\model\CommentManager();
    $commentManager->reporting($ID);
    echo '<script>alert("Le commentaire a bien été signalé");</script>';

    $postManager = new \david\alaskaBlog\model\PostManager();
    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);


    require('view/frontend/postView.php');
}

function about() {
    require('view/frontend/aboutView.php');
}

function project() {
    require('view/frontend/projectView.php');
}

function contactForm() {
    require('view/frontend/contactView.php');
}

function enterAdmin($pseudo) {
    if ($pseudo == "JForteroche") {
        require('view/backend/adminPanelView.php');
    } else {
        echo 'le mot de passe n\'est pas bon';

    }
    require('view/backend/adminPanelView.php');
}

function logAdmin() {
    require('view/frontend/loginAdminView.php');
}

function adminPageDemo() {
    require('view/backend/adminPanelView.php');
}

