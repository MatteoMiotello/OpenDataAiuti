<?php


namespace Controller;


use Controller\ControllerBase;

class DetailsController extends ControllerBase {
    public function getIndex(...$queryParams): string {
        return 'details';
    }
}