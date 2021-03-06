<?php

/**
 * Copyleft (C) 2013 txtBB
 * */
 
/***************************************************************************
 *                            nreply.php  - PBLang
 *                            -------------------
 *
 *                  see copyright.txt in the docs-folder
 *
*			Last modified 27 February 2005
 ***************************************************************************/

require ('header.php');
include($dbpath."/settings/styles/styles.php");
include_once("scan.php");
include_once("functions.php");
include_once("ffunctions.php");

$liusername=$_COOKIE[$cookieid];
$boardlang=$language;
include($temppath.'/pb/language/lang_'.$boardlang.'.php');
$VREprefix=$VRE;
$fid=trim($_GET['fid']);
$cat=trim($_GET['cat']);
$pid=trim($_GET['pid']);
$quote=trim($_GET['q']);

$permit=CheckLoginStatus($liusername,"1","0");
if ($permit=="1") {
	include($dbpath."/members/".$liusername);
	$admin=$useradmin;
	$animsmil=$useranimsmilies;
	$language=SetLanguage($liusername);
	include($temppath."/pb/language/lang_".$language.".php");
	setlocale(LC_TIME,$LangLocale);
	writeheader($newestm,0,0,0,$liusername,"1",$PostReply);
	$idnum=$_GET['idnum'];
	$lastpage=$_GET['page'];
	if (trim($idnum)=="") {
		$lockedforum=GetForumStatus($cat,$fid);
		if ($lockedforum=="1" && $admin!="1") {
			ErrorMessage($NoReplyInLockedForum,$liusername);
		} elseif ($lockedforum=="0" || $admin=="1" || $lockedforum=='2') {
			$filename=$dbpath."/posts/".$cat."_".$fid."_".$pid;
			if ($plock=="unlocked") {
				$locked="0";
			} elseif ($plock=="locked") {
				$locked="1";
				ErrorMessage($NoReplyInLockedTopic,$liusername);
				exit;
			}
			$pname = $psubject;
			$lockedforum=GetForumStatus($cat,$fid);

			if ($lockedforum=="1" && $admin!="1") {
				ErrorMessage($NoReplyInLockedForum,$liusername);
				exit;
			} elseif ($lockedforum=="0" || $admin=="1" || $lockedforum=="2") {
				include($dbpath."/cats/".$cat);
				$catname=replacestuff($cname);
				include($dbpath."/cats/".$cat."_".$fid);
				$forumname=replacestuff($fname);
				$stitle=replacestuff($sitetitle);
				$fptopics=$flastpostnumber;
				include($dbpath."/posts/".$cat."_".$fid."_".$pid);
				$pname=$psubject;
				$pauth=$pauthor;
				$pcont=$pcontent;
				if ($censor=="1") {
						$pcont=wcensor($pcont,$liusername);
				}
				if (!$quote || $quote=='p'){
					$qcont=$pcont;
				}else{
					include($dbpath."/posts/".$cat."_".$fid."_".$pid.'_r_'.$quote);
					$qcont=$rcontent;
				}
				$pcont=replacestuff($pcont);
				$ppa=strftime($DateFormat2,$pdate);
				$start=$fptopics-15;
				$end=$fptopics;
				//echo "<script language=\"JavaScript1.2\" src=\"ubbc.js\" type=\"text/javascript\"></script>";
				$form_tag="\n";
				$form_tag.='<form action="nreply.php?idnum=2" name="postmodify" enctype="multipart/form-data" method="POST"
				target="'.$frameset.'" accept-charset="'.$charsets.',utf-8,utf-16,ucs-2,KSC_5601,iso-2022,euc-kr,iso-2022-kr,korean">'."\n";
				WriteTableTop($form_tag);

				echo "<tr><td class=\"header\" colspan=\"2\"><a href=\"index.php\">";
				echo "$stitle :: $catname</a> :: <a href=\"board.php?fid=$fid&cat=$cat&s=$end&e=$start\">";
				echo "$forumname</a> :: $VReply</td></tr>";
				echo "<tr><td class=\"subheader\" colspan=2><b>$VPreviousMessages:</b></td></tr>";
			}
			echo "<tr><td colspan=\"2\" bgcolor=\"$forumbuttoncolor\">&quot;<b>$pname</b>&quot; $VBy  $pauth $VOn  $ppa</td></tr>";
			echo "<tr><td colspan=\"2\" bgcolor=\"$menucolor\">$pcont</td></tr>";

			$rnum = $plastreply;
			$i="1";
			if ($rnum > $maxposts){
				$i=$rnum-($maxposts-1);
			}
			while ($i<=$rnum) {
				if(@include($dbpath."/posts/".$cat."_".$fid."_".$pid."_r_".$i)){
					$rsub=$rsubject;
					$rcont=$rcontent;
					$rauthfile=$dbpath.'/members/'.$rauthor;
					if (file_exists($rauthfile)){
						include ($dbpath.'/members/'.$rauthor);
						$rauth=$useralias;
					}else{
						$rauth=$VMemberRemoved;
					}
					$rpa=strftime($DateFormat2,$rdate);
					if ($censor=="1"){
						$rcont=wcensor($rcont,$rauthor);
					}
					if ($quote==$i){
						$qcont=$rcont;
					}
					$rcont=replacestuff($rcont);
					if ($altcol==1){
						$bgcol=$menucolor;
						$altcol=0;
					}else{
						$bgcol=$fmenucolor;
						$altcol=1;
					}
					$rsub=$rsubject;
					if ($rcont!="" && $rsub!=""){
						echo "<tr><td colspan=\"2\" bgcolor=\"$forumbuttoncolor\">&quot;<b>$rsub</b>&quot; $VBy  $rauth $VOn  $rpa<br></td></tr>";
						echo "<tr><td colspan=\"2\" bgcolor=\"$menucolor\">$rcont</td></tr>";
					}
				}
				$i++;
			}

			echo "<tr><td class=\"subheader\" colspan=\"2\">$VPost $VOptions :: </td></tr>";
			echo "<tr></tr>";
			echo "<td class=\"label\" width=\"19%\">$VUsername:</td>";
			echo "<td height=\"22\" bgcolor=\"$menucolor\" width=\"81%\"> $liusername</td></tr>";
			echo "<tr>";
			echo "<td class=\"label\" width=\"19%\">".$VSubject.":</td>";
			echo "<td height=\"22\" bgcolor=\"$menucolor\" width=\"81%\">";
			echo "<input type=\"text\" name=\"subject\" style=\"width: $textareawidth; max-width: 90%; min-width: 125px;\" value=\"$VREprefix: $pname\">";
			echo "<input type=\"hidden\" name=\"fid\" value=\"$fid\" size=\"4\">";
			echo "<input type=\"hidden\" name=\"cat\" value=\"$cat\" size=\"4\">";
			echo "<input type=\"hidden\" name=\"cat\" value=\"$cat\" size=\"4\">";
			echo "<input type=\"hidden\" name=\"page\" value=\"$lastpage\" size=\"5\">";
			echo "<input type=\"hidden\" name=\"pid\" value=\"$pid\" size=\"9\"></td></tr>";
			//PrintSmileys($animsmil,$admin,$language);
			//PrintPBCode($admin,$language);
			echo "<tr><td class=\"label\" width=\"19%\"><font color=\"$menufont\">".$VContent.":</font></td>";
			echo "<td height=\"22\" bgcolor=\"$menucolor\" width=\"81%\">";
			echo "<textarea name=\"message\" rows=\"12\" style=\"width: $textareawidth; max-width: 90%; min-width: 125px;\">";
			if ($quote!=""){
				echo chr(91)."quote".chr(93).$qcont.chr(91)."/quote".chr(93);
			}
			echo "</textarea></td></tr>";
			echo "<tr><td class=\"label\" width=\"19%\">$VAttachment:</td>";
			echo "<td height=\"22\" bgcolor=\"$menucolor\" width=\"81%\">";

			if ($noatch=="1" && $admin=="0") {
				echo $NoAttachments."!";
			} else {
				echo "<input type=\"file\" name=\"fileupload\" style=\"width: $textareawidth; max-width: 90%; min-width: 125px;\">";
			}
			echo "</td></tr>";
			if ($emsupp=="1"||$smtpmail){
				echo "<tr><td  class=\"label\">$EmailNotification: </td>";
				echo "<td  class=\"content\"><input type=\"checkbox\" name=\"EMNotify\"";
				if (strpos($pnotify,$liusername)){
					echo ' checked';
				}
				echo ">&nbsp;$VNotifyByEmail?</td></tr>";
			}
			echo "<tr><td class=\"subheader\" colspan=\"2\">$VSubmitForm :: </td></tr>";
			echo "<tr><td class=\"label\" width=\"19%\">&nbsp;</td>";
			echo "<td height=\"22\" bgcolor=\"$menucolor\" width=\"81%\">";
			echo "<input type=\"submit\" name=\"Submit\" value=\"$VSubmit\">&nbsp;";
			echo "<input type=\"reset\" name=\"Submit2\" value=\"$VReset\">";
			sbot(1);
		}
	}

//This is executed when the form has been submitted (the new reply)
	if ($idnum=="2") {
		$user=$_COOKIE[$cookieid];
		$sub=stripslashes($_POST['subject']);
//          $sub=$_POST['subject'];
		$select=$_POST['select'];
		$msg=stripslashes($_POST['message']);
		$fid=trim($_POST['fid']);
		$cat=trim($_POST['cat']);
		$pid=trim($_POST['pid']);
		$lastpage=trim($_POST['page']);
		$EMnotify=$_POST['EMNotify'];
		$zero="0";

		if ($fileupload_name != "") {
			if ($noatch=="1" && $admin=="0") {
				ErrorMessage($UploadsNotAllowed,$liusername);
				exit;
			} else {
				$alreadythere=1;
				$fileupldname=$fileupload_name;
//				$fext=substr($fileupload_name,strlen($fileupload_name)-3);
				$fext=substr($fileupload_name,strrpos($fileupload_name,'.')+1);
				if (diskfreespace($mainpath."/attachments")>$minspace){
					$typeallowed=Checkfiletype($fext);
					if ($typeallowed || !strstr($fileupload_name,".")){
//					if ($fext=="txt" || $fext=="gif" || $fext=="jpg" || $fext=="tif" || $fext=="zip" || $fext=="pdf" || $fext=="rar" || !strstr($fileupload_name,".")){
						$target=$mainpath."/attachments/".$fileupldname;
						while($alreadythere){
							if (file_exists($mainpath."/attachments/".$fileupldname)){
								$counter++;
								$fileupldname=$counter.$fileupload_name;
							}else{
								$alreadythere=0;
							}
						}
						$target=$mainpath."/attachments/".$fileupldname;
						copy($fileupload, $target);
						if (filesize($target)>$maxatchsize && $maxatchsize!="0"){
							ErrorMessage($VFileTooBig,$liusername);
							unlink($target);
							exit;
						}else{
//                                   $msg .="\n\n $VAttachment: <a href=\"attachments/$fileupldname\" target=\"_blank\">$fileupldname</a>";
							$msg .="\n\n[b] ".$VAttachment."[/b]: [att]".$fileupldname."[/att]";
//							$msg .="<br><br> ".$VAttachment.": [att]".$fileupldname."[/att]";
						}
					}else{
						$filename=$dbpath.'/settings/attachtypes';
						$fd = fopen ($filename, "r");
						$attachtypelist = fread ($fd, filesize ($filename));
						fclose($fd);
						ErrorMessage($VForbiddenType." ".$attachtypelist,$liusername);
						exit;
					}
				}else{
						ErrorMessage($VQuotaExceeded,$liusername);
						exit;
				}
			}
		}
		$filename=$dbpath."/posts/".$cat."_".$fid."_".$pid;
		$dude = time()+($timezone*3600);
		SetLock();
		include($filename);
		$plastreply++;
		$preplies++;
		$plastdate=$dude;
		$plastauthor=$user;
		$pvisitors="|".$user;
		if ($EMnotify=="on" && !strpos($pnotify,$user)){
			$pnotify=$pnotify."|".$user;
		}
		WritePostInfo($cat,$fid,$pid,"");
		unlink(  $dbpath.'/block');

		$url="post.php?cat=$cat&fid=$fid&pid=$pid&page=1";
		SetLock();
		include($dbpath."/cats/".$cat."_".$fid);
		$freplies++;
		$flasturl=$url;
		$flastauthor=$user;
		$flastpost=$dude;
		$fvisitors="|".$user;
		WriteForumInfo($cat,$fid);
		unlink($dbpath.'/block');

		if ($sub==""){
			$sub="--- $VNoSubject ---";
		}
		$rsubject=textparse($sub);
		$rcontent=textparse($msg);
		$rauthor=$user;
		$rdate=$dude;
		$rip = GetIPAddress();
		SetLock();
		WriteReplyInfo($cat,$fid,$pid,$plastreply);
		WriteLatestPosts($cat,$fid,$pid,$plastreply);
		unlink($dbpath.'/block');

		include($dbpath."/members/".$user);
		$userposts++;
		$userlastpost=$dude;
		$userip = GetIPAddress();
		WriteUserInfo($user);

		if ($userrank!="6" && $userrank!="7" && $userrank!="8" && $userrank!="9") {
			include($dbpath."/members/".$user);
			updatestatus($user);
			WriteUserInfo($user);
		}

		include($dbpath."/posts/".$cat."_".$fid."_".$pid);
		include($dbpath."/cats/".$cat."_".$fid);
		$purl=$homeurl.'/post.php?cat='.$cat.'&fid='.$fid.'&pid='.$pid.'&page=1';
		if ($pnotify!="" && ($emsupp=="1" || $smtpmail)){
			$notifylist=explode("|",$pnotify);
			$notifycount=count($notifylist);
			$oldlanguage=$language;
			for($i=1;$i<=$notifycount-1;$i++){
				if ($notifylist[$i]!=$user){
					include($dbpath."/members/".$notifylist[$i]);
					$ulanguage=SetLanguage($notifylist[$i]);
					$header=mailheader();
					if ($ulanguage!=$oldlanguage){
						include($temppath."/pb/language/lang_".$ulanguage.".php");
						$oldlanguage=$ulanguage;
					}
					if ($emsupp){
						mail($useremail,$VReplySent,$NotifyReplySent."\n\n$purl - \n\n\"$psubject\" $VIn \"$fname\"\n\n $VBy $user",$header);
					}elseif($smtpmail){
						SendMail($useremail,$VReplySent,$NotifyReplySent."\n\n$purl - \n\n\"$psubject\" $VIn \"$fname\"\n\n $VBy $user");
					}
				}
			}
		}
		if ($notifyadminrepl && ($emsupp || $smtpmail)){
			include($dbpath."/cats/".$cat."_".$fid);
			include($dbpath."/cats/".$cat);
			include($temppath."/pb/language/lang_".$boardlang.".php");
			$header=mailheader();
			if ($emsupp){
				mail($adminemail,"$VNewReply $VIn $sitetitle","$VNewReply $VIn $cname :: $fname \n\n$purl - \n\n\"$psubject\" $VBy $user",$header);
			}elseif($smtpmail){
				SendMail($adminemail,"$VNewReply $VIn $sitetitle","$VNewReply $VIn $cname :: $fname \n\n$purl - \n\n\"$psubject\" $VBy $user");
			}
		}
			$language=SetLanguage($liusername);
			if ($language!=$oldlanguage){
				include($temppath."/pb/language/lang_".$language.".php");
			}
		msg("$VPosted","$PostWait!");
		if (!$lastpage){
			$lastpage='1';
		}
		echo "<meta http-equiv=\"Refresh\" content=\"0; URL=post.php?cat=$cat&fid=$fid&pid=$pid&page=$lastpage&v=0\">";
	}
	writefooter($newestm);
}
ob_end_flush();
?>


