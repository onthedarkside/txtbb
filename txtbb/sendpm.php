<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            sendpm.php  - PBLang
 *                            -------------------
 *
 *                  see docs/copyright.txt for more details
 *
 *			Last modified 1 March 2005
 ***************************************************************************/

require('header.php');
include($dbpath."/settings/styles/styles.php");
include_once("functions.php");
include("obfuscate.php");

$liusername=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($liusername,"1","0");
if ($permit=="1") {
	$language=SetLanguage($liusername);
	include($temppath."/pb/language/lang_".$language.".php");
	$reg=$_GET['id'];
	writeheader($newestm,0,0,0,$liusername,"1",$SendPM);
	if ($reg!="2") {
		if (isset($_GET['num']) && strlen($_GET['num'])< 8){
			$num=$_GET['num'];
		}else{
			$num='';
		}
		if (isset($_GET['to']) && strlen($_GET['to'])< 26){
			$to=$_GET['to'];
		}else{
			$to='';
		}
		$subj=strip_tags(stripslashes($_GET['subj']));
		$subj=obfuscateTextString($subj);
		$msg=strip_tags(stripslashes($_GET['msg']));
		$msg=obfuscateTextString($msg);
		$orgp=strip_tags(stripslashes($_GET['orig']));
		$orgp=str_replace('/','',$orgp);		//make sure no other URL is being used
		$orgp=str_replace(chr(92),'',$orgp);		//make sure no other URL is being used
		$pmstat="3";
		$fp = fopen($dbpath."/pm/".$liusername."_".$num."_pmstat", "w");
		fputs($fp, $pmstat);
		fclose($fp);
//          sendpm($to,$subj,$msg,$orgp,$liusername);
		if (trim($orgp)!=''){
			$filename=$dbpath.'/pm/'.$orgp;
			if (file_exists($filename)){
				$fd=@fopen($filename,"r");
				$rmsg=@fread($fd,filesize($filename));
				@fclose($fd);
			}else{
				$rmsg='';
			}
		}else{
			$rmsg='';
		}
		$form_tag="\n";
		$form_tag.='<form action="sendpm.php?id=2" method="POST" target="'.$frameset.'">'."\n";
		WriteTableTop($form_tag);
		echo "<tr><td bgcolor=\"$headercolor\" height=\"15\" background=\"$headergif\" colspan=\"2\">";
		echo "<a href=\"index.php\">$sitetitle</a> :: <a href=\"sendpm.php\">$PrivateMessaging</a> :: $VSendMessage</td></tr>";
		echo "<tr><td class=\"subheader\" colspan=\"2\"><a href=\"pm.php\">$VInbox</a>";
		echo " :: <a href=\"sendpm.php\">$VSendPM</a></td></tr>";
		if ($rmsg){
			$rmsg = deobfuscateTextString($rmsg);
		//	$subj = deobfuscateTextString($subj);
			echo "<tr><td bgcolor=\"$fmenucolor\" height=\"15\" colspan=\"2\">";
			echo "$VOriginalPM $VFrom <b>$to</b>:<br><br>$rmsg<br></td></tr>";
			echo "<tr>";
		}
		$subj=""; //todo: fix deobfuscation of subjects
		echo "<td height=\"5\" align=\"right\" bgcolor=\"$fmenucolor\" width=\"18%\"><p>$VTo:</p></td>";
		echo "<td height=\"5\" bgcolor=\"$menucolor\" width=\"82%\"><input type=\"text\" name=\"to\" value=\"$to\"></td></tr>";
		echo "<tr bgcolor=\"$subheadercolor\" valign=\"top\"><td height=\"5\" align=\"right\" bgcolor=\"$fmenucolor\" width=\"18%\"><p>$VSubject:</p></td>";
		echo "<td height=\"5\" bgcolor=\"$menucolor\" width=\"82%\"><input type=\"text\" name=\"subj\" value=\"$subj\"></td></tr>";
		echo "<tr bgcolor=\"$subheadercolor\" valign=\"top\"><td height=\"15\" align=\"right\" bgcolor=\"$fmenucolor\" width=\"18%\">$VMessage:</td>";
		echo "<td height=\"15\" bgcolor=\"$menucolor\" width=\"82%\"><textarea name=\"msg\" style=\"width: $textareawidth; max-width: 90%; min-width: 125px;\" rows=\"10\">$msg</textarea></td></tr>";
		echo "<tr bgcolor=\"$subheadercolor\" valign=\"top\"><td height=\"15\" align=\"right\" bgcolor=\"$fmenucolor\" width=\"18%\">&nbsp;</td>";
		echo "<td height=\"15\" bgcolor=\"$menucolor\" width=\"82%\"><input type=\"submit\" name=\"Submit\" value=\"$VSubmit\">";
		sbot(1);
	} else {
		$to=strip_tags($_POST['to']);
		$msg=strip_tags(stripslashes($_POST['msg']));
		$msg=obfuscateTextString($msg);
		$subj=strip_tags(stripslashes($_POST['subj']));
		$subj=obfuscateTextString($subj);
		$pmstat="1";
		if (trim($to)=="") {
			ErrorMessage($AuthorRequired,$liusername);
		} else {
			$filet=$dbpath."/pm/".$to;
			if (file_exists($filet)) {
				$filename = "$dbpath/pm/$to"."_tot";
				if (!file_exists($filename))
						{$filename=str_replace("_"," ",$filename);}
				$fd = fopen ($filename, "r");
				$num = fread ($fd, filesize ($filename));
				fclose ($fd);
				$num++;
				$fp = fopen("$dbpath/pm/$to"."_tot", "w");
				fputs($fp, $num);
				fclose($fp);
				$filename = "$dbpath/pm/$to";
				$fd = fopen ($filename, "r");
				$num = fread ($fd, filesize ($filename));
				fclose ($fd);
				$num++;
				$fp = fopen("$dbpath/pm/$to", "w");
				fputs($fp, $num);
				fclose($fp);

				setlocale(LC_TIME,$LangLocale);
				$date = time()+($timezone*3600);
				$fp = fopen("$dbpath/pm/$to"."_$num"."_a", "w");
				fputs($fp, $liusername);
				fclose($fp);
				$fp = fopen("$dbpath/pm/$to"."_$num"."_d", "w");
				fputs($fp, $date);
				fclose($fp);
				$fp = fopen("$dbpath/pm/$to"."_$num"."_c", "w");
				if ($msg==''){
					$msg='-- '.$VEmpty.' --';
				}
				fputs($fp, $msg);
				fclose($fp);
				$fp = fopen("$dbpath/pm/$to"."_$num"."_s", "w");
				fputs($fp, $subj);
				fclose($fp);
				$fp = fopen("$dbpath/pm/$to"."_$num"."_pmstat", "w");
				fputs($fp, $pmstat);
				fclose($fp);
				msg($VSent,"$MessageSent!");
//				echo "<meta http-equiv=\"Refresh\" content=\"0; URL=pm.php\">";
			} else {
					ErrorMessage($InvalidUsername,$liusername);
			}
		}
	}
	writefooter($newestm);
}else{
     include("login.php");
}
ob_end_flush();
?>
