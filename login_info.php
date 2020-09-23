<?php
session_start();
// include 'index.php';
$con=mysqli_connect('localhost','root');
// if ($con) {
// 
// 	<script>
// 		alert('Connection successful');
// 	</script>
// 	
// }
mysqli_select_db($con,'hospital');
if(isset($_POST['submit'])){
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$_SESSION['USER']=$user;
	$chuser =  "select * from login_info where User = '$user' ";
	$query = mysqli_query($con,$chuser);
	$num = mysqli_num_rows($query);
	if($num){
		$user_pass = mysqli_fetch_assoc($query);
		$db_pass = $user_pass['Password'];
		
		if($pwd==$db_pass){
			?>
		<script>
			alert('Login Success');
			location.replace("home.php");
		</script>
		<?php
		}
		else{
			?>
		<script>
			alert('Incorrect password');
			location.replace("login.php");
		</script>
		<?php
		
		}
	}
	else{
		?>
		<script>
			alert('Invalid user'); 
			location.replace("login.php");
		</script>
		<?php
	}
}
?>