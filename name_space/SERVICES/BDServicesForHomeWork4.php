<?php


namespace SERVICES;


class BDServicesForHomeWork4
{
    private $Conntection;

    public function __construct($inConnection)
    {
        $this->Conntection = $inConnection;
    }

    public function get_all_news()
    {
        return $this->Conntection->execute_query_select("SELECT * FROM NEWS");
    }

    public function create_new_news($text, $link)
    {
        $id = $this->Conntection->execute_query_insert("INSERT INTO NEWS(TEXT,LINK) VALUES ('$text','$link')");
        return $this->Conntection->execute_query_select("SELECT * FROM NEWS WHERE ID = '$id'");
    }

    public function get_all_announce()
    {
        return $this->Conntection->execute_query_select("SELECT * FROM ANNOUNCES");
    }

    public function create_new_announce($title, $text, $author)
    {
        $id = $this->Conntection->execute_query_insert("INSERT INTO ANNOUNCES(TITLE,TEXT,AUTHOR) VALUES ('$title','$text','$author')");
        return $this->Conntection->execute_query_select("SELECT * FROM ANNOUNCES WHERE ID = '$id'");
    }
}