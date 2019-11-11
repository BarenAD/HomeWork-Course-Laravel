<?php

namespace HOMEWORKERS;


class HomeWork4
{

}

abstract class Publication
{
    public abstract function getSource();
    public abstract function getContent();
    public abstract function getAll();
}

class News extends Publication
{
    public function getSource()
    {
    }

    public function getContent()
    {
    }

    public function getAll()
    {
    }
}

class Announce extends Publication
{
    public function getSource()
    {
    }

    public function getContent()
    {
    }

    public function getAll()
    {
    }
}