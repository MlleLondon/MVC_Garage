<h2>Liste des clients</h2>

<table border="1">
    <tr>
        <td>Id Client</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Adresse</td>
        <td>Téléphone</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesClients as $unClient){
            echo "<tr>
            <td>".$unClient['idclient']."</td>
            <td>".$unClient['nom']."</td>
            <td>".$unClient['prenom']."</td>
            <td>".$unClient['adresse']."</td>
            <td>".$unClient['tel']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=1&action=sup&idclient=".$unClient['idclient']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=1&action=edit&idclient=".$unClient['idclient']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>