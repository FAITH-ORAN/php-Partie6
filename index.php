<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Partie6</title>
</head>
<body>

<!--les exo sont en comm j'ai ouvert plusieur pages target pour traiter les formulaires, et non pas sur la même page comme l'énnoncé car j'ai créé un seul vhost pour la partie 6, veuillez decommenter l'exercice voulu pour voir le résultat-->
<h3 style="color:red;">Exercice 1</h3>
<?php
$target=fopen("target.php","a+");
fclose($target);
?>

<!--<form method="post" action="target.php">
<label for="prenom">Entrez votre nom: </label>
<input type="text" name="nom" id="prenom">
<label for="nom">Entrez votre prénom: </label>
<input type="text" name="prenom" id="nom">
<input type="submit" value="envoyer"> decommenter pour voir l'exercice 1-->

<h3 style="color:red;">Exercice 2</h3>

<?php
$target1=fopen("target1.php","a+");
fclose($target1);
?>

<!--<form method="post" action="target1.php">
<label for="prenom">Entrez votre nom: </label>
<input type="text" name="nom1" id="prenom">
<label for="nom">Entrez votre prénom: </label>
<input type="text" name="prenom1" id="nom">
<input type="submit" value="envoyer">decommenter pour voir l'exercice 2-->


<h3 style="color:red;">Exercice 3</h3>

<?php
$form=fopen("formulaire.php","a+");
fclose($form);
?>

<!--<form method="post" action="formulaire.php">
<p>Veuillez choisir votre civilité:</p>
<input type="radio" id="female" name="gender" value="Madame">
<label for="female">Madame</label><br>
<input type="radio" id="male" name="gender" value="Monsieur">
<label for="male">Monsieur</label><br>
<label for="prenom">Entrez votre nom: </label>
<input type="text" name="nom1" id="prenom">
<label for="nom">Entrez votre prénom: </label>
<input type="text" name="prenom1" id="nom">
<input type="submit" value="envoyer">decommenter pour voir l'exercice 3-->

<h3 style="color:red;">Exercice 4</h3>

<?php
$form1=fopen("formulaire1.php","a+");
fclose($form1);
?>
<!--<form method="post" action="formulaire.php">
<p>Veuillez choisir votre civilité:</p>
<input type="radio" id="female" name="gender" value="Madame">
<label for="female">Madame</label><br>
<input type="radio" id="male" name="gender" value="Monsieur">
<label for="male">Monsieur</label><br>
<label for="prenom">Entrez votre nom: </label>
<input type="text" name="nom1" id="prenom">
<label for="nom">Entrez votre prénom: </label>
<input type="text" name="prenom1" id="nom">
<input type="submit" value="envoyer">decommenter pour voir l'exercice 4-->


<h3 style="color:red;">Exercice 5</h3>
<?php
$form2=fopen("formulaire2.php","a+");
fclose($form2);
?>

<!--<form method="post" action="formulaire2.php">
<p>Veuillez choisir votre civilité:</p>
<input type="radio" id="female" name="gender" value="Madame">
<label for="female">Madame</label><br>
<input type="radio" id="male" name="gender" value="Monsieur">
<label for="male">Monsieur</label><br>
<label for="prenom">Entrez votre nom: </label>
<input type="text" name="nom1" id="prenom">
<label for="nom">Entrez votre prénom: </label>
<input type="text" name="prenom1" id="nom">
<label for="avatar">envoyer votre photo:</label>

<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg">
<input type="submit" value="envoyer">decommenter pour voir l'exercice 5-->
<h3 style="color:red;">Exercice 6</h3>
<?php
$form3=fopen("file.php","a+");
fclose($form3);
?>
<form method="post" action="file.php">
<p>Veuillez choisir votre civilité:</p>
<input type="radio" id="female" name="gender" value="Madame">
<label for="female">Madame</label><br>
<input type="radio" id="male" name="gender" value="Monsieur">
<label for="male">Monsieur</label><br>
<label for="prenom">Entrez votre nom: </label>
<input type="text" name="nom1" id="prenom">
<label for="nom">Entrez votre prénom: </label>
<input type="text" name="prenom1" id="nom">
<label for="avatar">envoyer votre photo:</label>

<input type="file"
       id="avatar" name="avatar"
       accept=".pdf">
<input type="submit" value="envoyer">
</body>
</html>