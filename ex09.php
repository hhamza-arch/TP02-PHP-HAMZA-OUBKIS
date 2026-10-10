<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 9 - Notes</title></head>
<body>
<h1>Exercice 9 : Résultats des étudiants</h1>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$sommeNotes = 0;
$nombreValides = 0;
$meilleureNote = -1;
$meilleurEtudiant = "";

echo "<table border='1' cellpadding='8'>";
echo "<thead><tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr></thead><tbody>";

foreach ($notes as $etudiant => $note) {
    $sommeNotes += $note;
    $statut = ($note >= 10) ? "Validé" : "Non validé";
    if ($note >= 10) {
        $nombreValides++;
    }
    if ($note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }
    echo "<tr><td>" . htmlspecialchars($etudiant, ENT_QUOTES, 'UTF-8') . "</td>";
    echo "<td>$note</td><td>$statut</td></tr>";
}
echo "</tbody></table>";

$moyenneClasse = $sommeNotes / count($notes);
?>
<p>Somme des notes : <?= $sommeNotes ?></p>
<p>Moyenne de la classe : <?= number_format($moyenneClasse, 2, ',', ' ') ?></p>
<p>Étudiants ayant validé : <?= $nombreValides ?></p>
<p>Meilleure note : <?= $meilleureNote ?> — <?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
