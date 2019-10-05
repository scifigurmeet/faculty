<?php include "conn.php";
if(isset($_POST["goto"])){
	session_start();
	$orignal=$_SESSION["id"];
    session_destroy();
	session_start();
	$_SESSION["id"] = $_POST["fac_id"];
	$_SESSION["orignal"] = $orignal;
}
if(isset($_POST["goback"])){
	session_start();
	$orignal=$_SESSION["orignal"];
    session_destroy();
	session_start();
	$_SESSION["id"] = $orignal;
}
	header('Location: index.php');
	?>