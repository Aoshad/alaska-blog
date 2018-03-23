<?php

namespace David\AlaskaBlog\Model;

require_once("model/Manager.php");

class LoginManager extends Manager
{
    public function getHashedPass($pseudo)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT pass FROM user WHERE login = ?');
        $req->execute(array($pseudo));
        $hashedPass = $req->fetch();

        return $hashedPass['pass'];
    }

    public function getPseudo($pass)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT login FROM user WHERE pass = ?');
        $req->execute(array($pass));
        $dbPseudo = $req->fetch();

        return $dbPseudo;
    }

    public function sendNewPass($pass)
    {
        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE user SET pass = ? WHERE id = 1');
        $req->execute(array($hashedPass));
    }
}