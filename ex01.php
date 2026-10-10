<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Introduction PHP</title>
</head>
<body>
    <h1>Exercice 1 : Introduction à PHP</h1>
    <?php
    // Affichage du message principal.
    echo "<p>Bienvenue dans mon TP PHP</p>";

    /*
     * Informations fictives de l'étudiant.
     * Les commentaires ne sont pas affichés dans la page.
     */
    $prenom = "Hamza";
    $nom = "Oubkis";
    $groupe = "IAP - Groupe 1";

    echo "<p>Prénom : " . $prenom . "</p>";
    echo "<p>Nom : " . $nom . "</p>";
    echo "<p>Groupe : " . $groupe . "</p>";
    ?>
    <p><?= "Bon travail et bonne continuation !" ?></p>
</body>
</html>
