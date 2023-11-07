<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}else{
    header('Location: ../Views/StudentenAdminView.php?error=mauwmauw');
    exit();
}