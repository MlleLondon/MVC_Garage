
<h2>Insertion d'un client</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nom: </td>
            <td>
                <input type="text" name="nom" value="">
            </td>
        </tr>
        <tr>
            <td>Prénom: </td>
            <td><input type="text" name="prenom" value="">
            </td>
        </tr>
        <tr>
            <td>Adresse: </td>
            <td><input type="text" name="adresse" value="">
            </td>
        </tr>
        <tr>
            <td>Telephone: </td>
            <td><input type="text" name="tel" value="">
            </td>
        </tr>
        <?php
            if($leClient!=null){
                echo "<input type='hidden' name='idclient' value=".$leClient['idclient'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($leClient!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>