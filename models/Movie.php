<?php

class Movie {
//campi
// caratteristiche tipiche
public $title;
public $year;
public $duration;
public $type;
public $country;

// costruttore
public function __construct($_title, $_year, $_duration, $_type, $_country)
{
    // inizializza una nuova instanza di tipo Movie
    $this->title = $_title;
    $this->year = $_year;
    $this->duration = $_duration;
    $this->type = $_type;
    $this->country = $_country;
}

// metodi
// capacità condivise
public function getName(){
     // ritorno qualcosa, come il nome
     return "test";
}

}


/* $film = new Movie( "The Last of US",2023,62,"fantasy","USA" );
$film2 = new Movie( "The Last of US",2023,62,"fantasy","USA" );
$film3 = new Movie( "The Last of US",2023,62,"fantasy",["USA", "ITA"] ); */

?>

