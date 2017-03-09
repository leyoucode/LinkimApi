<?php

/**
 * Created by PhpStorm.
 * User: liu wei
 * Email: i@liuwei.co
 * Date: 3/9/17
 * Time: 11:10 AM
 */
class Db extends Medoo
{
    public function __construct($debug_mode)
    {
        if (Config::APP_ENV == AppEnv::PRODUCT)
        {
            // 生成环境必须关闭调试模式
            $debug_mode = false;
        }

        parent::__construct([
            'database_type' => Config::DB_TYPE,
            'database_name' => Config::DB_NAME,
            'server' => Config::DB_HOST,
            'port' => Config::DB_PORT,
            'username' => Config::DB_USR,
            'password' => Config::DB_PWD,
            'charset' => Config::DB_CHARSET,
            'pconnect' => Config::DB_PCONNECT,
            'debug_mode' => $debug_mode
        ]);
    }
}