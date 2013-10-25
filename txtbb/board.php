<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                        board.php  - PBLang
 *                            -------------------
 *
 *      see file copyright.txt in the docs-folder!!
 *
 *			Last modified 27 February 2005
 ***************************************************************************/

require ('header.php');
include_once("functions.php");
include_once("ffunctions.php");
include($dbpath."/settings/styles/styles.php");

$start=$_GET['s'];
$cat=$_GET['cat'];
$fid=$_GET['fid'];
$newthreadimg=GetImage($stylepref,'newthread','butt/');
$lockedimg=GetImage($stylepref,'reply-locked','butt/');

$liusername=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($liusername,"0","0");
$allow=CheckPermissions($cat,$fid,$liusername);
if ($allow=="1" || $admin=="1") {
	$language=SetLanguage($liusername);
	include($temppath."/pb/language/lang_".$language.".php");
	$newthreadimg=GetImage($stylepref,'newthread','butt/');
	$lockedimg=GetImage($stylepref,'reply-locked','butt/');

	$filename = $dbpath."/cats/".$cat."_".$fid;
	if (!file_exists($filename)) {
		ErrorMessage($NoSuchForum,$liusername);
		exit;
	}

	SetLock();
	include($filename);
	$tops = $ftopics;
	$ftot=$flastpostnumber;
	if ($liusername!="" && !strpos($fvisitors,$liusername)){
		$fvisitors=$fvisitors."|".$liusername;
	}
	WriteForumInfo($cat,$fid);
	Unlock();
	$j=0;
	if ($ftot!="0" && $ftot!="") {
		for($i=1;$i<=$ftot;$i++){
		$psubject='';
		$pauthor='';
			if (file_exists($dbpath.'/posts/'.$cat.'_'.$fid.'_'.$i.'_n')){
				ErrorMessage($VIncompleteUpdate,$liusername);
				exit;
			}
			@include($dbpath."/posts/".$cat."_".$fid."_".$i);
			if (trim($psubject)=='' && trim($pauthor)=='') {
			} else {
				$lpd = $plastdate;
				$plist[$j][0]=$lpd;
				$plist[$j][1]=$cat;
				$plist[$j][2]=$fid;
				$plist[$j][3]=$i;
				$j++;
			}
		}
	}
	$maxmess=$j-1;
	if ($start>=$maxmess){
		$start='s';
	}

	if (($start-$maxppp)>0 || ($start=='s' && $maxmess > $maxppp)) {
		$next=TRUE;
		if ($start=='s'){
			$newstart=$tops-($maxppp);
		}else{
			$newstart=$start-($maxppp);
		}
		$nu="board.php?cat=$cat&fid=$fid&s=$newstart";
	} else {
		$next=FALSE;
	}
	if ($start<$tops) {
		$prev=TRUE;
		$newstart2=$start+($maxppp);
		$pu="board.php?cat=$cat&fid=$fid&s=$newstart2";
	} else {
		$prev=FALSE;
	}

	$lockedforum=GetForumStatus($cat,$fid);

	writeheader("showit",$cat,$fid,0,$liusername,$loggedin,$ViewForum." :: ".$fname);
	echo '<div style="margin-bottom:3px">';
	if ($lockedforum=="0" || $admin=="1") {
		/*if ($picturebuttons=="Yes" && $newthreadimg !=""){
			echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\"><img src=\"$newthreadimg\" border=\"0\" alt=\"$newthreadalt\" title=\"$newthreadtitle\"></a>\n";
		}else{
			echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">$VNewTopic</a>\n";
		}*/
		echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">$VNewTopic</a>\n";
	}
	else{
		if ($lockedforum=="1" && $admin=="0"){
			/*if ($picturebuttons=="Yes" && $lockedimg != ""){
				echo "<img src=\"$lockedimg\" border=\"0\" alt=\"$lockedalt\" title=\"$lockedtitle\">";
			}else{
				echo "$VLocked";
			}*/
			echo "$VLocked";
		}elseif($lockedforum=='2' && $admin=='0'){
			/*if ($picturebuttons=="Yes" && $lockedimg != ""){
				echo '<img src="',$lockedimg,'" border="0" alt="',$lockedalt,'" title="',$lockedtitle,'"> ',$VRestrictedForum;
			}else{
				echo $VRestrictedForum;
			}*/
			echo $VRestrictedForum;
		}
	}
	echo '</div>';
	$nextpagelinks=btop($fid,$cat,$start,$next,$prev,$nu,$pu,$liusername);

	$j="0";
	if ($ftot=="0" || $ftot=="") {
		echo '<tr><td colspan=7 class="header"><b><center>',$NoTopics,'</center></b></td></tr>';
	} else {
		if ($fsticky>"0"){            //if there are sticky messages and it is the first page
			for ($a=1;$a<=$fsticky;$a++){
				$pid=chr(96+$a);
				if (file_exists($dbpath."/posts/".$cat."_".$fid."_".$pid)){
					@include($dbpath."/posts/".$cat."_".$fid."_".$pid);
					if (strpos($pvisitors,$liusername)){
						$tread="1";
					}else{
						$tread="0";
					}
					$locked=GetTopicStatus($cat,$fid,$pid);
					$plastdate=strftime($DateFormat1,$plastdate);
					bpiece($psubject,$pimage,$pauthor,$preplies,$pviews,$plastdate,$plastauthor,$fid,$cat,$pid,$locked,$loggedin,$tread,$liusername,1);
				}
			}
		}
		@sort($plist);
		if ($start=='s'){
			$i=$maxmess;
			$end=$maxmess-$maxppp+1;
		}else{
			$i=$start;
			$end=$start-$maxppp+1;
		}
		while ($i>=$end && $i>=0) {
			$lpd=trim($plist[$i][0]);
			if ($lpd!=''){
				$lpd = strftime($DateFormat1,$lpd);
			}
			$cata=$plist[$i][1];
			$fida=$plist[$i][2];
			$pida=$plist[$i][3];
			$psubject='';
			$fpvisitors=$pvisitors;
			$pvisitors='';
			@include($dbpath.'/posts/'.$cata.'_'.$fida.'_'.$pida);
			$subject=$psubject;
			if ($subject==''&&$pauthor==''){
				//nothing to do....
			}else{
				$icon=$pimage;
				if ($plock=="unlocked" || $plock=="") {
					$locked="0";
				} elseif ($plock=="locked") {
					$locked="1";
				}
				$author=$pauthor;
				$lpa=$plastauthor;
				$rep=$preplies;
				$view=$pviews;
				$pos=strpos($pvisitors,$liusername);
				if (strpos($pvisitors,$liusername)){
					$tread="1";
				}else{
					$tread="0";
				}
				if ($subject=="" && $author==""){                                                                                                                              //nothing to do
				}else{
					bpiece($subject,$icon,$author,$rep,$view,$lpd,$lpa,$fida,$cata,$pida,$locked,$loggedin,$tread,$liusername,0);
				}
			}
			clearstatcache();
			$i--;
		}         //end while
	}
}else{
	if ($liusername){
		$language=SetLanguage($liusername);
		include($temppath."/pb/language/lang_".$language.".php");
		writeheader("",0,0,0,$liusername,"1","");
	}else{
		include($temppath."/pb/language/lang_".$language.".php");
		writeheader("",0,0,0,$liusername,"0","");
	}
	ErrorMessage($NoAccess,$liusername,$liusername);
	exit;
}

//echo "</table>$nextpagelinks</td></tr></table></td></tr></table>";
//echo "<tr><td colspan=\"7\" bgcolor=\"$headercolor\">$nextpagelinks</td></tr></table></table></td></tr></table>";
echo "<tr><td class=\"header\" height=\"16\" colspan=\"7\" bgcolor=\"$headercolor\">";
 $nextpagelinks=bbottom($fid,$cat,$start,$next,$prev,$nu,$pu,$liusername);
echo "</td></tr></table></table></td></tr></table>";

echo '<div style="margin-top:3px;margin-bottom:3px;">';
if ($lockedforum=="0" || $admin=="1") {
	/*if ($picturebuttons=="Yes"){
		echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\"><img src=\"$newthreadimg\" border=\"0\" alt=\"$newthreadalt\" title=\"$newthreadtitle\"></a>\n";
	}else{
		echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">$VNewTopic</a>\n";
	}*/
	echo "<a href=\"ntopic.php?cat=$cat&fid=$fid\">$VNewTopic</a>\n";
}
else{
	if ($lockedforum=="1" && $admin=="0")
	{
		/*if ($picturebuttons=="Yes"){
			echo "<img src=\"$lockedimg\" border=\"0\" alt=\"$lockedalt\" title=\"$lockedtitle\">";
		}else{
			echo $VLocked;
		}*/
		echo $VLocked;
	}
}
echo '</div>';
if ($admin=="1") {
	echo "<div align=\"right\">$VAdministrativeFunctions:  ";
	$delforumimg=GetImage($stylepref,'deleteforum','');
	/*if ($picturebuttons='Yes' && $delforumimg){
		echo "<a href=\"admin.php?do=delforum&cnum=$cat&fnum=$fid\">
		<img src=\"$delforumimg\" border=\"0\" alt=\"$DeleteForum\" title=\"$DeleteForum\"></a>&nbsp;";
	}else{
		echo "<a href=\"admin.php?do=delforum&cnum=$cat&fnum=$fid\">$DeleteForum</a> | ";
	}*/
	echo "<a href=\"admin.php?do=delforum&cnum=$cat&fnum=$fid\">$DeleteForum</a> | ";
	if ($lockedforum=="0") {
		$lockforumimg=GetImage($stylepref,'lockforum','');
		/*if ($picturebuttons=='Yes' && $lockforumimg){
			echo "<a href=\"admin.php?do=lockforum&cat=$cat&fid=$fid\">
				<img src=\"$lockforumimg\" border=\"0\" alt=\"$VLockForum\" title=\"$VLockForum\"></a>\n";
		}else{
			echo "<a href=\"admin.php?do=lockforum&cat=$cat&fid=$fid\">$VLockForum</a> ";
		}*/
		echo "<a href=\"admin.php?do=lockforum&cat=$cat&fid=$fid\">$VLockForum</a> ";
	} elseif ($lockedforum=="1" || $lockedforum=='2') {
		$unlockforumimg=GetImage($stylepref,'unlockforum','');
		/*if ($picturebuttons=='Yes' && $unlockforumimg){
			echo "<a href=\"admin.php?do=unlockforum&cat=$cat&fid=$fid\">
				<img src=\"$unlockforumimg\" border=\"0\" alt=\"$VUnlockForum\" title=\"$VUnlockForum\"></a>\n";
		}else{
			echo "<a href=\"admin.php?do=unlockforum&cat=$cat&fid=$fid\">$VUnlockForum</a>";
		}*/
		echo "<a href=\"admin.php?do=unlockforum&cat=$cat&fid=$fid\">$VUnlockForum</a>";
	}
	echo "</div>";
}

echo "<br>\n";
/*$image1=getimage($stylepref,'ficon4','');
$image1a=getimage($stylepref,'ficon4_read','');
$image2=getimage($stylepref,'ficon2','');
$image2a=getimage($stylepref,'ficon2_read','');
$image3=getimage($stylepref,'ficon3','');
$image3a=getimage($stylepref,'ficon3_read','');
$image5=getimage($stylepref,'ficon2_sticky','');
$image5a=getimage($stylepref,'ficon2_sticky_read','');*/

/*echo '<table cellpadding=2 cellspacing=2><tr><td><img src="',$image2,'" alt="',$VImage,'"></td><td>',$OpenTopic,'</td>';
echo '<td><img src="',$image2a,'" alt="',$VImage,'"></td><td> ',$OpenTopicread,'</td></tr>';
echo '<td><img src="',$image1,'" alt="',$VImage,'"></td><td> ',$OpenTopic20,'</td>';
echo '<td><img src="',$image1a,'" alt="',$VImage,'"></td><td> ',$OpenTopic20read,'</td></tr>';
echo '<td><img src="',$image3,'" alt="',$VImage,'"></td><td> ',$LockedTopic,'</td>';
echo '<td><img src="',$image3a,'" alt="',$VImage,'"></td><td> ',$LockedTopicread,'</td></tr>';
echo '<td><img src="',$image5,'" alt="',$VImage,'"></td><td> ',$StickyMessage,'</td>';
echo '<td><img src="',$image5a,'" alt="',$VImage,'"></td><td> ',$StickyMessageread,'<BR></td></tr></table>';*/

if (!(isset($V_noicon_new))) {
	$V_noicon_new = "N";
}
if (!(isset($V_noicon_read))) {
	$V_noicon_read = "R";
}
if (!(isset($V_noicon_locked))) {
	$V_noicon_locked = "L";
}
if (!(isset($V_noicon_sticky))) {
	$V_noicon_sticky = "S";
}
echo '<table cellpadding=2 cellspacing=2>';
echo '<tr><td><span>' . $V_noicon_new . '</span></td><td>',$OpenTopic,'</td>';
echo '<td><span>' . $V_noicon_read . '</span></td><td> ',$OpenTopicread,'</td></tr>';
//echo '<td><span>' . $V_noicon_new . '</span></td><td> ',$OpenTopic20,'</td>';
//echo '<td><span>' . $V_noicon_new . '</span></td><td> ',$OpenTopic20read,'</td></tr>';
echo '<td><span>' . $V_noicon_new . "/" . $V_noicon_locked . '</span></td><td> ',$LockedTopic,'</td>';
echo '<td><span>' . $V_noicon_read . "/" . $V_noicon_locked . '</span></td><td> ',$LockedTopicread,'</td></tr>';
echo '<td><span>' . $V_noicon_new . "/" . $V_noicon_sticky . '</span></td><td> ',$StickyMessage,'</td>';
echo '<td><span>' . $V_noicon_read . "/" . $V_noicon_locked . '</span></td><td> ',$StickyMessageread,'<br></td></tr></table>';


writefooter($newestm);

ob_end_flush();
?>
