
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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="public/css/styles.css"/>
   
    <link rel="stylesheet" href="public/css/skin 2/style.css"/>
    <title> Profil page</title>

  <link rel="stylesheet" href="css/reset.css">


    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <script src= "public/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="public/js/raphael-min.js"></script>
    <script type="text/javascript" src="public/js/jquery.easing.js"></script>
    
    
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
    
      
            <li><a href ="chat.php"> Communauté</a></li>
            <li><a href="profil/profil.php"><img width="26" height="16" src="public/images/profil.jpg"/></a></li>
            <li><a> <?php echo $_SESSION['pseudo']; ?> </a>
             <ul>
                        
                        <li><a href="#">Votre groupe de connectés</a></li>
                        <li><a href="#">Modifier votre profil</a></li>
                        <li><a href="#">Suivi de votre poids</a></li>
            <li><a href="#">Vos favoris</a></li>
                </ul>
            </li>
            <li><a>A propos</a></li>
            <li><a href="../logout.php">Quitter</a> </li>
              <li><a href="../menu.php">Acceuil</a> </li>
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
                    
            
 <h1><img class="logo" src="public/images/logo.png" /> <small>Smart recipes, travel the world!</small></h1>
<header>
  <figure class="profile-banner">
    <img  width="975" src="public/images/cover.jpg" alt="Profile banner" />
  </figure>
  <figure class="profile-picture" 
    style="background-image: url('public/images/profil.jpg')">
  </figure>
  <div class="profile-stats">
    <ul>
      <li>13    <span>Recettes</span></li>
      <li>1,354 <span>De favoris</span></li>
      <li>32    <span>Connectés</span></li>
      <li>1 mois<span>De présence</span></li>
    </ul>
    <a href="javascript:void(0);" class="follow">
      Se connecter 
    </a>
  </div>
  <h1>Karen MIGAN <small>mkiam</small></h1>
</header>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>

</div>
</div>
</div>
    
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
  
    <div class="row">
        <div class="col-md-2 col-sm-6 footerleft">
        <h6 class="heading7"><img class = "logo" src="../../public/images/logo.png"/>  POUR NOUS JOINDRE</h6>
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


<script type="text/javascript" src="public/js/jquery.fullscreen.js"></script>
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

