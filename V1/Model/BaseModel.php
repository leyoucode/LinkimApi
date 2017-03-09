<?php

/**
 * Created by PhpStorm.
 * User: liu wei
 * Email: i@liuwei.co
 * Date: 3/9/17
 * Time: 11:39 AM
 */
class BaseModel
{
    protected $oDb;

    public function __construct()
    {
        $this->oDb = new Db(!empty($_GET['__sql__']));
    }
}