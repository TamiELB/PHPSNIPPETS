<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/PHPSNIPPETS/CSS/navbar.css">

</head>
    <body>
    <header>
            <div class="left">
                <a href="/PHPSNIPPETS/index.php" class="title">PHPSNIPPETS "school"</a>

                <a class="toggle-button" onclick="ToggleMenu()">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>    
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="/PHPSNIPPETS/Views/CijferlijstAdminView.php">Cijferslijst</a></li>
                    <li><a href="/PHPSNIPPETS/Views/LessenAdminView.php">lessen overzicht</a></li>
                    <li><a href="/PHPSNIPPETS/Views/StudentenAdminView.php">studenten overzicht</a></li>
                </ul>
            </nav>
        </header>

        <script>
            const nav = document.getElementById('nav');

            function ToggleMenu(){
                nav.classList.toggle('active');
            };
        </script>
    </body>
</html>
