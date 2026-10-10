<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Exercice 7 - Boucles for</title></head>
<body>
<h1>Exercice 7 : Boucles for</h1>
<section>
    <h2>Table de multiplication de 7</h2>
    <ul>
    <?php
    $nombre = 7;
    for ($multiplicateur = 1; $multiplicateur <= 10; $multiplicateur++) {
        echo "<li>$nombre × $multiplicateur = " . ($nombre * $multiplicateur) . "</li>";
    }
    ?>
    </ul>
</section>
<section>
    <h2>Pyramide de six lignes</h2>
    <pre><?php
    for ($ligne = 1; $ligne <= 6; $ligne++) {
        for ($etoile = 1; $etoile <= $ligne; $etoile++) {
            echo "*";
        }
        echo "\n";
    }
    ?></pre>
</section>
</body>
</html>
