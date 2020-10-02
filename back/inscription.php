<?php
include "bdd.php";

// global $bdd;
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "INSERT INTO utilisateurs (`nom`, `prenom`, `email`, `mdp`, `type`) VALUES ('".$nom."','".$prenom."','".$email."','".$password."', 1)";
$query = $bdd->query("INSERT INTO utilisateurs (`nom`, `prenom`, `email`, `mdp`, `type`) VALUES ('".$nom."','".$prenom."','".$email."','".$password."', 1)");
?>
