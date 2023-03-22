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
            $requete="delete from client where idclient =:idclient;";
            $donnees=array(
                "idclient"=>$idclient
            );
            if($this->pdo !=null){
                $delete=$this->pdo->prepare($requete);
                $delete->execute($donnees);
            }
        }
        public function selectWhereClient($idclient){
            $requete="select * from client where idclient=".$idclient.";";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction du Client
                return $select->fetch();
            }
            else{
                return null;
            }
        }
        public function updateClient($tab){
            $requete="update client set nom=:nom, prenom=:prenom, adresse=:adresse, tel=:tel where idclient=:idclient;";
            $donnees=array(
                ":idclient"=>$tab['idclient'],
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
            $requete="delete from technicien where idtechnicien =:idtechnicien;";
            $donnees=array(
                ":idtechnicien"=>$idtechnicien
            );
            if($this->pdo !=null){
                $delete=$this->pdo->prepare($requete);
                $delete->execute($donnees);
            }
        }
        public function selectWhereTechnicien($idtechnicien){
            $requete="select * from technicien where idtechnicien=".$idtechnicien.";";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction du Technicien
                return $select->fetch();
            }
            else{
                return null;
            }
        }
        public function updateTechnicien($tab){
            $requete="update technicien set nom=:nom, prenom=:prenom, qualification=:qualification, email=:email, mdp=:mdp where idtechnicien=:idtechnicien;";
            $donnees=array(
                ":idtechnicien"=>$tab['idtechnicien'],
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
            //Supprimer un Vehicule
        public function deleteVehicule($idvehicule){
            $requete="delete from vehicule where idvehicule =:idvehicule;";
            $donnees=array(
                ":idvehicule"=>$idvehicule
            );
            if($this->pdo !=null){
                $delete=$this->pdo->prepare($requete);
                $delete->execute($donnees);
            }
        }
        public function selectWhereVehicule($idvehicule){
            $requete="select * from vehicule where idvehicule=".$idvehicule.";";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction du Vehicule
                return $select->fetch();
            }
            else{
                return null;
            }
        }
        public function updateVehicule($tab){
            $requete="update vehicule set matricule=:matricule, marque=:marque, nbkm=:nbkm, energie=:energie, idclient=:idclient where idvehicule=:idvehicule;";
            $donnees=array(
                ":idvehicule"=>$tab['idvehicule'],
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
            $requete="delete from intervention where idintervention =:idintervention;";
            $donnees=array(
                ":idintervention"=>$idintervention
            );
            if($this->pdo !=null){
                $delete=$this->pdo->prepare($requete);
                $delete->execute($donnees);
            }
        }
        public function selectWhereIntervention($idintervention){
            $requete="select * from intervention where idintervention=".$idintervention.";";
            if($this->pdo !=null){
                $select=$this->pdo->prepare($requete);
                $select->execute();
                //Extraction du Intervention
                return $select->fetch();
            }
            else{
                return null;
            }
        }
        public function updateIntervention($tab){
            $requete="update intervention set description=:description, dateinter=:dateinter, prix=:prix, idtechnicien=:idtechnicien, idvehicule=:idvehicule where idintervention=:idintervention;";
            $donnees=array(
                ":idintervention"=>$tab['idintervention'],
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
    }
?>