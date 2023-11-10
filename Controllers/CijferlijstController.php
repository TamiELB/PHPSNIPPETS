<?php
class CijferlijstController{
    private $pdo;

    public function __construct() {
        require_once(__DIR__ . '/../Config/DbConnection.php');
        $this->pdo = Database::getInstance();
    }

    public function GetCijferForStudent($StudentId){
        require_once(__DIR__ . '/../Models/Cijfers.php'); 
        require_once(__DIR__ . '/../Models/Vakken.php'); 


        /** @var Cijfers[] $CijfersLijst */
        $CijfersLijst = [];

        try {
  
           $stmt = $this->pdo->prepare("SELECT
           cijfers.CijferID,
           cijfers.cijfer,
           vakken.VakID,
           vakken.naam as VakNaam 
        FROM
           cijfers 
           INNER JOIN
              vakken 
              ON cijfers.vakid = vakken.vakid 
        WHERE
           cijfers.StudentID = :StudentID");


           $stmt->bindParam(':StudentID', $StudentId, PDO::PARAM_INT);

           $stmt->execute();

           while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
           {
                $Cijfer = new Cijfers();
                $Cijfer->CijferID = $row["CijferID"];
                $Cijfer->Cijfer = $row["cijfer"];
                $Cijfer->VakID = $row["VakID"];

                $Cijfer->Vak = new Vakken;
                $Cijfer->Vak->VakID = $row["VakID"];
                $Cijfer->Vak->Naam = $row["VakNaam"];

                $CijfersLijst[] = $Cijfer;
           }
       } catch (PDOException $e) {
           die("Error: " . $e->getMessage());
       }

       return $CijfersLijst;
    }
}