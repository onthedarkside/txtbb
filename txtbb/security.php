<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

include("global.php");
include($dbpath . "/settings.php");

$allow_path = realpath(dirname(__FILE__)) . "/vpnallow/vpn_allow.txt";
checkForAllowedProxySettings($redirect_page_nonallowed_proxy, $force_proxy, $allow_weak_proxy, $allow_path);

function checkForAllowedProxySettings($redir, $force, $weak, $pathallow){
	$allowed_settings = clientHasAllowedProxySettings($force, $weak, $pathallow);
	if(!($allowed_settings)){
		//echo $redir;
		header("Location: $redir");
		exit;
	}
}

function clientHasAllowedProxySettings($force_proxy_usage, $allow_weak_proxy_usage, $allow_file_path){
	$tor_request = isTorRequest();
	//echo "Tor: " . $tor_request;
	$weak_proxy = isWeakProxy();
	//echo "Weak proxy: " . $weak_proxy;
	$allow_ip = isAllowedIP($allow_file_path);
	//echo "Allowed IP: " . $allow_ip;
	//echo "Force proxy: " . $force_proxy_usage;
	if($force_proxy_usage=="1" || $force_proxy_usage==1){
		$is_using_allowed_proxy = FALSE;
		if($allow_weak_proxy_usage=="1" || $allow_weak_proxy_usage==1){
			$is_using_allowed_proxy = ($tor_request || $allow_ip || $weak_proxy);
		}else{
			$is_using_allowed_proxy = ($tor_request || $allow_ip);
		}
		return $is_using_allowed_proxy;
	}else{
		//echo "No force proxy usage";
		//echo $allow_weak_proxy_usage;
		if($allow_weak_proxy_usage=="1" || $allow_weak_proxy_usage==1){
			//echo "HERE";
			return TRUE;
		}else{
			return !($weak_proxy);
		}
	}
}

function isTorRequest() 
{
	$reverse_client_ip = implode('.', array_reverse(explode('.', $_SERVER['REMOTE_ADDR'])));
	$reverse_server_ip = implode('.', array_reverse(explode('.', $_SERVER['SERVER_ADDR'])));
	$hostname = $reverse_client_ip . "." . $_SERVER['SERVER_PORT'] . "." . $reverse_server_ip . ".ip-port.exitlist.torproject.org";
	return gethostbyname($hostname) == "127.0.0.2";
} 

function isWeakProxy()
{
	if ( $_SERVER['HTTP_VIA']
        || $_SERVER['HTTP_X_FORWARDED_FOR']
        || $_SERVER['HTTP_FORWARDED_FOR']
        || $_SERVER['HTTP_X_FORWARDED']
        || $_SERVER['HTTP_FORWARDED']
        || $_SERVER['HTTP_CLIENT_IP']
        || $_SERVER['HTTP_FORWARDED_FOR_IP']
        || $_SERVER['VIA']
        || $_SERVER['X_FORWARDED_FOR']
        || $_SERVER['FORWARDED_FOR']
        || $_SERVER['X_FORWARDED']
        || $_SERVER['FORWARDED']
        || $_SERVER['CLIENT_IP']
        || $_SERVER['FORWARDED_FOR_IP']
        || $_SERVER['HTTP_PROXY_CONNECTION'] )
		/*|| in_array($_SERVER['REMOTE_PORT'], array(8080,80,6588,8000,3128,553,554))
		/* || @fsockopen($_SERVER['REMOTE_ADDR'], 80, $errno, $errstr, 12))*/
		{
			 return TRUE;
		}
	 else {
		 return FALSE;
	 }
}

function isAllowedIP($allowfile)
{
	$remoteaddr = $_SERVER['REMOTE_ADDR'] . "";
	$allowfile = file($allowfile);
	foreach($allowfile as $a_line){
		$a_line = trim($a_line);
		if($a_line==$remoteaddr){
			return TRUE;
			break;
		}
	}
	return FALSE;
}

?>
