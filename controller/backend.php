<?php

//Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPostsToModify()
{
    $postManager = new \David\AlaskaBlog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/backend/listsPostsToModifyView.php');
}

function postToModify($postId)
{
    $postManager = new \David\alaskaBlog\model\PostManager();
    $commentManager = new \David\alaskaBlog\model\CommentManager();

    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);

    require('view/backend/postToModifyView.php');
}

function deletePost($id)
{
    $postManager = new \David\alaskaBlog\model\PostManager();
    $postManager->deletePost($id);

    $posts = $postManager->getPosts();


    require('view/backend/listsPostsToModifyView.php');
}