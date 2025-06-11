<?php
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $niveau = htmlspecialchars($_POST['niveau']);

    if (!empty($nom) && !empty($niveau)) {
        $stmt = $pdo->prepare("INSERT INTO competences (nom, niveau) VALUES (?, ?)");
        $stmt->execute([$nom, $niveau]);
        header('Location: index.php');
        exit;
    } else {
        $erreur = "Tous les champs sont obligatoires.";
    }
}
?>

<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom" required><br>
    <label>Niveau :</label>
    <input type="text" name="niveau" required><br>
    <button type="submit">Ajouter</button>
</form>

<?php if (isset($erreur)) echo "<p>$erreur</p>"; ?>
