<?php


namespace Application\Models;


use Library\Database\Db;

abstract class ModelBase {
    protected $Db;
    /**
     * ModelBase constructor.
     */
    public function __construct() {
        $this->Db = Db::getPDO();
    }
}