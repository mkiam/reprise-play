<?php
//On reprend la suite du code
else
{
    $message='';
    if (empty($_POST['login1']) || empty($_POST['pass']) ) //Oublie d'un champ
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./index.php">ici</a> pour revenir</p>';
    }
    else //On check le mot de passe
    {
        $query=$db->prepare('SELECT *
        FROM user WHERE login = :login1 AND password = :pass');
        $query->bindValue(':login1',$_POST['login1'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
	if ($data['password'] == md5($_POST['pass'])) // Acces OK !
	{
	   
	    $message = '<p>Bienvenue '.$data['login'].', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./index.php">ici</a> 
			pour revenir à la page d accueil</p>';  
	}
	else // Acces pas OK !
	{
	    $message = '<p>Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
	    pour revenir à la page précédente
	    <br /><br />Cliquez <a href="./index.php">ici</a> 
	    pour revenir à la page d accueil</p>';
	}
    $query->CloseCursor();
    }
    echo $message.'</div></body></html>';

}
?>
