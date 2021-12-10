<?php

namespace Library;

use Controller\ControllerBase;
use Controller\HomeController;
use Controller\NotFoundController;

class Application {
    public function main() {
        $parameters = $_SERVER['REQUEST_URI'];
        $array = explode( '/', $parameters );

        if ( empty( $array[0] ) ) {
            echo ( new HomeController() )->getIndex();
            return;
        }

        $controller = $array[0] . 'Controller';
        $controller = ucfirst( strtolower( $controller ) );
        $fqn = sprintf( 'Controller\%s', $controller );

        if ( !class_exists( $fqn ) ) {
            echo ( new NotFoundController() )->getIndex();
            return;
        }

        /** @var ControllerBase $obj */
        $obj = new $fqn();

        echo $obj->getIndex();
    }
}