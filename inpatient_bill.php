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
      <li class="nav-item dropdown active">
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
      <li class="nav-item">
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
$_SESSION['Table']="inpatient_bill";
$_SESSION['Update']="inpatient_bill";
$_SESSION['Attr']="Bno";
  ?>
<section class="fo wy-5">
  <div class="py-5">
    <h2 class="text-center">InPatient Bill Details</h2>
  </div>
  <div class=" w-50 m-auto">
    <form action="" method="post">
      <div class ="row register-form ">
<?php  
if(isset($_GET['Bno'])){ 
$id=$_GET['Bno'];
// echo "id: $id"
$selectquery="select * from inpatient_bill where Bno=$id";
$query1=mysqli_query($con,$selectquery);
$result1=mysqli_fetch_assoc($query1);
// if(isset($_POST['update1'])){
  
// }
}
  ?>

        <div class="col-md-6">
        <div class="form-group">
          <input type="text" class="form-control" id="Bno" name="Bno" aria-describedby="Bno" placeholder="Bill no"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Bno']; }?>" required > 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Hno</label> -->
          <input type="Hno" class="form-control" id="Hno" name="Hno" aria-describedby="Hno" placeholder="Hospital no"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Hno']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Mrdno</label> -->
          <input type="Mrdno" class="form-control" id="Mrdno" name="Mrdno" aria-describedby="Mrdno" placeholder="Mrdno"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Mrdno']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Pname</label> -->
          <input type="Pname" class="form-control" id="Pname" name="Pname" aria-describedby="Pname" placeholder="Patient name"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Pname']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Department</label> -->
          <input type="Department" class="form-control" id="Department" name="Department" aria-describedby="Department" placeholder="Department"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Department']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Date</label> -->
          <input type="text" class="form-control" id="Date" name="Date" aria-describedby="Date" placeholder="Date"   onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Bno'])){ echo $result1['Date']; }?>" required> 
        </div>
        </div>
        <div class="col-md-5">
          <div class="form-group">
          <!-- <label for="exampleInputEmail1">Rrent</label> -->
          <input type="Rrent" class="form-control" id="Rrent" name="Rrent" aria-describedby="Rrent" placeholder="Room rent"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Rrent']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Lab</label> -->
          <input type="Lab" class="form-control" id="Lab" name="Lab" aria-describedby="Lab" placeholder="Lab"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Lab']; }?>" required> 
        </div>
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Ad</label> -->
          <input type="text" class="form-control" id="Ad" name="Ad" aria-describedby="Ad" placeholder="Arriving date"  onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Bno'])){ echo $result1['Ad']; }?>" required> 
        </div>
  
        <div class="form-group">
          <!-- <label for="exampleInputEmail1">Dd</label> -->
          <input type="text" class="form-control" id="Dd" name="Dd" aria-describedby="Dd" placeholder="Departure date"  onfocus="(this.type='date')" onblur="(this.type='text')" value="<?php  if(isset($_GET['Bno'])){ echo $result1['Dd']; }?>" required> 
        </div>
  
        
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Amount</label> -->
            <input type="number" step="0.01" class="form-control" id="Amount" name="Amount" aria-describedby="Amount" placeholder="Amount"  value="<?php  if(isset($_GET['Bno'])){ echo $result1['Amount']; }?>" required> 
          </div>
  
        
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
      </div> -->
     <?php  if(isset($_GET['Bno'])){  ?>
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
if(!isset($_GET['Bno'])){
if(isset($_POST['submit1'])){
  // echo "hey1";
  $e1=$_POST['Bno'];
  $e2=$_POST['Hno'];
  $e3=$_POST['Mrdno'];
  $e4=$_POST['Pname'];
  $e5=$_POST['Department'];
  $e6=$_POST['Date'];
  $e7=$_POST['Rrent'];
  $e8=$_POST['Lab'];
  $e9=$_POST['Ad'];
  $e10=$_POST['Dd'];
  $e11=$_POST['Amount'];
  $insertquery="insert into inpatient_bill (Bno, Hno, Mrdno, Pname,Department, Date, Rrent, Lab, Ad, Dd, Amount) values ('$e1','$e2','$e3','$e4','$e5','$e6','$e7','$e8','$e9','$e10','$e11')";
  // $insertquery1="insert into inpatient (Bno, Hno, Mrdno, Department, Date, Date, Lab, Ad, Dd, Amount, Rrent, Date of admit) values ('1','1','1','1','1','1','1','1','1','1','1','1')";
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
  $e1=$_GET['Bno'];
  // echo"$e1";
  $e2=$_POST['Hno'];
  $e3=$_POST['Mrdno'];
  $e4=$_POST['Pname'];
  $e5=$_POST['Department'];
  $e6=$_POST['Date'];
  $e7=$_POST['Rrent'];
  $e8=$_POST['Lab'];
  $e9=$_POST['Ad'];
  $e10=$_POST['Dd'];
  $e11=$_POST['Amount'];
$updatequery="UPDATE inpatient_bill SET Bno='$e1',Hno='$e2',Mrdno='$e3',Pname='$e4',Department='$e5',Date='$e6',Rrent='$e7',Lab='$e8',Ad='$e9',Dd='$e10',Amount='$e11' where Bno=$e1";
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