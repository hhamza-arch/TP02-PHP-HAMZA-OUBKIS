<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 8 - Boucles</title></head>
<body>
<h1>Exercice 8 : while, do-while, continue et break</h1>

<section>
<h2>1. Nombres pairs de 0 à 20</h2>
<p>
<?php
$nombrePair = 0;
while ($nombrePair <= 20) {
    if ($nombrePair === 10) {
        echo "<strong>$nombrePair</strong> ";
    } else {
        echo $nombrePair . " ";
    }
    $nombrePair += 2;
}
?>
</p>
</section>

<section>
<h2>2. Comparaison while et do-while</h2>
<?php
$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
    $compteur++;
}

$compteur = 5; 
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
    $compteur++;
} while ($compteur < 5);
?>
<p>Nombre d'exécutions de while : <?= $executionsWhile ?></p>
<p>Nombre d'exécutions de do-while : <?= $executionsDoWhile ?></p>
</section>

<section>
<h2>3. Continue et break</h2>
<p>
<?php
for ($compteur = 1; $compteur <= 20; $compteur++) {
    if ($compteur >= 16) {
        break; 
    }
    if ($compteur % 3 === 0) {
        continue; 
    }
    echo $compteur . " ";
}
?>
</p>
</section>
</body>
</html>
