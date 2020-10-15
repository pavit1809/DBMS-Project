<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hospital');
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$_SESSION['USER']=$user;
	$chuser =  "insert into login_info(User,Password) values('$user','$pwd')";
	$query = mysqli_query($con,$chuser);
	if ($query) {
    ?>
   <script>
     alert('Signed Up');
     location.replace("login.php");
   </script>
   <?php
  }
  else{
    ?>
   <script>
     alert('Error: User present. Signing up not possible.');
     location.replace("signup.php");
   </script>
   <?php
  }
}
?>
