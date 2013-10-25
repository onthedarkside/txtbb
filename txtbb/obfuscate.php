<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

function obfuscateTextString($txt){
	$txt = base64_encode($txt); 
	$txt = urlencode($txt);
	return $txt;
}

function deobfuscateTextString($txt){
	$txt = urldecode($txt);
	$txt = base64_decode($txt);
	return $txt;
}

?>
