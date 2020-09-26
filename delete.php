<?php

if(!isset($_SESSION)) 
    { 
        session_start();  
        $_SESSION['up']=0;   

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
$id=$_GET['pk'];
$table=$_SESSION['Table'];
$pk=$_SESSION['pk'];
$deletequery="delete from $table where $pk=$id";
$query=mysqli_query($con,$deletequery);
if ($query) {
    ?>
   <script>
     alert('Deleted successful');
     location.replace("select.php");
   </script>
   <?php
  }
  else{
    ?>
   <script>
     alert('Cannot be deleted.');
     location.replace("select.php");
   </script>
   <?php
  }

?>