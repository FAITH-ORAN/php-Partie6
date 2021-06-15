<?php
if (empty($_POST['nom1']) || empty($_POST['prenom1']) )
	{echo "ERREUR : tous les champs n'ont pas ete renseignés.";
	}else{
        echo "Bonjour ".$_POST["prenom1"]." ".$_POST["nom1"];
    }
?>