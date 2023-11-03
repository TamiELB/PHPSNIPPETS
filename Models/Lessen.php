<?php
require_once('Vakken.php'); 
require_once('Studenten.php'); 

class Lessen {
    public $LesID;
    public $Naam;
    public $Beschrijving;
    public $VakID;
    public $BeginDatum;
    public $EindDatum;
    public Vakken $Vak;

    /**
     * @var Studenten[]
     */
    public $Studenten = [];
}
