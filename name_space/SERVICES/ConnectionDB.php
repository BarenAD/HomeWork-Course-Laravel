<?php


namespace SERVICES;


use PDO;

class ConnectionDB
{
    private $pdo_statement = null;

    public function __construct()
    {
        $this->pdo_statement = new \PDO("mysql:host=localhost;dbname=LARAVEL_COURSE;charset=UTF8", 'user_laravel', 'love_is_laravel');
    }

    public function execute_query_select($query_string)
    {
        $this->pdo_statement->query("set names utf8");
        $new_sth = $this->pdo_statement->query($query_string);
        return $new_sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute_query_insert($query_string)
    {
        $this->pdo_statement->query("set names utf8");
        $this->pdo_statement->query($query_string);
    }
}