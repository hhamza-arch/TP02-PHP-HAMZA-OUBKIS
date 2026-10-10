<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat GET</title></head>
<body>
<h1>Traitement du formulaire GET</h1>
<?php
$champs = ["nom", "prenom", "groupe"];
$erreurs = [];
$valeurs = [];

if ($_SERVER["REQUEST_METHOD"] !== "GET" || empty($_GET)) {
    $erreurs[] = "envoyez-le vos informations.";
} else {
    foreach ($champs as $champ) {
        $valeur = isset($_GET[$champ]) ? trim((string) $_GET[$champ]) : "";
        if ($valeur === "") {
            $erreurs[] = "Le champ " . $champ . " est obligatoire.";
        }
        $valeurs[$champ] = $valeur;
    }
    if (!in_array($valeurs["groupe"] ?? "", ["G1", "G2", "G3", "G4"], true)) {
        $erreurs[] = "Le groupe sélectionné est invalide.";
    }
}

if ($erreurs) {
    echo "<ul>";
    foreach ($erreurs as $erreur) {
        echo "<li>" . htmlspecialchars($erreur, ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Bienvenue " . htmlspecialchars($valeurs["prenom"], ENT_QUOTES, 'UTF-8')
        . " " . htmlspecialchars($valeurs["nom"], ENT_QUOTES, 'UTF-8')
        . " ! Votre groupe est " . htmlspecialchars($valeurs["groupe"], ENT_QUOTES, 'UTF-8') . ".</p>";
}
?>
<p><a href="ex10_get.html">Retour au formulaire GET</a></p>
</body>
</html>
