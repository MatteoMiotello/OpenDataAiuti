<?php

namespace Library\Helpers;

use Library\Database\Db;
use PDO;

class UploadedFiles
{

    public function alreadyUploaded($filename)
    {
        $sql = 'SELECT * FROM uploadlog WHERE filename = ?';
        $stmt = (new Db())->getPDO()->prepare($sql);
        $stmt->bindParam(1, $filename, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function addLog($filename, $result)
    {
        $sql = "INSERT INTO uploadlog (filename,result) VALUES (?,?)";
        $query = (new Db())->getPDO()->prepare($sql);
        $query->execute(array($filename,$result));
    }
}