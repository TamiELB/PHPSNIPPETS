<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="/PHPSNIPPETS//CSS/ErrorPopup.css"> 
</head>
    <body>
    
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