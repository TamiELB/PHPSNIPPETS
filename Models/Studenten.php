<?php
require_once('Lessen.php'); 
require_once('Cijfers.php'); 

class Studenten {
    public $StudentID;
    public $Naam;
    public $Adres;
    public $TelefoonNr;
    public $Email;
    public $Wachtwoord;
    public $IsAdmin;
    public $IsActief;

    /**
     * @var Lessen[]
     */
    public $Lessen = [];
    /**
     * @var Cijfers[]
     */
    public $Cijfers = [];

}
