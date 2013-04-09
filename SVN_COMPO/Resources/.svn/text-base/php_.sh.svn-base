#!/bin/bash
# Shell Script to start / stop PHP FastCGI using spawn-fcgi binary file.

PROVIDES=php-fcgi
SPAWN_FCGI=spawn-fcgi
SERVER_IP=127.0.0.1
SERVER_PORT=8102
PHP_CGI=php-fcgi
GREP=/usr/bin/grep
KILLALL=/usr/bin/killall
PHP_FCGI_CHILDREN=5
PHP_FCGI_MAX_REQUESTS=500

### DO NOT CHANGE ####
cmd=$1
 
pcgi_start(){
	export PHP_FCGI_CHILDREN
	export PHP_FCGI_MAX_REQUESTS

  	echo "Starting $PROVIDES..."
 	$SPAWN_FCGI -a $SERVER_IP -p $SERVER_PORT $PHP_CGI
}
 
pcgi_stop(){
	echo "Killing $PROVIDES..."
	$KILLALL $PROVIDES
}
 
pcgi_restart(){
	pcgi_stop
	pcgi_start
}
 
pcgi_status(){
        ps aux | grep $PROVIDES | grep -v grep > /dev/null
	[ $? -eq 0  ] && echo "$PROVIDES running" || echo "$PROVIDES NOT running" 
 
}
 
pcgi_help(){
  	echo "Usage: $0 {start|stop|restart|status}"
}
 
case ${cmd} in
[Ss][Tt][Aa][Rr][Tt]) pcgi_start;;
[Ss][Tt][Oo][Pp]) pcgi_stop;;
[Rr][Ee][Ss][Tt][Aa][Rr][Tt]) pcgi_restart;;
[Ss][Tt][Aa][Tt][Uu][Ss]) pcgi_status 0;;
*)      pcgi_help ;;
esac
