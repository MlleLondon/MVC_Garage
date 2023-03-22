<?php
    require_once("modele/modele.class.php");
    class Controleur{
        //Objet de la classe Modele
        private $unModele;

        public function __construct($serveur, $bdd, $user, $mdp){
            //Instanciation du modèle
            $this->unModele = new Modele($serveur, $bdd,$user,$mdp);
        }
        //Inserer un Client
        public function insertClient($tab){
            //On contrôle la validité des données

            //Appel au modèle pour l'insertion
            $this->unModele->insertClient($tab);
        }
        //Afficher les Clients
        public function selectAllClients(){
            $lesClients=$this->unModele->selectAllClients();
            //S'il y a des traitements à faire

            //On renvoie les Clients
            return $lesClients;
        }
        //On supprime un Client
        public function deleteClient($idclient){
            $this->unModele->deleteClient($idclient);
        }
        public function selectWhereClient($idclient){
           return $this->unModele->selectWhereClient($idclient);
        }
        public function updateClient($tab){
            $this->unModele->updateClient($tab);
         }






        public function insertTechnicien($tab){
            //On contrôle la validité des données

            //Appel au modèle pour l'insertion
            $this->unModele->insertTechnicien($tab);
        }

        public function selectAllTechniciens(){
            $lesTechniciens=$this->unModele->selectAllTechniciens();
            //S'il y a des traitements à faire

            //On renvoie les Techniciens
            return $lesTechniciens;
        }
        //On supprime un Technicien
        public function deleteTechnicien($idtechnicien){
            $this->unModele->deleteTechnicien($idtechnicien);
        }
        public function selectWhereTechnicien($idtechnicien){
            return $this->unModele->selectWhereTechnicien($idtechnicien);
        }
        public function updateTechnicien($tab){
            $this->unModele->updateTechnicien($tab);
        }






        public function insertVehicule($tab){
            //On contrôle la validité des données

            //Appel au modèle pour l'insertion
            $this->unModele->insertVehicule($tab);
        }

        public function selectAllVehicules(){
            $lesVehicules=$this->unModele->selectAllVehicules();
            //S'il y a des traitements à faire

            //On renvoie les Techniciens
            return $lesVehicules;
        }
        //On supprime un Vehicule
        public function deleteVehicule($idvehicule){
            $this->unModele->deleteVehicule($idvehicule);
        }
        public function selectWhereVehicule($idvehicule){
            return $this->unModele->selectWhereVehicule($idvehicule);
        }
        public function updateVehicule($tab){
            $this->unModele->updateVehicule($tab);
        }





        public function insertIntervention($tab){
            //On contrôle la validité des données

            //Appel au modèle pour l'insertion
            $this->unModele->insertIntervention($tab);
        }

        public function selectAllInterventions(){
            $lesInterventions=$this->unModele->selectAllInterventions();
            //S'il y a des traitements à faire

            //On renvoie les Techniciens
            return $lesInterventions;
        }
            //On supprime une Intervention
        public function deleteIntervention($idintervention){
            $this->unModele->deleteIntervention($idintervention);
        }
        public function selectWhereIntervention($idintervention){
            return $this->unModele->selectWhereIntervention($idintervention);
        }
        public function updateIntervention($tab){
            $this->unModele->updateIntervention($tab);
        }
    }
?>