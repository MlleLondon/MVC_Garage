
<h2>Insertion d'un véhicule</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Matricule: </td>
            <td>
                <input type="text" name="matricule" value="<?= ($leVehicule!=null)?$leVehicule['matricule']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Marque: </td>
            <td><input type="text" name="marque" value="<?= ($leVehicule!=null)?$leVehicule['marque']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Nombre KiloMetre: </td>
            <td><input type="text" name="nbkm" value="<?= ($leVehicule!=null)?$leVehicule['nbkm']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Energie: </td>
            <td>
                <select name="energie">
                    <option value="Gazol">
                        Gazol
                    </option>
                    <option value="Essence">
                        Essence
                    </option>
                    <option value="Electrique">
                        Electrique
                    </option>
                    <option value="Hybrid">
                        Hybrid
                    </option>
                    <option value="Ethanol">
                        Ethanol
                    </option>
                    <option value="Inconnue">
                        Inconnue
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Client: </td>
            <td>
                <select name="idclient">
                    <?php
                        foreach($lesClients as $unClient){
                            echo "<option value='".$unClient['idclient']."'>";
                            echo $unClient['nom']. "--". $unClient['prenom'];
                            echo "</option>";
                        }
                    ?>
                </select> 
            </td>
        </tr>
        <?php
            if($leVehicule!=null){
                echo "<input type='hidden' name='idvehicule' value=".$leVehicule['idvehicule'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($leVehicule!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>