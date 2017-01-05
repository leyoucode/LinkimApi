<?php

/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 05/01/2017
 * Time: 3:54 PM
 */
class Api_User extends PhalApi_Api
{
    public function getRules() {
        return array(
            'userLogin' => array(
                'username' 	=> array('name' => 'username', 'type' => 'string', 'require' => true ),
                'password' 	=> array('name' => 'password', 'type' => 'string', 'require' => true ),
            )
        );
    }

    /**
     * 登录
     * @desc 实现用户登录
     * @return string username
     * @return string password
     * @return int time 当前时间戳
     */
    public function userLogin() {
        return array(
            'title' => 'Hello World!',
            'content' => T('Hi {name}, welcome to use PhalApi!', array('name' => $this->username)),
            'version' => PHALAPI_VERSION,
            'time' => $_SERVER['REQUEST_TIME'],
        );
    }

    /**
     * 登出
     * @desc 实现用户登出
     * @return string username
     * @return string password
     * @return int time 当前时间戳
     */
    public function userLogout() {
        return array(
            'title' => 'Hello World!',
            'content' => T('Hi {name}, welcome to use PhalApi!', array('name' => $this->username)),
            'version' => PHALAPI_VERSION,
            'time' => $_SERVER['REQUEST_TIME'],
        );
    }
}