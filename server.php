<?php
function ldap_auth($user,$password){

 //Data needed to connect to ldap server
  $server = "ldap.gndec.ac.in";
  $dn = "ou=people,dc=example,dc=com";

  error_reporting(0);
  ldap_connect($server);
  $con = ldap_connect($server);
  ldap_set_option($con, LDAP_OPT_PROTOCOL_VERSION, 3);
  
  //Check whether the user is authenticated one or not
if (ldap_bind($con, "uid=".$user.",ou=people,dc=example,dc=com",$password) === false) {
    //cn=teaching,ou=groups,dc=example,dc=com
    session_destroy();
    //return 'LOGIN_FAIL';
    echo "Login Fail";
  }
else {

		$_SESSION['username'] = $user;
		$_SESSION['password'] = $password;
		//return 'LOGIN_SUCCESS';
    echo "Login Success";

	}
}
$user = "1621077";
$password = "saksham1997";
ldap_auth($user,$password);
?>