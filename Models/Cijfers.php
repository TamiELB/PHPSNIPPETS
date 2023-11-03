<?php
require_once('Vakken.php'); 
require_once('Studenten.php'); 

class Cijfers {
    public $CijferID;
    public $Cijfer;
    public $StudentID;
    public $VakID;
    public Studenten $Student;
    public Vakken $Vak;
}
