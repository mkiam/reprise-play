
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
						<li><img width="25"src="../public/images/avatar.png"/></li>
						<li><a> <?php echo $_SESSION['pseudo']; ?> </a>
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
					<input placeholder="search..." type="search" name="" id="">
					<input type="submit" value="&#xf002;">
				</form>
				<menu class="list-friends">
					<li>
						<img width="50" height="50" src="http://cs625730.vk.me/v625730358/1126a/qEjM1AnybRA.jpg">
						<div class="info">
							<div class="user">Юния Гапонович</div>
							<div class="status on"> online</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/1">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status on"> online</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/2">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 3 min age</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/3">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status on"> online</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/4">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 4 min age</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/5">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 12 min age</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/6">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 13 min age</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/7">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status on">online</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/8">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 6 min age</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/9">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status on">online</div>
						</div>
					</li>
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/10">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 1 min age</div>
						</div>
					</li>
					
					<li>
						<img width="50" height="50" src="http://lorempixel.com/50/50/people/99">
						<div class="info">
							<div class="user">Name Fam</div>
							<div class="status off">left 23 min age</div>
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
					<div class="name">Юния Гапонович</div>
					<div class="count">already 1 902 messages</div>
				</div>
				<i class="fa fa-star"></i>
			</div>
			<ul class="messages">
				<li class="i">
					<div class="head">
						<span class="time">10:13 AM, Today</span>
						<span class="name">Буль</span>
					</div>
					<div class="message">Привет!</div>
				</li>
				<li class="i">
					<div class="head">
						<span class="time">10:13 AM, Today</span>
						<span class="name">Буль</span>
					</div>
					<div class="message">)</div>
				</li>
				<li class="i">
					<div class="head">
						<span class="time">10:14 AM, Today</span>
						<span class="name">Буль</span>
					</div>
					<div class="message">М не счастья..</div>
				</li>
				<li class="friend-with-a-SVAGina">
					<div class="head">
						<span class="name">Юния</span>
						<span class="time">10:15 AM, Today</span>
					</div>
					<div class="message">чего тебе?</div>
				</li>
			</ul>
			<div class="write-form">
				<textarea placeholder="Type your message" name="e" id="texxt"  rows="2"></textarea>
				<i class="fa fa-picture-o"></i>
				<i class="fa fa-file-o"></i>
				<span class="send">Send</span>
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
