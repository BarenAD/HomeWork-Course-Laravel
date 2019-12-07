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

    function __construct($in_array)
    {
        $this->ID = $in_array["ID"];
        $this->TEXT = $in_array["TEXT"];
        $this->TITLE = $in_array["TITLE"];
        $this->AUTHOR = $in_array["AUTHOR"];
        $this->CREATED_AT = $in_array["CREATED_AT"];
        $this->UPDATED_AT = $in_array["UPDATED_AT"];
    }

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

    public function print_All()
    {
        echo "[ID :: " . $this->ID;
        echo "  TEXT :: " . $this->TEXT;
        echo "  TITLE :: " . $this->TITLE;
        echo "  AUTHOR :: " . $this->AUTHOR;
        echo "  CREATED_AT :: " . $this->CREATED_AT;
        echo "  UPDATED_AT :: " . $this->UPDATED_AT . "]" . PHP_EOL;
    }
}