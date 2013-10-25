<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
*                            install.php  - PBLang
*              see the file copyright.txt in the docs-folder
 ***************************************************************************/

error_reporting  (E_ERROR | E_WARNING | E_PARSE);
set_magic_quotes_runtime(0);

define('IN_PB', "true");
define('IN_PBG', "true");
$update="0";
@include('url_functions.php');
if (file_exists("global.php")){
	@include('global.php');
	$update="1";
}
$weburl=$SERVER_NAME;
$remurl=$REQUEST_URI;
$homeurl= getCurrentPageURL(); // pblang's solution did not support https
$homeurl=str_replace("/install.php","",$homeurl);

$aaaa=getcwd();
$aaaa=str_replace(chr(92),"/",$aaaa);

if ($mainpath==""){
	$mainpath=$aaaa;
}else{
	$mainpath=str_replace(chr(92),"/",$mainpath);
}
if ($dbpath==""){
	$dbpath=$aaaa.'/db';
}else{
	$dbpath=str_replace(chr(92),"/",$dbpath);
}
if ($temppath==""){
	$temppath="$aaaa/templates";
}else{
	$temppath=str_replace(chr(92),"/",$temppath);
}
if ($homeurl==""){
	$homeurl="http://";
}

@include("$dbpath/settings_base.php");
$installversion=$cver.'.'.$csubver.'.'.$csubsubver.$cstat.$cstatlevel;
$newver=$cver;
$newsubver=$csubver;
$newstat=$cstat;
$newstatlevel=$cstatlevel;
if (file_exists("$dbpath/settings.php")){
	include("$dbpath/settings.php");
	$update="1";
	$cver=$newver;
	$csubver=$newsubver;
	$cstat=$newstat;
	$cstatlevel=$newstatlevel;
}
include('functions.php');
include('ffunctions.php');
global $langexpl;
if (file_exists($dbpath."/settings/styles/styles.php")){
	$update="1";
	include($dbpath."/settings/styles/styles.php");
}else{
	include($dbpath."/styles_base.php");
	$update="0";
}
if (file_exists($dbpath."/settings/sendmail.php")){
	$update="1";
	include($dbpath."/settings/sendmail.php");
}else{
	include($dbpath."/sendmail_base.php");
	$update="0";
}
if (file_exists("$temppath/pb/styles.php")){
	include("$temppath/pb/styles.php");
	$update="1";
}

$step=$_GET['s'];
if ($step=="") {
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
TD {
	FONT-SIZE: 12px; COLOR: #000000; FONT-FAMILY: Verdana
}
A:link        {text-decoration: none; color: 2E26CD;}
A:visited     {text-decoration: none; color: 2E26CD;}
A:hover       {text-decoration: none; color: #990000; font-style: normal; background-color: transparent; text-decoration: underline position: relative; top: 1.5px; left: 1.5px;}
</style>
</head>

<body style = "background-color: #D6D5D4; marginheight: 12; marginwidth: 12; leftmargin: 12; topmargin: 12;">
	<table width="100%" border="0" cellpadding="1" cellspacing="0"><tr bgcolor="9C9C9C"><td height="278">
		<table width="100%" border="0" cellpadding="15" cellspacing="0"><tr bgcolor="#FFFFFF" valign="top"><td height="309"><div align="center">
			<table width="100%" border="0" cellpadding="2" cellspacing="0"><tr bgcolor="#808080"><td height="116">
				<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr bgcolor="#FFFFFF"><td height="217">
					<table width="100%" border="0" cellpadding="7" cellspacing="1"><form method="post" action="install.php?s=2">
					<tr><td bgcolor="#D6D5D4" height="27" colspan="2">txtBB :: Install</td></tr>
					<tr bgcolor="#CCCCCC">	<td height="25" colspan="2"><b>Server Options :: </b>No trailing slashes!</td></tr>
					<tr bgcolor="#CCCCCC"><td height="25" bgcolor="#D7DAD7" colspan="2"><b>This is your document path :: </b><?php echo $aaaa; ?><br>
						If there is no path shown, your server most likely does not support PHP. Otherwise, the correct path will be filled in below automatically. 
						Just add the other details, click submit, and you are done.<br>
						<FONT COLOR="red"><b>Attention!</b> Did you make all directories and files writeable as required (see the documentation)? If not, this install program will most likely fail!</FONT></td></tr>
					<tr bgcolor="#CCCCCC"><td height="36" align="left" bgcolor="#D7DAD7" width="45%" valign="middle">Path to PBLang folder:</td>
					<td height="36" bgcolor="e7e7e7" width="55%"><input type="text" name="mainpath" value="<?php echo $mainpath; ?>" size="70" readonly></td></tr>
					<tr bgcolor="#CCCCCC"><td height="36" align="left" bgcolor="#D7DAD7" width="45%" valign="middle">URL to PBLang:</td>
					<td height="36" bgcolor="e7e7e7" width="55%"><input type="text" name="homeurl" size="70" value="<?php echo $homeurl; ?>" readonly></td></tr>
					<tr bgcolor="#CCCCCC"><td height="36" align="left" bgcolor="#D7DAD7" width="45%" valign="middle">Your (the admin's) emailaddress:</td>
					<td height="36" bgcolor="e7e7e7" width="55%"><input type="text" name="adminemail" size="70" value="<?php echo $adminemail; ?>"></td></tr>
					<!--<tr bgcolor="#CCCCCC"><td height="36" align="left" bgcolor="#D7DAD7" width="45%" valign="middle">Is this a nographics version?</td>
					<td height="36" bgcolor="e7e7e7" width="55%"><input type="checkbox" name="nographics" value="1"></td></tr>-->
					<tr bgcolor="#CCCCCC"><td height="36" align="left" bgcolor="#D7DAD7" width="45%" valign="middle">Select a language for your board:</td>
						<td height="36" bgcolor="e7e7e7" width="55%"><select name="language">
					<?php
						LanguageSelection("en");
						echo "</select>&nbsp;$langexpl";
					?>
					</td></tr>
					<tr bgcolor="#CCCCCC"><td height="25" colspan="2"><b>Submit :: </b>Installs this forum</td></tr>
					<tr bgcolor="#CCCCCC"><td height="36" align="left" bgcolor="#D7DAD7" width="45%" valign="middle">&nbsp;</td>
					<td height="36" bgcolor="e7e7e7" width="55%">
					<input type="hidden" name="temppath" size="70" value="<?php echo $temppath; ?>">
					<input type="hidden" name="dbpath" size="70" value="<?php echo $dbpath; ?>">
					<input type="submit" name="Submit" value="Install">
					<input type="reset" name="Submit2" value="Reset"></td></tr>
					</form>
</table></td></tr></table></td></tr></table></div></td></tr></table></td></tr></table></body></html>
<?php
}
if ($step=="2") {
	$mainpath=stripslashes($_POST['mainpath']);
	$dbpath=stripslashes($_POST['dbpath']);
	$temppath=stripslashes($_POST['temppath']);
	$sprache=$_POST['language'];
	$adminemail=$_POST['adminemail'];
	$homeurl=$_POST['homeurl'];
	//$nographics=$_POST['nographics']; txtBB only knows nographics ;)
	$nographics=1;
	$ErrorCount=0;

	$dirname=$mainpath;
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath;
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/cats";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/members";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/members/pending";
	if (!is_dir($dirname)){
		@mkdir($dirname,0777);
		@chmod($dirname,0777);
	}
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/memss";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/online";
	if (!is_dir($dirname)){
		@mkdir($dirname,0777);
		@chmod($dirname,0777);
	}
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/pm";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/posts";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/settings";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/settings/styles";
	if (!is_dir($dirname)){
		mkdir($dirname,0777);
		@chmod($dirname,0777);
	}
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	$dirname=$dbpath."/status";
	if (!is_writeable($dirname)){
		$dirlist[$ErrorCount]=$dirname;
		$ErrorCount++;
	}
	if ($ErrorCount>"0"){
		echo "You haven't prepared the setup yet:<br><br>";
		for ($i=0;$i<$ErrorCount;$i++){
			echo "Please chmod the directory/folder &quot;".$dirlist[$i] ."&quot; to 777<br>";
		}
		echo "<br>After having &quot;chmodded&quot; the directories, please run install.php once again.<br><br>
			chmod means: to change the access rights. &quot;777&quot; stands for full access rights to all - this way, the webserver can write to
			the files which shall contain the data of your board. <br>
			After a successful installation, you can set the base directory of txtBB back to 755, which means that you as owner have full access to
			this directory, while all others can only read from there. The subdirectories which are mentioned above must remain in chmod 777!";
		exit;
	}
	$filename="$dbpath/cats/cats";
	if (!file_exists($filename)){
		$fp=@fopen($filename,"w");
		@fputs($fp,"0");
		@fclose($fp);
	}
	@chmod($filename,0666);
	@copy($dbpath.".htaccess",$dbpath."/cats/.htaccess");
	if (!file_exists($dbpath."/status/1") || !file_exists($dbpath."/settings/styles/blackmagic.php")){
		$update="0";
	}

	if ($update=="0"){
		@copy($dbpath."/.htaccess",$dbpath."/members/pending/.htaccess");
		@copy($dbpath."/index.html",$dbpath."/members/pending/index.html");
		@copy($dbpath."/.htaccess",$dbpath."/memss/.htaccess");
		@copy($dbpath."/.htaccess",$dbpath."/pm/.htaccess");
		@copy($dbpath."/.htaccess",$dbpath."/posts/.htaccess");
		@copy($dbpath."/index.html",$dbpath."/posts/index.html");
		@copy($dbpath."/.htaccess",$dbpath."/settings/.htaccess");
		@copy($dbpath."/index.html",$dbpath."/settings/index.html");
		@copy($dbpath."/.htaccess",$dbpath."/settings/styles/.htaccess");
		@copy($dbpath."/index.html",$dbpath."/settings/styles/index.html");
		@copy($dbpath."/autumn.php",$dbpath."/settings/styles/autumn.php");
		@copy($dbpath."/blackmagic.php",$dbpath."/settings/styles/blackmagic.php");
		@copy($dbpath."/blackmagic1.php",$dbpath."/settings/styles/blackmagic1.php");
		@copy($dbpath."/blue_sky.php",$dbpath."/settings/styles/blue_sky.php");
		@copy($dbpath."/deep-blue.php",$dbpath."/settings/styles/deep-blue.php");
		@copy($dbpath."/default.php",$dbpath."/settings/styles/default.php");
		@copy($dbpath."/green.php",$dbpath."/settings/styles/green.php");
		@copy($dbpath."/rubin_red.php",$dbpath."/settings/styles/rubin_red.php");
		@copy($dbpath."/smooth_green.php",$dbpath."/settings/styles/smooth_green.php");
		@copy($dbpath."/light_blue.php",$dbpath."/settings/styles/light_blue.php");
		@copy($dbpath."/styles_base.php",$dbpath."/settings/styles/styles_base.php");
		@copy($dbpath."/win_tiny_blue.php",$dbpath."/settings/styles/win_tiny_blue.php");
		@copy($dbpath."/lemontree.php",$dbpath."/settings/styles/lemontree.php");
		@copy($dbpath."/orange_blue.php",$dbpath."/settings/styles/orange_blue.php");
		@copy($dbpath."/klonedblue.php",$dbpath."/settings/styles/kloned_blue.php");
		@copy($dbpath."/.htaccess",$dbpath."/status/.htaccess");
		@copy($dbpath."/index.html",$dbpath."/status/index.html");
		@copy($dbpath."/1",$dbpath."/status/1");
		@copy($dbpath."/2",$dbpath."/status/2");
		@copy($dbpath."/3",$dbpath."/status/3");
		@copy($dbpath."/4",$dbpath."/status/4");
		@copy($dbpath."/5",$dbpath."/status/5");
		@copy($dbpath."/6",$dbpath."/status/6");
		@copy($dbpath."/7",$dbpath."/status/7");
		@copy($dbpath."/8",$dbpath."/status/8");
		@copy($dbpath."/9",$dbpath."/status/9");
		@copy($dbpath."/10",$dbpath."/status/10");
		@copy($dbpath."/11",$dbpath."/status/11");
		@copy($dbpath."/12",$dbpath."/status/12");
		@copy($dbpath."/ranges",$dbpath."/status/ranges");
	}
	@copy($dbpath."/attachtypes",$dbpath."/settings/attachtypes");
	@copy($dbpath."/ar_grey.php",$dbpath."/settings/styles/ar_grey.php");
	@copy($dbpath."/brown_style.php",$dbpath."/settings/styles/brown_style.php");
	@copy($dbpath."/brown_style.php",$dbpath."/settings/styles/coffee_style.php");
	@copy($dbpath."/cool_grey.php",$dbpath."/settings/styles/cool_grey.php");
	@copy($dbpath."/deep_green.php",$dbpath."/settings/styles/deep_green.php");
	@copy($dbpath."/flatland.php",$dbpath."/settings/styles/flatland.php");
	@copy($dbpath."/windowsxp.php",$dbpath."/settings/styles/windowsxp.php");
	@copy($dbpath."/cm_blue_orange.php",$dbpath."/settings/styles/cm_blue_orange.php");
	@copy($dbpath."/navy_green.php",$dbpath."/settings/styles/navy_green.php");
	@copy($dbpath."/ar_grey_1.php",$dbpath."/settings/styles/ar_grey_1.php");

//create list of usernames
	$filename=$dbpath."/settings/users";
	if (!file_exists($filename)){
		$fp=@fopen($filename, "w");
		$handle=opendir($dbpath."/memss");
		while ($file=readdir($handle)){
			if ($file!="." && $file!=".." && $file!=".htaccess"){
					fputs($fp,$file."\n");
			}
		}
		fclose($fp);
		closedir($handle);
	}

	$filename="$dbpath/mems";
	if (!file_exists($filename)){
		$fp=@fopen($filename,"w");
		@fputs($fp,"0");
		@fclose($fp);
		@chmod($filename,0666);
	}

	$ErrorCount=0;

	$filename="$dbpath/cats/cats";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	/*if (!$nographics) {
		$filename="$temppath/pb/images/ranks/rank1.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank2.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank3.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank4.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank5.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank10.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank11.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
		$filename="$temppath/pb/images/ranks/rank12.gif";
		@chmod($filename,0666);
		if (!is_writeable($filename)){
			$filelist[$ErrorCount]=$filename;
			$ErrorCount++;
		}
	}*/
	$filename="$dbpath/mems";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/1";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/2";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/3";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/4";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/5";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/6";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/7";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/8";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/9";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/10";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/11";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/12";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/ranges";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/status/styles";
	if (!file_exists($filename)){
		$fp=fopen($filename,"w");
		fputs($fp,"default");
		fclose($fp);
	}
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename=$dbpath."/settings/attachtypes";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}

	if ($ErrorCount=="0"){
		if ($maxppp==""){
			$maxppp=20;
		}

/*			$handle=opendir($temppath."/pb/language");
		$first="";
	while($file=readdir($handle)){
			if($file!="." && $file!=".." && $file!=".htaccess" && $file!="index.html" && $file!="lang.temp" && substr($file,(strlen($file)-4))!='.txt'){
					include ($temppath.'/pb/language/'.$file);
					$charsets.=$first.$Charset;
					$first=",";
			}
		}
		closedir($handle);
*/
		$langfilename=$temppath.'/pb/language/lang_'.$sprache.'.php';
		include($langfilename);
		$charsets=$Charset;
		WriteSettings();
		WriteStyles();
		WriteSendmail();
		//Create or update global.php
		if (!$CookieID){
			$Zeit=getdate();
			$Zahl1=$Zeit['yday'] + $Zeit['year']*365 + $Zeit['hours'] + $Zeit['minutes'] + $Zeit['seconds'];
			$CookieID="txtbbcookie".$Zahl1;           //Set a (most likely) unique CookieID to avoid confusion with other txtBB boards
		}

		$homeurl=str_replace("/index.php","",$homeurl);
		$content2 = "<";
		$content2 .= "?php\n\n";
		$content2 .="\$mainpath=\"$mainpath\";\n";
		$content2 .="\$dbpath=\"$dbpath\";\n";
		$content2 .="\$temppath=\"$temppath\";\n";
		$content2 .="\$language=\"$sprache\";\n";
		$content2 .="\$homeurl=\"$homeurl\";\n";
		$content2 .="\$cookieid=\"$CookieID\";\n";
		$content2 .= "\n?";
		$content2 .=">";
		$fp = @fopen("$mainpath/global.php", "w");
		@fputs($fp, $content2);
		@fclose($fp);
		$chmodok=@chmod("$mainpath/global.php",0666);

		if (!$fp)
		{
			echo "There was a serious problem trying to write to the file &quot;global.php&quot;. Either the directory of PBLang
			is not writeable, or you entered the wrong path in the installation form. Please make sure that both are set correctly.
			You have to do the installation procedure once again, after you have fixed the problem.<br><br>";
			exit;
		}
	}
	$phpversion=phpversion();
	if ((substr($phpversion,0,1)==4 && substr($phpversion,2,1)>=1)|| substr($phpversion,0,1)>=5) {
	}else{
		echo 'Sorry, but txtBB will not be able to run on this server. The minimum requirement 
		for running txtBB is PHP version 4.1.0. Please contact your
		host and ask him to install a current version of PHP on the server.';
		exit;
	}


	$filename="$mainpath/global.php";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/settings.php";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}
	$filename="$dbpath/settings/styles/styles.php";
	@chmod($filename,0666);
	if (!is_writeable($filename)){
		$filelist[$ErrorCount]=$filename;
		$ErrorCount++;
	}

	if ($ErrorCount>"0"){
		echo "You haven't prepared the setup yet:<br><br>";
		for ($i=0;$i<$ErrorCount;$i++){
		echo "Please chmod the file &quot;".$filelist[$i] ."&quot; to 666<br>";
		}
		echo "<br>After having &quot;chmodded&quot; the files, please run install.php once again.<br><br>
			chmod means: to change the access rights. &quot;777&quot; stands for full access rights to all - this way, the webserver can write to
			the files which shall contain the data of your board.";
		exit;
	}

	///* RESTORE THIS! DISABLED FOR DEVELOPMENT*/
	@unlink("$mainpath/install.php");

	if (file_exists("$mainpath/install.php")){
		$ErrorCount++;
		echo "The file &quot;install.php&quot; could not be deleted. Please remove it. Otherwise
			any visitor can use this file to distort your installation.!";
	}

	@unlink($dbpath."/orange_blue.php");
	@unlink($dbpath."/klonedblue.php");
	@unlink($dbpath."/autumn.php");
	@unlink($dbpath."/blackmagic.php");
	@unlink($dbpath."/blackmagic1.php");
	@unlink($dbpath."/blue_sky.php");
	@unlink($dbpath."/deep-blue.php");
	@unlink($dbpath."/default.php");
	@unlink($dbpath."/green.php");
	@unlink($dbpath."/light_blue.php");
	@unlink($dbpath."/styles_base.php");
	@unlink($dbpath."/win_tiny_blue.php");
	@unlink($dbpath."/styles.php");
	@unlink($dbpath."/settings_base.php");
	@unlink($dbpath."/sendmail_base.php");
	@unlink($dbpath."/lemontree.php");
	@unlink($dbpath."/ar_grey.php");
	@unlink($dbpath."/brown_style.php");
	@unlink($dbpath."/coffee_style.php");
	@unlink($dbpath."/cool_grey.php");
	@unlink($dbpath."/deep_green.php");
	@unlink($dbpath."/smooth_green.php");
	@unlink($dbpath."/rubin_red.php");
	@unlink($dbpath."/flatland.php");
	@unlink($dbpath."/attachtypes");
	@unlink($dbpath."/windowsxp.php");
	@unlink($dbpath."/cm_blue_orange.php");
	@unlink($dbpath."/navy_green.php");
	@unlink($dbpath."/ar_grey_1.php");
	@unlink($dbpath."/1");
	@unlink($dbpath."/2");
	@unlink($dbpath."/3");
	@unlink($dbpath."/4");
	@unlink($dbpath."/5");
	@unlink($dbpath."/6");
	@unlink($dbpath."/7");
	@unlink($dbpath."/8");
	@unlink($dbpath."/9");
	@unlink($dbpath."/10");
	@unlink($dbpath."/11");
	@unlink($dbpath."/12");
	@unlink($dbpath."/ranges");
	@unlink($temppath."/pb/admin.php");
	@unlink($temppath."/pb/admintop.php");
	@unlink($temppath."/pb/bpiece.php");
	@unlink($temppath."/pb/btop.php");
	@unlink($temppath."/pb/cat.php");
	@unlink($temppath."/pb/editpost.php");
	@unlink($temppath."/pb/error.php");
	@unlink($temppath."/pb/footer.php");
	@unlink($temppath."/pb/forum.php");
	@unlink($temppath."/pb/header1.php");
	@unlink($temppath."/pb/header.php");
	@unlink($temppath."/pb/listtop.php");
	@unlink($temppath."/pb/memp.php");
	@unlink($temppath."/pb/memtop.php");
	@unlink($temppath."/pb/login.php");
	@unlink($temppath."/pb/msg.php");
	@unlink($temppath."/pb/nag.php");
	@unlink($temppath."/pb/nreply.php");
	@unlink($temppath."/pb/ntopic.php");
	@unlink($temppath."/pb/pm.php");
	@unlink($temppath."/pb/pmp.php");
	@unlink($temppath."/pb/pmpshow.php");
	@unlink($temppath."/pb/postp.php");
	@unlink($temppath."/pb/posttop.php");
	@unlink($temppath."/pb/profile.php");
	@unlink($temppath."/pb/regdone.php");
	@unlink($temppath."/pb/register.php");
	@unlink($temppath."/pb/rev.php");
	@unlink($temppath."/pb/revp.php");
	@unlink($temppath."/pb/sbot.php");
	@unlink($temppath."/pb/search.php");
	@unlink($temppath."/pb/sendpm.php");
	@unlink($temppath."/pb/stats.php");
	@unlink($temppath."/pb/stop.php");
	@unlink($temppath."/pb/styles_base.php");
	@unlink($temppath."/pb/styles.php");
	@unlink($temppath."/pb/ucp.php");
	@unlink($temppath."/pb/usercp.php");
	@unlink($temppath."/pb/userin.php");
	@unlink($temppath."/pb/who.php");
	@unlink($mainpath."/error.php");

	echo "<br><br>The installation was successful! Remember that the first member who registers himself becomes the admin. So
		please go ahead and <A HREF=\"register.php\">register</A> yourself to become the admin of your board!<br>";
	$installversion="4.67.16.a";$servername=$SERVER_NAME;$serversoftware=$SERVER_SOFTWARE;
	$phpOS=$PHP_OS;$location=$SERVER_NAME." - doc: ".$SCRIPT_FILENAME;
	echo "<HR><br>txtBB - performance optimized bulletin board without SQL<BR>
	The original source is from powerboards (2000-2002), which was then modified by the MPHH-project (2002)<br>
	This code was since modified, repaired, extended by  Martin Senftleben alias Dr. Martinus, and became
	PBLang (after 2002) [Copyright (c) 2002-2005 by the PBLang-Team]. PBLang was forked in 2013 to become txtBB. txtBB modifies PBLang to be fast and performant 
	- aiming at a PHP, HTML and CSS only solution.<br>
	Copyleft (c) txtBB<br>";
	//echo "Source from: <a href=\"http://sourceforge.net/projects/pblang/\">Downloadsite at sourceforge.net</A><br><br>";
	/* txtBB: this mailed to pblang oO - ... */
	/*@mail("PBLang@drmartinus.de","Neue Installation",
	"PBLang Version $installversion in $sprache installiert auf:\n\n$homeurl mit\n$serversoftware\nEmail: $adminemail\n",
	"From: $adminemail");*/
	echo "This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.<br><br>
	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details. <br>
	published under the GPL.<br><br>";
	//txtBB: blub, blub
	//Commercial users I would like to request to make a contribution towards the development of PBLang by clicking on the &quot;Paypal Donate&quot; button in the
	//right top corner of the forum. How to remove this button is explained in the documentation file.";
}

