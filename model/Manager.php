<?php

namespace David\AlaskaBlog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=alaska_blog;charset=utf8', 'root', 'root');
        return $db;
    }
}