<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../views/navbar.css">
        <title><?= $page_title ?></title>
    </head>
    <body>
        <header>
            <nav class="navbar">
                <a href="/" class="logo"><img src="../img/logo.png"/></a>
                <div class="nav-links" id="nav">
                    <ul>
                        <li><a href="/books">Livres</a></li>
                        <li><a href="/add_infos">Ajouter</a></li>
                        <li><a href="/users">Utilisateurs</a></li>
                        <li><a href="/emprunts">Empruntés</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <script>
            if(window.screen.width<=900){
                    document.getElementById("nav").classList.remove("active");
            }
            function menu(){
                if(document.getElementById("nav").classList == 'nav-links'){
                    document.getElementById("nav").classList.add("active");
                    document.querySelector("header").style.position = "fixed";
                }
                else{
                    document.getElementById("nav").classList.remove("active");
                    document.querySelector("header").style.position = "relative";
                }
            }
        </script>
    </body>
</html>