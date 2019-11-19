<?php session_start(); ?>
<?php include "dbh.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Author and Description -->
	<meta name="author" content="Mihaela McReynolds & Annette Emily Farah">
	<meta name="description" content="What To Read - group project for Internet Software Development class at PSTCC.">

	<!-- Bootstrap Libraries -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS files -->
	<style type="text/css"> @import url(wtr.css)</style>

	<title>What To Read | About</title>
</head>

<!-- ---------------------------------------------------------------------
Webpage Body
-------------------------------------------------------------------- -->
<body>
	<div class="container-fluid" style="padding: 0; height: 100%">

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
								<li class="nav-item" >
									<a class="nav-link" href="search.php">Search</a>
								</li>
								<li class="nav-item" >
									<a class="nav-link" href="about.php">About</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>

				<!-- Top Right corner -->
				<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-xs-5" style="padding: 0;">
					<div class="login-corner">
						<p style="padding: 25px; margin-top: 30px;">
							Hello, Johanna!</br>
						</p>
						<!-- Navigation buttons -->
						<button type="submit" class="btn btn-warning">My Bookshelf
						</button>
						<button class="btn btn-warning" onclick="window.location.href='profile.php';" style="margin-left:20px;">My Profile</button>
						<!-- Search form -->
						<div class="active-purple-3 active-purple-4 mb-4">
							<input class="form-control" type="text" placeholder="Search" aria-label="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About Container -->
	<div class="floatsocialmedia">
		<a href="https://www.instagram.com" class="fa fa-instagram"></a>
		<a href="https://www.twitter.com" class="fa fa-twitter"></a>
		<a href="https://www.facebook.com" class="fa fa-facebook"></a>
		<a href="https://www.google.com" class="fa fa-google"></a>
	</div>

	<div class="abouttext">
		<p><strong><em>What To Read</em></strong> is a website for book lovers where they can create an account to get individualized book recommendations, log the books they have read, keep track of how much they have read, and play book-related games.</p>
		<p>The website bases its recommendations on a short, visual quiz, and it also presents a selection based on genre, mood, author, setting, and main character.</p>
		<p>Go <a href="index.php"><em>Home</em></a> to begin the quiz, or <a href="browse.php"><em>Browse</em></a> for something you might like.</p>
	</div>
</body>
</html>

	<!-- Bottom of the page -->

	<?php require "footer.php" ?>
