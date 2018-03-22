<?php

namespace David\AlaskaBlog\Model;

class Login
{
    public function getHashedPass() {
        $db = $this->dbConnect();
        $HashedPass = $db->query('SELECT pass FROM user ');
    }

    public function getPseudo() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT login FROM user');
        $dbPseudo = $req->fetch();
    }

    public function sendNewPass() {
        $db = $this->dbConnect();
        //$req = $db->
    }
}