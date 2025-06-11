<?php include '../config/database.php'; ?>

<h2>Liste des compétences</h2>
<a href="ajouter.php">Ajouter une compétence</a>

<table border="1">
    <tr>
        <th>techniques</th>
        <th>outils </th>
        <th>gestion_de_projets</th>
    </tr>
    <?php
    $stmt = $pdo->query("SELECT * FROM competences");

    if ($stmt === false) {
       
        
    } else {
        while ($row = $stmt->fetch()) {
            echo "<tr>
                    <td>" . htmlspecialchars($competence['nom']) . "</td>
                    <td>" . htmlspecialchars($competence['niveau']) . "</td>
                    <td>
                        <a href='modifier.php?id=" . $row['id'] . "'>Modifier</a> |
                        <a href='supprimer.php?id=" . $row['id'] . "' onclick='return confirm(\"Supprimer ?\")'>Supprimer</a>
                    </td>
                  </tr>";
        }
    }
    ?>
</table>


