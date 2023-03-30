<?php

class Movie{
    public $titolo; 
    public $attori; 
    public $genere; 
    public $valutazione; 

    function __construct($_titolo, $_genere){
        $this -> titolo = $_titolo;
        $this -> genere = $_genere;
    }

    function getVote($valutazione){
        if($valutazione >= 4){
            return 'Consigliato';
        }
    }
}
