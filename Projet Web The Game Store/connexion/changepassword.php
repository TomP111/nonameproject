<?php
require_once("db.php");
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])) //verifie le session 

?>
<!DOCTYPE html>
<html>

<head>
    <title>HOME</title>
    <style>
        .erreur {
            color: red;
            font-size: 20px;
            margin: 5px;
            opacity: 0;
            height: 0;

        }
    </style>


    <script>
        function showpassword() {   //Script pour afficher le mot de passe 
            var x = document.getElementById("pwd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("confpwd");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
            var y = document.getElementById("actpwd");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }

        function verifier() {
            var ok = true;

            //check password requirment 
            var ctrlcpwd = document.getElementsByName("pwd")[0]

            const strcpwd = ctrlcpwd.value;
            const regexcpwd = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,30}$/)
            const rescpwd = regexcpwd.test(strcpwd);

            if (rescpwd == false) {
                ctrlcpwd.style.border = "1px solid red";
                ctrlcpwd.style.outline = "1px solid red";
                document.getElementById("errpwd").style.opacity = "1";
                document.getElementById("errpwd").style.height = "10";
                ok = false;

            } else {
                ctrlcpwd.style.border = "1px solid black";
                ctrlcpwd.style.outline = "1px solid black";
                document.getElementById("errpwd").style.opacity = "0";
                document.getElementById("errpwd").style.height = "0";

            }
           
            //check password verif 
           
            var pwd = document.getElementById("pwd").value;
            var confpwd = document.getElementById("confpwd").value;

            if (document.getElementById("pwd").value == document.getElementById("confpwd").value) {

                document.getElementById("checkpwd").style.color = "white";
                document.getElementById("checkpwd").style.opacity = "0";
                document.getElementById("checkpwd").style.height = "0";
            } else {

                document.getElementById("checkpwd").style.color = "red";
                document.getElementById("checkpwd").style.opacity = "1";
                document.getElementById("checkpwd").style.height = "10";
                ok = false;

            }

            return ok;
        }
    </script>
</head>

<body>
    <h1>Changer le mot de pass de, <?php echo $_SESSION['Prenom']; ?></h1>
    <a href="logout.php">Déconnexion</a>
    <a href="changepassword.php">Changer de mot de passe</a>

    <form class="connect" action="change.php" target="_blank" method="POST" onsubmit="return verifier()">
    <div class="mdp">
    
       <input class="comform" type="password" name="actpwd" id="actpwd" placeholder="Mot de passe actuel" />
        <input class="comform" type="password" name="pwd" id="pwd" placeholder="Mot de passe" />
        <input class="comform" type="password" name="confpwd" id="confpwd" placeholder="Confirmer" />
        <div style="user-select:none" class="erreur" id="errpwd">Le mot de passe ne réponds pas aux critères
        </div>
        <div style="user-select:none" class="erreur" id="checkpwd">Les mots de passe ne sont pas identique
        </div>
        
        <input class="none" type="submit" id="validate" value="Valider" />
        <div><input class="none1" type="checkbox" name="showpass" onclick="showpassword()">Show password</div>
    
    
    
    
    </form>
</body>

</html>