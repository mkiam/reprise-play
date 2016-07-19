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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="../public/css/styles.css"/>
		<link rel="stylesheet" href="../public/css/iview.css"/>
		<link rel="stylesheet" href="../public/css/skin 2/style.css"/>
		<script src= "../public/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="../public/js/raphael-min.js"></script>
		<script type="text/javascript" src="../public/js/jquery.easing.js"></script>
		<script src="../public/js/iview.js"></script>
		<script>
			$(document).ready(function(){
				$('#iview').iView({
					pauseTime: 7000,
					pauseOnHover: true,
					directionNav: true,
					directionNavHide: false,
					directionNavHoverOpacity: 0,
					controlNav: false,
					nextLabel: "Nächste",
					previousLabel: "Vorherige",
					playLabel: "Spielen",
					pauseLabel: "Pause",
					timer: "360Bar",
					timerPadding: 3,
					timerColor: "#0F0"
				});
				$('#iview2').iView({
					pauseTime: 7000,
					pauseOnHover: true,
					directionNav: true,
					directionNavHide: false,
					controlNav: true,
					controlNavNextPrev: false,
					controlNavTooltip: false,
					nextLabel: "Próximo",
					previousLabel: "Anterior",
					playLabel: "Jugada",
					pauseLabel: "Pausa",
					timer: "360Bar",
					timerBg: "#EEE",
					timerColor: "#000",
					timerDiameter: 40,
					timerPadding: 4,
					timerStroke: 8,
					timerPosition: "bottom-right"
				});
			});
		</script>
		</head>
<body>
         <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#"> Notre top 5</a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a><img src="../public/images/rec1.jpg")' height="92" width="132"/></a></li>
          
          <li><a>Beignets au poisson </a></li>
		  <li><a><img src="../public/images/REC3.jpg" height="92" width="132"/></a></li>
          <li><a>Donuts au chocolat</a></li>
		  <li><a><img src="../public/images/REC4.jpg" height="92" width="132"/></a></li>
          <li><a>Gâteau à la crème</a></li>
		  <li><a><img src="../public/images/re2.jpe" height="92" width="132"/></a></li>
          <li><a>Sauce au poisson</a></li>
		  
		  <li><a><img src="../public/images/rec5.jpe" height="92" width="132"/></a></li>
          <li><a>Yassa au poulet</a></li>
        </ul>
      </div>
          
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
		
      
						<li><a href ="chat.php"> Communauté</a></li>
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
				<form id="searchthis">
				<input id="search" name="q" type="text" placeholder="Entrez un mot clé" />
				<input id ="search-btn" type="submit" value="Trouver une recette associée"/>
				</form>
				</div>
		</div>
<div class="container">
<div class="row">
<div class="col-xs-12">
    
    <div class="main">
            
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    
            
	<div id="iview">
	<div data-iview:image="../public/photos/photo7.jpg">
				<div class="iview-caption video-caption" data-x="50" data-y="50" data-transition="wipeUp"><iframe src="https://www.youtube.com/embed/JDDbgl8BBRg"  width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
				<div class="iview-caption caption4" data-x="600" data-y="140" data-transition="wipeRight">Mangez varié</div>
				<div class="iview-caption caption3" data-x="600" data-y="200" data-width="235" data-height="40" data-transition="wipeLeft">Optez pour des recettes saines <b>pour garder la ligne ou pour mincir</b></div>
			</div>
			<div data-iview:image="../public/photos/photo6.jpg">
				<div class="iview-caption caption1" data-x="300" data-y="300" data-transition="expandLeft">Retrouvez des plats d'Asie!</div>
			</div>

			

			<div data-iview:image="../public/photos/photo8.jpg">
				<div class="iview-caption caption2" data-x="400" data-y="300" data-transition="wipeRight">Ou encore d'Afrique!</div>
			</div>

			<div data-iview:image="../public/photos/photo9.jpg">
				<div class="iview-caption" data-x="100" data-y="300" data-transition="wipeLeft">Pour des repas gourmands, décrouvrez nos patisseries!</div>
			</div>

			<div data-iview:image="../public/photos/photo10.jpg">
				<div class="iview-caption caption3" data-x="200" data-y="320" data-transition="wipeLeft">La cuisine européenne? Pourquoi pas?</div>
			</div>
		</div>
		
        </div>
        </div>
        
    </div>
</div>
</div>
</div>
		
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
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
</div>
      </div>
      <div class="col-md-4 col-sm-6 footerleft ">
        
        <br/>
		<p><i class="fa fa-map-pin"></i> Université du QUEBEC à CHICOUTIMI-  QUEBEC, CANADA</p>
        <p><i class="fa fa-phone"></i> Téléphone (CANADA) : +1 418 944 0589</p>
        
        
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
</div>


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