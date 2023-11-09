<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        if ($action === 'VeranderStudentInfo') {
            require_once(__DIR__ . '/../Models/Studenten.php'); 
            require_once(__DIR__ . '/../Controllers/StudentenController.php'); 

            $controller = new StudentenController();
            $AltStudent = new Studenten();

            try{

                $AltStudent->StudentID = $_POST['id'];
                $AltStudent->Naam = $_POST['Naam'];
                $AltStudent->Email = $_POST['Email'];
                $AltStudent->TelefoonNr = $_POST['TelefoonNr'];
                $AltStudent->Adres = $_POST['Adres'];
                $AltStudent->IsActief = $_POST['IsActief'];
            
        } catch (PDOException $e) {
            $errorMessage = urlencode("An error occurred: " . $e->getMessage());
            header('Location: ../index.php?error=' . $errorMessage);
            exit();
            }

            $controller->ChangeCursus($AltStudent);
        }
    }
} else{
    header('Location: ../index.php');
    exit();
}

