<?php

class Movie
{
    //campi
    // caratteristiche tipiche
    public $title;
    public $year;
    public $duration;
    public $type;
    public $country;
    public $image;

    // costruttore
    function __construct($_title, $_year, $_duration, $_type, $_country, $_image)
    {
        // inizializza una nuova instanza di tipo Movie
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->type = $_type;
        $this->country = $_country;
        $this->image = $_image;
    }

    // metodi
    // capacità condivise

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getImage()
    {
        return $this->image;
    }
}
