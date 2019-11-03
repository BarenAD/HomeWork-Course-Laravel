<?php

require_once './vendor/autoload.php';

use SERVICES\ConnectionDB;
use HOMEWORKERS\HomeWork3;

$BD = new ConnectionDB();
$ObjectHomeWork3 = new HomeWork3($BD);

//$ObjectHomeWork3->Task1CreateRows();

//$ObjectHomeWork3->Task2RowsAgeBig50();