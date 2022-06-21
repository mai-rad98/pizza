<!DOCTYPE html>

<?php
/*	
	include 'db_connection.php';
	$conn = OpenCon();
    $sql = "INSERT INTO users (id, passw) VALUES ('ssdsa', 'sddd')";
    $sql = "INSERT INTO ss (id) VALUES ('21232')";

	if($conn->query($sql) == TRUE)
	{
		echo "New record created successfully";
	}else{
		echo "Error: ".$sql."<br>".$conn->error;
	}

	CloseCon($conn);


	/*session_start();
	require('connect.php');
		
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']))
	{		
		$user_id=mysqli_real_escape_string($link, $_POST['user_id']);
		$password=mysqli_real_escape_string($link, $_POST['password']);
		
		$query="SELECT * FROM user WHERE id='$user_id' AND password='$password'";
		$result=mysqli_query($link, $query);
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		
		if($count==1)
		{
			$_SESSION['user_id']=$id;
			header("location: home.php");
		}
		else
		{
			$error="Lastname and/or Password is invalid";
			echo "<script type=\"text/javascript\">
				window.alert('$error');
				</script>";
		}		
	}

	
	if($mysqli->connect_error){die('Error'.('.$mysqli->connect_errno.')'.$mysqli->connect_error');
	}else{
		echo "connection successful";
	}
	*/
	
?>

<html>

	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UB PIZZARIA | Top-Notch Pizza for All</title>
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
					<a class="btn btn-default pull-right signup-btn" href="register.php"><span class="fa fa-pencil"></span> SIGN UP</a>
					<a class="btn btn-default pull-right login-btn" href="login.php"><span class="fa fa-sign-in"></span> LOGIN</a>
				</div>
			</div>
		</nav> 
		<!-- END NAV -->
		
		<!-- CONTENT -->
		<div id="content" class="col-md-12">
			<br>
			<br>
			<br>
			<!-- CAROUSEL -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				
				<!-- INDICATORS -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- END INDICATORS -->

				<!-- ITEM WRAPPER -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/carousel1.png">
					</div>

					<div class="item">
						<img src="images/carousel2.png">
					</div>

					<div class="item">
						<img src="images/carousel3.png">
					</div>
					
					<div class="item">
						<img src="images/carousel4.png">
					</div>
				</div>
				<!-- END WRAPPER -->

				<!-- LEFT AND RIGHT -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
				<!-- ENDLEFT AND RIGHT -->
				
			</div>
			<!-- END CAROUSEL -->
			
			<!-- SECTION1  -->
			<div class="col-md-10 col-md-offset-1 text-center">
				<br>
				<!-- PROMOTIONS -->
				<div class="col-md-4 col-sm-4">
					<div class="panel panel-brown">
						<div class="panel-heading text-center brown">
							<h2>PRIME PROMOTIONS</h2>
						</div>
						<a href="inventory.php" class="category-link">
							<div class="panel-body">
								<center><img src="images/pz-image1.png" class="img-responsive"/></center>
							</div>
						</a>
					</div>
				</div>
				<!-- END PROMOTIONS -->
				
				<!-- MANAGERS' SPECIALS -->
				<div class="col-md-4">
					<div class="panel panel-red">
						<div class="panel-heading text-center red">
							<h2>MANAGERS'S SPECIALS</h2>
						</div>
						<a href="add-item.php" class="category-link">
							<div class="panel-body">
								<center><img src="images/pz-image2.png" class="img-responsive"/></center>
							</div>
						</a>
					</div>
				</div>
				<!-- END MANAGERS' SPECIALS -->	

				<!-- POPULAR MENU -->
				<div class="col-md-4">
					<div class="panel panel-orange">
						<div class="panel-heading text-center orange">
							<h2>POPULAR MENU</h2>
						</div>
						<a href="add-item.php" class="category-link">
							<div class="panel-body">
								<center><img src="images/pz-image3.png" class="img-responsive"/></center>
							</div>
						</a>
					</div>
				</div>
				<!-- END POPULAR MENU -->				
				
			</div>
			<!-- END SECTION 1 -->
			
			<!-- SECTION 2-->
			<div class="col-md-10 col-md-offset-1">
				<br>
				<!-- MENU -->
				<div class="col-md-8">
					<div class="panel panel-dark">
						<div class="panel-heading text-center dark white-text">
							<h2>WHAT DO YOU CRAVE TODAY?</h2>
						</div>
						<div class="panel-body dark-text">
							<br>
							<table class="table table-striped table-bordered table-hover" id="menu-table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Description</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Classic Margarita</td>
										<td>Margartita, Chesse</td>
										<td>15</td>
										<td>35</td>
										<td>55</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Pepperoni</td>
										<td>Pepperoni, Chesse</td>
										<td>15</td>
										<td>35</td>
										<td>55</td>
									</tr>
									<tr>
										<td>3</td>
										<td>BBQ Chicken</td>
										<td>BBQ Chicken, Sausage, Green Pepper, Red Pepper, Onion, Cheese</td>
										<td>20</td>
										<td>40</td>
										<td>60</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Meat Lovers</td>
										<td>Juicy Beef, Chicken, Sausage, Pepperoni, Cheese</td>
										<td>20</td>
										<td>40</td>
										<td>60</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Philly Steak & Cheese</td>
										<td>Sliced Steak, Green Pepper, Red Onion, Mushroom, American Cheese</td>
										<td>25</td>
										<td>45</td>
										<td>65</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Prime Chicken & Mushroom</td>
										<td>Chicken, White and Brown Mushroom, Green Pepper, Onion, Cheese</td>
										<td>25</td>
										<td>45</td>
										<td>65</td>
									</tr>
									<tr>
										<td>7</td>
										<td>Veggie Lovers</td>
										<td>Green pepper, Yellow Pepper, Red Onion, Tomato, Mushroom, Black Olive</td>
										<td>22</td>
										<td>42</td>
										<td>62</td>
									</tr>
								</tbody>
                            </table>
						</div>
					</div>
				</div>
				<!-- END MENU -->

				<!-- DELIVERY IMAGE -->
				<div class="col-md-4">
				<div class="panel-heading text-center dark white-text">
							<h2>FIND US</h2>
						</div>
				<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=400&amp;height=600&amp;hl=en&amp;q=Gaborone, airport junction shopping mall&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin</a></div><style>.mapouter{position:relative;text-align:right;width:400px;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:400px;height:600px;}.gmap_iframe {width:400px!important;height:600px!important;}</style></div>				<!-- END DELIVERY IMAGE -->				
				
			</div>
			<!-- END SECTION 2 -->
			
			<!-- BUTTON SECTION -->
			<div class="col-md-10 col-md-offset-1">
				
				<div class="col-md-12 white-text">
					<h1>GET STARTED</h1>
				</div>
				
				<div class="col-md-4">
					<a class="btn btn-lg btn-block brown white-text" href="login.php">LOGIN</a>
				</div>
				
				<div class="col-md-4">
					<a class="btn btn-lg btn-block red white-text" href="register.php">REGISTER</a>
				</div>				
				
			</div>
			<!-- BUTTON SECTION END -->
			
			<!-- BOTTOM SECTION -->
			<div class="col-md-10 col-md-offset-1 ">
				<br>
				
				<div class="col-md-4">
					<center><img src="images/logo.png" class="img-responsive"/></center>
				</div>
				
				<div class="col-md-4 white-text">
					<h2 class="page-header">
						<span class="fa fa-chevron-right"></span>
						GET IN TOUCH
					</h2>
					<h4>Airport Junction: +267 345 6789<h4>
					<h4>Game City: +267 345 6790<h4>
					<h4>Riverwalk: +267 345 6791<h4>
					<h4>Main Mall: +267 345 6792<h4>
				</div>
				
				<div class="col-md-4 white-text">
					<h2 class="page-header">
						<span class="fa fa-chevron-right"></span>
						FIND US
					</h2>
					<h4>Airport Junction: Shop 15, Ajacent Bank ABC<h4>
					<h4>Game City: 2nd Floor, Shop 32, Beside Nandos <h4>
					<h4>Riverwalk: Shop 44, Beside Simply Asia<h4>
					<h4>Main Mall: Shop 7, Behind KFC<h4>
				</div>				
				
			</div>
			<!-- BOTTOM SECTION END -->
			
			<!-- BOTTOM SECTION -->
			<div class="col-md-10 col-md-offset-1">
				<br>
				
				<div class="col-md-12 text-center dark white-text">
					<h5>© UB PIZZARIA Ltd | 2021</h5>
				</div>			
				
			</div>
			<!-- BOTTOM SECTION END -->
		
		</div>
		<!-- END CONTENT -->
		
		<!-- JQUERY -->
		<script src="js/jquery.js"></script>
		
		<!-- BOOTSTRAP -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- DATA TABLE SCRIPTS -->
		<script src="assets/dataTables/jquery.dataTables.js"></script>
		<script src="assets/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#menu-table').dataTable();
            });
		</script>
		
	</body>
	
</html>
