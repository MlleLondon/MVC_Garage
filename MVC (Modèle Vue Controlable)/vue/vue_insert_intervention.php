
<h2>Insertion d'une Intervention</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Description: </td>
            <td>
                <input type="text" name="description" value="<?= ($lIntervention!=null)?$lIntervention['description']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Date Inter: </td>
            <td><input type="date" name="dateinter" value="<?= ($lIntervention!=null)?$lIntervention['dateinter']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Prix: </td>
            <td><input type="text" name="prix" value="<?= ($lIntervention!=null)?$lIntervention['prix']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Technicien: </td>
            <td>
                <select name="idtechnicien">
                    <?php
                        foreach($lesTechniciens as $unTechnicien){
                            echo "<option value='".$unTechnicien['idtechnicien']."'>";
                            echo $unTechnicien['nom']. " ". $unTechnicien['prenom']. "--". $unTechnicien['qualification'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Vehicule: </td>
            <td>
                <select name="idvehicule">
                    <?php
                        
                        foreach($lesVehicules as $unVehicule){
                            echo "<option value='".$unVehicule['idvehicule']."'>";
                            echo $unVehicule['matricule']." | ". $unVehicule['marque'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <?php
            if($lIntervention!=null){
                echo "<input type='hidden' name='idintervention' value=".$lIntervention['idintervention'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($lIntervention!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>