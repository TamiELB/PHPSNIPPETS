<?php
class StudentenController{
    private $pdo;

    public function __construct() {
        require_once(__DIR__ . '/../Config/DbConnection.php');
        $this->pdo = Database::getInstance();
    }

    public function GetAllStudenten(){
        require_once(__DIR__ . '/../Models/Studenten.php'); 

         /** @var Studenten[] */
         $studenten = [];

         try {
   
            $stmt = $this->pdo->prepare("SELECT studenten.StudentID,
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

    public function GetStudentById($id){
        require_once(__DIR__ . '/../Models/Studenten.php'); 

        $student = new Studenten();

        try {
  
           $stmt = $this->pdo->prepare("SELECT studenten.StudentID,
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
               $student->StudentID = $row["StudentID"];
               $student->Naam = $row["Naam"];
               $student->Email = $row["Email"];
               $student->TelefoonNr = $row["TelefoonNr"];
               $student->Adres = $row["Adres"];
               $student->IsAdmin = $row["IsAdmin"];
               $student->IsActief = $row["IsActief"];
           }
       } catch (PDOException $e) {
           die("Error: " . $e->getMessage());
       }

       return $student;
    }
}
