<?php
require  "./db.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voir</title>
</head>

<body>
  <?php

  ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Matieres</th>
      <th>Notes</th>
      <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM `personne`";

    $stmt = $pdo->query($sql);
    while ($rows = $stmt->fetch()) {
      echo "<tr>";
      echo "<td>" . $rows['id'] . "</td>";
      echo "<td>" . $rows['matiere'] . "</td>";
      echo "<td>" . $rows['note'] . "</td>";
echo "<td>
<a href='?supp' onclick='return confirm(\"supprimer?\");'>Supprimer</a> | <a href='?edit'>Editer</a>
</td>";
      echo "</tr>";
    }
    ?>


  </table>
  <?php
  
  ?>
  <div class="btn">

    <a href="./index.php">Acceuil</a>
    <a href="./ajouter.php">Ajouter</a>
  </div>
</body>

</html>