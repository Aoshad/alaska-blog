<?php

//Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function openTinyMce()
{
    require('view/backend/tinyMceView.php');
}

function openModifyTinyMce($id)
{
    $postManager = new \David\AlaskaBlog\Model\PostManager();
    $post = $postManager->getPost($id);

    require('view/backend/modifTinyMceView.php');
}

function listPostsToModify()
{
    $postManager = new \David\AlaskaBlog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/backend/listPostsToModifyView.php');
}

function postToModify($postId)
{
    $postManager = new \David\alaskaBlog\model\PostManager();
    $commentManager = new \David\alaskaBlog\model\CommentManager();

    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);

    require('view/backend/postToModifyView.php');
}

function modifyPost($content, $id)
{
    $postManager = new \David\AlaskaBlog\Model\PostManager();
    $postManager->modifyPost($content, $id);

    echo '<script>alert("La modification a bien été prise en compte"); </script>';

    $post = $postManager->getPost($id);

    require('view/backend/modifTinyMceView.php');
}

function deletePost($id)
{
    $postManager = new \David\alaskaBlog\Model\PostManager();
    $postManager->deletePost($id);

    echo '<script>alert("L\'article a bien été modifié"); </script>';

    $posts = $postManager->getPosts();


    require('view/backend/listPostsToModifyView.php');
}

function moderateComment()
{
    $commentManager = new \David\AlaskaBlog\Model\commentManager();
    $reportedComments = $commentManager->getReports();

    require('view/backend/listReportsView.php');
}

function addPost($content) {

    $postManager = new \David\AlaskaBlog\Model\PostManager();
    $postManager->addPost($content);
    echo '<script>alert("Votre texte a bien été envoyé");</script>';

    require('view/backend/tinyMceView.php');
}

function keepComment($id) {

    $commentManager = new \David\AlaskaBlog\Model\commentManager();
    $commentManager->keepComment($id);

    echo '<script>alert("Le commentaire a été conservé");</script>';

    $reportedComments = $commentManager->getReports();

    require('view/backend/listReportsView.php');
}

function deleteComment($id) {

    $commentManager = new \David\AlaskaBlog\Model\commentManager();
    $commentManager->deleteComment($id);

    echo '<script>alert("Le commentaire a bien été supprimé");</script>';

    $reportedComments = $commentManager->getReports();

    require('view/backend/listReportsView.php');
}

function displayModifyPass() {

    require('view/backend/modifyPassView.php');
}

function modifyPass() {


}
