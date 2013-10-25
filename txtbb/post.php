<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            post.php   -  PBLang
 *                            -------------------
 *
*              see the file docs/copyright.txt for more details
*
*			Last modified 27 February 2005
 ***************************************************************************/

require('header.php');
include($dbpath."/settings/styles/styles.php");
include_once("scan.php");
include_once("functions.php");
include_once("ffunctions.php");
$LF="\n";
global $loggedin;
$newthreadimg=GetImage($stylepref,'newthread','butt/');
$replyimg=GetImage($stylepref,'reply','butt/');
$lockedimg=GetImage($stylepref,'reply-locked','butt/');

$liusername=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($liusername,"0","0");
if ($permit=="1" || (!$loginreq && $permit=="0")) {
	$language=SetLanguage($liusername);
	include($temppath."/pb/language/lang_".$language.".php");
	$newthreadimg=GetImage($stylepref,'newthread','butt/');
	$replyimg=GetImage($stylepref,'reply','butt/');
	$lockedimg=GetImage($stylepref,'reply-locked','butt/');
	$cat=$_GET['cat'];
	$fid=$_GET['fid'];
	$pid=$_GET['pid'];
	$order=$_GET['order'];
	$page=$_GET['page'];
	$incrview=$_GET['v'];
	$allow=CheckPermissions($cat,$fid,$liusername);
	if (!$allow){
		$language=SetLanguage($liusername);
		include($temppath."/pb/language/lang_".$language.".php");
		writeheader("",0,0,0,$liusername,"1","");
		ErrorMessage($NoAccess,$liusername,$liusername);
		exit;
	}
	setlocale(LC_TIME,$LangLocale);
	$filename = $dbpath."/cats/".$cat."_".$fid;
	if (!file_exists($filename)) {
		WriteHeader("",0,0,0,$liusername,$loggedin,$VError);
		ErrorMessage($NoSuchForum,$liusername);
		exit;
	}
	$lockedforum=GetForumStatus($cat,$fid);
	SetLock();
	include($filename);
	$fpage=ceil($ftopics/$maxppp);
	if (file_exists($dbpath."/posts/".$cat."_".$fid."_".$pid)){
		include ($dbpath."/posts/".$cat."_".$fid."_".$pid);
	}else{
		writeheader("",0,0,0,$liusername,"1","");
		ErrorMessage($NoSuchFile,$liusername);
		exit;
	}
	if ($incrview!="0"){
		$pviews++;
		WritePostInfo($cat,$fid,$pid,"");
	}
	@unlink($dbpath.'/block');
	$locked=GetTopicStatus($cat,$fid,$pid);
	if ($liusername!=""){
		SetLock();
		include ($dbpath."/posts/".$cat."_".$fid."_".$pid);
		if (!strpos($pvisitors,$liusername)){
			$pvisitors.="|".$liusername;
			WritePostInfo($cat,$fid,$pid,"");
		}
		if (!strpos($fvisitors,$liusername)){
			$fvisitors=$fvisitors."|".$liusername;       //add visitor to readerlist of forum
			WriteForumInfo($cat,$fid);
		}
		unlink(  $dbpath.'/block');
	}
	$pname=replacestuff($psubject);
	$pauth=$pauthor;
/*	$pcont=textparse1($pcontent);
	$pcont=replacestuff($pcont);
*/
	$ppa=$pdate;
	setlocale(LC_TIME,$LangLocale);
	$ppa=strftime($DateFormat2,$ppa);

	if (($locked=="1" || $locked=='locked')&&$admin!='1') {
			$s="showitpostlocked";
	} else {
			$s="showit2";
	}
	writeheader($s,$cat,$fid,$pid,$liusername,$loggedin,$ViewPost." :: ".$pname);

	$filename=$dbpath."/members/".$liusername;
	if (file_exists($filename) && $loggedin=="1"){
		include($filename);
	}
	$admin=$useradmin;
	$moder=$usermod;
	$ban=$userban;
	if ($ban=="1") {
		ErrorMessage($banreason,$liusername);
		exit;
	} else {
		if ($maint=="1" && $admin=="0") {
			ErrorMessage($mreason,$liusername);
			exit;
		}
	}
	clearstatcache();
	$lockedforum=GetForumStatus($cat,$fid);
	include($dbpath."/cats/".$cat);
	include($dbpath."/cats/".$cat."_".$fid);
	$tops=$ftopics;
	$end=$tops-$maxppp;
	if ($maxrpp){
		$noofpages=ceil($preplies/$maxrpp);
	}
	$start=$tops;
	echo "<table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">";
	echo "<tr><td width=\"48%\"><font size=\"1\"></font></td><td width=\"52%\" align=\"right\">";
	if ($picturebuttons=="Yes"){
		$newthreaddisplay='<img src="'.$newthreadimg.'" border=0 alt="'.$newthreadalt.'" title="'.$newthreadtitle.'">';
		$replydisplay='<img src="'.$replyimg.'" border=0 alt="'.$replyalt.'" title="'.$replytitle.'">';
		$lockeddisplay='<img src="'.$lockedimg.'" border=0 alt="'.$lockedalt.'" title="'.$lockedtitle.'">';
		$connector=' ';
	}else{
		$newthreaddisplay=$VNewTopic;
		$replydisplay=$VReply;
		$lockeddisplay=$VLocked;
		$connector=' | ';
	}
	if ($locked=="0" && $lockedforum=="0" || $ustatus['admin']=="1") {
		echo '<a href="ntopic.php?cat=',$cat,'&fid=',$fid,'">',$newthreaddisplay,'</a> ';
	}
	if (($locked=="0" && ($lockedforum=="0" || $lockedforum=='2')) || $ustatus['admin']=="1") {
		echo $connector,'<a href="nreply.php?cat=',$cat,'&fid=',$fid,'&pid=',$pid,'&page=',$noofpages,'">',$replydisplay,'</a>';
	}
	if ($locked=="1" && $lockedforum=="0" && $ustatus['admin']=="0") {
		echo $connector,'<a href="ntopic.php?cat=',$cat,'&fid=',$fid,'">',$newthreaddisplay,'</A>',$connector,$lockeddisplay;
	}
	if ($lockedforum=="1" && $ustatus['admin']=="0") {
		echo $connector,$lockeddisplay;
	}
	echo "</td></tr></table>";

	echo "<table width=\"100%\" border=\"0\" cellpadding=\"$containerbordersize\" cellspacing=\"0\">";
	echo "<tr bgcolor=\"$containerborder\"><td height=\"2\">";
	echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr bgcolor=\"$containerinner\"><td height=\"2\">";
	echo "<table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\">";
	$forumname=replacestuff(stripslashes($fname));
	$catname=replacestuff(stripslashes($cname));
	$stitle=replacestuff(stripslashes($sitetitle));
	$pname=stripslashes($pname);
	echo "<tr><td class=\"header\" colspan=\"3\"><a href=\"index.php\">";
	echo "$stitle</a> :: $catname :: <a href=\"board.php?fid=$fid&cat=$cat&s=$start&e=$end\">";
	echo $forumname,'</a> :: ',$pname,'&nbsp; :: ';
	$currpage=$page;
	if ($noofpages>1){
		threadpages($currpage,$noofpages,$cat,$fid,$pid);
	}
	echo '</td></tr>';

	$authinfo=getauthorinfo($pauth,$liusername);
	$set['bgcol']=1;
	$pinfo=getpostinfo($cat,$fid,$pid,'',$currpage,$noofpages,$liusername);
	if ($pinfo['lockview']){
		ErrorMessage($VNoViewPermission.': &quot;'.$pinfo['subject'].'&quot;',$liusername);
		exit;
	}

	if ($_COOKIE[$cookieid]==trim($authinfo['name']) && !$pinfo['replies']) {
		$set['permitdel']="1";
	} else {
		$set['permitdel']="0";
	}
	if ($locked || $lockedforum){
		$set['lock']=1;
	}
	if ($page=="1"){
		disppost($authinfo,$pinfo,$admin,$set,$liusername);		//Display the first post of a thread
	}

	include($dbpath."/posts/".$cat."_".$fid."_".$pid);
	$rnum = $plastreply;
	if ($rnum>="1"){
		echo "<tr><td bgcolor=\"$menucolor\" height=\"12\" colspan=\"3\"><font style=\"color:$menufont\" color=\"$menufont\">$VOrderOfReplies:&nbsp;</font>";
		echo "<a href=\"post.php?cat=$cat&fid=$fid&pid=$pid&order=fl&page=1\">$VFirstReplyLast</a> :: ";
		echo "<a href=\"post.php?cat=$cat&fid=$fid&pid=$pid&order=ff&page=1\">$VFirstReplyFirst</a></td></tr>";
//	}
		if ($order=='fl'){
			$end=$rnum-($page*$maxrpp);
			$start=$rnum-($page-1)*$maxrpp;
			if ($start < '1'){
				$start='1';
			}
			if ($end < '1'){
				$end='1';
			}
			$i=$start;
			while ($i>=$end) {
				$rsubject='';
				$rauthor='';
				$filename=$dbpath.'/posts/'.$cat.'_'.$fid.'_'.$pid.'_r_'.$i;
				if (file_exists($filename)){
					@include($filename);
					$authinfo=getauthorinfo($rauthor,$liusername);
					$rinfo=getpostinfo($cat,$fid,$pid,$i,$currpage,$noofpages,$liusername);
	/****************** if ÜBERPRÜFEN!!! ***************************/
					if ($authinfo['removed']){
					}else{
						if ($set['bgcol']=='1') {
							$set['bgcol']=2;
							$done='1';
						}
						if ($set['bgcol']=='2' && $done=='0') {
							$set['bgcol']=1;
						}
						$done='0';
						if ($locked || $lockedforum){
							$set['lock']=1;
						}
						if ($_COOKIE[$cookieid]==trim($authinfo['name'])) {
							$set['permitdel']="1";
						} else {
							$set['permitdel']="0";
						}
						disppost($authinfo,$rinfo,$admin,$set,$liusername);		//Display the reply
					}
				}
				$i--;
			}
			if ($i<1){$i=1;}
		}else{
			$end=$page*$maxrpp;
			$start=(($page-1)*$maxrpp) + 1;
			if ($start > $rnum){
				$start=$rnum;
			}
			if ($end > $rnum){
				$end=$rnum;
			}
			$i=$start;
			while ($i<=$end) {
				$rsubject='';
				$rauthor='';
				$filename=$dbpath.'/posts/'.$cat.'_'.$fid.'_'.$pid.'_r_'.$i;
				if (file_exists($filename)){
					@include($filename);
					$authinfo=getauthorinfo($rauthor,$liusername);
					$rinfo=getpostinfo($cat,$fid,$pid,$i,$currpage,$noofpages,$liusername);
					if ($authinfo['removed']){
					}else{
						if ($set['bgcol']=='1') {
							$set['bgcol']=2;
							$done='1';
						}
						if ($set['bgcol']=='2' && $done=='0') {
							$set['bgcol']=1;
						}
						$done='0';
						if ($locked || $lockedforum){
							$set['lock']=1;
						}
						if ($_COOKIE[$cookieid]==trim($authinfo['name'])) {
							$set['permitdel']="1";
						} else {
							$set['permitdel']="0";
						}
						disppost($authinfo,$rinfo,$admin,$set,$liusername);		//Display the reply
					}
				}
				$i++;
			}
			if ($i>$end){$i=$rnum;}
		}
	}

	echo '</table></td></tr></table></td></tr></table>';

	echo '<table width="100%" border="0" cellpadding="2" cellspacing="0">';
	echo "<tr><td width=\"48%\">";
	if ($noofpages>1){
		threadpages($currpage,$noofpages,$cat,$fid,$pid);
	}
	echo "</td>";
	echo '<td width="52%" align="right">';
	if ($picturebuttons=='Yes'){
		if ($lockedforum=='0' || $admin=='1' || $lockedforum=='2') {
			if ($s=='showit2') {
				if ($lockedforum=='0' || $admin=='1'){
					echo '<a href="ntopic.php?cat=',$cat,'&fid=',$fid,'">
						<img src="'.$newthreadimg.'" border=0 alt="'.$newthreadalt.'" title="'.$newthreadtitle.'"></a>';
				}
				if ($lockedforum=='0' || $lockedforum=='2' || $admin=='1'){
					echo " <a href=\"nreply.php?cat=$cat&fid=$fid&pid=$pid&page=$noofpages\">
						<img src=\"$replyimg\" border=\"0\" alt=\"$replyalt\" title=\"$replytitle\"></a>";
				}
			} elseif ($s=='showitpostlocked') {
				echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">";
				echo "<img src=\"$newthreadimg\" border=\"0\" alt=\"$newthreadalt\" title=\"$newthreadtitle\"></A>";
				echo " <img src=\"$lockedimg\" border=\"0\" alt=\"$lockedalt\" title=\"$lockedtitle\">";
			}
		}
	}else{
		if ($lockedforum=="0" || $admin=="1" || $lockedforum=='2') {
			if ($s=='showit2') {
				if ($lockedforum=='0' || $admin=='1'){
					echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">$VNewTopic</a> | ";
				}
				if ($lockedforum=='0' || $lockedforum=='2' || $admin=='1'){
					echo "<a href=\"nreply.php?cat=$cat&fid=$fid&pid=$pid&page=$noofpages\">$VReply</a>";
				}
			} elseif ($s=="showitpostlocked") {
				echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">$VNewTopic</A> - $VLocked";
			}
		}
	}
	echo '</td></tr></table>',$LF;

	if ($admin=="1") {
		echo "<br><div align=\"right\">$VAdministrativeFunctions: ";
		$deletetopicimg=GetImage($stylepref,'deletetopic','');
		if ($picturebuttons=='Yes' && $deletetopicimg){
			echo "<a href=\"delpost.php?cat=$cat&fid=$fid&pid=$pid\">
				<img src=\"$deletetopicimg\" border=\"0\" alt=\"$DeleteTopic\" title=\"$DeleteTopic\"></a> ";
		}else{
			echo "<a href=\"delpost.php?cat=$cat&fid=$fid&pid=$pid\">$DeleteTopic</a> | ";
		}
		if ($locked=="0") {
			$locktopicimg=GetImage($stylepref,'locktopic','');
			if ($picturebuttons=='Yes' && $locktopicimg){
				echo "<a href=\"admin.php?do=lockpost&cat=$cat&fid=$fid&pid=$pid\">
				<img src=\"$locktopicimg\" border=\"0\" alt=\"$LockTopic\" title=\"$LockTopic\"></a>";
			}else{
				echo "<a href=\"admin.php?do=lockpost&cat=$cat&fid=$fid&pid=$pid\">$LockTopic</a>";
			}
		} elseif ($locked=="1") {
			$unlocktopicimg=GetImage($stylepref,'unlocktopic','');
			if ($picturebuttons=='Yes' && $unlocktopicimg){
				echo "<a href=\"admin.php?do=unlockpost&cat=$cat&fid=$fid&pid=$pid\">
				<img src=\"$unlocktopicimg\" border=\"0\" alt=\"$UnlockTopic\" title=\"$UnlockTopic\"></a>";
			}else{
				echo "<a href=\"admin.php?do=unlockpost&cat=$cat&fid=$fid&pid=$pid\">$UnlockTopic</a>";
			}
		}
		echo "</div>";

		$s=$newestm;
	}
	writefooter($newestm);
}
ob_end_flush();
?>

