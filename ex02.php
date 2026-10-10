<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 2 - Variables</title></head>
<body>
<h1>Exercice 2 : Variables et concaténation</h1>
<?php
$nom = "Oubkis";
$prenom = "Hamza";
$age = 20;
$formation = "TC-INFO";


$presentation = "Je m'appelle " . $prenom . " " . $nom
    . ", j'ai " . $age . " ans et je suis en " . $formation . ".";
$presentation .= " J'apprends PHP.";

$note = 12;
$Note = 16; 

echo "<p>" . htmlspecialchars($presentation, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>Valeur de \$note : " . $note . "</p>";
echo "<p>Valeur de \$Note : " . $Note . "</p>";
?>
<p>Voir README.md pour les règles de nommage des variables.</p>
</body>
</html>
