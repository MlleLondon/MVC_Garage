<?php
    class Modele{
        private $pdo;

        public function __construct($serveur, $bdd, $user, $mdp){
            $this->pdo=null;
            try{
                //Code qui peut poser des erreurs
                $this->pdo=new PDO("mysql:host=".$serveur."; dbname=".$bdd, $user, $mdp);
        
            }
            catch(PDOException $exp){
                //Leveee d'exception
                echo "Erreur de connexion au serveur";
                echo $exp->getMessage();
            }
        }
        /*** Fonctions Client ***/
            //Insérer un Client
        public function insertClient($tab){
            $requete="insert into client values (null, :nom, :prenom,:adresse,:tel);";
            $donnees=array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":adresse"=>$tab['adresse'],
                ":tel"=>$tab['tel']
            );

            if($this->pdo!=null){
                //On prépare la requête
                $insert=$this->pdo->prepare($requete);
                $insert->execute($donnees);

            }
        }
            //Visualiser les Clients
        public function selectAllClients(){
            $requete="select * from client;";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction de tous les Clients
                return $select->fetchAll();
            }
            else{
                return null;
            }
        }
            //Supprimer un Client
        public function deleteClient($idclient){
            $requete="delete from client where idclient =".$idclient.";";

            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
            }
        }


        /*** Fonctions Technicien ***/
        public function insertTechnicien($tab){
            $requete="insert into technicien values (null, :nom, :prenom,:qualification,:email, :mdp);";
            $donnees=array(
                ":nom"=>$tab['nom'],
                ":prenom"=>$tab['prenom'],
                ":qualification"=>$tab['qualification'],
                ":email"=>$tab['email'],
                ":mdp"=>$tab['mdp']
            );

            if($this->pdo!=null){
                //On prépare la requête
                $insert=$this->pdo->prepare($requete);
                $insert->execute($donnees);

            }
        }
        public function selectAllTechniciens(){
            $requete="select * from technicien;";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction de tous les Techniciens
                return $select->fetchAll();
            }
            else{
                return null;
            }
        }
            //Supprimer un Technicien
        public function deleteTechnicien($idtechnicien){
            $requete="delete from technicien where idtechnicien =".$idtechnicien.";";

            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
            }
        }



        /*** Fonctions Véhicule ***/
        public function insertVehicule($tab){
            $requete="insert into vehicule values (null, :matricule, :marque,:nbkm,:energie, :idclient);";
            $donnees=array(
                ":matricule"=>$tab['matricule'],
                ":marque"=>$tab['marque'],
                ":nbkm"=>$tab['nbkm'],
                ":energie"=>$tab['energie'],
                ":idclient"=>$tab['idclient']
            );

            if($this->pdo!=null){
                //On prépare la requête
                $insert=$this->pdo->prepare($requete);
                $insert->execute($donnees);

            }
        }
        public function selectAllVehicules(){
            $requete="select * from vehicule;";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction de tous les Vehicules
                return $select->fetchAll();
            }
            else{
                return null;
            }
        }
            //Supprimer un Client
        public function deleteVehicule($idvehicule){
            $requete="delete from vehicule where idvehicule =".$idvehicule.";";

            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
            }
        }



        public function insertIntervention($tab){
            $requete="insert into intervention values (null, :description, :dateinter,:prix,:idtechnicien, :idvehicule);";
            $donnees=array(
                ":description"=>$tab['description'],
                ":dateinter"=>$tab['dateinter'],
                ":prix"=>$tab['prix'],
                ":idtechnicien"=>$tab['idtechnicien'],
                ":idvehicule"=>$tab['idvehicule']
            );

            if($this->pdo!=null){
                //On prépare la requête
                $insert=$this->pdo->prepare($requete);
                $insert->execute($donnees);

            }
        }
        public function selectAllInterventions(){
            $requete="select * from intervention;";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction de tous les Vehicules
                return $select->fetchAll();
            }
            else{
                return null;
            }
        }
            //Supprimer un Client
        public function deleteIntervention($idintervention){
            $requete="delete from intervention where idintervention =".$idintervention.";";

            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
            }
        }
    }
?>