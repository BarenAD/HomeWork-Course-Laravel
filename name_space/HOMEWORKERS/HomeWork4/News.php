<?php


namespace HOMEWORKERS\HomeWork4;


use HOMEWORKERS\HomeWork4\Publication;

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

    public function print_All()
    {
        echo "[ID :: " . $this->ID;
        echo "  TEXT :: " . $this->TEXT;
        echo "  LINK :: " . $this->LINK;
        echo "  CREATED_AT :: " . $this->CREATED_AT;
        echo "  UPDATED_AT :: " . $this->UPDATED_AT . "]" . PHP_EOL;
    }
}