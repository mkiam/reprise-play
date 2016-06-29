


<html lang="fr">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">

<title>Welkom</title>
  
<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="../public/stylesheets/bootstrap/css/bootstrap.css"/>


<!-- Custom styles for this template -->l
<link rel="stylesheet" type="text/css" href="../public/stylesheets/bootstrap/css/jumbotron.css"/>




<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img class = "logo" src="../public/images/logo.png" /></a>
				
			</div>
			
			<div id="navbar" class="navbar-collapse collapse">
				<form class="navbar-form navbar-right" method="GET" action="connexion.php">
				
					<div class="form-group">
					
						<input type="text"  required id ="login" name="login1" class="form-control login"
							placeholder="Pseudo" required  value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login1'])); ?>">
					</div>
					<div class="form-group">
						<input type="password" required id="password" name="pass" class="form-control password"
							placeholder="Mot de passe" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>">
					</div>
			
					<input type="submit" class="btn btn-success" id="signinbtn"
						value="Connexion">

						</form>
						
			
			
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>

	<div class="container" id="homecontent">
	
		<aside class="signup" >
		

	<ul id="users"></ul>
			<p>Création de compte</p>
		
			<form method="GET" action="account.php">
				<table>
					<tr>
						<td><input type="text" name ="login2" required  class="form-control login"
							maxlength=20 placeholder="Pseudo"  value="<?php if (isset($_POST['login2'])) echo htmlentities(trim($_POST['login2'])); ?>"></td>
					</tr>
					<tr>
						<td><input type="text" name ="email" required  id="email" maxlength=50
							placeholder="Email" class="form-control" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>"></td>
					</tr>
					<tr>
						<td><input type="text"  name = "name" required id="nickname" maxlength=20
							placeholder="Nom" class="form-control" value="<?php if (isset($_POST['name'])) echo htmlentities(trim($_POST['name'])); ?>"></td>
					</tr>
					<tr>
						<td><input type="text"  maxlength=20 name = "surname"
							required placeholder="Prénom" class="form-control" value="<?php if (isset($_POST['surname'])) echo htmlentities(trim($_POST['surname'])); ?>"></td>
					</tr>
					<tr>
						<td><input type="password" required  name = "password" class="form-control password"
							maxlength=20 placeholder="Mot de passe" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" id="signupbtn"
							class="btn btn-primary btn-lg" role="button" value="Envoyer">
						<td>
					</tr>
				</table>
			</form>
			
		</aside>
		<br/>
		<br/>
		<div>
		<div>
		<br/>
		<br/>
	

</div>
<iframe width="420" height="315" src="https://www.youtube.com/embed/bxvwJc41glo" frameborder="0" allowfullscreen></iframe>
</div>
		<div class="row" id="accueil">
			<div id="indexmsg" class="col-md-7">
			
					<h1>Regoignez-nous</h1>
				</p>
				<p>C'est gratuit!</p>
				<table class = "social" cellspacing="20">
   <caption>Connectez vous socialement!</caption>

   <tr>
       <th><a><img class = "logo" src="../public/images/Face.png" height="52" width="62"/></a></th>
       <th><a><img class = "logo" src="../public/images/twi.png" height="52" width="62"/></a></th>
       <th><a><img class = "logo" src="../public/images/goo.png" height="52" width="62"/></a></th>
   </tr>
   </table>

			</div>
			</div>

		<footer>
		</footer>
	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../public/js/jquery.min.js"></script>
	<script src="../public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

}
