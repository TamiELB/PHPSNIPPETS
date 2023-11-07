<?php
    require_once(__DIR__ . '/../Controllers/StudentenController.php');

    $studentenController = new StudentenController();
    $StudentenList = $studentenController->GetAllStudenten();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenten overzicht</title>
    <link rel="stylesheet" type="text/css" href="../CSS/StudentenAdminView.css"> 
</head>
    <body>
        <?php include '../Components/Navbar.php'; ?>

        <form action="/PHPSNIPPETS/include/Students.include.php" method="get">
            <button>test</button>
        </form>

        <main>
            <table class="studenten">   
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Email</th>
                        <th scope="col">TelefoonNr</th>
                        <th scope="col">Adres</th>
                        <th scope="col">IsAdmin</th>
                        <th scope="col">IsActief</th>
                    </tr>
                </thead>      
                <tbody>
                    <?php  foreach ($StudentenList as $student) {?>
                    <tr>
                        <td data-label="ID"><?php echo $student->StudentID?></td>
                        <td data-label="Naam"><?php echo $student->Naam?></td>
                        <td data-label="Email"><?php echo $student->Email?></td>
                        <td data-label="TelefoonNr"><?php echo $student->TelefoonNr?></td>
                        <td data-label="Adres"><?php echo $student->Adres?></td>
                        <td data-label="IsAdmin"><?php echo $student->IsAdmin?></td>
                        <td data-label="IsActief"><?php echo $student->IsActief?></td>
                        <td><form><button>Meer</button></form></td>
                    </tr>
                    <?php } ?>
                </tbody>      
            </table>
        </main>

        <?php include(__DIR__ . '/../Components/ErrorPopup.php'); ?>
    </body>
</html>