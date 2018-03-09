<?php

namespace David\AlaskaBlog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, content, report, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_ID = ? ORDER BY date_creation DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $content)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_ID, author, content, date_creation) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $content));

        return $affectedLines;
    }

    public function reporting($ID)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE comments SET report=1 WHERE ID = ? ');
        $report->execute(array($ID));

    }
}