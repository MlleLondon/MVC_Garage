<h2>Liste des véhicules</h2>

<table border="1">
    <tr>
        <td>Id Vehicule</td>
        <td>Matricule</td>
        <td>Marque</td>
        <td>nbKm</td>
        <td>Energie</td>
        <td>Id Client </td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesVehicules as $unVehicule){
            echo "<tr>
            <td>".$unVehicule['idvehicule']."</td>
            <td>".$unVehicule['matricule']."</td>
            <td>".$unVehicule['marque']."</td>
            <td>".$unVehicule['nbkm']."</td>
            <td>".$unVehicule['energie']."</td>";
            echo "<td>".$unVehicule['idclient']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=3&action=sup&idvehicule=".$unVehicule['idvehicule']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=3&action=edit&idvehicule=".$unVehicule['idvehicule']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>