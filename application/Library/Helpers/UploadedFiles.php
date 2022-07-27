<?php

namespace Library\Helpers;

use Library\Database\Db;
use PDO;

class UploadedFiles
{

    public function alreadyUploaded($filename)
    {
        $result = 'finish';
        $sql = 'SELECT * FROM uploadlog WHERE filename = ? AND result = ?';
        $stmt = (new Db())->getPDO()->prepare($sql);
        $stmt->bindParam(1, $filename, PDO::PARAM_STR);
        $stmt->bindParam(2, $result, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count == 0) {
            return false;
        } else {
            return true;
        }
    }

    public function getResumeIndex($filename){
        $result = 'pause';
        $sql = 'SELECT resume_index FROM uploadlog WHERE filename = ? AND result = ? ORDER BY resume_index DESC';
        $stmt = (new Db())->getPDO()->prepare($sql);
        $stmt->bindParam(1, $filename, PDO::PARAM_STR);
        $stmt->bindParam(2, $result, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();

        if($row == 0){
            return 0;
        } else {
            return $row['resume_index'];
        }
    }

    public function addLog($filename, $result, $resumeIndex)
    {
        $sql = "INSERT INTO uploadlog (filename,result,resume_index) VALUES (?,?,?)";
        $query = (new Db())->getPDO()->prepare($sql);
        $query->execute(array($filename,$result, $resumeIndex));
    }
}