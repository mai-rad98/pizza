<!DOCTYPE html>

<html>

	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prime Pizza | Register</title>
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
					<a class="navbar-brand" href="index.php"><strong>PrimePizza</strong></a>
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
			
			<!-- REGISTER BOX -->
			<div class="container-fluid col-md-4 col-md-offset-4 animated slideInDown">
				<div class="panel panel-dark dark-text padding">
					<div class="panel-body">
						<div class="col-md-12">
							<h1>Register</h1>
							<hr/>
						</div>						
						<form action="singup.php" method="post" role="form">

							<div class="form-group col-md-6">
								<label for="name">NAME:</label>
								<input type="text" class="form-control visible" name="name" id="name" required>
							</div><div class="form-group col-md-6">
								<label for="surname">SURNAME:</label>
								<input type="text" class="form-control visible" name="surname" id="surname" required>
							</div>
							<div class="form-group col-md-6">
								<label for="email">EMAIL:</label>
								<input type="email" class="form-control visible" name="email" id="email" required>
							</div>
							<div class="form-group col-md-6">
								<label for="mobile">MOBILE NO:</label>
								<input type="number" class="form-control visible" max="79999999" placeholder="7XXXXXXX" name="mobile" id="mobile" required>
							</div>							
							<div class="form-group">
								<label for="user_id">ADDRESS:</label>
								<input type="text" class="form-control visible" name="address" id="address">
							</div>
							<div class="form-group">
								<label for="location">LOCATION:</label>
								<textarea class="form-control" rows="3" name="location" id="location"></textarea>
							</div>
							<div class="form-group">
								<label for="password">PASSWORD:</label>
								<input type="password" class="form-control" name="password" id="password" required>
							</div>
							<br/>
							<div class="form-group">
								<input type="submit" value="REGISTER" class="btn btn-info btn-block" name="register" id="register">
							</div>
							<div class="form-group">
							<a href="php/menu-items.php">CONTINUE AS GUEST</a>
							</div>
						</form>

						<br/>
					</div>
					</a>
				</div>
			</div>
			<!-- END REGISTER BOX -->
		</center>		
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		
		<!-- Bootsrap -->
		<script src="js/bootstrap.min.js"></script>
		
	</body>
	
</html>
