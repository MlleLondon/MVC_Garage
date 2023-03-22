<?php
    $leVehicule=null;
    if(isset($_GET['action']) && isset($_GET['idvehicule'])){
        $action=$_GET['action'];
        $idvehicule=$_GET['idvehicule'];

        switch($action){
            case 'sup':
                $unControleur->deleteVehicule($idvehicule);
            break;
            case 'edit':
                $leVehicule=$unControleur->selectWhereVehicule($idvehicule);
            break;
        }
    }



    //Pour pouvoir selectionner les clients
    $lesClients = $unControleur->selectAllClients();
    require_once("vue/vue_insert_vehicule.php");
    if(isset($_POST['Valider'])){
        $unControleur->insertVehicule($_POST);
    }
    if(isset($_POST['Modifier'])){
        $unControleur->updateVehicule($_POST);
        header("Location: index.php?page=3");
    }



    $lesVehicules=$unControleur->selectAllVehicules();
    require_once("vue/vue_les_vehicules.php");
    
?>