<?php

namespace Library\Database;

class Db {
    /**
     * @return PDO
     *
     */
    public static function getPDO() {
        return new PDO( 'mysql:host=localhost;dbname=open_data', 'user', 'password' );
    }
}