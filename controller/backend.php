<?php

//Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function openTinyMce()
{
    require('view/backend/tinyMceView.php');
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

function modifyPost($id, $content)
{
    $postManager = new \David\AlaskaBlog\Model\PostManager();
    $postManager->modifyPost($id, $content);

    $posts = $postManager->modifyPost($id, $content);

    require('view/backend/modifTinyMceView.php');
}

function deletePost($id)
{
    $postManager = new \David\alaskaBlog\model\PostManager();
    $postManager->deletePost($id);

    $posts = $postManager->getPosts();


    require('view/backend/listPostsToModifyView.php');
}

function moderateComment()
{
    $commentManager = new \David\AlaskaBlog\Model\commentManager();
    $reportedComments = $commentManager->getReports();

    require('view/backend/listReportsView.php');
}


