
<!DOCTYPE html>

<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['pseudo'])) {
header('Location: index.php');
}

?>
<html>
	<head>

		<title>iView&trade; v2.0</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<script src= "../public/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="../public/js/raphael-min.js"></script>
		<script type="text/javascript" src="../public/js/jquery.easing.js"></script>
		<script src="../public/js/iview.js"></script>
		<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        		<link rel="stylesheet" href="../public/css/styles.css"/>
		
		</head>
<body>
<!-- Page content -->
      <div id="cont">
		<div id="header">
			<div class="container">
			
				
			
				<div id ="nav">
      
				<ul id="menu">
    
        <li>
                <a href="#">Menu</a>
                <ul>
                        
                        <li><a href="#">Programme minceur  </a></li>
						<li><a href="#">Nouvelle recette     </a></li>
              
                </ul>
				
        </li>
		
      
						<li><a href="chat.php"> Communauté</a></li>
						<li><img width="13"src="../public/images/profil.jpg"/></li>
						<li><a> <?php echo $_SESSION['pseudo']; ?> </a></li>
						 <ul>
                        
                        <li><a href="#">Votre groupe de connectés</a></li>
                        <li><a href="#">Modifier votre avatar</a></li>
                        <li><a href="#">Suivi de votre poids</a></li>
						<li><a href="#">Vos favoris</a></li>
                </ul>
						</li>
						<li><a>A propos</a></li>
						<li><a href="logout.php">Quitter</a> </li>
</ul>
			</div>
			</div>
			
			<div id="nav">
				<form id="searchthis1">
				<input id="search1" name="q" type="text" placeholder="Entrez un mot clé" />
				<input id ="search-btn1" type="submit" value="Trouver une recette associée"/>
				</form>
				<br/>

				</div>
		</div>
<div class="container">
<div class="row">
<div class="col-xs-12">
    
    
            
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
<div class="ui">
		<div class="left-menu">
				<form action="#" class="search">
					<input placeholder="Rechercher..." type="search" name="" id="">
					<input type="submit" value="&#xf002;">
				</form>
				<menu class="list-friends">
					<li>
						<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
						<div class="info">
							<div class="user"> <?php echo $_SESSION['pseudo']; ?></div>
							<div class="status on">est connecté(e)</div>
						</div>
					</li>
					
				</menu>
		</div>
		<div class="chat">
			<div class="top">
				<div class="avatar">
					<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
				</div>
				<div class="info">
					<div class="name"><?php echo $_SESSION['pseudo']; ?> </div>
				</div>
				<i class="fa fa-star"></i>
			</div>
			<ul class="messages">
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

    	echo '<li class="i"> <div class="head"> <span class="name">' . htmlspecialchars($data['pseudo']) . ' </span>
					</div>
					<div class="message">' . htmlspecialchars($data['message']) . ' </div>
				</li>';
    }

?>
			</ul>
			<div class="write-form">
		<form action="minichat_post.php" method="post">
        <p>
        <label for="message">Message</label> :  <input type="text" name="message" id="message" />

       &nbsp; <input type="submit" value="Envoyer" />
	</p>
    </form>

			</div>
		</div>
	</div>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<footer>
  <div class="container">
  
    <div class="row">
	      <div class="col-md-2 col-sm-6 footerleft">
        <h6 class="heading7"><img class = "logo" src="../public/images/logo.png"/>  POUR NOUS JOINDRE</h6>
    <div class="text-center center-block">
            <br />
                <a href="https://www.facebook.com/uqac.ca/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/uqac?lang=fr"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://www.linkedin.com/profile/preview?locale=fr_FR&trk=prof-0-sb-preview-primary-button"><i id="social-gp" class="fa fa-linkedin-square fa-3x social"></i></a>
	           <a href="https://github.com/mkiam"><i id="social-gp" class="fa fa-github-square fa-3x social"></i></a>
			   <a href="mailto:ysoldesanges@@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
			    <div class="col-md-4 col-sm-6 footerleft ">
        
        <br/>
		<p><i class="fa fa-map-pin"></i> Université du QUEBEC à CHICOUTIMI-  QUEBEC, CANADA</p>
        <p><i class="fa fa-phone"></i> Téléphone (CANADA) : +1 418 944 0589</p>
        
        
      </div>
</div>
      </div>
     

    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2016 - MADE BY Karen MIGAN</p>
    </div>
  </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/nicescroll/3.5.4/jquery.nicescroll.js'></script>

        <script src="js/index.js"></script>

      
</footer>



<script type="text/javascript" src="../public/js/jquery.fullscreen.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#background-image").fullscreenBackground();
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30854466-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	
	</body>
</html>
