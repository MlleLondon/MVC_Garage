<?php
    if(isset($_GET['action']) && isset($_GET['idtechnicien'])){
        $action=$_GET['action'];
        $idtechnicien=$_GET['idtechnicien'];

        switch($action){
            case 'sup':
                $unControleur->deleteTechnicien($idtechnicien);
            break;
        }
    }
    require_once("vue/vue_insert_technicien.php");
    if(isset($_POST['Valider'])){
        $unControleur->insertTechnicien($_POST);
    }
    $lesTechniciens=$unControleur->selectAllTechniciens();
    require_once("vue/vue_les_techniciens.php");
?>