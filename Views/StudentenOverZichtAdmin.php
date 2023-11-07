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
    <link rel="stylesheet" type="text/css" href="../CSS/StudentenOverzichtAdmin.css"> 
</head>
    <body>
        <?php include '../Components/Navbar.php'; ?>

        <form action="/PHPSNIPPETS/include/Students.include.php" method="get">
            <button>test</button>
        </form>

        <main>
            <table class="studenten">               
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>TelefoonNr</th>
                    <th>Adres</th>
                    <th>IsAdmin</th>
                    <th>IsActief</th>
                </tr>
                <?php  foreach ($StudentenList as $student) {?>
                <tr>
                    <td><?php echo $student->StudentID?></td>
                    <td><?php echo $student->Naam?></td>
                    <td><?php echo $student->Email?></td>
                    <td><?php echo $student->TelefoonNr?></td>
                    <td><?php echo $student->Adres?></td>
                    <td><?php echo $student->IsAdmin?></td>
                    <td><?php echo $student->IsActief?></td>
                    <td><form><button>Meer</button></form></td>
                </tr>
                <?php } ?>
            </table>
        </main>

        <?php include(__DIR__ . '/../Components/ErrorPopup.php'); ?>
    </body>
</html>