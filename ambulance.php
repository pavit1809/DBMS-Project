<?php
if(!isset($_SESSION)) 
    { 
        session_start();  

    } 
if(!isset($_SESSION['USER'])){
  ?>
    <script>
      alert('Error 403 . You are logged out');
      location.replace("login.php");
    </script>
  <?php 

}

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hospital');
?> 
<!DOCTYPE html>
<html>
<head>
	<title>
	DBMS	
	</title>
	<meta charset="utf-8">
  <meta Designation="viewport" content="width=device-width, initial-scale=1">
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

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admission
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="adm_inpatient.php">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="adm_outpatient.php">Outpatient</a>
          
        </div>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Staff
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="staff.php">Staff Details</a>
          <a class="dropdown-item text-white" href="attendance.php">Show Attendance</a>
          <a class="dropdown-item text-white" href="onduty.php">Add Onduty</a>
          <a class="dropdown-item text-white" href="payroll.php">Payroll</a>
          
        </div>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Billing
        </a>
        <div class="dropdown-menu bg-dark rounded-border" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="inpatient_bill.php">Inpatient</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-white" href="outpatient_bill.php">Outpatient</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consultation.php">Consultation</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="ward.php">Ward</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="ambulance.php">Ambulance</a>
      </li>
      <li class="nav-item pl-3 pr-3">
        <a class="btn btn-outline-danger  " href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<?php  
$_SESSION['Table']="ambulance";
$_SESSION['Update']="ambulance";
$_SESSION['Attr']="Amno";
  ?>
<section class="fo wy-5">
  <div class="py-5">
    <h2 class="text-center">Ambulance Details</h2>
  </div>
  <div class=" w-50 m-auto">
    <form action="" method="post">
      <div class ="row register-form ">
<?php  
if(isset($_GET['Amno'])){ 
$id=$_GET['Amno'];
// echo "id: $id"
$selectquery="select * from ambulance where Amno=$id";
$query1=mysqli_query($con,$selectquery);
$result1=mysqli_fetch_assoc($query1);
// if(isset($_POST['update1'])){
  
// }
}
  ?>

        <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" id="Amno" name="Amno" aria-describedby="Amno" placeholder="Ambulance no"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Amno']; }?>" required > 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Type</label> -->
          <input type="Type" class="form-control" id="Type" name="Type" aria-describedby="Type" placeholder="Type of Car"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Type']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Designation</label> -->
          <input type="Designation" class="form-control" id="Designation" name="Designation" aria-describedby="Designation" placeholder="Designation"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Designation']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1"> Stime</label> -->
          <input type="Stime" class="form-control" id="Stime" name="Stime" aria-describedby="Stime" placeholder="Start time"   onfocus="(this.type='time')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Amno'])){ echo $result1['Stime']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Rtime</label> -->
          <input type="text" class="form-control" id="Rtime" name="Rtime" aria-describedby="Rtime" placeholder="Return time"   onfocus="(this.type='time')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Amno'])){ echo $result1['Rtime']; }?>" required> 
        </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
          <!-- <label for="exampleInputEmail1">Pdexp</label> -->
          <input type="Pdexp" class="form-control" id="Pdexp" name="Pdexp" aria-describedby="Pdexp" placeholder="Petrol and Fuel Expense"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Pdexp']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Numentry</label> -->
          <input type="Numentry" class="form-control" id="Numentry" name="Numentry" aria-describedby="Numentry" placeholder="Number of Entries"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Numentry']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Drivername</label> -->
          <input type="text" class="form-control" id="Drivername" name="Drivername" aria-describedby="Drivername" placeholder="Driver Name"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Drivername']; }?>" required> 
        </div>
  
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Driverno</label> -->
          <input type="text" class="form-control" id="Driverno" name="Driverno" aria-describedby="Driverno" placeholder="Driver no"  value="<?php  if(isset($_GET['Amno'])){ echo $result1['Driverno']; }?>" required> 
        </div>
      </div>
     <?php  if(isset($_GET['Amno'])){  ?>
       <button type="submit" name="update1" class="btn btn-primary m-auto col-md-4">Update</a></button>
    </form> 
      <?php }   else{ ?>
       <button type="submit" name="submit1" class="btn btn-success m-auto col-md-4">Submit</button>
    </form>
    <?php  } ?>
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
if(!isset($_GET['Amno'])){
if(isset($_POST['submit1'])){
  echo "hey1";
  $e1=$_POST['Amno'];
  $e2=$_POST['Type'];
  $e3=$_POST['Designation'];
  $e5=$_POST['Stime'];
  $e6=$_POST['Rtime'];
  $e7=$_POST['Pdexp'];
  $e8=$_POST['Numentry'];
  $e9=$_POST['Drivername'];
  $e10=$_POST['Driverno'];
  $insertquery="insert into ambulance(Amno, Type, Designation,  Stime, Rtime, Pdexp, Numentry, Drivername, Driverno) values ('$e1','$e2','$e3','$e5','$e6','$e7','$e8','$e9','$e10')";
  // $insertquery1="insert into inpatient (Amno, Type, Designation,  Stime, Rtime, Rtime, Numentry, Drivername, Driverno, Amount, Pdexp, Rtime of admit) values ('1','1','1','1','1','1','1','1','1','1','1','1')";
  $query=mysqli_query($con,$insertquery);
  // $query1=mysqli_query($con,$insertquery1);
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
     alert('Error:pk present. Insertion not possible.');
   </script>
   <?php
  }
}
}
else{
  if(isset($_POST['update1'])){
  // echo "hey";
  $e1=$_GET['Amno'];
  // echo"$e1";
  $e2=$_POST['Type'];
  $e3=$_POST['Designation'];
  $e5=$_POST['Stime'];
  $e6=$_POST['Rtime'];
  $e7=$_POST['Pdexp'];
  $e8=$_POST['Numentry'];
  $e9=$_POST['Drivername'];
  $e10=$_POST['Driverno'];
$updatequery="UPDATE ambulance SET Amno='$e1',Type='$e2',Designation='$e3', Stime='$e5',Rtime='$e6',Pdexp='$e7',Numentry='$e8',Drivername='$e9',Driverno='$e10' where Amno=$e1";
$query=mysqli_query($con,$updatequery);
if ($query) {
    ?>
   <script>
     alert('Updated successful');
     location.replace("select.php")
   </script>
   <?php
  }
  else{
    ?>
   <script>
     alert('Error 100.Update not possible.');
   </script>
   <?php
  }
}
}
?>