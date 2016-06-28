
 <html>


<?php 

// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', ''); 

// on sélectionne la base 
mysql_select_db('smart_recipes',$db); 
$Login = addslashes($_GET["login1"]);
            $Password= addslashes($_GET["pass"]);

// on crée la requête SQL 
$sql = "SELECT *
        FROM user WHERE login = '$Login' AND password = '$Password'"; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysql_fetch_assoc($req)) 
    { 
 // Inialize session
session_start();
 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['pseudo'] = $Login;
   	//redirect back to our list page since the insert worked
        header("location: menu.php");   
    } 

// on ferme la connexion à mysql 
mysql_close(); 
?> 
 
 </html>

 