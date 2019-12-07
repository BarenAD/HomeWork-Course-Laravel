<?php


namespace HOMEWORKERS\HomeWork4;


use HOMEWORKERS\HomeWork4\Announce;

class AnnounceDB
{
    private $BDServices;
    function __construct($inBDServices)
    {
        $this->BDServices = $inBDServices;
    }

    public function get_all()
    {
        $Result = array();
        foreach ($this->BDServices->get_all_announce() as $value){
            printf($value);
            echo PHP_EOL;
            $Result[] = new Announce($value);
        }
        return $Result;
    }
}