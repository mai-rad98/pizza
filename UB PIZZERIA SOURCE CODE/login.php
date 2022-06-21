<!DOCTYPE html>
<html>

	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UB PIZZARIA | Login</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/styles.css">
		
	</head>
	
	<body id="ContentBody" class="animated fadeIn">
		
		<!-- NAV -->
		<nav class="navbar navbar-inverse navbar-fixed-top animated slideInDown" data-spy="affix" data-offset-top="97">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="index.php"><strong>UB PIZZARIA</strong></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
					</ul>
				</div>
			</div>
		</nav> 
		<!-- END NAV -->
		
		<center>
			
			<div class="col-md-10 col-md-offset-1">
				<br>
				<br>
				<br>
				<img src="images/logo.png" class="img-responsive"/>
				<br/>
			</div>
			
			<!-- LOGIN BOX -->
			<div class="container-fluid col-md-4 col-md-offset-4 animated slideInDown">
				<div class="panel panel-dark dark-text padding">
					<div class="panel-body">
						<div class="col-md-12">
							<h1>Login</h1>
							<hr/>
						</div>						
						<form action="signin.php" method="post" role="form">
							<div class="form-group">
								<label for="user_id">EMAIL:</label>
								<input type="text" class="form-control visible" name="email" id="email">
							</div>
							<div class="form-group">
								<label for="password">PASSWORD:</label>
								<input type="password" class="form-control" name="password" id="password">
							</div>
							<br/>
							<div class="form-group">
								<input type="submit" value="LOGIN" class="btn btn-success btn-block" name="login" id="login">
							</div>
						</form>
						<br/>
						<div class="col-md-6">
							<h5>No account? Click Register to sign up now</h5>
						</div>
						<div class="col-md-6">
							<a class="btn btn-default btn-block" href="register.php">Register</a>
						</div>
						<div class="col-md-6">
							<a href="php/menu-items.php">CONTINUE AS GUEST</a>
							</div>						
					</div>
					</a>
				</div>
			</div>
			<!-- END LOGIN BOX -->
		</center>		
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		
		<!-- Bootsrap -->
		<script src="js/bootstrap.min.js"></script>
		
	</body>
	
</html>
