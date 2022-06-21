<!DOCTYPE html>
<html>

	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>InvenTrack: Home</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/styles.css">

	</head>
	
	<body id="home-body" class="animated fadeIn light-grey">
		
		<!-- NAV -->
		<nav class="navbar navbar-inverse navbar-fixed-top animated slideInDown" data-spy="affix" data-offset-top="97">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand"><strong>InvenTrack</strong></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="home.php">Home</a></li>
						<li><a href="inventory.php"> Inventory</a></li>
						<li><a href="add-item.php"> Add Item</a></li>
					</ul>
				</div>
			</div>
		</nav> 
		<!-- END NAV -->
		
		<!-- CONTENT -->
		<div id="content" class="col-md-12">
			
			<!-- TOP TEXT -->
			<div class="col-md-12">
				<br/>
				<h1 class="page-header "> Home</h1>
			</div>
			<!-- END TOP TEXT-->
			
			<!-- STATUS BAR -->
			<div class="col-md-12">
				<a class="btn btn-danger pull-right" href="logout.php">Logout</a>
				<br/><br/>
			</div>
			<!-- END STATUS BAR -->
			
			<!-- CATEGORIES -->
			<div class="col-md-12 text-center">
				<br>
				<!-- VIEW INENTORY -->
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading text-center ">
							<h3>VIEW INVENTORY</h3>
						</div>
						<a href="inventory.php" class="category-link">
							<div class="panel-body">
								<img src="images/home-cart.png" class="img-responsive"/>
							</div>
						</a>
					</div>
				</div>
				<!-- END VIEW INENTORY -->
				
				<!-- ADD ITEM -->
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading text-center">
							<h3>ADD ITEM</h3>
						</div>
						<a href="add-item.php" class="category-link">
							<div class="panel-body">
								<img src="images/home-add.png" class="img-responsive"/>
							</div>
						</a>
					</div>
				</div>
				<!-- END ADD ITEM -->				
				
			</div>
			<!-- END CATEGORIES -->
		
		</div>
		<!-- END CONTENT -->
	
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootsrap -->
		<script src="js/bootstrap.min.js"></script>
	
	</body>
	
</html>