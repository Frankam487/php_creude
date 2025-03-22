<?php require "./db.php";

if(isset($_POST['sub'])){
  $matiere = $_POST['matiere'];
  $note = $_POST['note'];
  $date = $_POST['date'];
  if(!empty($matiere) || !empty($note)|| !empty($date)){
    $sql = "INSERT INTO personne (matiere, note, date) VALUES (:matiere, :note, :date)";
    $stemt = $pdo->prepare($sql);
    $stemt->execute(['matiere' => $matiere, 'note' => $note, 'date' => $date]);
    echo "Données insérées avec succès";
} else{
  echo "Veuillez remplir tous les champs!!";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter</title>
</head>

<body>
  <form action="" method="post">
    <div class="name">
      <label for="">Matiere:</label>
      <input type="text" name="matiere">
    </div>
    <div class="note">
      <label for="">Note:</label>
      <input type="number" name="note">
    </div>
    <div class="date">
      <label for="">Date:</label>
      <input type="date" name="date">
    </div>
    <div class="submit_btn">
      <input type="submit" name="sub" id="validate">
      <input type="reset" name="annuler" id="annuler">
    </div>
  </form>
 
</body>

</html>