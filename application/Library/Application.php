<?php

namespace Library;

use Controller\ControllerBase;
use Controller\HomeController;
use Controller\NotFoundController;
use Symfony\Component\Dotenv\Dotenv;


class Application {


    /**
     * Application constructor.
     */
    public function __construct() {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/../environment/.env');
    }


    public function main() {
        $parameters = rtrim( $_SERVER['REQUEST_URI'], "\\/" );
        $array = explode( '/', $parameters );

        if ( empty( $array[1] ) ) {
            echo ( new HomeController() )->getIndex();
            return;
        }

        $controller = ucfirst( strtolower( $array[1] ) )  . 'Controller';;
        $fqn = sprintf( 'Controller\%s', $controller );

        if ( !class_exists( $fqn ) ) {
            echo ( new NotFoundController() )->getIndex();
            return;
        }

        if ( !isset( $array[2] ) ) {
            $method = 'getIndex';
        } else {
            $method = 'get' . ucfirst( strtolower( $array[2] ) );
        }

        if ( !method_exists( $fqn, $method ) ) {
            echo ( new NotFoundController() )->getIndex();
            return;
        }

        /** @var ControllerBase $obj */
        $obj = new $fqn();

        echo $obj->{$method}();
    }
}