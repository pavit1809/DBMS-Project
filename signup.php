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
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class=" button btn btn-outline-success my-2 my-sm-0" type="submit"><span>Search</span>
        <span>Search</span></button>
    </form>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Signup</h1>
    <p class="lead">Signup by entering your username and password </p>
  </div>
</div>
<section class="wy-5">
	<div class="py-5">
		<h2 class="text-center">Signup</h2>
	</div>
	<div class=" w-50 m-auto">
		<form action="signup_info.php" method="post">
		  <div class="form-group">
		    <label for="exampleInputUser">Username</label>
		    <input type="user" class="form-control" id="exampleInputUser" name="username" aria-describedby="userHelp" placeholder="Username"> 
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
		  </div>
		   <button name ="submit" type="submit" class=" button btn btn-success"><span>Submit</span>
        <span>Submit</span></button>
		</form>
	</div>
</section>
<footer class="pt-5">
  <h6 class="p-3 bg-dark text-white text-center">@the_group</h6>
</footer>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>























