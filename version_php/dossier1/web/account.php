

 <html>


<?php 

// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', ''); 

// on sélectionne la base 
mysql_select_db('smart_recipes',$db); 
 $Login = addslashes($_GET["login2"]);
 $Password= addslashes($_GET["password"]);
 $Email = addslashes($_GET["email"]);
 $Name = addslashes($_GET["name"]);
 $Surname = addslashes($_GET["surname"]);




// on crée la requête SQL 
$sql = "INSERT INTO user (login, name, surname, email, password) VALUES('$Login', '$Name', '$Surname', '$Email', '$Password' )";

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 


 // Inialize session
session_start();
 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['pseudo'] = $Login;
   	//redirect back to our list page since the insert worked
        header("location: menu.php");   
   

// on ferme la connexion à mysql 
mysql_close(); 
?> 
 
 </html>

 




