<h2>Insertion d'un technicien</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nom: </td>
            <td><input type="text" name="nom" value="<?= ($leTechnicien!=null)?$leTechnicien['nom']: '' ?>"></td>
        </tr>
        <tr>
            <td>Prénom: </td>
            <td><input type="text" name="prenom" value="<?= ($leTechnicien!=null)?$leTechnicien['prenom']: '' ?>"></td>
        </tr>
        <tr>
            <td>Qualification: </td>
            <td><input type="text" name="qualification" value="<?= ($leTechnicien!=null)?$leTechnicien['qualification']: '' ?>"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" value="<?= ($leTechnicien!=null)?$leTechnicien['email']: '' ?>"></td>
        </tr>
        <tr>
            <td>MDP: </td>
            <td><input type="password" name="mdp"  value="<?= ($leTechnicien!=null)?$leTechnicien['mdp']: '' ?>"></td>
        </tr>
        <?php
            if($leTechnicien!=null){
                echo "<input type='hidden' name='idtechnicien' value=".$leTechnicien['idtechnicien'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($leTechnicien!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>></td>
        </tr>
    </table>