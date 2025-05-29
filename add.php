<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];

  $stmt = $conn->prepare("INSERT INTO contacts (nom, prenom, telephone, email) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $nom, $prenom, $telephone, $email);
  $stmt->execute();
}

header("Location: index.php");
exit;
?>
