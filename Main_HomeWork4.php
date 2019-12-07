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

$CommonArray = array();

foreach ($Homework4NewsDB->get_all() as $class){
    $CommonArray[] = $class;
}
foreach ($Homework4AnnounceDB->get_all() as $class){
    $CommonArray[] = $class;
}
foreach ($CommonArray as $class){
    echo "SOURCE :: " . $class->getSource() . PHP_EOL;
    echo "SOURCE :: " . $class->getContent() . PHP_EOL;
    echo "------------------------------------" . PHP_EOL;
}