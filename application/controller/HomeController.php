<?php


namespace Controller;


class HomeController extends ControllerBase {

    public function getIndex(...$queryParams): string {
        return 'home';
    }
}