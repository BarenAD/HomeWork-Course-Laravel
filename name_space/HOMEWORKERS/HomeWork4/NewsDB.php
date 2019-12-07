<?php


namespace HOMEWORKERS\HomeWork4;


class NewsDB
{
    private $BDServices;
    function __construct($inBDServices)
    {
        $this->BDServices = $inBDServices;
    }

    public function create($text, $link)
    {
        return new News($this->BDServices->create_new_news($text, $link)["0"]);
    }

    public function get_all()
    {
        $Result = array();
        foreach ($this->BDServices->get_all_news() as $value){
            $Result[] = new News($value);
        }
        return $Result;
    }
}