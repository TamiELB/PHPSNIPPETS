<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenten overzicht</title>
    <link rel="stylesheet" type="text/css" href="../CSS/StudentenOverZichtAdmin.css"> 
    <link rel="stylesheet" type="text/css" href="../CSS/ErrorPopup.css"> 
</head>
    <body>
        <?php include '../Components/navbar.php'; ?>

        <form action="/PHPSNIPPETS/Controllers/StudentenController.php" method="get">
            <button>test</button>
        </form>


        <div class="ErrorPopup" id="ErrorPopup" style="display: <?php echo isset($_GET["error"]) ? 'inline' : 'none'; ?> ;">
            <div class="PopupContent">
                <div class="TextWrapper">
                    <p><?php echo $_GET["error"]?></p>
                   </div>
                <button class="CloseButton" onclick="CloseErrorPopup()">X</button>
            </div>
        </div>


        <script>
            const ErrorPopup = document.getElementById('ErrorPopup');

            function CloseErrorPopup(){
                ErrorPopup.style.display = "none";
            };

                const url = new URL(window.location.href);
            if (url.searchParams.has("error")) {
                url.searchParams.delete("error");
                history.replaceState(null, '', url.toString());
            }
        </script>

    </body>
</html>