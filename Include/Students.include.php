<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}else{
    header('Location: ../Views/StudentenOverzichtAdmin.php?error=mauwmauw');
    exit();
}