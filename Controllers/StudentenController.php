<?php
class StudentenController{
    private $pdo;

    public function __construct() {
        require_once(__DIR__ . '/../Config/Database.php');
        $this->pdo = Database::getInstance();
    }

    public static  function GetAllStudenten(){
        require_once(__DIR__ . '/../Models/Studenten.php'); 

         /** @var Studenten[] */
         $studenten = [];

         try {
   
            $stmt = self::$pdo->prepare("SELECT studenten.StudentID,
            studenten.Naam,
            studenten.Email,
            studenten.TelefoonNr,
            studenten.Adres,
            studenten.IsActief,
            studenten.IsAdmin
            FROM   studenten; ");

            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
            {
                $student = new Studenten();
                $student->StudentID = $row["StudentID"];
                $student->Naam = $row["Naam"];
                $student->Email = $row["Email"];
                $student->TelefoonNr = $row["TelefoonNr"];
                $student->Adres = $row["Adres"];
                $student->IsAdmin = $row["IsAdmin"];
                $student->IsActief = $row["IsActief"];
                $studenten[] = $student;
            }
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
        return $studenten;
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}else{
    header('Location: ../Views/StudentenOverZichtAdmin.php?error=test');
    exit();
}