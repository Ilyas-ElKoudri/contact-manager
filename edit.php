<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];

  $stmt = $conn->prepare("UPDATE contacts SET nom=?, prenom=?, telephone=?, email=? WHERE id=?");
  $stmt->bind_param("ssssi", $nom, $prenom, $telephone, $email, $id);
  $stmt->execute();

  header("Location: index.php");
  exit;
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contacts WHERE id = $id");
$contact = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Modifier Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h2>Modifier Contact</h2>
  <form action="edit.php" method="POST" class="row g-3">
    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
    <div class="col-md-3">
      <input type="text" name="nom" class="form-control" value="<?= $contact['nom'] ?>" required>
    </div>
    <div class="col-md-3">
      <input type="text" name="prenom" class="form-control" value="<?= $contact['prenom'] ?>" required>
    </div>
    <div class="col-md-3">
      <input type="text" name="telephone" class="form-control" value="<?= $contact['telephone'] ?>" required>
    </div>
    <div class="col-md-3">
      <input type="email" name="email" class="form-control" value="<?= $contact['email'] ?>" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-success">Enregistrer</button>
      <a href="index.php" class="btn btn-secondary">Annuler</a>
    </div>
  </form>
</div>
</body>
</html>
