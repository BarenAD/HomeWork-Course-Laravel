<?php

namespace HOMEWORKERS;

abstract class Publication
{
    public abstract function getSource();
    public abstract function getContent();
    public abstract function getAll();
}

class NewsDB
{
    private $BDServices;
    function __construct($inBDServices)
    {
        $this->BDServices = $inBDServices;
    }

    public function get_all()
    {
        $Result = array();
        foreach ($this->BDServices->get_all_news() as $value){
            printf($value);
            echo PHP_EOL;
            $Result[] = new News($value);
        }
        return $Result;
    }
}

class News extends Publication
{
    private $ID;
    private $TEXT;
    private $LINK;
    private $CREATED_AT;
    private $UPDATED_AT;

    function __construct($in_array)
    {
        $this->ID = $in_array["ID"];
        $this->TEXT = $in_array["TEXT"];
        $this->LINK = $in_array["LINK"];
        $this->CREATED_AT = $in_array["CREATED_AT"];
        $this->UPDATED_AT = $in_array["UPDATED_AT"];
    }

    public function getSource()
    {
        return $this->LINK;
    }

    public function getContent()
    {
        return $this->TEXT;
    }

    public function getAll()
    {
        return array(
            "id" => $this->ID,
            "text" => $this->TEXT,
            "link" => $this->LINK,
            "created_at" => $this->CREATED_AT,
            "updated_at" => $this->UPDATED_AT
        );
    }
}

// ПРЕДСТАВИМ, ЧТО ТУТ НАЧИНАЕТСЯ ДРУГОЙ ФАЙЛ :]

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

class Announce extends Publication
{
    private $ID;
    private $TEXT;
    private $TITLE;
    private $AUTHOR;
    private $CREATED_AT;
    private $UPDATED_AT;

    public function getSource()
    {
        return $this->AUTHOR;
    }

    public function getContent()
    {
        return $this->TEXT;
    }

    public function getAll()
    {
        return array(
            "id" => $this->ID,
            "title" => $this->TITLE,
            "text" => $this->TEXT,
            "author" => $this->AUTHOR,
            "created_at" => $this->CREATED_AT,
            "updated_at" => $this->UPDATED_AT
        );
    }
}