<?php
    require_once(__DIR__ . '/../Controllers/StudentenController.php');

    $students = StudentenController::GetAllStudenten();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenten overzicht</title>
    <link rel="stylesheet" type="text/css" href="../CSS/StudentenOverZichtAdmin.css"> 
</head>
    <body>
        <?php include '../Components/Navbar.php'; ?>

        <form action="/PHPSNIPPETS/Controllers/StudentenController.php" method="get">
            <button>test</button>
        </form>



        <?php include '../Components/ErrorPopup.php'; ?>
    </body>
</html>