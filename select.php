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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  
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
      <li class="nav-item">
        <a class="btn btn-outline-danger  " href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<?php
// if(isset($_POST['submit1'])){
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'hospital');
  $table=$_SESSION['Table'];
  $selectquery="select * from  $table ";
  $query1=mysqli_query($con,$selectquery);
?>
<section class="m-auto p-5">
  <h1 class="text-center"><?php  echo strtoupper($_SESSION['Table']);  ?> RECORDS</h1>
  <div class="container-fluid m-auto center div">
    <div class="table table-dark table-striped table-responsive">
      <table>
        <thead>
<?php
  while($field=mysqli_fetch_field($query1)){
?>
        
          <th><?php  echo $field -> name ; ?></th>
          <!-- <th>Name</th>
          <th>Age</th>
          <th>Addr</th>
          <th>Dob</th>
          <th>Gender</th>
          <th>State</th>
          <th>District</th>
          <th>Concession</th>
          <th>Referal</th>
          <th>Date of admit</th>
          <th colspan=2>Operation</th> -->
  <?php
  }
  ?>
        <th  colspan=2>Operation</th>
        </thead>
        <tbody>
          <tr>
<?php
// if(isset($_POST['submit1'])){
  while($result=mysqli_fetch_assoc($query1)){
  $f=0;
  $query=mysqli_query($con,$selectquery);
  while($field=mysqli_fetch_field($query)){
    if($f==0){
      $id=$field -> name;
      $f=1;
      $r=$id;
    }
    else{
      $r = $field -> name;
    }
  ?>
          
            <td><?php  echo $result[''.$r.''];  ?></td>
<?php
  }
?>
            <td><a href="update.php?mrdno=<?php echo $result[''.$id.'']    ?>"><i class="fa fa-edit " style="color:green"></i></a></td>
            <td><a href="update.php?mrdno=<?php echo $result[''.$id.'']    ?>"><i class="fa fa-trash" style="color:red"></i></a></td>

<?php
}
?>
            

          </tr>

        </tbody>
      </table>

      
    </div>
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