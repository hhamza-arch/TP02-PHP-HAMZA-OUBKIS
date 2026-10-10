<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 3 - Calcul TVA</title></head>
<body>
<h1>Exercice 3 : Calcul du prix TTC</h1>
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;
$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;
$totalTTC += 15; // frais
?>
<ul>
    <li>Prix unitaire HT : <?= number_format($prixUnitaireHT, 2, ',', ' ') ?> <?= DEVISE ?></li>
    <li>Quantité : <?= $quantite ?></li>
    <li>Total HT : <?= number_format($totalHT, 2, ',', ' ') ?> <?= DEVISE ?></li>
    <li>TVA (<?= TAUX_TVA ?> %) : <?= number_format($montantTVA, 2, ',', ' ') ?> <?= DEVISE ?></li>
    <li>Total TTC hors livraison : <?= number_format($totalHT + $montantTVA, 2, ',', ' ') ?> <?= DEVISE ?></li>
    <li>Frais de livraison : 15 <?= DEVISE ?></li>
    <li><strong>Montant final : <?= number_format($totalTTC, 2, ',', ' ') ?> <?= DEVISE ?></strong></li>
</ul>
<p>La constante TAUX_TVA existe : <?= defined("TAUX_TVA") ? "Oui" : "Non" ?></p>
</body>
</html>
