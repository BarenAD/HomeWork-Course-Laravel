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

    public function get_all_announce()
    {
        return $this->Conntection->execute_query_select("SELECT * FROM ANNOUNCES");
    }
}