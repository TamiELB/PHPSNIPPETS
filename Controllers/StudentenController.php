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
           FROM   studenten 
           WHERE StudentID = :StudentID; ");


           $stmt->bindParam(':StudentID', $id, PDO::PARAM_INT);

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

    public function ChangeCursus(Studenten $AltStudent){
        try{

            $stmt = $this->pdo->prepare("UPDATE studenten
            SET    naam = :Naam,
                   adres = :Adres,
                   telefoonnr = :TelefoonNr,
                   email = :Email,
                   isactief = :IsActief
            WHERE  studentid = :StudentID");


            $stmt->bindParam(':Naam', $AltStudent->Naam, PDO::PARAM_STR); 
            $stmt->bindParam(':Adres', $AltStudent->Adres, PDO::PARAM_STR);
            $stmt->bindParam(':TelefoonNr', $AltStudent->TelefoonNr, PDO::PARAM_STR); 
            $stmt->bindParam(':Email', $AltStudent->Email, PDO::PARAM_STR);
            $stmt->bindParam(':IsActief', $AltStudent->IsActief, PDO::PARAM_BOOL); 
            $stmt->bindParam(':StudentID', $AltStudent->StudentID, PDO::PARAM_INT);
            

            if ($stmt->execute()) {
                header('Location:  /PHPSNIPPETS/Views/StudentenAdminView.php');
                exit();
            } else {
                header('Location:  /PHPSNIPPETS/Views/StudentDetailAdminView.php?StudentID=' . $AltStudent->StudentID . '&error=Error met opslaan van Student.');
                exit();
            }
        } catch (PDOException $e) {
            $errorMessage = urlencode("An error occurred: " . $e->getMessage());
            header('Location: /PHPSNIPPETS/Views/StudentDetailAdminView.php?StudentID=' . $AltStudent->StudentID . '&error=' . $errorMessage);
            exit();
        }
    }
}
