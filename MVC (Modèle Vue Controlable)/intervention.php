<?php
    $lIntervention=null;
    if(isset($_GET['action']) && isset($_GET['idintervention'])){
        $action=$_GET['action'];
        $idintervention=$_GET['idintervention'];

        switch($action){
            case 'sup':
                $unControleur->deleteIntervention($idintervention);
            break;
            case 'edit':
                $lIntervention=$unControleur->selectWhereIntervention($idintervention);
            break;
        }
    }




    //Pour pouvoir sélectionner les véhicules et les techniciens
    $lesTechniciens = $unControleur->selectAllTechniciens();
    $lesVehicules = $unControleur->selectAllVehicules();

    //Visualiser et inserer des interventions
    require_once("vue/vue_insert_intervention.php");
    if(isset($_POST['Valider'])){
        $unControleur->insertIntervention($_POST);
    }
    if(isset($_POST['Modifier'])){
        $unControleur->updateIntervention($_POST);
        header("Location: index.php?page=4");
    }


    $lesInterventions=$unControleur->selectAllInterventions();
    require_once("vue/vue_les_interventions.php");
?>