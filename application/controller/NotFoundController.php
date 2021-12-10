<?php


namespace Controller;


class NotFoundController {
    public function getIndex(...$queryParams): string {
        return '404';
    }
}