<?php 
session_start();
include ('../conn.php');

$sql = "SELECT * FROM q WHERE fac_id ='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    if($result) {
        while($row = mysqli_fetch_assoc($result)) {
            $type = $row['type'];
        }
    }

if($type=="admin"){
	$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$_POST['table']."'";
}
else {
	echo "<script>alert('Access Denied! You Can Not Access This Page!');
	history.go(-1);</script>";
	exit("Access Denied!");
}

include ('dumper.php');

try {
	$world_dumper = Shuttle_Dumper::create(array(
		'host' => $host,
		'username' => $username,
		'password' => $password,
		'db_name' => $database,
	));
	
	echo 'Please wait.....';

	$date=date("d-F-Y h-m-s a");
	// dump the database to plain text file
	$world_dumper->dump($date." Backup.sql");
	
	$loc=$date." Backup.sql";
	header("Location: ".$loc."");

} catch(Shuttle_Exception $e) {
	echo "Couldn't dump database: " . $e->getMessage();
}