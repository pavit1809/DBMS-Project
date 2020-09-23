<?php
session_start();
session_destroy();
?>
		<script>
			alert('Logged out succesfully');
			location.replace("login.php");
		</script>
	<?php	
?>