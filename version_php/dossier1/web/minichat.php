<!DOCTYPE html>
<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['pseudo'])) {
header('Location: index.php');
}

?>

<html>"minichat_post.php"
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action= method="post">
        <p>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
	</p>
    </form>


<?php 

// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root', ''); 

// on sélectionne la base 
mysql_select_db('smart_recipes',$db); 


// on crée la requête SQL 
$sql = "SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10"; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on fait une boucle qui va faire un tour pour chaque enregistrement 

while($data = mysql_fetch_assoc($req)) 
    { 


        echo '<p><strong>' . htmlspecialchars($data['pseudo']) . '</strong> : ' . htmlspecialchars($data['message']) . '</p>';
    }

?>
    </body>
</html>