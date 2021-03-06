<?php
namespace Rickfo97\Bittracker\Core;

class Database extends \PDO
{
    public function __construct()
    {
        parent::__construct(
            Config::get('db_driver') .
            ':host=' . Config::get('db_host') .
            ';dbname=' . Config::get('db_name') .
            ';charset=utf8', Config::get('db_user'),
                Config::get('db_password')
        );
    }
}
