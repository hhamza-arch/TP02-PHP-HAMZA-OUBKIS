# Les 10 exercices PHP

Solutions des exercices 1 à 10. Les données personnelles sont fictives et peuvent être modifiées.

## Exercice 2 — Noms de variables
PHP distingue les majuscules et les minuscules : `$note` et `$Note` sont deux variables différentes.

Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
Noms invalides : `$a!` (caractère `!` interdit dans un nom de variable) et `$1a` (un nom ne peut pas commencer par un chiffre).

## Exercice 4 — echo et var_dump
`echo false` n'affiche rien, car la valeur booléenne `false` est convertie en chaîne vide. `var_dump(false)` affiche `bool(false)`, ce qui indique explicitement le type et la valeur.

## Exercice 5 — Tests effectués
| Moyenne | Message attendu |
|---:|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

Pour tester chaque valeur, modifier `$moyenne` dans `ex05.php`, enregistrer, puis actualiser la page dans le navigateur.

## Exercice 6 — Tests
- `1` → Janvier
- `3` → Mars
- `12` → Décembre
- `15` → Numéro de mois invalide

Pour afficher le mois courant du serveur, remplacer `$numeroMois = 3;` par `$numeroMois = (int) date("m");`.

## Exercice 9 — Résultats attendus
- Somme : 60
- Moyenne : 12
- Étudiants ayant validé : 4
- Meilleure note : Sara, 16

## Exercice 10 — GET et POST
Avec GET, les valeurs envoyées apparaissent dans l'URL après `?`, sous forme de paramètres, par exemple `?nom=Oubkis&prenom=Hamza&groupe=G1`. Éviter GET pour les données sensibles.

Avec POST, les valeurs sont envoyées dans le corps de la requête et ne sont normalement pas visibles dans l'URL. POST ne chiffre pas les données à lui seul : HTTPS reste important.

Les pages PHP vérifient les champs côté serveur, refusent les valeurs vides et utilisent `htmlspecialchars()` avant l'affichage des données.

## Tester les fichiers
PHP doit être exécuté par un serveur PHP (par exemple XAMPP), pas ouvert directement comme un simple fichier HTML.

1. Copier le dossier dans `htdocs` de XAMPP (Windows) ou utiliser le dossier web configuré.
2. Démarrer Apache.
3. Ouvrir `http://localhost/les_10_exercices_php/ex01.php`.
4. Pour l'exercice 10, ouvrir les formulaires `.html`.

## Publier sur GitHub
Depuis la racine du dépôt, après chaque exercice :
```bash
git status
git add ex01.php
git commit -m "Exercice 01 : affichage PHP"
git push origin main
```
Adapter le fichier ajouté et le message à chaque exercice. Pour l'exercice 10, ajouter les quatre fichiers dans le même commit :
```bash
git add ex10_get.html ex10_get.php ex10_post.html ex10_post.php
git commit -m "Exercice 10 : formulaires GET et POST"
git push origin main
```
