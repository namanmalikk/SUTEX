<?php
//session_start();
//error_reporting(1);

include("../database.php");
include("generator.php");

extract($_SESSION);
extract($_GET);
extract($_POST);

if($_SESSION['admin_id']==""){
	echo'<h4>please login to continue</h4>';
	echo'<a href="index.php">login</a>';
	exit();
}

//echo "admin_id = ".$admin_id."<br>";
//$class = encrypt("parv","teachergroup1");
//echo "encrypted text- ".$class."<br>";
//$decrypted = decrypt("parv",$class);
//echo "decrypted text - ".$decrypted."<br>";
$id=$_GET['id'];
$rs4 = mysqli_query($con,"delete from waiting_teacher where waiting_id='$id'") or die("cannot delete");
header("location:waiting.php");
?>
