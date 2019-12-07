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

    public function create($title, $text, $author)
    {
        return new Announce($this->BDServices->create_new_announce($title, $text, $author)["0"]);
    }

    public function get_all()
    {
        $Result = array();
        foreach ($this->BDServices->get_all_announce() as $value){
            $Result[] = new Announce($value);
        }
        return $Result;
    }
}