<?php session_start(); ?>
<?php include "dbh.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Author and Description -->
	<meta name="author" content="Mihaela McReynolds & Annette Emily Farah">
	<meta name="description" content="What To Read - group project for Internet Software Development class at PSTCC.">

	<!-- added by Mihaela -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://kit.fontawesome.com/64d06c75d0.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="prefix-free.js" type="text/javascript"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


	<!-- Bootstrap Libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- CSS files -->
	<link href="wtr.css" rel="stylesheet">

	<title>What To Read | Search</title>
</head>

<!----------------------------------------------------------------------
Webpage Body
---------------------------------------------------------------------->
<body>
	<div class="container-fluid" style="padding: 0; height: 100%">
		<!-- TOP OF THE PAGE -->
		<!-- Header -->
		<div class="page-header" style="display: flex; padding: 0; margin: 0;">
			<div class="row" style="flex: 1; vertical-align: top; padding: 0 !important;">
				<!-- Left columns -->
				<div class="col-xl-8 col-lg-8 col-md-7 col-sm-7 col-xs-7">
					<!-- Logo -->
					<img class="img-responsive" src="wtr.png" alt="Logo What To Read" style="width:100%;">
					<!-- Navigation bar -->
					<nav class="navbar navbar-expand-md" style="background: white;">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
							<ul class="nav navbar-nav" style="display: flex; float: none; display: inline-block; width: 100%; background-color: white; color: #324519;">
								<li class="nav-item" >
									<a class="nav-link" href="index.php">Home</a>
								</li>
								<li class="nav-item" >
									<a class="nav-link" href="browse.php">Browse</a>
								</li>
								<li class="nav-item" >
									<a class="nav-link" href="contact.php">Contact</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="search.php">Search</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">About</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- Top Right corner -->
				<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-xs-5" id = "rightCorner" style="background-color: white; padding: 2.3%;">
					<!--- LOG IN FORM  ------------------------------------------------------------>
					<?php
					if(!isset($_SESSION['user_id']))
					print '
					<form action = "login.php" method = "post">
					<div class="form-group">
					<label for="exampleInputEmail1" style="color: 	333300;">Email address
					</label>
					<input type="email" class="form-control" name="logemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email@email.com">
					<small id="emailHelp" class="form-text text-muted" style="color: blue;">We will never share your email with anyone else.
					</small>
					</div>
					<div class="form-group">
					<label for="exampleInputPassword1" style="color: 	333300;">Password
					</label>
					<input type="password" class="form-control" name="logpwd" id="exampleInputPassword1" placeholder="Password...">
					</div>
					<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1" style="color: 	333300;">Remember me
					</label>
					</div>
					<div class="container" style="margin: 0;">
					<div class="input-group">
					<div class="row" style="flex: 1; padding-left: 20px; padding-right: 20px;">
					<!-- Log in button -->
					<button type="submit" class="btn btn-warning" name = "login-submit">Log in
					</button>
					<!-- Register button -->
					<a class="btn btn-warning" href ="register.php" style="margin-left:20px;">Register
					</a>
					</form>';
					else{
						print '<div class="login-corner"><p style="padding: 25px; margin-top: 30px;">
						Hello, '.$_SESSION["user_id"].'. Welcome back!
						<br></p><a class="btn btn-warning" href = "bookshelf.php">My Bookshelf</a><a class="btn btn-warning" href="profile.php";" style="margin-left:20px;">My Profile</a><a class="btn btn-warning" href = "logout.php" style="margin-left:20px;">Log out</a>';
					}
					?>
					<!-- Search form -->
					<!-- <div class="active-purple-3 active-purple-4 mb-4">
					<input class="form-control" type="text" placeholder="Search" aria-label="Search">
				</div> -->
			</div>
		</div>
	</div>
</div>
</div>
</div>
</header>
</body>
</html>
<main>
	<!-- Page body -->
	<!-- Carousel with 4 items at a time -->
	<div class="container text-center my-3">

		<!-- Search Container -->
		<div style="margin: 50px 80px;">
			<div class="active-purple-3 active-purple-4 mb-4">
				<script async src="https://cse.google.com/cse.js?cx=000583118236850170401:xswfmm2hyfv"></script>
				<div class="gcse-search"></div>
			</div>

			<h2 class="text-center" style="margin: 80px 0 90px 0;">Search Results for More Reads</h2>
			<div class="card-deck flex-row no-wrap">
				<!--<div class="floatleft"> -->
					<div class="card">
						<span class="box">
							<img src="images/hobbit.jpg" alt="The Hobbit Cover Image" class="img-card-img-top mx-auto" style="width: 140px;"></span>
							<div class = "card-body">
								<div class="row">
									<button type="submit" class="btn btn-warning mx-auto">Add to Book History</button>
									<button type="submit" class="btn btn-warning mx-auto" style="margin:20px 0 50px 0; width: 140px;">Add to Book List</button>
								</div>
							</div>
						</div>
						<div class="card">
							<span class="box">
								<img src="images/hp1.jpg" alt="Harry Potter and the Sorcerer's Stone Cover Image" class="img-card-img-top mx-auto" style="width: 140px;"></span>
								<div class = "card-body">
									<div class="row">
										<button type="submit" class="btn btn-warning mx-auto">Add to Book History</button>
										<button type="submit" class="btn btn-warning mx-auto" style="margin:20px 0 50px 0; width: 140px;">Add to Book List</button>
									</div>
								</div>
							</div>
							<div class="card">
								<span class="box">
									<img src="images/allegiant.jpg" alt="Allegiant Cover Image" class="img-card-img-top mx-auto" style="width: 140px;"></span>
									<div class = "card-body">
										<div class="row">
											<div class="row">
												<button type="submit" class="btn btn-warning mx-auto">Add to Book History</button>
												<button type="submit" class="btn btn-warning mx-auto" style="margin:20px 0 50px 0; width: 140px;">Add to Book List</button>
											</div>
										</div>
									</div>
								</div>

							<!--</div> -->
						</div>

						<!-- <div class="floatleft">
						<span class="box"><img src="images/hp1.jpg" alt="Harry Potter and the Sorcerer's Stone Cover Image" class="img-responsive mx-auto" style="width: 140px;"></span>
					</div>

					<div class="floatleft">
					<span class="box"><img src="images/allegiant.jpg" alt="Allegiant Cover Image" class="img-responsive mx-auto" style="width: 140px;"></span>
				</div>
			</div>	<br>

			<div class="row">
			<div class="btnAdd">
			<button type="submit" class="btn btn-warning">Add to Book History</button>
			<button type="submit" class="btn btn-warning" style="margin:20px 0 50px 0; width: 140px;">Add to Book List</button>
		</div>
		<div class="btnAdd">
		<button type="submit" class="btn btn-warning">Add to Book History</button>
		<button type="submit" class="btn btn-warning" style="margin:20px 0 50px 0; width: 140px;">Add to Book List</button>
	</div>
	<div class="btnAdd">
	<button type="submit" class="btn btn-warning">Add to Book History</button>
	<button type="submit" class="btn btn-warning" style="margin:20px 0 50px 0; width: 140px;">Add to Book List</button>
</div>
</div> -->

</div>


<!-- Book of the Month -->
<div class="container-fluid">
	<div class="flex-row">
		<div class="card img-fluid mx-auto" style="width: 18rem; text-align: center; padding: 20px; border: none; margin-top: 30px;">

			<img src="images/homegoing.jpg" class="img-responsive mx-auto" style="max-width: 200px; margin-top: 30px;">
			<div class="h4 mx-auto"><br>Book of the month
			</div>
		</div>
		<br>
		<div class="col-xl-8 mx-auto" style="border-top: 1px solid #f0d38e; margin-top: 20px;">
			<br><h6> Winner of the PEN/ Hemingway Award</h6><br>
			<p class="text-center"><strong>
				Homegoing</strong> follows the parallel paths of these sisters and their descendants through eight generations:
				from the Gold Coast to the plantations of Mississippi, from the American Civil War to Jazz Age Harlem.
				Yaa Gyasi’s extraordinary novel illuminates slavery’s troubled legacy both for those who were taken and those
				who stayed—and shows how the memory of captivity has been inscribed on the soul of our nation.
			</p>
		</div>
	</div>
</div>
</body>
</html>

<!-- Bottom of the page -->
<?php include "footer.php" ?>
