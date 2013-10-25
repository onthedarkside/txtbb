<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                          PBLang -  index.php
 *                            -------------------
 *             see docs/copyright.txt for details
 *
*			Last modified 27 February 2005
 ***************************************************************************/

require ('header.php');
@include($dbpath."/stats");
include_once("functions.php");
include_once("ffunctions.php");
include_once("scan.php");
include($dbpath."/settings/styles/styles.php");


$cookieset=$_GET['cookie'];
$liusername=$_COOKIE[$cookieid];
$ip=GetIPAddress();
if ($liusername=="") {
	if ($cookieset=="1"){
		writeheader($newestm,$cat,$fid,$pid,$liusername,$login,$VError);
		ErrorMessage($VCookieError,$liusername);
		exit;
	}
	$loggedin="0";
	$admin="0";
	$allow="1";
	//check if visitor is already registered as guest, using the IP-address
	$filename=$dbpath."/guests";
	$iplist=@file($filename);
	$ipcount=count($iplist);
	$found="0";
	$exptime=time()+21600;
	for ($i=0;$i<=$ipcount;$i++){
		$idcont=$iplist[$i];
		$ipaddr=strtok($idcont,",");
		$iptime=strtok(",");
		if ($ip==$ipaddr && trim($ipaddr)!=""){
			$content.=$ipaddr.",".$exptime."\n";
			$found="1";
		}else{
			if ($iptime>time()){
					$content.=$ipaddr.",".$iptime."\n";
			}
		}
	}
	if ($found=="0"){
		$content.=$ip.",".$exptime."\n";
		UpdateGuestCount("1");
	}
	SetLock();
	$fp=@fopen($filename,"w");
	@fputs($fp,$content);
	@fclose($fp);
	Unlock();
} else {		//this is a logged in member, so some data must be updated for that member
	$filename = $dbpath."/members/".$liusername;
	if (!file_exists($filename)) {
		$loggedin="0";
	} else {
		include($filename);
		if ($userip!=$ip && $checkip=="1") {
			echo "<meta http-equiv=\"Refresh\" content=\"0; URL=logout.php\">";
			$allow="0";
			exit;
		} else {
			$allow="1";
		}
		$loggedin="1";
		if ($cookieset=="1"){
			$userprevvisit=$userlastvisit;
			$uservisits++;
			$userlastvisit=time()+($timezone*3600);
			WriteUserInfo($liusername);
			if(!file_exists($dbpath.'/online/'.$liusername)){
				UpdateStats($liusername,$useralias);
				UpdateGuestCount("0");
			}
			include($dbpath.'/stats');
		}
		$admin=$useradmin;
		$moder=$usermod;
		$ban=$userban;
	}
}

if ($ban=="1") {
	writeheader('',0,0,0,'',0,$VError);
	ErrorMessage($banreason,$liusername);
	exit;
} else {
	if ($maint=="1" && $admin=="0") {
		writeheader($newestm,$cat,$fid,$pid,$liusername,$login,$VError);
		ErrorMessage($mreason,$liusername);
		exit;
	} else {
	if ($loginreq=="1" && $loggedin=="0") {
		echo "<meta http-equiv=\"Refresh\" content=\"0; URL=login.php?do=req\">";
		exit;
	} else {
		$titlesize=substr($fontsize,0,strlen($fontsize)-2);
		$descrsize=$titlesize-1;
		if ($allow=="1") {
			$language=SetLanguage($liusername);
			include($temppath."/pb/language/lang_".$language.".php");
			$totposts="0";
			$tottop="0";
			$filename = $dbpath."/mems";
			$fd = fopen ($filename, "r");
			$mems = fread ($fd, filesize ($filename));
			fclose ($fd);
			$filename = $dbpath."/settings/newestm";
			$fd = @fopen ($filename, "r");
			$newestuser = @fread ($fd, filesize ($filename));
			$newestm="top";
			@fclose ($fd);
			if ($newestuser){
				@include($dbpath.'/members/'.$newestuser);
			}
			$newestmem=$useralias;
			writeheader($newestm,0,0,0,$liusername,$loggedin,$VIndex);
			WriteTableTop('');
			echo "\n<tr>";
			echo "<td width=\"62%\" colspan=2 class=\"header\"><B>$VForum</B></td>\n";
			echo "<td width=\"6%\" class=\"header\"><B>$VTopics</B></td>\n";
			echo "<td width=\"5%\" class=\"header\"><B>$VReplies</B></td>\n";
			echo "<td width=\"22%\" class=\"header\"><B>$VLastPost</B></td></tr>\n";

			$filename = $dbpath."/cats/cats";
			$fd = fopen ($filename, "r");
			$totalcats = fread ($fd, filesize ($filename));
			fclose ($fd);
			$i="1";
			while ($i<=$totalcats) {
				// START CAT
				if (file_exists($dbpath.'/cats/'.$i.'_d')){
					ErrorMessage($VIncompleteUpdate,$liusername);
					exit;
				}
				$filename=$dbpath."/cats/".$i;
				if (file_exists($filename)){
					include($filename);
					$name=replacestuff($cname);
					$desc=replacestuff($cdescription);
				}else{
					$name="";
					$desc="";
				}

				if (trim($name)!=""){
					if ($name=="delplz") {
					} else {
						echo "<tr bgcolor=\"$subheadercolor\">";
						if ($admin!="1"){
							$colsp=5;
						}else{
							$colsp=2;
						}
						echo "<td colspan=\"$colsp\" class=\"subheader\">";
						echo "$name<br><font style=\"font-size:".$descrsize."px\">$desc</font></td>\n";
						if ($admin=="1"){
							echo "<td class=\"subheader\" colspan=3>";
							$delcatimg=GetImage($stylepref,'deleteforum','');
							if ($picturebuttons=='Yes' && $delcatimg){
								echo "$VAdministrativeFunctions: <a href=\"admin.php?do=delcat&cnum=$i\">";
								echo "<img src=\"$delcatimg\" border=\"0\" alt=\"$VDeleteCat\" title=\"$VDeleteCat\"></a></td>\n";
							}else{
								echo "$VAdministrativeFunctions: <a href=\"admin.php?do=delcat&cnum=$i\">$VDeleteCat</a></td>\n";
							}
						}
					}
					// END SHOW CAT

					$forumnum = $cforums;
					$e="1";
					while ($e<=$forumnum) {
						if (file_exists($dbpath.'/cats/'.$i.'_'.$e.'_f_d')){
							ErrorMessage($VIncompleteUpdate,$liusername);
							exit;
						}
						$filename=$dbpath."/cats/".$i."_".$e;
						if (file_exists($filename)){
							include($filename);
							$forumname=replacestuff($fname);
							$forumdescription=replacestuff($fdescription);
						}else{
							$fname="";
							$fdescription="";
						}

						if ($fname=="" && $fdescription==""){
						}else{
							if (strstr($fvisitors,$liusername)){
								$fread="1";
							}else{
								$fread="0";
							}
							$accallowed=CheckPermissions($i,$e,$liusername);

							$tottop=$tottop+$ftopics;
							$totposts=$totposts+$freplies;

							//display forum details
							$lastp=$ftopics-$maxppp;
							if (trim($fname)=="delplz") {
							} else {
								echo "<tr bgcolor=\"$forumbuttoncolor\">";
								echo "<td class=\"leftindex\" width=\"5%\" height=\"20\" align=\"center\" bgcolor=\"$forumbuttoncolor\">\n";
								if ($fread != "1" && $accallowed=="1"){
									$forumimg=GetImage($stylepref,'ficon_n','');
								}elseif ($accallowed=="0"){
									$forumimg=GetImage($stylepref,'ficon_accessdenied','');
								}elseif ($fread=="1" && $accallowed=="1"){
									$forumimg=GetImage($stylepref,'ficon_read','');
								}
								if (!$flastpost){
								}else{
									$flastpost=strftime($DateFormat3,$flastpost);
								}
								echo "<img src=\"$forumimg\" alt=\"$VImage\"></td>\n";
								echo "<td width=\"50%\" ";
								echo "onMouseOver=\"this.style.backgroundColor='$forumbuttonover';this.style.cursor='hand'\"";
								echo "onClick=\"document.location.href='board.php?cat=$i&fid=$e&s=s'\"";
								echo "onMouseOut=\"this.style.backgroundColor='$forumbuttoncolor';this.style.cursor='hand';\" height=\"18\" bgcolor=\"$forumbuttoncolor\">\n";
								echo "<a href=\"board.php?cat=$i&fid=$e&s=s\">$forumname</a><br>\n";
								echo "<font style=\"font-size:".$descrsize."px\">$forumdescription</font></td>";
								echo "<td width=\"6%\" height=\"18\" bgcolor=\"$forumbuttontopics\"><div align=\"center\">$ftopics</div></td>\n";
								echo "<td width=\"5%\" height=\"18\" bgcolor=\"$forumbuttonreplies\"><div align=\"center\">$freplies</div></td>\n";
								echo "<td width=\"34%\" height=\"18\" style=\"text-align:left; background-color=$forumbuttonlast;\">\n";
								if (file_exists($dbpath."/members/".$flastauthor)&&$loggedin=="1" && $flastauthor!=""){
									include($dbpath."/members/".$flastauthor);
									$rankcol=Setaliasstyle($userrank);
WriteLog('log.txt','rankcol: '.$rankcol.' - userrank: '.$userrank.' - useralias: '.$useralias);
									$lastauthor="<a href=\"profile.php?u=$flastauthor\" title=\"$VProfileFor $useralias\" alt=\"$VProfileFor $useralias\"><span class=\"$rankcol\">".$useralias."</span></a>";
								}elseif (file_exists($dbpath."/members/".$flastauthor) && $flastauthor!=""){
									include($dbpath."/members/".$flastauthor);
									$rankcol=Setaliasstyle($userrank);
									$lastauthor='<span class="'.$rankcol.'">'.$useralias.'</span>';
								}else{
									$lastauthor=$flastauthor;
								}
								if ($flastpost){
									echo "$flastpost&nbsp;$VBy&nbsp;$lastauthor";
									if ($accallowed=="1"){
										$lastimg=GetImage($stylepref,'last','');
										echo "<a href=\"$flasturl\"><img src=\"$lastimg\" border=\"0\" alt=\"$VLastPost\"></a></td></tr>\n";
									}else{
										echo "</td></tr>\n";
									}
								}else{
									echo $VNever,'</td></tr>',"\n";
								}
							}
						}
						$e++;
					}
				}
				$i++;
			}
			echo "</table></td></tr></table></td></tr></table>";
			$memimg=GetImage($stylepref,'mem','');
			if ($loggedin=="0") {
				echo "<br>";
				$form_tag="\n";
				$form_tag.='<form action="login.php?id=2" method="POST" target="'.$frameset.'">'."\n";
				WriteTableTop($form_tag);
				echo "<tr><td colspan=\"2\" class=\"header\" ><b>$VLogin</b></td></tr>\n";
				echo "<tr bgcolor=\"$fmenucolor\"><td class=\"leftindex\" height=\"33\" align=\"center\">";
				echo "<img src=\"",$memimg,"\" alt=\"",$VImage,"\"></td>\n";
				echo "<td width=\"95%\" height=\"33\" valign=\"middle\" bgcolor=\"$menucolor\">";
				echo "$VUsername:&nbsp;<input type=\"text\" name=\"user\">";
				echo "&nbsp;&nbsp;$VPassword:&nbsp;<input type=\"password\" name=\"pass\">\n";
				echo "<input type=\"submit\" name=\"Submit\" value=\"$VSubmit\">";
				sbot(1);
			}
			if ($loggedin=="1") {
				echo "<br>";
				WriteTableTop('');
				echo "<tr bgcolor=\"$headercolor\"><td colspan=\"4\" class=\"header\"><b>$VUserControlCenter";
				if ($admin=="1") {
					echo "&nbsp;(<a href=\"admin.php\">$AdminCenter</a>)<br>";
				}
				echo '</b></td></tr>',"\n";
				echo '<tr bgcolor="',$fmenucolor,'"><TD class="indexleft" align="center">';
				echo "<img src=\"",$memimg,"\" alt=\"",$VImage,"\"></td>\n";
				echo "<td width=\"33%\" height=\"5\" valign=\"top\" bgcolor=\"$menucolor\"><b><a href=\"ucp.php\">$VUserControlPanel</a></b><br></td>";
				echo "<td width=\"33%\" height=\"5\" valign=\"top\" bgcolor=\"$menucolor\"><b><a href=\"pm.php\">$PrivateMessaging</a></b></td>";
				echo "<td width=\"33%\" height=\"5\" valign=\"top\" bgcolor=\"$menucolor\"><b><a href=\"logout.php\">$VLogout</a></b></td></tr>";
				echo "</table></td></tr></table></td></tr></table>";
			}

			echo "<br>";
			WriteTableTop('');
			$listlatestposts=@file($dbpath."/settings/latestposts");
			$nrofposts=@count($listlatestposts);
			if ($maxlatest<$nrofposts){
				$halfone=ceil($maxlatest/2);
			}else{
				$halfone=ceil($nrofposts/2);
			}
			if ($halfone > 2){
				$colspn=3;
			}else{
				$colspn=2;
			}
			echo "<tr bgcolor=\"$headercolor\"><td colspan=\"$colspn\" class=\"header\">";
			echo "<b>$sitetitle :: $VLatestPosts</b></td></tr>";
			echo "<tr bgcolor=\"$fmenucolor\"><td  class=\"indexleft\" height=\"25\" align=\"center\">";
			$newestimg=GetImage($stylepref,'ficon_newest','');
			echo "<img src=\"$newestimg\" alt=\"$VImage\"></td>";
			if ($halfone > "2"){
				echo "<td width=\"47%\" height=\"25\" valign=\"top\" bgcolor=\"$menucolor\"><font style=\"font-size:".$descrsize."px\">";
			}else{
				echo "<td width=\"95%\" height=\"25\" valign=\"top\" bgcolor=\"$menucolor\"><font style=\"font-size:".$descrsize."px\">";
			}
			$noofposts=1;
			for ($i=0;$i<=$nrofposts;$i++){
				if(trim($listlatestposts[$i])!=''){
					$catid=strtok($listlatestposts[$i],"|");
					$forid=strtok("|");
					$postid=trim(strtok("|"));
					if (substr_count($listlatestposts[$i],'|')==3){
						$repid=trim(strtok('|'));
						$filename=$dbpath.'/posts/'.$catid.'_'.$forid.'_'.$postid.'_r_'.$repid;
						$isreply=TRUE;
					}else{
						$filename=$dbpath.'/posts/'.$catid.'_'.$forid.'_'.$postid;
						$isreply=FALSE;
					}

					if ($halfone>"2" && ($noofposts-1)==$halfone && !$seccol){
						echo "</font></td>\n";
						echo "<td width=\"47%\" height=\"25\" valign=\"top\" bgcolor=\"$menucolor\"><font style=\"font-size:".$descrsize."px\">";
						$seccol=TRUE;
					}
					if (file_exists($filename)){
						include($filename);
						if ($isreply){
							if (file_exists($dbpath.'/members/'.$rauthor)){
								include($dbpath.'/members/'.$rauthor);
								$ualias=$useralias;
							}else{
								$ualias=$NonExistingUser;
							}
							if ($repid>$maxrpp){
								$pageno=floor($repid/$maxrpp)+1;
							}else{
								$pageno="1";
							}
							$latestpostlink='<a href="post.php?cat='.$catid.'&fid='.$forid.'&pid='.$postid.'&page='.$pageno.'">'.$rsubject.'</a> - '.$ualias;
						}else{
							if (file_exists($dbpath.'/members/'.$pauthor)){
								include($dbpath.'/members/'.$pauthor);
								$ualias=$useralias;
							}else{
								$ualias=$NonExistingUser;
							}
							$latestpostlink='<a href="post.php?cat='.$catid.'&fid='.$forid.'&pid='.$postid.'&page=1">'.$psubject.'</a> - '.$ualias;
						}
						$showitem=CheckPermissions($catid,$forid,$liusername);
						if ($showitem){
							echo $noofposts.". - ".$latestpostlink."<br>\n";
							$noofposts++;
						}
					}
				}
				if ($noofposts>$maxlatest){
					break;
				}
			}
			echo "</font></td>\n";
			echo "</table></td></tr></table></td></tr></table><br>";

			WriteTableTop('');
			echo "<tr><td colspan=\"3\" class=\"header\"><b>$sitetitle :: $VStats</b></td></tr>";
			echo "<tr bgcolor=\"$fmenucolor\">";
			$statsimg=GetImage($stylepref,'stats','');
			echo "<TD class=\"indexleft\"><IMG src=\"",$statsimg,"\" alt=\"",$VImage,"\"></td>";
			echo "<TD width=\"47%\" height=\"25\" valign=\"top\" bgcolor=\"$menucolor\"><font style=\"font-size:".$descrsize."px\">";
			$ph = get_phrase_for_num('$VCurrentMembers', $mems,$liusername);
			echo "$ph $mems ";
			$ph = get_phrase_for_num('$VMembers', $mems,$liusername);
			echo "$ph.<br>";
			echo "$VLatestMember&nbsp;";
			if ($loggedin=="1" && $newestmem !="---"){
				echo "<a href=\"profile.php?u=$newestuser\">$newestmem</a>";
			}else{
				echo "$newestmem";
			}
			$ph1 = get_phrase_for_num('$VTopics', $tottop,$liusername);
			$ph2 = get_phrase_for_num('$Vreplies', $totposts,$liusername);
			$ph3 = get_phrase_for_num('$VVisits',$todaysvisits,$liusername);
			echo "<br>$tottop $ph1, $totposts $ph2.<BR>$VToday $todaysvisits $ph3";

			include($dbpath."/guestcount");
			echo " &amp; $todaysguests ";
			$ph = get_phrase_for_num('$VGuests',$todaysguests,$liusername);
			echo "$ph.<br>\n";
			$allvisits=$totalguests+$totalvisits;
			echo "$VTotalVisits: $totalvisits<br>$VTotalGuests: $totalguests<br>$VAllVisits: $allvisits</td>";
			echo "<td width=\"48%\" height=\"25\" valign=\"top\" bgcolor=\"$menucolor\"><font style=\"font-size:".$descrsize."px\">";
			echo "<b>$VLastVisitors</b>: <br>\n";
			if ($lastvis1!=""){echo $lastvis1;}
			if ($lastvis2!=""){echo ', '.$lastvis2;}
			if ($lastvis3!=""){echo ', '.$lastvis3;}
			if ($lastvis4!=""){echo ', '.$lastvis4;}
			if ($lastvis5!=""){echo ', '.$lastvis5.'<br>';}
			if ($lastvis6!=""){echo $lastvis6;}
			if ($lastvis7!=""){echo ', '.$lastvis7;}
			if ($lastvis8!=""){echo ', '.$lastvis8;}
			if ($lastvis9!=""){echo ', '.$lastvis9;}
			if ($lastvis10!=""){echo ', '.$lastvis10.'<br>';}
			echo "</font></td>\n";
			echo "</table></td></tr></table></td></tr></table>";

			echo "<br><table width=\"100%\" border=\"0\" cellpadding=\"$containerbordersize\" cellspacing=\"0\">";
			echo "<tr bgcolor=\"$containerborder\"><td height=\"9\">";
			echo "<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";
			echo "<tr bgcolor=\"$containerinner\"><td height=\"2\">";
			echo "<table width=\"100%\" border=\"0\" cellpadding=\"7\" cellspacing=\"1\">";

			echo "<tr><td colspan=\"2\" class=\"header\"><b>$WhoIsThere</b></td></tr>";
			echo '<tr bgcolor="',$fmenucolor,'">';
			echo '<td colspan ="1" class="indexleft" height="17" align="center">';
			$onlineimg=GetImage($stylepref,'online','');
			echo '<img src="',$onlineimg,'" alt="',$VImage,'"></td>';
			echo "<td width=\"95%\" height=\"17\" valign=\"top\" bgcolor=\"$menucolor\">";

			include('useronline.php');

			echo '</td></tr></table></td></tr></table></td></tr></table>';
			writefooter($newestm);
			}
		}
	}
}
ob_end_flush();
?>




