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
     <link rel="stylesheet" href="../public/css/profil.css"/>
    
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
    
      
            <li><a> Communauté</a></li>
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
                    
            
 <div class="container">
    <div class="row">
        
<div class="col-xs-16 col-md-10 " >
<div  class="btn-pref btn-group btn-group-justified " role="group">
<div class="card hovercard" style="background:orange;height:relative;"   >
<div class=" card-background " >
            <img  class=" fb-image-lg" alt="row card-bkimg" src="http://lorempixel.com/555/300/sports">
</div>
        <div class="useravatar"> <img alt="card-bkimg" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/JamesCameronHWOFOct2012.jpg"> </div>
        <div class="card-info"> <span class="card-title">James cameron</span> </div>
</div>
 <div class="pagination">
       <div class="btn-group btn-group-justified  btn-group-horizontal">
            <div class="btn-group " role="group"> 
                <button id="b1" type="button" class="btn btn-nav" href="#tab1" data-toggle="tab" >
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="visible-lg" >Profile</div>
                </button>
              </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-nav" href="#tab2" data-toggle="tab" >
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <div class="visible-lg">Location</div>
                </button>
            </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-nav" href="#tab3" data-toggle="tab">
                 <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                     <div class="visible-lg">Work</div>
                </button>
            </div>
                 
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-nav" href="#tab4" data-toggle="tab">
                    <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                <div class="visible-lg">Upload</div>
                </button>
            </div>
             
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-nav" href="#tab5" data-toggle="tab">
                    <span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span>
                <div class="visible-lg">Dashboard</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-nav" href="#tab6" data-toggle="tab">
                    <span class="glyphicon glyphicon-bell"  aria-hidden="true"></span>
                  <div class="visible-lg">Studio</div>
                </button>
            </div>
    </div>
</div>

<div class="panel">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1" style="padding-left:10%; color: #0084b4;">
        <center style="padding-right: 30%">
         <form role="form" class="form-inline  go-right" style="color:#0084b4 ;background-color:#FAFAFF;border-radius:0px 22px 22px 22px; ">
          <h2>Profile</h2>
            <p>Please update your profile for more security.</p>
      <div class="form-group">            
      <input id="Firstname" name="Firstname" type="text" class="form-control" required>
      <label for="Firstname">First Name <span class="glyphicon glyphicon-user"> </span></label>
    </div>
        <div class="form-group">
        <input id="Lastname" name="Lastname" type="text" class="form-control" required>
      <label for="Lastname">Last Name <span class="glyphicon glyphicon-user"> </label>
    </div>
        <div class="form-group">
            <input id="Middlename" name="Middlename" type="text" class="form-control" placeholder="Middle Name">
      <label for="Middlename">Middle Name <span class="glyphicon glyphicon-user"> </label>
    </div>
        <br>
        <br>
    <div class="form-group">
      <input id="phone" name="phone" type="tel" class="form-control" required>
      <label for="fphone">Primary Phone <span class="glyphicon glyphicon-phone"></label>
    </div>
       <div class="form-group">
        <input id="password" name="phone" type="tel" class="form-control input-sm" placeholder="secondary phone">
      <label for="sphone">Secondary Phone <span class="glyphicon glyphicon-phone"></label>
    </div>
        <br><br>
        <div class="form-group">        
            <select class="form-control">
              <option id="Male" Value="M"  selected>Male</option>
              <option id="FeMale" Value="FM" >Female</option>
              <option id="NotInterested" Value="NI">Not interested</option>
            </select>
       </div>
  
        <div class="form-group">
          <input id="date" name="date" type="date" class="form-control">
    </div>
        <br><br>
         <div class="form-group">
      <textarea id="message" name="phone" class="form-control" style="width:relative;height:100px" placeholder="Short Description" ></textarea>
      <label for="message">Short Description <span class="glyphicon glyphicon-align-justify"></label>
    </div>
        <br><br>
         <div class="form-group">
        <input id="Email1" name="phone" class="form-control"  placeholder="Registered email" ></textarea>
      <label for="Email1">Registered email <span class="glyphicon glyphicon-align-envelope"></label>
    </div>
        <br><br>
         <div class="form-group">
          <input id="Email2" name="phone" class="form-control"  placeholder="Alternate email" ></textarea>
      <label for="Email2">Alternate email <span class="glyphicon glyphicon-align-envelope"></label>
    </div>
 
        <br><br>
         <div class="form-group">
            <input id="Vweb" name="phone" class="form-control"  placeholder="Website" ></textarea>
      <label for="Vweb">WebSite <span class="glyphicon glyphicon-align-envelope"></label>
    </div>
        <br><br>
        <button class="go-bottom">
            Save
        </button>
        <br>
        <br>
        </form>
        </center>
 </div>
        
<div class="tab-pane fade in" id="tab2" style="padding-left:10%; color: #0084b4;">
<center style="padding-right: 30%">
  <form role="form" class="form-inline  go-right" style="color: #0084b4;background-color:#FAFAFF;border-radius:0px 22px 22px 22px;">
            <h2>Address</h2>
        <br>
        <div class="form-group" >
            <input id="Address" name="Address" type="tel" class="form-control"   >
      <label for="Address">Flat NO/House No</label>
    </div>
        <div class="form-group" >
            <input id="LandMark" name="LandMark" type="text" class="form-control" placeHolder="Land Mark">
            <label for="LandMark">Land Mark</label>
    </div>        
        <br><br>
        <p3>(Enter Pincode/Area to pick your nearest location)<span class="glyphicon glyphicon-map-marker"></p3>
        <br><br>
        <div class="form-group input-lg" >
           <input class="form-control"  id="autocomplete" name="LocationPicker" type="text" onFocus="geolocate()" style=" moz-border-radius: 22px;border-radius: 7px;"  >
         </div>
        <br><br>
         <div class="form-group">
            <input id="route" name="route" type="tel" class="form-control"   required disabled="true">
          <label for="route">Route/Locality</label>
    </div>
        <div class="form-group">
            <input id="locality" name="locality" type="tel" class="form-control"   required disabled="true">
      <label for="locality">City/Town</label>
    </div>
        <br>
        <div class="form-group">
            <input id="administrative_area_level_2" name="administrative_area_level_2" type="tel" class="form-control"   required disabled="true">
        <label for="administrative_area_level_2">District</label>
    </div>
        <div class="form-group">
            <input id="administrative_area_level_1" name="administrative_area_level_1" type="tel" class="form-control"   required disabled="true">
      <label for="administrative_area_level_1">State</label>
    </div>
        <br>
        <div class="form-group">
            <input id="country" name="country" type="text" class="form-control"   required disabled="true">
        <label for="country">Country</label>
    </div>
        <div class="form-group">
            <input id="postal_code" name="postal_code" type="tel" class="form-control"   required disabled="true">
      <label for="postal_code">Pin Code</label>
    </div>
        
        <br><br>
        <button>
            Save
        </button>
        <br>
        <br>
        </form>
        </center>    
 </div>


<div class="tab-pane fade in" id="tab3" style="padding-left:10%; color: #0084b4;">
<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="pagination">
            <div class=" pagination col-sm-3" id="slider-thumbs">
            <br>
                <label> uploaded images</label>
                <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                <ul class="hide-bullets">
                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-30">
                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/470x480&text=zero"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/470x480&text=1"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/470x480&text=2"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/470x480&text=3"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/470x480&text=4"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/470x480&text=5"></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="http://placehold.it/470x480&text=6"></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="http://placehold.it/470x480&text=7"></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="http://placehold.it/470x480&text=8"></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="http://placehold.it/470x480&text=9"></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="http://placehold.it/470x480&text=10"></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="http://placehold.it/470x480&text=11"></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="http://placehold.it/470x480&text=12"></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="http://placehold.it/470x480&text=13"></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="http://placehold.it/470x480&text=14"></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="http://placehold.it/470x480&text=15"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
</div>


<div class="tab-pane fade in" id="tab4" style="padding-left:10%; color: #0084b4;">
 <form role="form" class="form-inline  go-right" style="color: #0084b4;background-color:#FAFAFF;border-radius:0px 22px 22px 22px;">
        <h3>Upload your Images and Videos</h3>
         <input type="file" class="form-control" required>
         <br>
         <input type="file" class="form-control" >
        <br>
         <input type="file" class="form-control" >
        <br>
         <input type="file" class="form-control" >
        <br>
         <input type="file" class="form-control" >
        <br>
         <input type="file" class="form-control" >
        <br>
        <br>
<button> SAVE </button>
</form>
  
 
  
</div>
  
<div class="tab-pane fade in" id="tab5" style="padding-left:10%; color: #0084b4;">
<div class="container">
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="http://placehold.it/150x150&text=13" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"  style="color: Black;">Test Dash Board</h4>
     Helllo Every One !!!
     This Test Dash Board and Yet to be developed......
  </div>
</div>
</div>
</div>


<div class="form-group tab-pane fade in" id="tab6" >

  <form role="form" class="form-horizontal  go-right" style="color: #0084b4;background-color:#FAFAFF;border-radius:0px 22px 22px 22px;">
        <h2>Studio Information</h2>
      <br>
        <br>
<div class="container">
 <div class="panel panel-default recipients">
        <div class="panel-heading">
            <span class="button-checkbox">
                <button type="button" class="btn btn-sm" data-color="default">All Guests</button>
                <input type="checkbox" id="showall" class="hidden" checked />
            </span>
            <span class="button-checkbox">
                <button type="button" class="btn btn-sm" data-color="default">Not Yet Invited</button>
                <input type="checkbox" id="showall" class="hidden" />
            </span>
            <span class="button-checkbox">
                <button type="button" class="btn btn-sm" data-color="default">Yes RSVP</button>
                <input type="checkbox" id="showall" class="hidden" />
            </span>
            <span class="button-checkbox">
                <button type="button" class="btn btn-sm" data-color="default">No RSVP</button>
                <input type="checkbox" id="showall" class="hidden" />
            </span>
            <span class="button-checkbox">
                <button type="button" class="btn btn-sm" data-color="default">Maybe RSVP</button>
                <input type="checkbox" id="showall" class="hidden" />
            </span>
            <span class="button-checkbox">
                <button type="button" class="btn btn-sm" data-color="default">Not Yet Replied</button>
                <input type="checkbox" id="showall" class="hidden" />
            </span>
        </div>
    </div>
 </form>
</div>
</div>
</div>

   

</div>
</div>
</div>
 
<div class="col-lg-2 col-sm-6 visible-lg">
        <br>
      <div class="well"
        style="height: 400px; width: 200px; background-color: #0084b4; border: 1px">
        <img class="card-bkimg"
          style="height: 180px; width: 180px; border: 1px; background-color: Grey;"
          alt="" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/JamesCameronHWOFOct2012.jpg">
                    <br> <br>
                    <p> James cameron</p>
                    <h4> Hello Every One!!!</h4>
      </div>

      <div class="well" style="height: 290px; width: 200px; color:purple">
        
                    
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
<script type="text/javascript">
  

$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});


jQuery(document).ready(function($) {
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

var placeSearch, autocomplete;
var componentForm = {
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_2:'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

// [START region_fillform]
function fillInAddress() {
  var place = autocomplete.getPlace();
  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
    
  }
 for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
     }
  }
}

function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}

</script>
 <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>
        
        
<script type="text/javascript">
var activeEl = 0;
$(function() {
    var items = $('.btn-nav');
    $( items[activeEl] ).addClass('active');
    $( ".btn-nav" ).click(function() {
        $( items[activeEl] ).removeClass('active');
        $( this ).addClass('active');
        activeEl = $( ".btn-nav" ).index( this );
        
    });
});
</script>
  
  </body>
</html>