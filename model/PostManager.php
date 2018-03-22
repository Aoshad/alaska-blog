<?php

namespace David\AlaskaBlog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY date_creation DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;
    }

    public function getLastPost() 
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY date_creation DESC LIMIT 0,1');

        return $req;
    }

    public function addPost($content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(content, date_creation) VALUES (?, NOW())');
        $req->execute(array($content));
    }

    public function deletePost($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($id));
    }

    public function modifyPost($content, $id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET content = ? WHERE id = ?');
        $req->execute(array($content, $id));
    }


}