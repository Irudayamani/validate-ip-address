<?php
	// Validate ip address
	function ValidateIpAddress( $ip ){
		if ( !filter_var ( $ip, FILTER_VALIDATE_IP ) && !filter_var ( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 ) ) {
			return false;
		} else {
			return true;
		}
	}
	
	$ip	=	'127.0.0.1';
	$ip = 	"2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	
	if ( ValidateIpAddress( $ip ) ){
		echo $ip . ' is a valid ip address.';
	} else {
		echo $ip . ' is not a valid ip address.';
	}
?>