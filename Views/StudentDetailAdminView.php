<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET' || empty($_GET['$StudentID'])) {

    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student detail</title>
</head>
    <body>
        <?php include '../Components/Navbar.php'; ?>

        <main>
        </main>
    </body>
</html>