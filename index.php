<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Gestion des Contacts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
  <h2 class="mb-4">Ajouter un Contact</h2>
  <form action="add.php" method="POST" class="row g-3">
    <div class="col-md-3">
      <input type="text" name="nom" class="form-control" placeholder="Nom" required>
    </div>
    <div class="col-md-3">
      <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
    </div>
    <div class="col-md-3">
      <input type="text" name="telephone" class="form-control" placeholder="Téléphone" required>
    </div>
    <div class="col-md-3">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </form>

  <hr>

  <h2>Liste des Contacts</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM contacts");
      while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?= htmlspecialchars($row['nom']) ?></td>
        <td><?= htmlspecialchars($row['prenom']) ?></td>
        <td><?= htmlspecialchars($row['telephone']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
          <button onclick="confirmDelete(<?= $row['id'] ?>)" class="btn btn-danger btn-sm">Supprimer</button>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<script>
function confirmDelete(id) {
  if (confirm("Voulez-vous vraiment supprimer ce contact ?")) {
    window.location.href = "delete.php?id=" + id;
  }
}
</script>
</body>
</html>
