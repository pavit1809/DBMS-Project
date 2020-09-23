<?php
session_start();
if(!isset($_SESSION['USER'])){
  ?>
    <script>
      alert('Error 403 . You are logged out');
      location.replace("login.php");
    </script>
  <?php 
}
?>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" action>
  <a class="navbar-brand" href="index.php">Hospital Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" >Hi,<?php echo " {$_SESSION['USER']} ! " ; ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admission
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="adm_inpatient.php">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="adm_outpatient.php">Outpatient</a>
          
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Staff
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="#">Outpatient</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Billing
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="#">Outpatient</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consulatation
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="#">Outpatient</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ward
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="#">Outpatient</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ambulance
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="#">Outpatient</a>
          
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="about.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Consultation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ward</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ambulance</a>
      </li> -->
      <li class="nav-item">
        <a class="btn btn-outline-danger  " href="logout.php">Logout</a>
      </li>
      <!-- <li class="nav-item dropdown"> -->
        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a> -->
        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
      <!-- <li >
        <a class="nav-link" >HI, <?php echo $_SESSION['username'];?> !</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0 pl-2">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<?php  
$_SESSION['Table']="outpatient";
  ?>
<section class="fo wy-5">
	<div class="py-5">
		<h2 class="text-center">OutPatient Details</h2>
	</div>
  <div class=" w-50 m-auto">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
      <div class ="row register-form ">
        <div class="col-md-6">
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Hno</label> -->
          <input type="Hno" class="form-control" id="Hno" name="Hno" aria-describedby="Hno" placeholder="Hno" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Name</label> -->
          <input type="text" class="form-control" id="Name" name="Name" aria-describedby="Name" placeholder="Name" required > 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Age</label> -->
          <input type="Age" class="form-control" id="Age" name="Age" aria-describedby="Age" placeholder="Age" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Addr</label> -->
          <input type="Addr" class="form-control" id="Addr" name="Addr" aria-describedby="Addr" placeholder="Addr" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">DOB</label> -->
          <input type="text" class="form-control" id="DOB" name="DOB" aria-describedby="DOB" placeholder="DOB" onfocus="(this.type='date')" onblur="(this.type='text')" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Gender</label> -->
          <input type="Gender" class="form-control" id="Gender" name="Gender" aria-describedby="Gender" placeholder="Gender" required> 
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">State</label> -->
          <input type="State" class="form-control" id="State" name="State" aria-describedby="State" placeholder="State" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">District</label> -->
          <input type="District" class="form-control" id="District" name="District" aria-describedby="District" placeholder="District" required> 
        </div>
        
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Concession</label> -->
            <input type="Concession" class="form-control" id="Concession" name="Concession" aria-describedby="Concession" placeholder="Concession" required> 
          </div>
          
          <div class="form-group ">
            <!-- <label for="exampleInputEmail1">Referal</label> -->
            <input type="Referal" class="form-control" id="Referal" name="Referal" aria-describedby="Referal" placeholder="Referal" required> 
          </div>
          
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">DOA</label> -->
            <input type="text" class="form-control" id="DOA" name="DOA" aria-describedby="DOA" placeholder="DOA" onfocus="(this.type='date')" onblur="(this.type='text')" required> 
          </div>
        
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
      </div> -->
       <button type="submit" name="submit" class="btn btn-success m-auto col-md-4">Submit</button>
     </form>
     <form>
       <button type="submit" name="submit1" class="btn btn-warning m-auto"> <a class="text-white" href="select.php">Show Table</a></button>
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
<?php
// session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hospital');
if(isset($_POST['submit'])){
  $e2=$_POST['Hno'];
  $e3=$_POST['Name'];
  $e4=$_POST['Age'];
  $e5=$_POST['Addr'];
  $e6=$_POST['DOB'];
  $e7=$_POST['Gender'];
  $e8=$_POST['State'];
  $e9=$_POST['District'];
  $e10=$_POST['Concession'];
  $e11=$_POST['Referal'];
  $e12=$_POST['DOA'];
  $insertquery="insert into outpatient ( Hno, Name, Age, Addr, Dob, Gender, State, District, Concession, Referal, Date) values ('$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10','$e11','$e12')";
  $query=mysqli_query($con,$insertquery);
  if ($query) {
    ?>
   <script>
     alert('Inserted successful');
   </script>
   <?php
  }
  else{
    ?>
   <script>
     alert('Not inserted');
   </script>
   <?php
  }
}
?>