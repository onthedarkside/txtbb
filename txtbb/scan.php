<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

/***************************************************************************
 *                            scan.php  - PBLang
 *                            -------------------
 *
 *             see the copyright.txt file in the docs-folder
 *
 *  last updated 27 October 2004
 ***************************************************************************/

error_reporting  (E_ERROR | E_WARNING | E_PARSE); // This will NOT report uninitialized variables
set_magic_quotes_runtime(0); // Disable magic_quotes_runtime

ob_start();

define('IN_PB', "true");
define('IN_PBG', "true");

function wcensor($thingy,$uname) {
global $censor,$badwordslist;
	if ($censor=="1") {
		$badwords=explode(',',$badwordslist);
		for ($i=0;$i<count($badwords);$i++){
			$thingy=preg_replace('/(\b'.$badwords[$i].'\b)/i',str_repeat('*',strlen($badwords[$i])),$thingy);
		}
	}
	return $thingy;
}

function un_parse($thingy) {
	if ($html=="0") {
		$thingy=str_replace("&lt;","<",$thingy);
		$thingy=str_replace("&gt;",">",$thingy);
	}
	$thingy=str_replace("<b>","[b]",$thingy);
	$thingy=str_replace("</b>","[/b]",$thingy);
	$thingy=str_replace("<i>","[i]",$thingy);
	$thingy=str_replace("</i>","[/i]",$thingy);
	$thingy=str_replace("<BR>","\n",$thingy);
	$thingy=str_replace("<br>","\n",$thingy);
	$thingy=str_replace("<br>","\n",$thingy);
	$thingy=stripslashes($thingy);
	return $thingy;
}

function replacecode($thingy){
     $thingy=str_replace("echo","e cho",$thingy);
     $thingy=str_replace("copy","c opy",$thingy);
     $thingy=str_replace("refresh","r efresh",$thingy);
     $thingy=str_replace("Refresh","r efresh",$thingy);
     $thingy=str_replace("meta","m eta",$thingy);
     $thingy=str_replace("Meta","m eta",$thingy);
     $thingy=str_replace("href","h ref",$thingy);

     return($thingy);
}

function replacestuff($thingy) {
        include("global.php");
        include($dbpath."/settings.php");
        include($dbpath."/settings/styles/styles.php");
//        $language=SetLanguage($uname);
        include($temppath."/pb/language/lang_".$language.".php");

//        $thingy=str_replace("/n","<br>",$thingy);
        $thingy=str_replace("\n","<br>",$thingy);
        $startphp="<?"."php";
        $endphp="?".">";
        $thingy=str_replace($startphp,"-- PHP Code starts here --",$thingy);
        $thingy=str_replace($endphp,"-- PHP Code ends here --",$thingy);
        $thingy=str_replace(chr(36),"&#36;",$thingy);
        $thingy=str_replace(chr(34),"&#34;",$thingy);

        /*if ($smilys=="1") {
          //non-animated smilies
                $thingy=str_replace(":oops","<img src='templates/pb/images/smile/schluck.gif'> ",$thingy);

                $thingy=str_replace(" :)"," <img src='templates/pb/images/smile/smiley.gif'> ",$thingy);
                $thingy=str_replace(" :-)"," <img src='templates/pb/images/smile/smiley.gif'> ",$thingy);
                $thingy=str_replace(" :("," <img src='templates/pb/images/smile/sad.gif'> ",$thingy);
                $thingy=str_replace(" :-("," <img src='templates/pb/images/smile/sad.gif'> ",$thingy);
                $thingy=str_replace(" :D"," <img src='templates/pb/images/smile/cheesy.gif'> ",$thingy);
                $thingy=str_replace(" :-D"," <img src='templates/pb/images/smile/cheesy.gif'> ",$thingy);
                $thingy=str_replace(" :@"," <img src='templates/pb/images/smile/angry.gif'> ",$thingy);
                $thingy=str_replace(" :-@"," <img src='templates/pb/images/smile/angry.gif'> ",$thingy);
                $thingy=str_replace(" :o"," <img src='templates/pb/images/smile/shocked.gif'> ",$thingy);
                $thingy=str_replace(" :-o"," <img src='templates/pb/images/smile/shocked.gif'> ",$thingy);
                $thingy=str_replace(" :?"," <img src='templates/pb/images/smile/huh.gif'> ",$thingy);
                $thingy=str_replace(" :-?"," <img src='templates/pb/images/smile/huh.gif'> ",$thingy);
                $thingy=str_replace(" :P"," <img src='templates/pb/images/smile/tongue.gif'> ",$thingy);
                $thingy=str_replace(" :-P"," <img src='templates/pb/images/smile/tongue.gif'> ",$thingy);
                $thingy=str_replace(" ;)"," <img src='templates/pb/images/smile/wink.gif'> ",$thingy);
                $thingy=str_replace(" ;-)"," <img src='templates/pb/images/smile/wink.gif'> ",$thingy);
                $thingy=str_replace(" :&#62;"," <img src='templates/pb/images/smile/evil.gif'> ",$thingy);
                $thingy=str_replace(" :-&#62;"," <img src='templates/pb/images/smile/evil.gif'> ",$thingy);
                $thingy=str_replace(":emb("," <img src='templates/pb/images/smile/embarassed.gif'> ",$thingy);
                $thingy=str_replace(" :-8"," <img src='templates/pb/images/smile/embarassed.gif'> ",$thingy);
                $thingy=str_replace(":1offtopic"," <img src='templates/pb/images/smile/offtopic.gif'> ",$thingy);

                $thingy=str_replace(" :!!"," <img src='templates/pb/images/smile/goofy.gif'> ",$thingy);
                $thingy=str_replace(" :-!!"," <img src='templates/pb/images/smile/goofy.gif'> ",$thingy);
                $thingy=str_replace(" *)"," <img src='templates/pb/images/smile/rolleyes.gif'> ",$thingy);
                $thingy=str_replace("*-)","<img src='templates/pb/images/smile/rolleyes.gif'> ",$thingy);
                $thingy=str_replace(":anger","<img src='templates/pb/images/smile/zorn.gif'> ",$thingy);
                $thingy=str_replace(":wallbash","<img src='templates/pb/images/smile/wallbash.gif'> ",$thingy);
                $thingy=str_replace(":surpr","<img src='templates/pb/images/smile/ueberr.gif'> ",$thingy);
                $thingy=str_replace(":sad1","<img src='templates/pb/images/smile/traurig.gif'> ",$thingy);
                $thingy=str_replace(":sad","<img src='templates/pb/images/smile/sad.gif'> ",$thingy);
                $thingy=str_replace(":tear","<img src='templates/pb/images/smile/traene.gif'> ",$thingy);
                $thingy=str_replace(":sungl","<img src='templates/pb/images/smile/sungl.gif'> ",$thingy);
                $thingy=str_replace(":sleep","<img src='templates/pb/images/smile/sleep.gif'> ",$thingy);
                $thingy=str_replace(":scold","<img src='templates/pb/images/smile/schimpf.gif'> ",$thingy);
                $thingy=str_replace(":exclm","<img src='templates/pb/images/smile/rufz.gif'> ",$thingy);
                $thingy=str_replace(":redface2","<img src='templates/pb/images/smile/redface2.gif'> ",$thingy);
                $thingy=str_replace(":arrr","<img src='templates/pb/images/smile/pfeilr.gif'> ",$thingy);
                $thingy=str_replace(":thmbdn","<img src='templates/pb/images/smile/damob.gif'> ",$thingy);
                $thingy=str_replace(":thmbup","<img src='templates/pb/images/smile/damauf.gif'> ",$thingy);

                $thingy=str_replace(":jump","<img src='templates/pb/images/smile/jump.gif'> ",$thingy);
                $thingy=str_replace(":help","<img src='templates/pb/images/smile/help.gif'> ",$thingy);
                $thingy=str_replace(":grins","<img src='templates/pb/images/smile/grins.gif'> ",$thingy);
                $thingy=str_replace(":bulb","<img src='templates/pb/images/smile/gluehb.gif'> ",$thingy);
                $thingy=str_replace(":glad","<img src='templates/pb/images/smile/glad.gif'> ",$thingy);
                $thingy=str_replace(":qmark","<img src='templates/pb/images/smile/fragez.gif'> ",$thingy);
                $thingy=str_replace(" ;)"," <img src='templates/pb/images/smile/einaug.gif'> ",$thingy);
                $thingy=str_replace(" ;-)"," <img src='templates/pb/images/smile/einaug.gif'> ",$thingy);
                $thingy=str_replace(":eatthis","<img src='templates/pb/images/smile/eatthis.gif'> ",$thingy);
                $thingy=str_replace(":duell","<img src='templates/pb/images/smile/duell.gif'> ",$thingy);
                $thingy=str_replace(":devil","<img src='templates/pb/images/smile/devil.gif'> ",$thingy);
                $thingy=str_replace(":dance","<img src='templates/pb/images/smile/dance.gif'> ",$thingy);
                $thingy=str_replace(":bounce","<img src='templates/pb/images/smile/bounce.gif'> ",$thingy);
                $thingy=str_replace(":bad","<img src='templates/pb/images/smile/bad.gif'> ",$thingy);
                $thingy=str_replace(":angryfire","<img src='templates/pb/images/smile/angryfire.gif'> ",$thingy);
                $thingy=str_replace(":respect","<img src='templates/pb/images/smile/respekt.gif'> ",$thingy);

        } elseif ($smilys=="" || $smilys=="0") {
                $thingy=str_replace(" :)","",$thingy);
                $thingy=str_replace(" :-)","",$thingy);
                $thingy=str_replace(" :(","",$thingy);
                $thingy=str_replace(" :-(","",$thingy);
                $thingy=str_replace(" :D","",$thingy);
                $thingy=str_replace(" :-D","",$thingy);
                $thingy=str_replace(" :@","",$thingy);
                $thingy=str_replace(" :-@","",$thingy);
                $thingy=str_replace(" :o","",$thingy);
                $thingy=str_replace(" :-o","",$thingy);
                $thingy=str_replace(" :?","",$thingy);
                $thingy=str_replace(" :-?","",$thingy);
                $thingy=str_replace(" :P","",$thingy);
                $thingy=str_replace(" :-P","",$thingy);
                $thingy=str_replace(" ;)","",$thingy);
                $thingy=str_replace(" ;-)","",$thingy);
                $thingy=str_replace(" :>","",$thingy);
                $thingy=str_replace(" :->","",$thingy);
                $thingy=str_replace(" :emb(","",$thingy);
                $thingy=str_replace(" :-8","",$thingy);

                $thingy=str_replace(" :!!","",$thingy);
                $thingy=str_replace(" :-!!","",$thingy);
                $thingy=str_replace(" *)","",$thingy);
                $thingy=str_replace("*-)","",$thingy);
        }
        if ($bbcode=="1") {
$search = array ("'<script[^>]*?>.*?</script>'si",
					"!\[url\](http://)?(.*?)\[b\](.*?)\[/b\](.*?)\[/url\]!i",
					"!\[url\](https://)?(.*?)\[b\](.*?)\[/b\](.*?)\[/url\]!i",
					"!\[url=(http://)?(.*?)\[b\](.*?)\[/b\](.*?)\](.*?)\[/url\]!i",
					"!\[img\](http://)?(.*?)\[b\](.*?)\[/b\](.*?)\[/img\]!i",
					"!\[url\](http://)?(.*?)\[/url\]!i",
					"!\[url\](https://)?(.*?)\[/url\]!i",
					"!\[url=(http://)?(.*?)\](.*?)\[/url\]!i",
					"!\[b\](.*?)\[/b\]!i",
					"!\[i\](.*?)\[/i\]!i",
					"!\[u\](.*?)\[/u\]!i",
					"!\[email\](.*?)\[/email\]!i",
					"!\[email=(.*?)\](.*?)\[/email\]!i",
					"!\[quote\](.*?)\[/quote\]!i",
					"!\[quote=(.*?)\](.*?)\[/quote\]!i",
					"!\[code\](.*?)\[/code\]!i",
					"!\[img\](http://)?(.*?)\[/img\]!i",
					"!\[att\](.*?)\[/att\]!i",
					"!\[glowred\](.*?)\[/glowred\]!i",
					"!\[glowblue\](.*?)\[/glowblue\]!i",
					"!\[gloworange\](.*?)\[/gloworange\]!i",
					"!\[glowgreen\](.*?)\[/glowgreen\]!i",
					"!\[color=(.*?)\](.*?)\[/color\]!i",
/*					"'&(amp|#38);'i",
					"'&(lt|#60);'i",
					"'&(gt|#62);'i",
					"'&(nbsp|#160);'i",
					"'&(iexcl|#161);'i",
					"'&(cent|#162);'i",
					"'&(pound|#163);'i",
					"'&(copy|#169);'i",
					"'&#(\d+);'e"
*/					/*);                    // evaluate as php

$replace = array ("[i]javascript removed[/i]",
					"<a href=\"http://\$2\$3\$4\" target=\"_blank\">\$2\$3\$4</a>",
					"<a href=\"https://\$2\$3\$4\" target=\"_blank\">\$2\$3\$4</a>",
					"<a href=\"http://\$2\$3\$4\" target=\"_blank\">\$5</a>",
					"<img src=\"http://\$2\$3\$4\">",
					"<a href=\"http://\$2\" target=\"_blank\">\$2</a>",
					"<a href=\"https://\$2\" target=\"_blank\">\$2</a>",
					"<a href=\"http://\$2\" target=\"_blank\">\$3</a>",
					"<b>\$1</b>",
					"<i>\$1</i>",
					"<u>\$1</u>",
					"<a href=\"mailto://\$1\" target=\"_blank\">\$1</a>",
					"<a href=\"mailto://\$1\" target=\"_blank\">\$2</a>",
					"$VQuote:<BR><table border=\"$quoteborder\"bgcolor=\"$quotebackground\"><tr><td class=\"quote\">\$1</td></tr></table>",
					"\$1 $VWrote:<BR><table border=\"$quoteborder\"bgcolor=\"$quotebackground\"><tr><td class=\"quote\">\$2</td></tr></table>",
					"<pre>\$1</pre>",
					"<img src=\"http://\$2\">",
					"<a href=\"attachments/\$1\" target=\"_blank\">\$1</a>",
					"<table style=\"Filter: Glow(Color=red, Strength=2)\">\$1</table>",
					"<table style=\"Filter: Glow(Color=blue, Strength=2)\">\$1</table>",
					"<table style=\"Filter: Glow(Color=ornage, Strength=2)\">\$1</table>",
					"<table style=\"Filter: Glow(Color=green, Strength=2)\">\$1</table>",
					"<span style=\"color://\$1\">\$2</span>",
//					"<a href=\"\$1\$3\$5\" target=\"_blank\">\$6</a>",
/*					"&",
					"<",
					">",
					" ",
					chr(161),
					chr(162),
					chr(163),
					chr(169),
					"chr(\\1)"
*/					//);
//					for ($i=0;$i<=2;$i++){
					/*for ($i=0;$i<count($search);$i++){
						$thingy=preg_replace($search[$i],$replace[$i],$thingy);
					}
//					}

//					$thingy=eregi_replace("\\[img\\](http://)([^\\[]*)\\[/img\\]","<img src=\"http://\\2\">",$thingy);
//					$thingy=eregi_replace("\\[url\\](http://)([^\\[]*)\\[/url\\]","<a href=\"http://\\2\" target=\"_blank\">\\2</a>",$thingy);
//					$thingy=eregi_replace("\\[url\\](https://)([^\\[]*)\\[/url\\]","<a href=\"https://\\2\" target=\"_blank\">\\2</a>",$thingy);
//					$thingy=eregi_replace("\\[url=(http://([^\\[]*))\\]([^\\[]*)\\[/url\\]","<a href=\"http://\\2\" target=\"_blank\">\\3</a>",$thingy);
//					$thingy=eregi_replace("\\[url=(https://([^\\[]*))\\]([^\\[]*)\\[/url\\]","<a href=\"https://\\2\" target=\"_blank\">\\3</a>",$thingy);
//					$thingy=eregi_replace("\\[att\\]([^\\[]*)\\[/att\\]","<a href=\"attachments/\\1\" target=\"_blank\">\\1</a>",$thingy);
//					$thingy=eregi_replace("\\[email\\]([^\\[]*)\\[/email\\]","<a href=\"mailto:\\1\">\\1</a>",$thingy);
//					$thingy=eregi_replace("\\[email=([^\\[]*)\\]([^\\[]*)\\[/email\\]","<a href=\"mailto:\\1\">\\2</a>",$thingy);
//					$thingy=eregi_replace("\\[img\\](http://)([^\\[]*)\\[/img\\]","<img src=\"http://\\2\">",$thingy);
//					$thingy=eregi_replace("\\[b\\]([^\\[]*)\\[/b\\]","<b>\\1</b>",$thingy);
//					$thingy=eregi_replace("\\[i\\]([^\\[]*)\\[/i\\]","<i>\\1</i>",$thingy);
//					$thingy=eregi_replace("\\[u\\]([^\\[]*)\\[/u\\]","<u>\\1</u>",$thingy);
/*					$thingy=eregi_replace("\\[glowred\\]([^\\[]*)\\[/glowred\\]","<table style=\"Filter: Glow(Color=red, Strength=2)\">\\1</table>",$thingy);
					$thingy=eregi_replace("\\[glowblue\\]([^\\[]*)\\[/glowblue\\]","<table style=\"Filter: Glow(Color=blue, Strength=2)\">\\1</table>",$thingy);
					$thingy=eregi_replace("\\[gloworange\\]([^\\[]*)\\[/gloworange\\]","<table style=\"Filter: Glow(Color=orange, Strength=2)\">\\1</table>",$thingy);
					$thingy=eregi_replace("\\[glowgreen\\]([^\\[]*)\\[/glowgreen\\]","<table style=\"Filter: Glow(Color=green, Strength=2)\">\\1</table>",$thingy);
					$thingy=eregi_replace("\\[code\\]([^\\[]*)\\[/code\\]","<pre>\\1</pre>",$thingy);
					$thingy=eregi_replace("\\[quote\\]([^\\[]*)\\[/quote\\]",
					"$VQuote:<BR><table border=\"$quoteborder\"bgcolor=\"$quotebackground\"><tr><td class=\"quote\">\\1</td></tr></table>",$thingy);
				$thingy=eregi_replace("\\[quote=([^\\[]*)\\]([^\\[]*)\\[/quote\\]", "\\1 $VWrote:<BR>
					<table border=\"$quoteborder\"bgcolor=\"$quotebackground\"><tr><td class=\"quote\">\\2</td></tr></table>",$thingy); */
      /* } */
         
        $thingy=stripslashes($thingy);
        return $thingy;
}

function updatestatus($user) {
//        include("global.php");
	global $dbpath;
	include($dbpath."/members/".$user);
	include($dbpath."/status/ranges");  //read in the ranges set through the admin center
	global $userrank;
	if ($userposts<$range1) {
		$userrank="1";
	}
	elseif ($userposts<$range2) {
		$userrank="2";
	}
	elseif ($userposts<$range3) {
		$userrank="3";
	}
	elseif ($userposts<$range4) {
		$userrank="4";
	}
	elseif ($userposts<$range5) {
		$userrank="5";
	}
	elseif ($userposts<$range6) {
		$userrank="10";
	}
	elseif ($userposts<$range7) {
		$userrank="11";
	}
	if ($userposts>$range7) {
		$userrank="12";
	}

//        WriteUserInfo($user);
}
ob_end_flush();
?>


