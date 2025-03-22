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
  $sql = "SELECT FROM peesonne";
  $stmt = $pdo->query($sql);
  ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Matieres</th>
      <th>Notes</th>
      <th>Actions</th>
    </tr>
    <?php
    while($rows = $stmt->fetch()){
      echo $rows['id'] ;
    }
    ?>
   
  
  </table>
</body>
</html>