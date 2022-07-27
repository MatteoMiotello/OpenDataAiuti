<?php

namespace Models;

use Application\Models\ModelBase;
use Library\Database\Db;
use PDO;

class User extends ModelBase{

    private $id;
    private $username;
    private $email;
    private $password;
    private $level;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    public function login($username, $password)
    {
        $sql = 'SELECT * FROM user WHERE username = ?' ;
        $stmt = ( new Db() )->getPDO()->prepare( $sql );
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_OBJ);

        if (password_verify($password, $row->password)) {
            return $row;
        } else {
            return false;
        }

    }
}