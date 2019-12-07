<?php


namespace HOMEWORKERS\HomeWork4;


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