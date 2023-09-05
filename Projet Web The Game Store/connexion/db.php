<?php $conn = mysqli_connect("localhost", "root", "", "accounts",3308);
    $conn->set_charset("UTF8");
    
    if (!$conn) {
        echo "Connection failed!";
    }
    $dbh = new PDO('mysql:host=localhost;dbname=accounts;port=3308', 'root', '');