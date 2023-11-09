<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET' || empty($_GET['StudentID'])) {

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
    <link rel="stylesheet" type="text/css" href="../CSS/StudentDetailAdminView.css"> 
</head>
    <body>
        <?php include '../Components/Navbar.php'; ?>

        <main>
            <?php
            require_once(__DIR__ . '/../Controllers/StudentenController.php');

            $studentenController = new StudentenController();
            $Student = $studentenController->GetStudentById($_GET['StudentID']);
            ?>
            
            <div class="InfoHeader">
                <h1>Student</h1>

                <div class="form__group field">
                    <input type="checkbox" class="form__field" placeholder="IsActief" name="IsActief" style="pointer-events:none;" value="<?php echo $Student->IsActief?>" required/>
                    <label for="IsActief" class="form__label">IsActief</label>
                </div>

                <div class="form__group field">
                    <input type="checkbox" class="form__field" placeholder="IsAdmin" name="IsAdmin" style="pointer-events:none;" value="<?php echo $Student->IsAdmin?>" required/>
                    <label for="IsAdmin" class="form__label">IsAdmin</label>
                </div>
            </div>
            <div class="TopWrapper">     
                <div class="StudentInfo">
                    <div class="TopStudentInfo">
                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="id" name="id" style="pointer-events:none;" value="<?php echo $Student->StudentID?>" required/>
                            <label for="id" class="form__label">ID</label>
                        </div>

                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="Naam" name="Naam" value="<?php echo $Student->Naam?>" required />
                            <label for="Naam" class="form__label">Naam</label>
                        </div>
                    </div>
                    <div class="BottomStudentInfo">
                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="Email" name="Email" value="<?php echo $Student->Email?>" required/>
                            <label for="Email" class="form__label">Email</label>
                        </div>

                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="TelefoonNr" name="TelefoonNr" value="<?php echo $Student->TelefoonNr?>" required />
                            <label for="TelefoonNr" class="form__label">TelefoonNr</label>
                        </div>

                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="Adres" name="Adres" value="<?php echo $Student->Adres?>" required />
                            <label for="Adres" class="form__label">Adres</label>
                        </div>
                    </div>
                        
                </div>

                <div class="Cijferlijst">
                    <p>hoi</p>
                </div>
            </div>

            <div class="BottomWrapper">

            </div>
        </main>
    </body>
</html>