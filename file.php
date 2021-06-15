<?php
//
$lastName=$name=$gender=$file=" ";
function securForm($donnees){
    $donnees=trim($donnees);//supprime les espaces
    $donnees=stripslashes($donnees);//supprime les anti slash
    $donnees=strip_tags($donnees);
    $donnees=strtolower($donnees);
    //supprime les caractéres html
    return $donnees;
    } 

$lastName =securForm($_POST["prenom1"]);
$name=securForm($_POST["nom1"]);
$gender=securForm($_POST["gender"]);
$file=securForm($_POST["avatar"]);
if (empty($name) || empty($lastName)||empty($gender) || empty($file))
	{echo "ERREUR : tous les champs n'ont pas ete renseignés.";
	}else{
        echo "Bonjour ".$gender." ".$lastName." ".$name." <br>vous avez chargé le fichier :".$_POST["avatar"];
    }
?>