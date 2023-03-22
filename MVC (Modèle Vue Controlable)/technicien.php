<?php
    $leTechnicien=null;
    if(isset($_GET['action']) && isset($_GET['idtechnicien'])){
        $action=$_GET['action'];
        $idtechnicien=$_GET['idtechnicien'];

        switch($action){
            case 'sup':
                $unControleur->deleteTechnicien($idtechnicien);
            break;
            case 'edit':
                $leTechnicien=$unControleur->selectWhereTechnicien($idtechnicien);
            break;
        }
    }
    require_once("vue/vue_insert_technicien.php");
    if(isset($_POST['Valider'])){
        $unControleur->insertTechnicien($_POST);
    }
    if(isset($_POST['Modifier'])){
        $unControleur->updateTechnicien($_POST);
        header("Location: index.php?page=2");
    }



    $lesTechniciens=$unControleur->selectAllTechniciens();
    require_once("vue/vue_les_techniciens.php");
?>