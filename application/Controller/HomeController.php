<?php


namespace Controller;


use Application\Library\TemplateHandler\TemplateHandler;

class HomeController extends ControllerBase {
    public function getIndex(...$queryParams): string {
        return ( new TemplateHandler(  ) )->compileComponent( 'index/index.twig');
    }

    public function getDetails() {

    }
}