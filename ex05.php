<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 5 - Moyenne</title></head>
<body>
<h1>Exercice 5 : Mention selon la moyenne</h1>
<?php
// Modifier cette valeur pour tester les différents cas.
$moyenne = 16;

if ($moyenne < 0 || $moyenne > 20) {
    $message = "Note invalide";
} elseif ($moyenne < 10) {
    $message = "Non validé";
} elseif ($moyenne < 12) {
    $message = "Passable";
} elseif ($moyenne < 14) {
    $message = "Assez bien";
} elseif ($moyenne < 16) {
    $message = "Bien";
} else {
    $message = "Très bien";
}
?>
<p>Moyenne : <?= $moyenne ?>/20</p>
<p>Résultat : <strong><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></strong></p>
<p>Pour tester, remplacez $moyenne successivement par -1, 9, 10, 12, 14, 16 et 21.</p>
</body>
</html>
