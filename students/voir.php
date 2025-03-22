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
    $sql = "SELECT FROM personne";

    $stmt = $pdo->query($sql);
    while($rows = $stmt->fetch()){
      echo $rows['id'] ;
      echo $rows['matiere'] ;
    }
    ?>
   
  
  </table>
</body>
</html>