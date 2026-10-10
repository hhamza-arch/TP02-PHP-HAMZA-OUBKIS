<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 4 - Types</title></head>
<body>
<h1>Exercice 4 : Types et conversions</h1>
<h2>Valeurs initiales</h2>
<pre><?php
$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

var_dump($entier, $chaine, $decimal, $vrai, $faux, $vide);
?></pre>

<h2>Conversions</h2>
<pre><?php
$chaineEnEntier = (int) $chaine;
$decimalEnEntier = (int) $decimal;
$entierEnChaine = (string) $entier;
var_dump($chaineEnEntier, $decimalEnEntier, $entierEnChaine);
?></pre>

<h2>Affichage de true et false</h2>
<p>Avec echo : true = <?= $vrai ?> ; false = [rien n'est affiché pour false]</p>
<pre><?php var_dump($vrai, $faux); ?></pre>

<h2>Conversions booléennes</h2>
<pre><?php
var_dump((bool) 0, (bool) "0", (bool) "PHP", (bool) []);
?></pre>
</body>
</html>
