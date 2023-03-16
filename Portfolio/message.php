<?php
    session_start();
    if(!isset($_SESSION["pseudo"]))
    {
        header("location:connexion.php");
    }
    $id = mysqli_connect("127.0.0.1","root","","mon_site");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chatcss.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>Bonjour <?php echo $_SESSION["pseudo"]?><a href="deconnexion.php">Deconnexion</a></h1>
        </header>
        <div id="commentaires">
            <ul>
                <?php                
                $req = "select * from user order by id asc";
                $res = mysqli_query($id, $req);
                while($ligne = mysqli_fetch_assoc($res)){   
                $nom_prenom= $ligne["nom_prenom"];
                $mail = $ligne["mail"];
                $tel = $ligne["tel"];
                $message = $ligne["message"];   
                echo "<li class='message'>$nom_prenom : $mail : $tel : $message </li><br><br>";                     
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>