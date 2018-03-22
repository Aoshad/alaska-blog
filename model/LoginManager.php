<?php

namespace David\AlaskaBlog\Model;

require_once("model/Manager.php");

class LoginManager extends Manager
{
    public function getHashedPass()
    {
        $db = $this->dbConnect();
        $HashedPass = $db->query('SELECT pass FROM user ');
    }

    public function getPseudo()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT login FROM user');
        $dbPseudo = $req->fetch();
    }

    public function sendNewPass($pass)
    {
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE user SET pass = ? WHERE id = 1');
        $req->execute(array($hashedPass));
    }
}