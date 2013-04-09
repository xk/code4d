<?php
   // With the extension svn.so 
	$local = $_SERVER["SVN_LOCAL"];
	$user = $_SERVER["SVN_USER"];
	$pwd = $_SERVER["SVN_PASSWORD"];
	
	svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_USERNAME, $user);
	svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_PASSWORD, $pwd);
	
	// bool svn_revert ( string $path [, bool $recursive = false ] )
	$err=svn_revert(realpath($local),true);
	if ($err==True) {
		echo '1';
	} else {
		print_r($err);
	}	
?>
	
