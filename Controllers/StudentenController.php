<?php
class StudentenController{
    private $pdo;

    public function __construct() {
        require_once(__DIR__ . '/../Config/Database.php');
        $this->pdo = Database::getInstance();
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}else{
    header('Location: ../Views/StudentenOverZichtAdmin.php?error=test');
    exit();
}