<?php
	$host="localhost";
	$username="root";
	$password="";
	$database="gndec1";
    $con = mysqli_connect($host,$username,$password,$database);
    if(!$con) {
        echo"ERROR".mysqli_connect_error();
    }
?>