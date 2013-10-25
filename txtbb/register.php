<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            register.php  - PBLang
 *                            -------------------
 *              see docs/copyright.txt for more details
 *
 *			Last modified 27 February 2005
***************************************************************************/

require('header.php');
include('captcha.php');
include_once("functions.php");
include_once("ffunctions.php");
include($dbpath."/settings/styles/styles.php");
$orglang=$language;

$liusername=$_COOKIE[$cookieid];
$permit=CheckLoginStatus($liusername,"0","1");
if ($permit=="1") {
	if ($loggedin=="1" && $admin=="0") {
		ErrorMessage($AlreadyMember,$liusername);
		exit;
	} else {
		if ($allowreg!="1" && $admin=="0") {
			ErrorMessage($NoNewUsers,$liusername);
			exit;
		} else {
			$reg=$_GET['reg'];
			writeheader($newestm,0,0,0,$liusername,$loggedin,$VRegister);
			if ($reg=="1") {
				// START CAPTCHA
				session_start();
				$captcha = new txtBB_textCAPTCHA();
				$captcha_question = $captcha->question;
				$captcha_answers = $captcha->answers;
				$_SESSION['captcha'] = $captcha_answers;
				// END CAPTCHA
				
				$lang=trim($_POST['lang']);
				include($temppath."/pb/language/lang_".$lang.".php");
				//                    register($admin,$lang);
				$form_tag="\n";
				$form_tag.='<form action="register.php?reg=2" method="POST" target="'.$frameset.'">'."\n";
				WriteTableTop($form_tag);
				echo "<tr><td class=\"header\" colspan=\"2\"><a href=\"index.php\">$sitetitle</a> :: $VRegister</td></tr>";
				echo "<tr><td class=\"subheader\" colspan=\"2\">$VUser $VOptions :: </td></tr>";

				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\"><font color=\"red\">*</font>
					<font color=\"$menufont\">$VUsername:</font></td>";
				echo "<td height=\"25\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"user\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\"><font color=\"red\">*</font>
					<font color=\"$menufont\">$VPassword:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"password\" name=\"pass\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\"><font color=\"red\">*</font>
					<font color=\"$menufont\">$VPassword $VAgain:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"password\" name=\"pass2\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\"><font color=\"red\">*</font>
					<font color=\"$menufont\">$VEmail:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"em\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VHideEmail:</td>
				<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"checkbox\" name=\"emhide\" value=\"hide\"></td></tr>";

				echo "<tr><td class=\"subheader\" colspan=\"2\">$VProfile $VOptions :: </td></tr>";

				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VRealname:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"realname\" size=\"30\"></td></tr>";
				if ($allowalias=="1"){
					echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
						<font color=\"$menufont\">$VAlias:</font></td>";
					echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"alias\" size=\"20\">&nbsp;$VExplainAlias</td></tr>";
				}
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">XMPP (1):</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"xmpp1\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">ICQ $VNumber:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"icq\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">AIM Nickname:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"aim\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">Yahoo Messenger:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"yahoo\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\"><font color=\"$menufont\">XMPP (2):</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"xmpp2\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VWebsite:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"web\" value=\"http://\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VLocation:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"loc\"></td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VSlogan:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"text\" name=\"pt\" value=\"$defaultslogan\" size=\"30\">&nbsp;$VExplainSlogan</td></tr>";
				$ava="0";
				/*if ($ave=="1") {
					echo "\n<SCRIPT LANGUAGE=\"JavaScript\" type=\"text/javascript\">\n";
					echo "function avchange(URL_List)\n";
					echo "{\n","var URL = URL_List.options[URL_List.selectedIndex].value;\n","document.avatari.src=\"templates/pb/images/avatars/\"+URL;\n";
					echo "}\n</SCRIPT>\n";
					echo "<tr bgcolor=\"$fmenucolor\"><td height=\"25\" width=\"20%\"><font color=$menufont>$VAvatar:<br></font></td>\n";
					$uav="none";
					echo "<td height=\"25\" width=\"80%\" bgcolor=$menucolor><select name=\"av\" OnChange=\"avchange(this);\">";
					echo "<option value=\"none\" selected=\"selected\">$VNoAvatar</option>";
					$dir=$temppath."/pb/images/avatars/";
					if (file_exists($dir)){
						$handle = opendir("$dir");
						while ($file = readdir($handle)) {
							if ($file != "." && $file != "..") {
								echo "<option value=\"$file\">$file</option>\n";
							}
						}
						closedir($handle);
					}
					if ($webave){
						echo "<option value=\"webav\">$VURLAvatar</option>";
					}
					echo "</select>";
					echo "&nbsp;&nbsp;<img src=\"templates/pb/images/avatars/$uav\" NAME=\"avatari\" alt=\"$VImage\"></td></tr>";
/*					if ($uav!="" && $uav!="none" && $uav!="webav"){
						echo "&nbsp;&nbsp;<img src=\"templates/pb/images/avatars/$uav\" NAME=\"avatari\" alt=\"$VImage\"></td></tr>";
					}
*/					/*if ($webave){
						echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" width=\"20%\"><font color=\"$menufont\">$VURLAvatar:<br></font></td>\n";
						echo "<td height=\"18\" width=\"80%\" bgcolor=\"$menucolor\"><input type=\"text\" name=\"webav\" value=\"$uwebav\">$AvatarURLtip</td></tr>";
					}
				}*/
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VSignature:</font></td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><textarea name=\"sig\" cols=\"30\" rows=\"4\"></textarea></td></tr>";
				
				
				echo "<tr bgcolor=\"$fmenucolor\">";
				echo "<td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">";
				echo "<font color=\"$menufont\">$VCaptchaFill:</font>";
				echo "</td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\">";
				echo "<input type=\"text\" style=\"width: 95%; display: inline-block;\" name=\"captchaquestion\" value=\"$captcha_question\">";
				echo "<input type=\"text\" style=\"width: 95%; display: inline-block;\" name=\"captchaanswer\" value=\"\">";
				echo "</td>";
				
				$regcode=time();
				echo "<input type=\"hidden\" name=\"regcode\" value=\"$regcode\">";
				echo "<input type=\"hidden\" name=\"lang\" value=\"$lang\">";

				echo "<tr bgcolor=\"$fmenucolor\"><td class=\"subheader\" colspan=\"2\">$VRules :: </td></tr>";
				if (file_exists("termsofuse"."_$lang".".txt")){
					$termsfile="termsofuse"."_$lang".".txt";
				}else{
					$termsfile="termsofuse_en.txt";
				}
				$ruleset=file($termsfile);
				$rules=implode(" ",$ruleset);
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\" colspan=\"2\">
					<font color=\"$menufont\">$rules</font><br>
					</td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">
					<font color=\"$menufont\">$VAcceptRules:</td>
					<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"checkbox\" name=\"accept\" value=\"1\"></td></tr>";
				echo "<tr><td  class=\"subheader\" colspan=\"2\">$VSubmitForm :: </td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">&nbsp;</td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"submit\" name=\"Submit\" value=\"$VSubmit\">&nbsp;";
				echo "<input type=\"reset\" name=\"Submit2\" value=\"$VReset\"></td></tr></form></table></td></tr></table></td></tr></table>";
				echo "<BR><font color=\"red\">* = $VRequired</font>";
			}elseif($reg!="2" && $reg!="1") {
				
				$form_tag="\n";
				$form_tag.='<form action="register.php?reg=1" method="POST" target="'.$frameset.'">'."\n";
				WriteTableTop($form_tag);
				echo "<tr><td class=\"header\" colspan=\"2\">$sitetitle :: $VRegister</td></tr>";

				echo "<tr><td class=\"subheader\" colspan=\"2\">$VUser $VOptions :: </td></tr>";

				echo "<tr><td class=\"label\">Select your language/$VLanguageSelection:<br></td>";
				echo "<td class=\"content\"><select name=\"lang\">";
				LanguageSelection($userlng);
				echo "</select> $langexpl</td></tr>\n";

				echo "<tr bgcolor=\"$fmenucolor\"><td class=\"subheader\" colspan=\"2\">$VSubmitForm :: </td></tr>";
				echo "<tr bgcolor=\"$fmenucolor\"><td height=\"18\" align=\"left\" bgcolor=\"$fmenucolor\" width=\"30%\" valign=\"middle\">&nbsp;</td>";
				echo "<td height=\"18\" bgcolor=\"$menucolor\" width=\"70%\"><input type=\"submit\" name=\"Submit\" value=\"$VSubmit\">&nbsp;";
				echo "<input type=\"reset\" name=\"Submit2\" value=\"$VReset\"></td></tr></form></table></td></tr></table></td></tr></table>";

			} else {
				session_start();
				$captcha = new txtBB_textCAPTCHA();
				$users_captcha_answer = $_POST["captchaanswer"];
				$session_captcha = $_SESSION['captcha'];
				$captcha_correct = $captcha->compareAnswerToCaptcha($users_captcha_answer, $session_captcha);
				if(!$captcha_correct ){
					echo "Wrong captcha!";
					exit;
				}
				
				$user=trim($_POST['user']);
				$pass=trim($_POST['pass']);
				$pass2=trim($_POST['pass2']);
				$ualias=limitlength(strip_tags(textparse(trim(stripslashes($_POST['alias'])))),0,40);
				$urealname=limitlength(strip_tags(textparse(trim(stripslashes($_POST['realname'])))),0,80);
				$sig=limitlength(strip_tags(textparse(stripslashes(trim($_POST['sig'])))),0,400);
				$loc=limitlength(strip_tags(textparse(stripslashes(trim($_POST['loc'])))),0,100);
				$xmpp1=limitlength(htmlspecialchars(trim(stripslashes($_POST['xmpp1']))),0,80);
				$aim=limitlength(htmlspecialchars(trim(stripslashes($_POST['aim']))),0,80);
				$yah=limitlength(htmlspecialchars(trim(stripslashes($_POST['yahoo']))),0,80);
				$xmpp2=limitlength(htmlspecialchars(trim(stripslashes($_POST['xmpp2']))),0,80);
				$em=limitlength(strip_tags(textparse(trim(stripslashes($_POST['em'])))),7,80);
				$emhide=trim($_POST['emhide']);
				$web=limitlength(trim(stripslashes($_POST['web'])),0,100);
				$icq=limitlength(htmlspecialchars(trim(stripslashes($_POST['icq']))),0,30);
				$pt=limitlength(textparse(stripslashes(trim($_POST['pt']))),0,80);
				$image=trim($_POST['av']);
				$userlang=$_POST['lang'];
				$accepted=$_POST['accept'];
				$registering=$userlang;
				include($temppath.'/pb/language/lang_'.$userlang.'.php');

				if (trim($ualias['text'])==""){
					$ualias['text']=$user;
				}
				if ($image=="none"){
					$image="";
					$webav="";
				}elseif ($image=="webav"){
					$webav=htmlspecialchars(trim($_POST['webav']));
				}else{
					$webav="";
				}
				$regcodeno=trim($_POST['regcode']);

				$mailRegex="^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$";
				$usernameRegex = '^[a-zA-Z0-9]+$';
				$filename=$dbpath."/settings/users";
				$userlist=@file($filename);
				$userlst=@implode(" - ",$userlist);
				if (!$accepted){
					ErrorMessage($VRulesMustBeAccepted,$liusername);
					exit;
				}
				$usernamelength=limitlength($user,3,25);
				if ($usernamelength['tooshort'] || $usernamelength['toolong']) {
					ErrorMessage($VUsernameTooLong,$liusername);
					exit;
				}
				if (strchr(strtoupper($userlst),strtoupper($user))){
					ErrorMessage($VUsernameGiven,$liusername);
					exit;
				}
				$passlength=limitlength($pass,1,50);
				$pass2length=limitlength($pass2,1,50);
				if ($passlength['tooshort'] || $em['tooshort'] || $pass2length['tooshort']){
					ErrorMessage($PleaseComplete,$liusername);
					exit;
				}
				if (!eregi($mailRegex, $em['text'])) {
					ErrorMessage($WrongEmailAddress,$liusername);
					exit;
				}
				if (!eregi($usernameRegex,$user)){
					ErrorMessage($WrongUsername,$liusername);
					exit;
				}
				$test=strtolower($user);
				if ($test=="admin" || $test=="mods" || $test=="friends" || $test=="moderator" || $test=="friend"){
					ErrorMessage($WrongUsername,$liusername);
					exit;
				}
				if ($pass!=$pass2){
					ErrorMessage($PWNoMatch,$liusername);
					exit;
				} else {
					if ($ualias['text']!=$user){
						if ($allowalias){
							$allowaliaschange=CheckAlias($ualias['text']);
							if ($allowaliaschange=="1"){
									$useralias=$ualias['text'];
									AddAlias($ualias['text'],"");
							}else{
									ErrorMessage($AliasAlreadyInUse,$liusername);
									exit;
							}
						}
					}
					$lastaliaschange=time();
					$filet=$dbpath.'/members/'.$user;
					if (!file_exists($filet)) {
						$ip = GetIPAddress();
						if ($mailenabled=="1" && ($emsupp=="1" || $smtpmail)) {
							$mail="$VHello $user!\n$WelcomeMessage $sitetitle"."$WelcomeMessage1!\n";
							if ($welcomemessage!=""){
									$mail.=$welcomemessage."\n";
							}
							$mail.="$ThanksMessage!";
							$header=mailheader();
							if ($confirmemail=="1"){
								$mail.=" $VPleaseConfirm\n\n";
								$mail.="$homeurl/confirm.php?code=$regcodeno&user=$user\n\n";
								if ($emsupp){
									mail($em['text'], "$WelcomeMessage $sitetitle", $mail,$header);
								}elseif($smtpmail){
									SendMail($em['text'], "$WelcomeMessage $sitetitle", $mail);
								}
/*								$mail1="This has been sent to $em:\n\n".$mail;
								mail($adminemail, "$WelcomeMessage $sitetitle", $mail1,$header);
*/							}else{
								if ($emsupp){
									mail($em['text'], "$WelcomeMessage $sitetitle", $mail,$header);
								}elseif($smtpmail){
									SendMail($em['text'], "$WelcomeMessage $sitetitle", $mail);
								}
							}
						}
						if ($emsupp=="1"){
							if ($userlang!=$orglang){
								include($temppath.'/pb/language/lang_'.$orglang.'.php');
							}
							$header=mailheader();
							if ($emsupp){
								mail($adminemail, "$VNewMember", $VNewMember.":\n\n".$user.' '.$VWith.' EMail '.$em['text'].' '.$VAnd.' IP-address '.$ip,$header);
							}elseif($smtpmail){
								SendMail($adminemail, "$VNewMember",  $VNewMember.":\n\n".$user.' '.$VWith.' EMail '.$em['text'].' '.$VAnd.' IP-address '.$ip);
							}
							if ($userlang!=$orglang){
								include($temppath."/pb/language/lang_".$userlang.".php");
							}
						}

						$pass=hash("ripemd160", $pass);

						$userid=0;
						$filename=$dbpath."/settings/userid";
						if (file_exists($filename)){
							$fd=@fopen($filename,"r");
							$userid=@fread($fd,filesize($filename));
							@fclose($fd);
						}
						$userid++;
						$fp=fopen($dbpath."/settings/userid","w");
						fputs($fp,$userid);
						$fclose;
						$joineddate=time()+($timezone*3600);

						$content = "<?php\n\n";
						$content .="\$userid=\"$userid\";\n";
						$content .="\$password=\"$pass\";\n";
						$content .="\$username=\"$user\";\n";
						$content .="\$useralias=\"".$ualias['text']."\";\n";
						$content .="\$userrealname=\"".$urealname['text']."\";\n";
						$content .="\$useremail=\"".$em['text']."\";\n";
						$content .="\$useremhide=\"$emhide\";\n";
						$content .="\$userip=\"$ip\";\n";
						$content .="\$usersig=\"".$sig['text']."\";\n";
						$content .="\$userslogan=\"".$pt['text']."\";\n";
						$content .="\$useravatar=\"$image\";\n";
						$content .="\$userxmpp1=\"".$xmpp1['text']."\";\n";
						$content .="\$userposts=\"0\";\n";
						$content .="\$usericq=\"".$icq['text']."\";\n";
						$content .="\$userxmpp2=\"".$xmpp2['text']."\";\n";
						$content .="\$userwebavatar=\"$webav\";\n";
/*						$fd=@fopen($filename,'r');
						$count=trim(@fread($fd,@filesize($filename)));
						@fclose($fd);
*/
						if ($userid=="1") {
							$type="7";
							$useradm="1";
						} else {
							$type="1";
							$useradm="0";
						}
						$content .="\$userrank=\"$type\";\n";
						$content .="\$useryahoo=\"".$yah['text']."\";\n";
						$content .="\$useraim=\"".$aim['text']."\";\n";
						$content .="\$userlocation=\"".$loc['text']."\";\n";
						$content .="\$userjoined=\"$joineddate\";\n";
						$content .="\$userhomepage=\"".$web['text']."\";\n";
						$content .="\$useradmin=\"$useradm\";\n";
						$content .="\$usermod=\"0\";\n";
						$content .="\$userban=\"0\";\n";
						$content .="\$userlastvisit=\"$joineddate\";\n";
						$content .="\$userlastpost=\"$joineddate\";\n";
						$content .="\$userprevvisit=\"$joineddate\";\n";
						$content .="\$useranimsmilies=\"$useranimsmilies\";\n";
						$content .="\$lastaliaschange=\"$lastaliaschange\";\n";
						$content .="\$userlang=\"$userlang\";\n";
						$content .="\n?";
						$content .=">";

						if ($confirmemail=="1"){
							$fp = fopen($dbpath."/members/pending/".$regcodeno, "w");
							fputs($fp, $content);
							fclose($fp);
							chmod($dbpath."/members/pending/".$regcodeno,0666);
							$fp=fopen($dbpath."/settings/users","a");
							fputs($fp,"$user\n");
							fclose($fp);
							regdone($user,1,$userlang);
						}else{
							$fp = fopen($dbpath."/memss/".$user, "w");
							fputs($fp, $userid);
							fclose($fp);

							$fp = fopen($dbpath."/members/".$user, "w");
							fputs($fp, $content);
							fclose($fp);

							$fp=fopen($dbpath."/settings/users","a");
							fputs($fp,"$user\n");
							fclose($fp);

							$filename = $dbpath."/mems";
							$fd = fopen ($filename, "r");
							$n = fread ($fd, filesize ($filename));
							fclose ($fd);
							$n++;
							$fp = fopen($dbpath."/mems", "w");
							fputs($fp, $n);
							fclose($fp);

							$zero="0";
							$fp = fopen($dbpath."/pm/".$user, "w");
							fputs($fp, $zero);
							fclose($fp);
							$fp = fopen($dbpath."/pm/".$user."_tot", "w");
							fputs($fp, $zero);
							fclose($fp);

							$fp = fopen($dbpath."/settings/newestm", "w");
							fputs($fp, $user);
							fclose($fp);

							regdone($user,0,$userlang);
						}
					} else {
						ErrorMessage($UsernameTaken,$liusername);
					}
				}
			}
		}
		writefooter($newestm);
	}
}
ob_end_flush();
?>
