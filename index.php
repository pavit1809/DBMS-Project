<!DOCTYPE html>
<html>
<head>
	<title>
	DBMS	
	</title>
	<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Hospital Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="about.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Consultation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ward details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ambulance Service</a>
      </li> -->

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
	 <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\med1.jpg" class="d-block w-100" alt="...">
      <div class="headerset carousel-caption text-dark d-none d-md-block">
      		<h2>Welcome To Our Site!</h2>
			<h3>Click here to login. </h3>
			<form action="login.php" method="post">
				<button class="btn btn-warning text-dark btn-lg" >LOGIN</button>
			</form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\med2.jpg" class="d-block w-100" alt="...">
      <div class="headerset carousel-caption text-dark d-none d-md-block">
       		<h2>Welcome To Our Site!</h2>
			<h3>Click here to login. </h3>
			<form action="login.php" method="post">
				<button class="btn btn-warning text-dark btn-lg" >LOGIN</button>
			</form>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images\med3.jpg" class="d-block w-100" alt="...">
      <div class="headerset carousel-caption nav-link text-dark d-none d-md-block">
       		<h2>Welcome To Our Site!</h2>
			<h3 >Click here to login. </h3>
			<form action="login.php" method="post">
				<button class="btn btn-warning text-dark btn-lg" >LOGIN</button>
			</form>
      </div>
    </div>
  	<div class="carousel-item">
      <img src="images\med4.jpg" class="d-block w-100" alt="...">
      <div class="headerset carousel-caption text-dark d-none d-md-block">
        	<h2>Welcome To Our Site!</h2>
			<h3>Click here to login. </h3>
			<form action="login.php" method="post">
				<button class="btn btn-warning text-dark btn-lg" >LOGIN</button>
			</form>
      </div>
    </div>
    <!-- <div class="container text-center text-white headerset" >
			<h2>Welcome To Our Site!</h2>
			<h3>Click here to login. </h3>
			<button class="btn btn-warning text-white btn-lg" >LOGIN</button>
		</div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	  	
</div>

<section class ="team">
	<div class="container text-center">
		<h1>The Developers</h1>
		<p>Those who made this project possible.</p>
		<div class="row teamsetting">
			<div class="col-lg-3 col-md-3 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="images/Denim.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>Anuraj Agarwal</h4>
						<p class="figure-caption"></p>
					</figcaption>
					
				</figure>

			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="images/Denim.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>Pavitra Goyal</h4>
						<p class="figure-caption"></p>
					</figcaption>					
				</figure>				
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="images/Denim.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4 style="white-space:nowrap;">Rohith Harikrishnan</h4>
						<p class="figure-caption"></p>
					</figcaption>					
				</figure>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-10 col-12 d-block m-auto">
				<figure class="figure">
					<img src="images/Denim.jpg" class="figure-img img-fluid rounded-circle" height="250px" width="250px">
					<figcaption>
						<h4>Shatayu Mittal</h4>
						<p class="figure-caption"></p>
					</figcaption>					
				</figure>			
			</div>
		</div>
		
	</div>
	
</section>
<!-- <section class=""wy-5>
	<div class="py-5">
		<h2 class="text-center">Login</h2>
	</div>
	<div class=" w-50 m-auto">
		<form action="login_info.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Username</label>
		    <input type="user" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username"> 
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
		  </div>
		   <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section> -->
<footer>
	<h6 class="p-3 bg-dark text-white text-center">@the_group</h6>
</footer>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>