<?php

/**
 * Created by PhpStorm.
 * User: liu wei
 * Email: i@liuwei.co
 * Date: 3/9/17
 * Time: 11:13 AM
 */

/*****************************************************************

 IMPORTANT ANNOUNCEMENT:

 部署到生成环境必须要修改这个文件的所有配置信息

*****************************************************************/

class Config
{
    const
        // DataBase configuration
        DB_HOST     =   'localhost',
        DB_PORT     =   3306,
        DB_PCONNECT =   true,
        DB_CHARSET  =   'utf8',
        DB_NAME     =   'db_jichongchong',
        DB_TYPE     =   'mysql',
        DB_USR      =   'root',
        DB_PWD      =   '111111',
        DB_DEBUG    =   false;

    const
        // APP configuration
        APP_ENV     =   AppEnv::DEVELOPMENT; // 当前环境
}

class AppEnv
{
    const
        DEVELOPMENT = 'Development',                // 开发环境
        SIT         = 'System Integration Testing', // 内部集成测试环境
        UAT         = 'User Acceptance Testing',    // 用户验收测试环境
        PRODUCT     = 'Production';                 // 生产环境
}