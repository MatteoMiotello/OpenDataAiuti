<?php

namespace Library\Database;

class Db {
    /**
     * @return PDO
     *
     */
    public static function getPDO() {
        $string = sprintf( 'mysql:host=%s;dbname=%s', getenv( 'DB_HOST' ), getenv( 'DB_NAME' ) );

        return new PDO( $string , getenv('DB_USER' ), getenv('db_password' ) );
    }
}