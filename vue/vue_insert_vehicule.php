
<h2>Insertion d'un véhicule</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Matricule: </td>
            <td>
                <input type="text" name="matricule" value="">
            </td>
        </tr>
        <tr>
            <td>Marque: </td>
            <td><input type="text" name="marque" value="">
            </td>
        </tr>
        <tr>
            <td>Nombre KiloMetre: </td>
            <td><input type="text" name="nbkm" value="">
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
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" name="Valider">
            </td>
        </tr>
    </table>