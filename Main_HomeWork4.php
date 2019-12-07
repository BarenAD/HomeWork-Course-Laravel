<?php

require_once './vendor/autoload.php';

use SERVICES\ConnectionDB;
use SERVICES\BDServicesForHomeWork4;
use HOMEWORKERS\HomeWork4\NewsDB;
use HOMEWORKERS\HomeWork4\AnnounceDB;

$Connection = new ConnectionDB();
$BDServices = new BDServicesForHomeWork4($Connection);

$Homework4NewsDB = new NewsDB($BDServices);
$Homework4AnnounceDB = new AnnounceDB($BDServices);