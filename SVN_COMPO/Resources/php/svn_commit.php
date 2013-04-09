<?php
   // With the extension svn.so 
	$local = $_SERVER["SVN_LOCAL"];
	$user = $_SERVER["SVN_USER"];
	$pwd = $_SERVER["SVN_PASSWORD"];
	$log = $_SERVER["SVN_MSG"];
	
	svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_USERNAME, $user);
	svn_auth_set_parameter(SVN_AUTH_PARAM_DEFAULT_PASSWORD, $pwd);

// array svn_commit ( string $log , array $targets [, bool $dontrecurse ] )
// Targets are local paths to files/folders to deliver
// Yet only one path is given. It can be a file or a folder
// For few paths, we should do a json_encode of array txt, then a json_decode here ?
	print_r(json_encode(svn_commit($log, array(realpath($local)))));
?>
	
