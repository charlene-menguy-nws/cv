<?php
try {
    $pdo = new PDO("mysql:host=localhost;port=8889", "root", "root");
    
    $databases = $pdo->query("SHOW DATABASES")->fetchAll();
    echo "Bases disponibles :<br>";
    foreach($databases as $db) {
        echo "- " . $db[0] . "<br>";
    }
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>