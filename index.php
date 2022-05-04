<?php

session_start();

if(!isset($_SESSION["belepve"]) || $_SESSION["belepve"] == false){
    header("location:login.php");
    exit(0);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $_SESSION["email"]; ?></title>
</head>
<body onload="idozito()">
    <h1 id="udvozles">Üdvözöljük</h1>

    <h2><a href="logout.php">Kilépés</a></h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsam consectetur voluptatem molestiae quasi rem ipsum minima culpa aut exercitationem quibusdam autem deleniti quae, blanditiis nisi cumque commodi sequi ratione!</p>
    <p>Modi qui quia, corrupti aspernatur illo possimus perferendis officiis ipsa ex laudantium sapiente ullam magnam temporibus commodi, quis rem ad maiores eligendi! Cupiditate reprehenderit consequuntur cum itaque numquam? Eum, molestias?</p>
    <p id="szinvalto" onmouseover="szinvaltas()">Fugit, quas voluptatibus voluptas libero cupiditate sapiente molestias fugiat expedita nostrum, minima quo nihil, alias repudiandae sed ratione obcaecati maiores quae necessitatibus nam. Cupiditate animi accusamus facere. Vitae, facilis ut.</p>
    <p>Cumque, dignissimos. Error harum hic fuga molestiae ratione quam deserunt sint officia, numquam eos sed molestias, nostrum ipsum dolorum natus! Dolorum dolorem quos consequuntur sapiente repellat natus magnam. Quod, voluptatibus.</p>
    <p>Ratione tempora temporibus recusandae ut iste inventore quae reiciendis dicta quas distinctio. Consequuntur blanditiis deleniti inventore temporibus fugit deserunt ullam ratione voluptates, nisi illo officiis obcaecati laudantium aut, nobis provident?</p>

    

    <script src="./script.js"></script>
</body>
</html>