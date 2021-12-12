<?php

namespace Library\Database;

use PDO;
use Symfony\Component\Dotenv\Dotenv;

class Db {
    private static $Instance = null;

    /**
     * @return PDO
     *
     */
    public static function getPDO() {
        if ( is_null( self::$Instance  )) {

            $string = sprintf( 'mysql:host=%s;dbname=%s', $_ENV[ 'DB_HOST' ], $_ENV['DB_NAME'] );

            self::$Instance = new PDO( $string , $_ENV['DB_USER'], $_ENV['DB_PASSWORD'] );
        }

        return self::$Instance;
    }
}