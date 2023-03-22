<?php
    require_once("controleur/controleur.class.php");
    require_once("controleur/config_bdd.php");

    //Instanciation du controleur
    $unControleur = new Controleur($serveur,$bdd,$user,$mdp);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage</title>
</head>
<body>
    <center>
        <h1>Gestion du garage</h1>
        
        <a href="index.php?page=0">
            <img src="images/home.jpg" height="50" width="50">
        </a>
        <a href="index.php?page=1">
            <img src="images/client.jpg" height="50" width="50">
        </a>
        <a href="index.php?page=2">
            <img src="images/technicien.jpg" height="50" width="50">
        </a>
        <a href="index.php?page=3">
            <img src="images/voiture.png" height="50" width="50">
        </a>
        <a href="index.php?page=4">
            <img src="images/intervention.jpg" height="50" width="50">
        </a>
        <br>
        <br>
        <h2>Bienvenue sur notre site de garage !</h2>
        <br>
        
        <img src="images/garage.jpg" width="500" height="400">
        <?php
            if(isset($_GET['page'])){
                $page=$_GET['page'];
            }
            else{
                $page=0;
            }
            switch($page){
                case 1: require_once("client.php");
                    break;
                case 2: require_once("technicien.php");
                    break;
                case 3: require_once("vehicule.php");
                    break;
                case 4: require_once("intervention.php");
                    break;

            }
        ?>
    </center>
</body>
</html>