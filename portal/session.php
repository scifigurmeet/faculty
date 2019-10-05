<?php
function ldap_auth($user,$password){
 //Data needed to connect to ldap server
  $server = "ldap.gndec.ac.in";
  $dn = "ou=people,dc=example,dc=com";

  //error_reporting(0);
  ldap_connect($server);
  $con = ldap_connect($server);
  ldap_set_option($con, LDAP_OPT_PROTOCOL_VERSION, 3);
  
  //Check whether the user is authenticated one or not
if (ldap_bind($con, "uid=".$user.",ou=people,dc=example,dc=com",$password) === false) {
	
    session_destroy();
    echo "FAIL";
    return 'LOGIN_FAIL';
  }
else {
		$login = fetch_resource_db('users',array('username'),array($user),'resource_array','');
		$_SESSION['username'] = $user;
		$_SESSION['password'] = $password;
		return 'LOGIN_SUCCESS';
    echo "Success";

	}
}

ldap_auth('ABC','ABC');
?>