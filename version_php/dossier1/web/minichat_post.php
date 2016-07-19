<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['pseudo'])) {
header('Location: index.php');
}


// Connexion à la base de données
// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', ''); 



// on sélectionne la base 
mysql_select_db('smart_recipes',$db); 


$Pseudo =  $_SESSION['pseudo']; 
$Message= addslashes($_POST["message"]);

// Insertion du message à l'aide d'une requête préparée
// on crée la requête SQL 
$sql = "INSERT INTO minichat(pseudo, message) VALUES('$Pseudo', '$Message')";

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>