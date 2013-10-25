<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

include("security.php");

function printHeadAndDoctype($sitetitle, $robots){
	/*echo $redirect_page_pagetop;
	checkForAllowedProxySettings($redirect_page_pagetop);*/
	if($robots=="1" || $robots==1 ){
		echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
		echo "<html><head>\n";
		echo "<title>$sitetitle :: $section</title>\n";
		echo '<meta name="robots" content="index, follow">';
		echo "<meta name=\"description\" content=\"$sitetitle :: running with txtBB $cver.$csubver\">";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=$Charset\">\n";
		echo "<meta http-equiv=\"Content-language\" content=\"$language\">\n";
		echo  '<style type="text/css">';
		include ("formstyles.php");
		echo '</style>';
		echo "</head>";
	}else{
		echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">";
		echo "<html><head>\n";
		echo "<title>$sitetitle :: $section</title>\n";
		echo '<meta name="robots" content="noindex, nofollow">';
		echo "<meta name=\"description\" content=\"$sitetitle :: running with txtBB $cver.$csubver\">";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=$Charset\">\n";
		echo "<meta http-equiv=\"Content-language\" content=\"$language\">\n";
		echo  '<style type="text/css">';
		include ("formstyles.php");
		echo '</style>';
		echo "</head>";
	}
}

?>
