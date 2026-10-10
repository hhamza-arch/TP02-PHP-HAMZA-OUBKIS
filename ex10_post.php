<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat POST</title></head>
<body>
<h1>Traitement du formulaire POST</h1>
<?php
$champs = ["nom", "prenom", "groupe"];
$erreurs = [];
$valeurs = [];

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $erreurs[] = "Ouvrez le formulaire ex10_post.html et envoyez-le pour transmettre vos informations.";
} else {
    foreach ($champs as $champ) {
        $valeur = isset($_POST[$champ]) ? trim((string) $_POST[$champ]) : "";
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
<p><a href="ex10_post.html">Retour au formulaire POST</a></p>
</body>
</html>
