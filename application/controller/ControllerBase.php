<?php

namespace Controller;

abstract class ControllerBase {
    abstract public function getIndex( ...$queryParams ): string;
}