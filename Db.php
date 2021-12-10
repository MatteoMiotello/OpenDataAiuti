<?php


class Db {
    public static function getPDO() {
        return new PDO( 'mysql:host=localhost;dbname=open_data', 'user', 'password' );
    }
}