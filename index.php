<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="CSS/connexion.css">
</head>

<body>
    <div id="main_container">
        <div id="tittle">
            <button type="button" id="but1" onclick="connx()">Connexion</button>
            <button type="button" id="but2" onclick="ins()">Inscription</button>
        </div>
        <div id="header">
            Connectez-vous
        </div>
        <div id="form_container">
            <form action="InscriptionTraitement.php" method="post" id="formulaire">
                <div id="in_contain">
                    <input type="text" placeholder="Entrez votre nom" name="nom" id="in_name">
                    <input type="number" placeholder="Entrez votre numero de telephone" name="numTel" id="numTel">
                    <input type="email" placeholder="Entrez votre E mail" name="email" id="in_mail">
                    <input type="password" placeholder="Entrez votre mot de passe" name="passwrd" id="in_pwd" required>
                    <?php
                    if (isset($_GET['erreur']) and $_GET['erreur'] == 'emailExist') {
                    ?>
                        <div class="error-email" id="error-email">
                            <p>L'adresse email  deja utilisee.Connectez-vous</p>
                        </div>
                    <?php
                    }
                    elseif(isset($_GET['erreur']) and $_GET['erreur'] == 'infos'){
                        ?>
                        <div class="error-email" id="error-email">
                            <p>Informations incorrectes</p>
                        </div>
                        <?php
                    }
                    
                    ?>


                    <input type="password" placeholder="Confirmez votre mot de passe" name="passwrd_confirm" id="in_pwdc">
                </div>
                <div id="button_contain">
                    <input type="reset" value="Annuler" id="in_res">
                    <input type="submit" value="Se connecter" id="in_sub">
                </div>

            </form>
        </div>
    </div>
</body>
<script src="../JS/main.js"></script>
</html>