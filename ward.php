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

     <li class="nav-item dropdown">
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
      <li class="nav-item active">
        <a class="nav-link" href="ward.php">Ward</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="ambulance.php">Ambulance</a>
      </li>
      <li class="nav-item pl-3 pr-3">
        <a class="btn btn-outline-danger  " href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<?php  
$_SESSION['Table']="ward";
$_SESSION['Update']="ward";

  ?>
<section class="fo wy-5">
  <div class="py-5">
    <h2 class="text-center">Ward Details</h2>
  </div>
  <div class=" w-50 m-auto">
    <form action="" method="post">
      <div class ="row register-form ">
<?php  
if(isset($_GET['Mrdno'])){ 
$id=$_GET['Mrdno'];
// echo "id: $id"
$selectquery="select * from ward where Mrdno=$id";
$query1=mysqli_query($con,$selectquery);
$result1=mysqli_fetch_assoc($query1);
// if(isset($_POST['update1'])){
  
// }
}
  ?>

        <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" id="Mrdno" name="Mrdno" aria-describedby="Mrdno" placeholder="Mrdno"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Mrdno']; }?>" required > 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Hno</label> -->
          <input type="Hno" class="form-control" id="Hno" name="Hno" aria-describedby="Hno" placeholder="Hospital no"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Hno']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Name</label> -->
          <input type="Name" class="form-control" id="Name" name="Name" aria-describedby="Name" placeholder="Name"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Name']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Department</label> -->
          <input type="Department" class="form-control" id="Department" name="Department" aria-describedby="Department" placeholder="Department"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Department']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Wardno</label> -->
          <input type="text" class="form-control" id="Wardno" name="Wardno" aria-describedby="Wardno" placeholder="Ward no"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Wardno']; }?>" required> 
        </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
          <!-- <label for="exampleInputEmail1">Rtype</label> -->
          <input type="Rtype" class="form-control" id="Rtype" name="Rtype" aria-describedby="Rtype" placeholder="Room type"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Rtype']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Bno</label> -->
          <input type="Bno" class="form-control" id="Bno" name="Bno" aria-describedby="Bno" placeholder="Number of Beds"  value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Bno']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Adt</label> -->
          <input type="text" class="form-control" id="Adt" name="Adt" aria-describedby="Adt" placeholder="Arriving date"  onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Adt']; }?>" required> 
        </div>
  
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Ddt</label> -->
          <input type="text" class="form-control" id="Ddt" name="Ddt" aria-describedby="Ddt" placeholder="Departure date"  onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Mrdno'])){ echo $result1['Ddt']; }?>" required> 
        </div>
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
      </div> -->
     <?php  if(isset($_GET['Mrdno'])){  ?>
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
if(!isset($_GET['Mrdno'])){
if(isset($_POST['submit1'])){
  // echo "hey1";
  $e1=$_POST['Mrdno'];
  $e2=$_POST['Hno'];
  $e3=$_POST['Name'];
  $e5=$_POST['Department'];
  $e6=$_POST['Wardno'];
  $e7=$_POST['Rtype'];
  $e8=$_POST['Bno'];
  $e9=$_POST['Adt'];
  $e10=$_POST['Ddt'];
  $insertquery="insert into ward (Mrdno, Hno, Name, Department, Wardno, Rtype, Bno, Adt, Ddt) values ('$e1','$e2','$e3','$e5','$e6','$e7','$e8','$e9','$e10')";
  // $insertquery1="insert into inpatient (Mrdno, Hno, Name, Department, Wardno, Wardno, Bno, Adt, Ddt, Amount, Rtype, Wardno of admit) values ('1','1','1','1','1','1','1','1','1','1','1','1')";
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
  $e1=$_GET['Mrdno'];
  // echo"$e1";
  $e2=$_POST['Hno'];
  $e3=$_POST['Name'];
  $e5=$_POST['Department'];
  $e6=$_POST['Wardno'];
  $e7=$_POST['Rtype'];
  $e8=$_POST['Bno'];
  $e9=$_POST['Adt'];
  $e10=$_POST['Ddt'];
$updatequery="UPDATE ward SET Mrdno='$e1',Hno='$e2',Name='$e3',Department='$e5',Wardno='$e6',Rtype='$e7',Bno='$e8',Adt='$e9',Ddt='$e10' where Mrdno=$e1";
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