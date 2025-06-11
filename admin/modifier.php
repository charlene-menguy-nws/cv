<?php
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = htmlspecialchars($_POST['nom']);
        $niveau = htmlspecialchars($_POST['niveau']);

        if (!empty($nom) && !empty($niveau)) {
            $stmt = $pdo->prepare("UPDATE competences SET nom = ?, niveau = ? WHERE id = ?");
            $stmt->execute([$nom, $niveau, $id]);
            header('Location: index.php');
            exit;
        }
    } else {
        $stmt = $pdo->prepare("SELECT * FROM competences WHERE id = ?");
        $stmt->execute([$id]);
        $competence = $stmt->fetch();
    }
}
?>

<?php if (isset($competence)) : ?>
    <form method="POST">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($competence['nom']) ?>"><br>
        <label>Niveau :</label>
        <input type="text" name="niveau" value="<?= htmlspecialchars($competence['niveau']) ?>"><br>
        <button type="submit">Modifier</button>
    </form>
<?php else : ?>
    <p>Compétence introuvable.</p>
<?php endif; ?>
