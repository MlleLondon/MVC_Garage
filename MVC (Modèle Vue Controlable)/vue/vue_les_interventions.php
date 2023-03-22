<h2>Liste des interventions</h2>

<table border="1">
    <tr>
        <td>Id Intervention</td>
        <td>Description</td>
        <td>Date Inter</td>
        <td>Prix</td>
        <td>Id Technicien</td>
        <td>Id Vehicule</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesInterventions as $uneIntervention){
            echo "<tr>
            <td>".$uneIntervention['idintervention']."</td>
            <td>".$uneIntervention['description']."</td>
            <td>".$uneIntervention['dateinter']."</td>
            <td>".$uneIntervention['prix']."</td>
            <td>".$uneIntervention['idtechnicien']."</td>
            <td>".$uneIntervention['idvehicule']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=4&action=sup&idintervention=".$uneIntervention['idintervention']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=4&action=edit&idintervention=".$uneIntervention['idintervention']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>