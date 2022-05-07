<?php
    if(isset($_GET['action']) && isset($_GET['idvehicule'])){
        $action=$_GET['action'];
        $idvehicule=$_GET['idvehicule'];

        switch($action){
            case 'sup':
                $unControleur->deleteVehicule($idvehicule);
            break;
        }
    }



    //Pour pouvoir selectionner les clients
    $lesClients = $unControleur->selectAllClients();
    require_once("vue/vue_insert_vehicule.php");
    if(isset($_POST['Valider'])){
        $unControleur->insertVehicule($_POST);
    }
    $lesVehicules=$unControleur->selectAllVehicules();
    require_once("vue/vue_les_vehicules.php");
    
?>