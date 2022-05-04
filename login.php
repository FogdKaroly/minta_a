<?php

session_start();

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $jelszo = $_POST["jelszo"];

    if($email == "qwe@qwe.hu" && $jelszo == "qwe"){
        $_SESSION["belepve"] = true;
        $_SESSION["email"] = $email;
    }
    else{
        $_SESSION["belepve"] == false;
    }
}
if(isset($_SESSION["belepve"]) && $_SESSION["belepve"] == true){
    header("location:index.php");
    exit(0);
}

?>


<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bejelentkezés</title>
</head>
<body>
    <form action="" method="POST" name="login">
     
        <p>
            <div><label for="email">Email cím: </label></div>
            <div><input type="email" name="email" id="email" placeholder="qwe@qwe.hu"></div>
        </p>
        <p>
            <div><label for="jelszo">Jelszó: </label></div>
            <div><input type="password" name="jelszo" id="jelszo" placeholder="qwe"></div>
        </p>
        <p>
            <input type="submit" name="login" id="login" value="Bejelentkezés">
        </p>

        <p><img src="./info.png" alt="info" onclick="magyarazat()"></p>

    </form>

    

    <script src="./script.js"></script>
</body>
</html>