<?php
    $leClient=null;
    if(isset($_GET['action']) && isset($_GET['idclient'])){
        $action=$_GET['action'];
        $idclient=$_GET['idclient'];

        switch($action){
            case 'sup':
                $unControleur->deleteClient($idclient);
                break;
            case 'edit':
                $leClient=$unControleur->selectWhereClient($idclient);
                break;
        }
    }
    require_once("vue/vue_insert_client.php");
    if(isset($_POST['Valider'])){
        $unControleur->insertClient($_POST);
    }
    if(isset($_POST['Modifier'])){
        $unControleur->updateClient($_POST);
    }
    
    $lesClients=$unControleur->selectAllClients();
    require_once("vue/vue_les_clients.php");
    
?>