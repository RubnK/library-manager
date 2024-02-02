<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../views/style.css">
        <title>Inscription | ESIEAsso</title>
    </head>
    <body>
        <div class="page">
            <h1>Créer son compte</h1>
            <form method="post" action="">
                <div class="name">
                    <div class="field">
                        <label for="prenom">Prénom:</label>
                        <input type="text" name="prenom" value="<?php echo $prenom;?>">
                    </div>
                    <div class="field">
                        <label for="nom">Nom:</label>
                        <input type="text" name="nom" value="<?php if(isset($nom)){echo $nom;}?>">
                    </div>
                </div>
                <p><?php echo $nameError; ?></p>
                <label for="mail">Adresse mail:</label>
                <div class="mail">
                    <input type="text" name="mail" value="<?php if(isset($mail)){echo $mail;}?>">
                    <p><?php echo $mailError; ?></p>
                </div>
                <div class="passwords">
                    <div class="password">
                        <div class="password-input">
                            <label for="password">Mot de passe:</label>
                            <input type="password" name="password" id="password" value="<?php if(isset($password)){echo $password;}?>">
                        </div>
                        <a onclick="showPassword()" id="showPassword"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path id="eye" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg></a>
                    </div>
                    <div class="password">
                        <div class="password-input">
                            <label for="password2">Vérifiez le mot de passe:</label>
                            <input type="password" name="password2" id="password2" value="<?php if(isset($password2)){echo $password2;}?>">
                        </div>
                    </div>
                </div>
                <p><?php echo $passwordError; ?></p>
                <input value="Créer mon compte" type="submit" class="button">
            </form>
            <p>Déjà un compte ? <a href="/login">Connectez-vous !</a></p>
        </div>
        <script>
        function showPassword() {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
        }
        </script>
        <style>
        .page{
            position: absolute;
            top: 100px;
            text-align:center;
            width:100%;
            z-index: 500;
        }
        form{
            text-align:left;
            width: 40%;
            margin:1rem auto 1rem;
            padding:2rem;
            display:flex;
            flex-direction:column;
        }
        .name{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
        }
        .name .field{
            display:flex;
            flex-direction:column;
            width:45%;
        }
        .name input{
            width:250px;
        }
        .mail input{
            width:250px;
        }
        .passwords{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
        }
        .password{
            display:flex;
            flex-direction:row;
            width:45%;
        }
        .password-input{
            display:flex;
            flex-direction:column;
            width:220px;
        }
        #showPassword{
            margin-top: 32px;
            margin-left: 10px;
            cursor: pointer;
            height: 18px;
            width: 18px;
        }
        .password-verif{
            display:flex;
            flex-direction:column;
            width:220px;
        }
        .showPassword{
            margin-top:27px
        }
        input{
            height:30px;
        }
        .button{
            width:30%;
            height:40px;
            margin:auto;
            margin-top:20px;
        }
        </style>
    </body>
</html>