<?php
$error = FALSE;
include 'teacher/conn.php';
function ldap_auth($user,$password){

 //Data needed to connect to ldap server
  $server = "ldap.gndec.ac.in";
  $dn = "ou=people,dc=example,dc=com";

  error_reporting(0);
  ldap_connect($server);
  $con = ldap_connect($server);
  ldap_set_option($con, LDAP_OPT_PROTOCOL_VERSION, 3);
  
  //Check whether the user is authenticated one or not
if (ldap_bind($con, "uid=".$user.",ou=people,dc=example,dc=com",$password) === false)
 {
    //cn=teaching,ou=groups,dc=example,dc=com
    session_destroy();
    return FALSE;
  }
else {

		$_SESSION['username'] = $user;
		$_SESSION['password'] = $password;
		return TRUE;

	}
}
?>


<?php

	if(isset($_POST['signup'])){

		$user = $_POST['username'];
		$password = $_POST['pass'];
		$result = ldap_auth($user,$password);

		if($result==TRUE){

		$sql = "INSERT INTO q(fac_id, type) Values('$user','prof')";
		$data = mysqli_query($con, $sql);

		$sql = "INSERT INTO `personal_details` (`fac_id`) VALUES ('$user')";
		$data1 = mysqli_query($con, $sql);

		$sql ="INSERT INTO `images`(`fac_id`, `path`) VALUES ('$user','chakdephatte 2018-09-06 07-16-57.jpg')";
		$data2 = mysqli_query($con, $sql);

		if($data==TRUE) echo '<div class="alert alert-success">User Registered With Faculty Portal Successfully. Now you can Login with your default College Username & Password.</div>';
		else echo '<div class="alert alert-danger">User Already Registered With Faculty Portal. You can directly Login.</div>';

		}
		else 
			{
				header('location: ../add/index.php?error=TRUE');

	}

}

?>



<?php
    if(isset($_POST['form_login'])) {
        $id = $_POST['fac_id'];
        $pass = $_POST['pass'];

        $result = ldap_auth($id,$pass);

        if($result==TRUE){

        $sql = "SELECT * FROM q WHERE fac_id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            if(mysqli_num_rows($result) == 1) {
                session_start();
                if($id == "admin") {
                    $_SESSION['id'] = "admin";
                    header('location: teacher/');
                }
                else if($id == "hod") {
                    $_SESSION['id'] = "hod";
                    header('location: teacher/');
                }
                else {
                    $_SESSION['id'] = $id;
                    header('location: teacher/');
                }
            }
            else {
                echo "<script>alert('Invalid User !!');</script>";
            }
        }
        else {
            echo "<script>alert('INVALID SQL !!');</script>";
        }
    }
    else {
    		$error = TRUE;
    	}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Faculty Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="../img/logo1.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						GNDEC Faculty Portal
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="fac_id" placeholder="ID">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<?php
						if($error==TRUE)
						{
							echo '<div class="alert alert-danger">Invalid Username or Password!</div>';
						}
					?>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="form_login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>