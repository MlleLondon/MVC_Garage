<h2>Liste des techniciens</h2>

<table border="1">
    <tr>
        <td>Id Technicien</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Qualification</td>
        <td>Email</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesTechniciens as $unTechnicien){
            echo "<tr>
            <td>".$unTechnicien['idtechnicien']."</td>
            <td>".$unTechnicien['nom']."</td>
            <td>".$unTechnicien['prenom']."</td>
            <td>".$unTechnicien['qualification']."</td>
            <td>".$unTechnicien['email']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=2&action=sup&idtechnicien=".$unTechnicien['idtechnicien']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=2&action=edit&idtechnicien=".$unTechnicien['idtechnicien']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>