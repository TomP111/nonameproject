<?php 
require_once("db.php");
session_start();

if (isset($_SESSION['ID']) && isset($_SESSION['User'])){

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <link rel="shortcut icon" type="image/png" href="../img/favicon.ico"/>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['Prenom']; ?></h1>
     <a href="logout.php">Déconnexion</a>
     <a href="changepassword.php">Changer de mot de passe</a>
</body>
</html>

<?php 
     } else{
          header("Location: login.php");
          exit();
     }


?>

