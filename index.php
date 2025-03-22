<?php
require "./db.php";

if (isset($_POST['create']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];

  $sql = "INSERT INTO `person`(nom, prenom, email) VALUES(:nom, :prenom, :email)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['nom' => $nom, 'prenom' => $prenom, 'email' => $email]);
  echo "Donnees envoyee avec succes !!";
} else {
  echo "Veuillez remplir tous les champs!";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>creud</title>
</head>

<body>
  <form action="" method="post">
    <label for="">Nom:</label>
    <input type="text" name="nom">
    <label for="">Prenom : </label>
    <input type="text" name="prenom" id="">
    <label for="">Email : </label>
    <input type="email" name="email" id="">
    <input type="submit" value="Valider" name="create">
  </form>
  <h2>Liste des donnees</h2>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    table{
      border: 1px solid #000;
      
    }
    td {
      
      border: 1px solid #000;
    }
  </style>
  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Email</th>
      <th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * From `person`";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['nom'] . "</td>";
      echo "<td>" . $row['prenom'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>
        <a href='?edit=" . $row['id'] . "'>Modifier</a> |
        <a href='?delete=" . $row['id'] . "' onclick='return confirm(\"Supprimer ?\");'>Supprimer</a>
    </td>";
      echo "</tr>";
    }
    if (isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $sql = "DELETE FROM person WHERE id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['id' => $id]);
      header("Location: index.php");
      exit;
    }
    ?>
  </table>
</body>

</html>