<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            admin2.php   -  PBLang
 *                            -------------------
 *
 *              see the file copyright.txt in the docs-folder
 *
*			Last modified 27 February 2005
***************************************************************************/

set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

ob_start();

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
                                                     // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

define('IN_PB', "true");
define('IN_PBG', "true");

include("global.php");
include($dbpath."/settings.php");
if ($testing){
	error_reporting  (E_ALL);
}else{
	error_reporting ();
}
//error_reporting  (E_ALL);
include_once("functions.php");
include_once("ffunctions.php");
include_once("scan.php");
include("$temppath/pb/language/lang_$language.php");

$liusername=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($liusername,"1","0");
if ($permit=="1"){
	if ($admin!="1" && $moder!="1") {
		echo $NoAccess;
		ErrorMessage($AccessDenied,$liusername);
		exit;
	} elseif ($admin=="1" || $moder=="1") {
		$do=$_GET['do'];
		if ($do=="") {
			FAccessDenied();
			exit;
		}

		if ($do=="fsettings2" && $admin=="1") {                 //edit forum settings  - action
			$emsupp=$_POST['emsupp'];
			$sitetitle=($_POST['title']);
			$search_engines_allowed = ($_POST['robots']);
			if(isset($search_engines_allowed)){
				if($search_engines_allowed == "on" || $search_engines_allowed == "1" || $search_engines_allowed == 1 ){
					$search_engines_allowed = "1";
				}else{
					$search_engines_allowed = "0";
				}
			}else{
				$search_engines_allowed = "0";
			}
			$force_proxy=($_POST['enforceproxy']);
			if(isset($force_proxy)){
				if($force_proxy == "on" || $force_proxy == "1" || $force_proxy == 1 ){
					$force_proxy = "1";
				}else{
					$force_proxy = "0";
				}
			}else{
				$force_proxy = "0";
			}
			
			$allow_weak_proxy=($_POST['allowweakproxies']);
			if(isset($allow_weak_proxy)){
				if($allow_weak_proxy == "on" || $allow_weak_proxy == "1" || $allow_weak_proxy == 1 ){
					$allow_weak_proxy = "1";
				}else{
					$allow_weak_proxy = "0";
				}
			}else{
				$allow_weak_proxy = "0";
			}
			
			$redirect_page_nonallowed_proxy=($_POST['redirectpage']);
			if(isset($redirect_page_nonallowed_proxy)){
				if( !( strlen(trim($redirect_page_nonallowed_proxy)) > 1 ) ){
					$redirect_page_nonallowed_proxy="127.0.0.1";
				}else{
					$redirect_page_nonallowed_proxy=trim($redirect_page_nonallowed_proxy);
				}
			}else{
				$redirect_page_nonallowed_proxy="127.0.0.1";
			}
			
			$sitelogo=trim($_POST['logo']);
			$boardbgimage=trim($_POST['bbgimage']);
			$sitelogowidth=trim($_POST['sitelogowidth']);
			$sitelogoheight=trim($_POST['sitelogoheight']);
			$defaultslogan=($_POST['defslogan']);
			$sitemotto=($_POST['motto']);
			$footer=($_POST['footer']);
			$boardwidth=$_POST['boardwidth'];
			$boardalign=$_POST['boardalign'];
			$html='1';
			$changealias=$_POST['chalias'];
			$allowalias=$_POST['allalias'];
			$smilys=$_POST['smilys'];
			$bbcode=$_POST['bbcode'];
			$censor=$_POST['censor'];
			$timezone=$_POST['timezone'];
			$loginreq=$_POST['logreq'];
			$maint=$_POST['maint'];
			$testing=$_POST['testing'];
			$ave=$_POST['av'];
			$webave=$_POST['webav'];
			$avmaxwidth=trim($_POST['avmaxwidth']);
			$avmaxheight=trim($_POST['avmaxheight']);
			$mreason=$_POST['mr'];
			$noatch=$_POST['noatch'];
			$allowreg=$_POST['allowreg'];
			$mailenabled=$_POST['allowem'];
			$banreason=$_POST['banreason'];
			$adminemail=$_POST['adminemail'];
			$maxatchsize=$_POST['maxatchsize'];
			$minspace=$_POST['minspace'];
			$maxposts=trim($_POST['maxposts']);
			$maxppp=trim($_POST['maxppp']);
			$maxrpp=trim($_POST['maxrpp']);
			$maxlatest=trim($_POST['maxlatest']);
			$confirmemail=$_POST['confirmemail'];
			$welcomemessage=$_POST['welcmess'];
			$checkip=$_POST['chckip'];
			$notifyadmin=$_POST['notifyadm'];
			$notifyadminrepl=$_POST['notifyadmrepl'];
			$charsets=$_POST['charsets'];
			$textareawidth=$_POST['textareawidth'];
			$attachtypelist=$_POST['attachtypes'];
			$smtpmail=$_POST['smtpmail'];
			$sendersname=$_POST['sendersname'];
			$frameset=$_POST['frameset'];
			$badwordslist=$_POST['badwordslist'];
			WriteSettings();
			$announce=$_POST['announce'];
			$fp = @fopen($dbpath."/announce.txt", "w");
			@fputs($fp, $announce);
			@fclose($fp);
			$sprache=$_POST['language'];
			$mainpath=addslashes($mainpath);
			$dbpath=addslashes($dbpath);
			$temppath=addslashes($temppath);
			$homeurl=addslashes($homeurl);
			$content2 = "<?php\n\n";
			$content2 .="\$mainpath=\"$mainpath\";\n";
			$content2 .="\$dbpath=\"$dbpath\";\n";
			$content2 .="\$temppath=\"$temppath\";\n";
			$content2 .="\$language=\"$sprache\";\n";
			$content2 .="\$homeurl=\"$homeurl\";\n";
			$content2 .="\$cookieid=\"$cookieid\";\n\n?";
			$content2 .=">";
			$fp = fopen("$mainpath/global.php", "w");
			fputs($fp, $content2);
			fclose($fp);
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=fsettings\">";
		} elseif ($do=="fsettings2") {
			FAccessDenied();
		}

		if ($do=="predefstyles2" && $admin=="1") {                    //get a set of predefined styles and install them - action
			$stylefname=$_POST['defstyle'];
			$filename=$dbpath."/settings/styles/styles.php";
			if (!is_writeable($filename)){
				ErrorMessage($VNotWriteable,$liusername);
			}else{
				copy("$dbpath/settings/styles/$stylefname",$filename);
				echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=predefstyles\">";
			}
		}elseif($do=="predefstyles2"){
			FAccessDenied();
		}

		if ($do=="styles2" && $admin=="1") {                    //edit styles - action
			$picturebuttons=$_POST['picturebuttons'];
			$font=$_POST['font'];
			$fontcolor=CheckColorCode($_POST['fontcolor']);
			$fontsize=$_POST['fontsize'];
			$quotefont=$_POST['quotefont'];
			$quotefontcolor=CheckColorCode($_POST['quotefontcolor']);
			$quotefontsize=$_POST['quotefontsize'];
			$quotebackground=CheckColorCode($_POST['quotebackground']);
			$quoteborder=$_POST['quoteborder'];
			$annfont=$_POST['annfont'];
			$annfontcolor=CheckColorCode($_POST['annfontcolor']);
			$annfontsize=$_POST['annfontsize'];
			$background=CheckColorCode($_POST['background']);
			$form=$_POST['form'];
			$formborder=$_POST['formborder'];
			$formbordersize=$_POST['formbordersize'];
			$forumheaderborder=CheckColorCode($_POST['forumheaderborder']);
			$forumheaderbordersize=$_POST['forumheaderbordersize'];
			$forumheader=CheckColorCode($_POST['forumheader']);
			$forumheadertitle=CheckColorCode($_POST['forumheadertitle']);
			$forumheadertitlesize=$_POST['forumheadertitlesize'];
			$forumheadercaption=CheckColorCode($_POST['forumheadercaption']);
			$forumheaderwelcome=CheckColorCode($_POST['forumheaderwelcome']);
			$forumheadermenu=CheckColorCode($_POST['forumheadermenu']);
			$forumheadermenufont=$_POST['forumheadermenufont'];
			$datecolor=CheckColorCode($_POST['datecolor']);
			$containerborder=CheckColorCode($_POST['containerborder']);
			$containerbordersize=$_POST['containerbordersize'];
			$containerinner=CheckColorCode($_POST['containerinner']);
			$headercolor=CheckColorCode($_POST['headercolor']);
			$headergif=$_POST['headergif'];
			$headerfont=CheckColorCode($_POST['headerfont']);
			$subheadercolor=CheckColorCode($_POST['subheadercolor']);
			$subheadergif=$_POST['subheadergif'];
			$subheaderfont=$_POST['subheaderfont'];
			$menucolor=CheckColorCode($_POST['menucolor']);
			$fmenucolor=CheckColorCode($_POST['fmenucolor']);
			$menufont=$_POST['menufont'];
			$forumbuttoncolor=CheckColorCode($_POST['forumbuttoncolor']);
			$forumbuttonover=CheckColorCode($_POST['forumbuttonover']);
			$forumbuttontopics=CheckColorCode($_POST['forumbuttontopics']);
			$forumbuttonreplies=CheckColorCode($_POST['forumbuttonreplies']);
			$forumbuttonlast=CheckColorCode($_POST['forumbuttonlast']);
			$admincolor=CheckColorCode($_POST['admincolor']);
			$modcolor=CheckColorCode($_POST['modcolor']);
			$usercolor=CheckColorCode($_POST['usercolor']);
			$linkcolor=CheckColorCode($_POST['linkcolor']);
			$vlinkcolor=CheckColorCode($_POST['vlinkcolor']);
			$hlinkcolor=CheckColorCode($_POST['hlinkcolor']);
			$buttonchoice=CheckColorCode($_POST['buttonchoice']);
			$groupcolors=$_POST['groupcolors'];
			$group1col=CheckColorCode($_POST['group1color']);
			$group2col=CheckColorCode($_POST['group2color']);
			$group3col=CheckColorCode($_POST['group3color']);
			$group4col=CheckColorCode($_POST['group4color']);
			$group5col=CheckColorCode($_POST['group5color']);
			$group10col=CheckColorCode($_POST['group10color']);
			$group11col=CheckColorCode($_POST['group11color']);
			$group12col=CheckColorCode($_POST['group12color']);
			$stylepref=$_POST['stylepref'];
			WriteStyles();
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=styles\">";
		} elseif ($do=="styles2") {
			FAccessDenied();
		}

		if ($do=="temp2" && $admin=="1") {              //edit language files - action
			$te=$_GET['te'];
			$cont=$_POST['cont'];
			$cont=stripslashes($cont);
			$fp = fopen("$mainpath/templates/pb/language/$te", "w");
			fputs($fp, $cont);
			fclose($fp);
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=templates\">";
		} elseif ($do=="temp2") {
			FAccessDenied();
		}

		if ($do=="mg2" && $admin=="1") {                //edit member groups
			$range1=$_POST['range1'];
			$range2=$_POST['range2'];
			$range3=$_POST['range3'];
			$range4=$_POST['range4'];
			$range5=$_POST['range5'];
			$range6=$_POST['range6'];
			$range7=$_POST['range7'];
			$one=$_POST['one'];
			$two=$_POST['two'];
			$three=$_POST['three'];
			$four=$_POST['four'];
			$five=$_POST['five'];
			$ten=$_POST['ten'];
			$eleven=$_POST['eleven'];
			$twelve=$_POST['twelve'];
			$mod=$_POST['mod'];
			$adm=$_POST['admin'];
			$ban=$_POST['ban'];
			$friend=$_POST['friend'];
			$rankstyle=$_POST['rankimg'];
			$fp = fopen("$dbpath/status/1", "w");
			fputs($fp, $one);
			fclose($fp);
			$fp = fopen("$dbpath/status/2", "w");
			fputs($fp, $two);
			fclose($fp);
			$fp = fopen("$dbpath/status/3", "w");
			fputs($fp, $three);
			fclose($fp);
			$fp = fopen("$dbpath/status/4", "w");
			fputs($fp, $four);
			fclose($fp);
			$fp = fopen("$dbpath/status/5", "w");
			fputs($fp, $five);
			fclose($fp);
			$fp = fopen("$dbpath/status/6", "w");
			fputs($fp, $mod);
			fclose($fp);
			$fp = fopen("$dbpath/status/7", "w");
			fputs($fp, $adm);
			fclose($fp);
			$fp = fopen("$dbpath/status/8", "w");
			fputs($fp, $ban);
			fclose($fp);
			$fp = fopen("$dbpath/status/9", "w");
			fputs($fp, $friend);
			fclose($fp);
			$fp = @fopen("$dbpath/status/10", "w");
			fputs($fp, $ten);
			fclose($fp);
			$fp = @fopen("$dbpath/status/11", "w");
			fputs($fp, $eleven);
			fclose($fp);
			$fp = @fopen("$dbpath/status/12", "w");
			fputs($fp, $twelve);
			fclose($fp);
			$fp = @fopen("$dbpath/status/ranges", "w");
			$ranges .= "<?php\n\n";
			$ranges .= "\$range1=$range1;\n";
			$ranges .= "\$range2=$range2;\n";
			$ranges .= "\$range3=$range3;\n";
			$ranges .= "\$range4=$range4;\n";
			$ranges .= "\$range5=$range5;\n";
			$ranges .= "\$range6=$range6;\n";
			$ranges .= "\$range7=$range7;\n";
			$ranges .= "\n?";
			$ranges .= ">";
			fputs($fp, $ranges);
			fclose($fp);
			$fp = @fopen("$dbpath/status/styles", "w");
			fputs($fp, $rankstyle);
			fclose($fp);
			copy("$temppath/pb/images/ranks/$rankstyle/rank1.gif","$temppath/pb/images/ranks/rank1.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank2.gif","$temppath/pb/images/ranks/rank2.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank3.gif","$temppath/pb/images/ranks/rank3.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank4.gif","$temppath/pb/images/ranks/rank4.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank5.gif","$temppath/pb/images/ranks/rank5.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank10.gif","$temppath/pb/images/ranks/rank10.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank11.gif","$temppath/pb/images/ranks/rank11.gif");
			copy("$temppath/pb/images/ranks/$rankstyle/rank12.gif","$temppath/pb/images/ranks/rank12.gif");
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=mgroups\">";
		} elseif ($do=="mg2") {
			FAccessDenied();
		}

		if ($do=="ca2" && $admin=="1") {                        //add a category - action
			$cname=stripslashes($_POST['name']);
			$cdescription=stripslashes($_POST['dec']);
			$filename = "$dbpath/cats/cats";
			$fd = fopen ($filename, "r");
			$cats = fread ($fd, filesize ($filename));
			fclose ($fd);
			$cats++;
			$fp = fopen("$dbpath/cats/cats", "w");
			fputs($fp, $cats);
			fclose($fp);
			$cforums=0;
			$cname=textparse($cname);
			$cdescription=textparse($cdescription);
			WriteCatInfo($cats);
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=catadd\">";
		} elseif ($do=="ca2") {
			FAccessDenied();
		}

		if ($do=="cedit" && $admin=="1") {              //edit a category - action
			$cname=$_POST['nam'];
			$cdescription=$_POST['dec'];
			$cforums=$_POST['cforums'];
			$cnum=$_POST['cnum'];
			WriteCatInfo($cnum);
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=editcat\">";

		} elseif ($do=="cedit") {
			FAccessDenied();
		}

		if ($do=="fedit" && $admin=="1") {
			$cnum=$_POST['cnum'];
			$fnum=$_POST['fnum'];
			SetLock();
			include($dbpath."/cats/".$cnum."_".$fnum);
			$fname=stripslashes($_POST['fname']);
			$fdescription=stripslashes($_POST['fdesc']);
			$users=$_POST['accesscontrol'];
			$usersnr=count($users);
			if ($usersnr=="0" && trim($users[0])==""){
				$fusers="|all";
			}else{
				$fusers="|".@implode("|",$users);
			}
			$fname=textparse($fname);
			$fdescription=textparse($fdescription);

			WriteForumInfo($cnum,$fnum);
			@unlink ($dbpath.'/block');

			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=editforum\">";

		} elseif ($do=="fedit") {
			FAccessDenied();
		}

		if ($do=="fa2" && $admin=="1") {                //add a forum - action
			$fname=stripslashes($_POST['nam']);
			$fdescription=stripslashes($_POST['dec']);
			$cat=$_POST['cat'];
			$users=$_POST['accesscontrol'];
			$lockforum=$_POST['lockforum'];
			$allowrep=$_POST['allowreply'];
			$usersnr=count($users);
			if ($usersnr=="0" && trim($users[0])==""){
				$fusers="|all";
			}else{
				$fusers="|".@implode("|",$users);
			}

			$fname=textparse($fname);
			$fdescription=textparse($fdescription);
			if ($lockforum){
				$flock="locked";
			}else{
				$flock="unlocked";
			}
			if ($allowrep){
				$fallowreply="1";
			}else{
				$fallowreply="0";
			}
			$flastpost="";
			$flastauthor="";
			$flasturl="";
			$freplies=0;
			$ftopics=0;
			$fvisitors="";
			$flastpostnumber=0;

			$filename = $dbpath."/cats/".$cat;
			include($filename);
			$cforums++;
			WriteCatInfo($cat);

			WriteForumInfo($cat,$cforums);
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=forumadd\">";
		} elseif ($do=="fa2") {
			FAccessDenied();
		}

		if ($do=="emmembers2" && $admin=="1") {         //email members - action
			$sub=$_POST['sub'];
			$cont=$_POST['cont'];
			$via=$_POST['via'];
			$handle = opendir('db/memss/');
			while ($file = readdir($handle)) {
				if ($file != "." && $file != ".." && $file != ".htaccess") {
					if ($via=="pm") {
						$to=$file;
						$filename = "$dbpath/pm/$to"."_tot";
						if (!file_exists($filename)){
							$filename=str_replace("_"," ",$filename);
						}
						$fd = fopen ($filename, "r");
						$num = fread ($fd, filesize ($filename));
						fclose ($fd);
						$num++;
						$filename=$dbpath."/pm/".$to."_tot";
						$fp = fopen($filename, "w");
						fputs($fp, $num);
						fclose($fp);
						$filename = $dbpath."/pm/".$to;
						$fd = fopen ($filename, "r");
						$num = fread ($fd, filesize ($filename));
						fclose ($fd);
						$num++;

						$fp = fopen($filename, "w");
						fputs($fp, $num);
						fclose($fp);

						setlocale(LC_TIME,$LangLocale);
						$date = time()+($timezone*3600);
						$fp = fopen($dbpath.'/pm/'.$to.'_'.$num.'_s', "w");
						fputs($fp, $sub);
						fclose($fp);
						$fp = fopen($dbpath.'/pm/'.$to.'_'.$num.'_a', "w");
						fputs($fp, $liusername);
						fclose($fp);
						$fp = fopen($dbpath.'/pm/'.$to.'_'.$num.'_d', "w");
						fputs($fp, $date);
						fclose($fp);
						$fp = fopen($dbpath.'/pm/'.$to.'_'.$num.'_c', "w");
						fputs($fp, $cont);
						fclose($fp);
						$fp = fopen($dbpath.'/pm/'.$to.'_'.$num.'_pmstat', "w");
						fputs($fp, "1");
						fclose($fp);
					}
					if ($via=="email") {
						include($dbpath."/members/".$file);
						$cont=stripslashes($cont);
						if ($emsupp=="1"){
							$header=mailheader();
							mail($useremail,$sub,$cont,$header);
						}elseif($smtpmail){
							SendMail($useremail,$sub,$cont);
						}
					}
				}
			}
			closedir($handle);
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php\">";
		} elseif ($do=="emmembers2") {
			FAccessDenied();
		}

		if ($do=="remove2" && $admin=="1") {                    //remove members - action
			$olduser=$_POST['user'];
			$success=0;
			$filename="$dbpath/online/$olduser";
			if (file_exists($filename)){
				ErrorMessage($VUserIsOnline,$liusername);
				exit;
			}
			$filename="$dbpath/members/$olduser";
			if (file_exists($filename))
				{unlink ($filename);
				$success=1;
			}
			$filename="$dbpath/memss/$olduser";
			if (file_exists($filename))
				{unlink ($filename);
			}
			$filename = "$dbpath/mems";
			$fd = fopen ($filename, "r");
			$n = fread ($fd, filesize ($filename));
			fclose ($fd);
			$n--;
			$fp = fopen("$dbpath/mems", "w");
			fputs($fp, $n);
			fclose($fp);
				$handle = opendir('db/pm/');		//remove all data related to private messages for this member
				while ($file = readdir($handle)) {
					if ($olduser==substr($file,0,strlen($olduser))) {
						unlink($dbpath.'/pm/'.$file);
					}
				}
				closedir($handle);
			$filename="$dbpath/settings/newestm";
			$fd=fopen($filename,"r");
			$lastuser=fread($fd,filesize($filename));
			fclose($fd);
			if ($olduser==$lastuser){          //this needs to be done better once it's easier to figure out who was the last user joined
				$handle = opendir('db/members/');
				while ($file = readdir($handle)) {
					if ($file != "." && $file != ".." && $file != "index.html" && $file != ".htaccess" && $file !="backup" && $file !="pending") {
						include("$dbpath/members/$file");
						if ($userjoined>$uoldjoined){
							$newestmember=$username;
							$uoldjoined=$userjoined;
						}
					}
				}
				closedir($handle);
				$fp=fopen("$dbpath/settings/newestm","w");
				fputs($fp,$newestmember);
				fclose($fp);
			}
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=remove\">";
		} elseif ($do=="remove2") {
			FAccessDenied();
		}

		if ($do=="grantm2" && $admin=="1") {           //only admin may grant moderator or admin status
			$u=$_POST['user'];
			$s=$_POST['stat'];
			$filet=$dbpath."/members/".$u;
			if (file_exists($filet) && $u!="") {
				if ($s=="remstatus"){
					include($filet);
					updatestatus($u);
					$usermod="0";
					$useradmin="0";
					$userban="0";
					$userfriend="0";
				}else{
					include($filet);
					$userrank=$s;
					switch ($userrank){
						case "6":
							$usermod="1";$useradmin="0";$userban="0";$userfriend="0";
							break;
						case "7":
							$usermod="0";$useradmin="1";$userban="0";$userfriend="0";
							break;
						case "8":
							$usermod="0";$useradmin="0";$userban="1";$userfriend="0";
							break;
						case "9":
							$usermod="0";$useradmin="0";$userban="0";$userfriend="1";
							break;
					}
				}
				WriteUserInfo($u);
				echo "<meta http-equiv=\"Refresh\" content=\"0; URL=admin.php?do=grantm\">";
			} else {
				echo "<td height=\"399\" bgcolor=\"$color1\" width=\"81%\" valign=\"top\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\">";
				echo "<tr> <td><font size=\"1\">$InvalidUsername!</font></td></tr></table>";
			}
		} elseif ($do=="grantm2") {
			FAccessDenied();
		}

		echo "</td></tr></table></td></tr></table></td></tr></table>";
		writefooter($newestm);
	}
}
ob_end_flush();
?>

