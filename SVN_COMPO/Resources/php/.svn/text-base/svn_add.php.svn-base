<?php
   // With the extension svn.so 
	$local = $_SERVER["SVN_LOCAL"];
	$user = $_SERVER["SVN_USER"];
	$pwd = $_SERVER["SVN_PASSWORD"];
	
	svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_USERNAME, $user);
	svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_PASSWORD, $pwd);
	$err=svn_add(realpath($local),true,false);	
	if ($err==True) {
		echo '1';
	} else {
		print_r($err);
	}
?>
	
