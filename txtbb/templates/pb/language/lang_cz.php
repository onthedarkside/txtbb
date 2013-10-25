<?php
/*****************************************************************************

   This is the language template file. The English text is given as a comment, so you can easily include a translation between
   the quotes for each variable. Example:
   the first two lines say
        $NoSuchForum="";     //"No such forum!"
        $ViewForum="";        //"View Forum";

   If you want to add the German translation, these lines become
        $NoSuchForum="Kein solches Forum!";    //"No such forum!"
        $ViewForum="Forum ansehen";        //"View Forum";

		You can also use single quotes instead of double quotes, which speeds up processing a bit. However, you need to
		pay a little more attention: variables, if any are to be included, must be used outside the quoted text, and escaped
		characters must be included in double quotes. The single quote within a line must be written as the HTML code &#39;
		An example:

		$NotifyReplySent="";               //Hi,\n\n    A reply was sent to your post on ".$sitetitle." to the subject ";  //end then follows the subject line

		Would become:

		$NotifyReplySent='Hi'."\n\n".'    A reply was sent to your post on '.$sitetitle.' to the subject ';

   You should also delete the following comment, which always starts with "//" or is in between /* and * /. Then the complete line will look like this:
        $NoSuchForum="Kein solches Forum!";
        $ViewForum="Forum ansehen";
   This will help to avoid problems later on.

   *****************************************************************************
   Date: 3rd October 2002
   Done by Martin Senftleben - E-Mail: drmartinus@gmx.net
   http://www.drmartinus.de/
   my forum is at http://www.drmartinus.de/forum/index.php
   Support for PBLang you get at http://www.drmartinus.de/PBL/index.php

   *****************************************************************************

   Please fill in the details below (language and name of the author)
   This translation's language:
   The author of this translation:
   Webpage of translator:
   Forum of translator (in her or his language):

**********************************************************************************/

$NoSuchForum="Fórum neexistuje!";
$ViewForum="Vzhled fóra";
$NoTopics="Žádná témata v tomto fóru!";
$DeleteForum="Smazat fórum";
$VLockForum="Zamknout fórum";
$VUnlockForum="Otevøít fórum";
$OpenTopic20="Otevøené téma s více než 20 zprávami";
$OpenTopic="Otevøené téma";
$LockedTopic="Zamèené téma";
$PMAlreadyDeleted="Tuto zprávu jste právì smazali!";
$DeletePostNotAllowed="Nesmíte smazat tuto zprávu!";
$NoEditInLockedForum="Nemùžete upravovat zprávy v privátním fóru!";
$EditPost="Úprava zprávy";
$VError="Chyba";
$ContactAdmin="Prosím, kontaktujte administrátora";
$VHelp="Pomoc";
$VExplanation="Vysvìtlení";
$VExplanationPoint="Vykøièník";
$VHelpIMG="Zde mùžete zobrazit ve zprávì nebo podpisu obrázky";
$VDisplays="Zobrazit jako";
$VHelpURL="Zde mùžete vložit do zprávy nebo podpisu odkaz";
$VUsage="Využití";
$VHelpEMAIL="Zde mùžete vložit do zprávy nebo podpisu odkaz na e-mail adresu";
$VHelpGLOW="Zde mùžete vložit do zprávy nebo podpisu zvýraznìný text. Barvy red (èervená), blue (modrá), green (zelená)";
$GlowText="Zvýraznìný text";
$VHelpITALICS="Zde mùžete text ve zprávì nebo podpisu zmìnit na kurzívu";
$ItalicText="Kurzíva";
$VHelpBold="Zde mùžete text ve zprávì nebo podpisu zmìnit na tuèné";
$BoldText="Tuèné";
$VIndex="Obsah";
$WhoIsThere="Kdo je pøihlášený?";
$AlreadyLoggedIn="Jste pøihlášen(á)";
$RegistrationRequired="Pøed vstupem do fóra se pøihlašte nebo <a href\"register.php\">registrujte</a>.";
$NonExistingUser="Uživatel fóra neexistuje";
$UsernameRequired="Zadejte uživatelské jméno";
$PasswordRequired="Zadejte heslo";
$PasswordLost="Zapomenuté heslo uživatele";
$PasswordSent="Vaše heslo bylo odeslané na Vaši e-mail adresu";      
$MemberList="Seznam uživatelù";       
$PostReply="Odpovìdìt";       
$NoReplyInLockedForum="Nemùžete odpovídat v privátním fóru";
$NoReplyInLockedTopic="Nemùžete psát odpovìï k privátnímu tématu";
$UploadsNotAllowed="Nedovolený upload. Zpráva byla odeslaná";
$PostWait="Èekejte prosím! Pøíjem Vaší zprávy";
$NoNewTopicInLockedForum="Nemùžete vytváøet nová témata v privatním fóru";
$LangLocale="cs_CS";
$PrivateMessaging="Osobní zprávy";
$NoMessages="Žádné zprávy";
$ViewPost="Otevøít zprávu";
$VFunctions="Funkce";
$DeleteTopic="Vymazat téma";
$LockTopic="Uzavøít téma";
$UnlockTopic="Odemknout téma";
$AlreadyMember="Jste uživatel fóra";
$NoNewUsers="Nejsou žádní noví uživatelé";
$VRegister="registrujte se";
$PleaseComplete="Vyplòte povinné položky";
$WelcomeMessage="Vítejte,";
$WelcomeMessage1="";
$ThanksMessage="Díky!";
$UsernameTaken="uživatelské jméno už existuje";
$VSearch="Hledej";
$NoResults="Nalezené";
$SendPM="Poslat zprávu";
$AuthorRequired="Musí být zadaný autor";
$MessageSent="Vaša zpráva byla odeslaná";
$InvalidUsername="Neplatné uživatelské jméno";
$NoSuchUser="Dobrý pokus, ale takový uživatel neexistuje";
$InvalidPassword="Neplatné heslo";
$VUserCP="uživatelské nastavení";
$ProfileUpdated=" - uživatelský profil zmìnìný";
$VUpdated="Zmìnit";
$VMembers="uživatel";
$VMembers1="uživatel";                  //Singularforma
$VMembers24="uživatelé";               // Pluralforma
$VMembers59="uživatelé";               //Pluralforma  - 2 Pluralforma pouzivana v rustine
                        //$VMember="";        //"member"; - no longer needed
$VAdministrator="Administrátor";
$VAdminPC="Administrátorské kontrolní centrum";
$VModerator="Moderátor";
$VUser="uživatel";
$AccessDenied="Pøístup zamítnutý";
$AdminCenter="AdminCenter";
$PbNews="Aktuální zprávy PBLang";
$VWhatIsThe="";
$AdminCenterExplain="Toto je vaše AdminCentrum. Mùžete mìnit nastavení, jazyk a spravovat fóra.";
$VVersionCompare="Porovnání verze";
$CompareString="Nejnovìjší verze/Vaše verze";
$LatestRelease="Máte nejnovìjší verzi";
$NewerRelease="Je už novìjší verze";
$VForumSettings="Nastavení fóra";
$VTitle="Fórum-název";
$VTemplate="Pøíklady";
$VSiteMotto="Motto Web stránky nebo fóra";
$VFooter="Patièka";
$VSubmit="OK";
$VReset="Reset";
$VStylesColors="Styly/Barvy";
$VBackground="Podklad";
$VBody="Tìlo (Body)";
$VAlternatingColor1="Alternativní barva 1";
$VAlternatingColor2="Alternativní barva 2";
$VHeaderColor="Podklad hlavièky datové oblasti";
$VHeaderBG="Podklad hlavièky";
$VSubheaderColor="Podklad podtitulu datové oblasti";
$VSubheaderBG="Podklad podnázvu";
$VExtraBorderColor="barva rámeèku";
$VExtraBorderWidth="Šírka rámeèku";
$VStandardBorderColor="Štandartná barva rámeèku";
$VBorderColor="barva rámeèku";
$VLinkColor="barva odkazu";
$VVisitedLinkColor="barva navštíveného odkazu";
$VHoverLinkColor="barva, pokud je myš nad linkou (hover)";
$VDone="Hotovo";
$VTemplate="Pøíklady";
$ChooseTemplate="Zvolte šablonu. Mùžete všechno mìnit.";
$VMenu="Menu";
$VView="Vzhled";
$VMain="Hlavní";
$VSettings="Nastavení";
$VTemplates="Šablony";
$VMemberGroups="Uživatelské skupiny";
$VBanMembers="Vylouèit uživatele";
$VBanMember="Vylouèit uživatele";
$VEmailMembers="Poslat e-mail uživatelùm";
$VGrantStatus="Zmìnit status";
$VCategories="Kategorie";
$VForum="";
$VForums="Fóra";
$VAddForums="Vložit fórum";
$VEditForums="Editovat fórum";
$VEditForum="Editovat fórum";
$VPrevPage="Pøedchodzí strana";
$VNextPage="Následující strana";
$VPage="strana";
$VOf="od";
$VSubject="Název";
$VAuthor="Autor";
$VReplies="Odpovìdi";
$VLastReply="Poslední odpovìï";
$VViews="Prohlédnuto";
$VOptions="Nastavení";
$VUsername="Uživatelské jméno";
$SubjectIcon="Název &amp; ikony";
$VSmiley="Smajlík";
$VShocked="Vystrašený";
$VHuh="He?";
$VTongue="Jazyk";
$VWink="Mžourající";
$VEvil="Zlý";
$VEmbarassed="Trapný";
$VGoofy="Hotový";
$VRollEyes="Koulející oèima";
$VHyperlink="Hyperlink";
$VImage="Obrázek";
$VEmail="E-Mail poslat";
$VGlow="Zvýraznìní";
$VBold="Tuèný";
$VItalicize="Kurzíva";
$VContent="Obsah";
$VAttachment="Pøíloha";
$NoAttachments="Momentálnì nejsou dovolené pøílohy";
$VSubmitForm="Pøevzít údaje";
$VHello="Nazdar";
$VYouHave="máte";
$VMessages="zprávy";
$VMessages1="zprávu";
$VMessages24="zprávy";
$VMessages59="zpráv";
$VPlease="Prosím";
$VLogin="pøihlaste se";
$VLogout="Odhlášení";
$VRegister="registrujte se";
$VHome="Hlavní stránka";
$VSearch="Hledej";
$VHelp="Pomoc";
$VPM="Privátní zpráva";
$AdminPC="Administrátorská zpráva";
$VTopics="Témata";
$VTopics1="téma";      //Singular- und Pluralform - für Erklärung s. oben unter $VMembers
$VTopics24="témata";
$VTopics59="témata";
$VLastPost="Poslední zpráva";
$TimeDate="Dnes je";
$VPassword="Heslo";
$RetrievePassword="Poslat heslo";
$VPosts="zprávy";
$VPosts1="Zpráva";                 //Singular- und Pluralform - für Erklärung s. oben unter $VMembers
$VPosts24="zpráv";
$VPosts59="zpráv";
$VPosition="Status";
$VPost="Zpráva";
$VDeletePost="Vymazat zprávu";
$VNewTopic="Nové téma";
$VStandard="Standard";
$VThumbsUp="Palec nahoru";
$VThumbsDown="Palec dolu";
$VExplanationPoint="Vykøièník";
$VQuestionMark="Otazník";
$VAngry="Nahnìvaný";
$VMad="Hotový";
$VSad="Smutný";
$VSendPM="Poslat soukromou zprávu";
$VReply="odpovídat";
$VDelete="Vymazat";
$VStatus="Status";
$VProfileFor="Profil ";
$VModify="Zmìna";
$VAvatar="Avatar";
$NoAvatars="Nejsou momentálnì možné žádné Avatary";
$VEnableAvatars="Avatar povolený";
$VLocation="Místo";
$VWebsite="Web-stránka";
$VSignature="Podpis";
$VRegistrationComplete="Registrace ukonèená";
$ThanksForSigning="Díky za registraci";
$VHere="zde";
$NoNewUsers="Nejsou žádní noví uživatelé";
$VProfile="Prohlédnout profil";
$VNumber="Èíslo";
$VRequired="Povinné";
$VTopicReview="";
$VSearchTerms="Hledání pojmu";
$VSearchResults="Výsledek hledání";
$VSendMessage="Zprávu odeslat";
$VInbox="Doruèené zprávy";
$VMessage="Zpráva";
$VStats="Statistiky";
$VLatestMember="Nový uživatel je";
$VTheSearchTerm="Hledané slovo";
$VFoundResults="Výsledek hledání";
$VUserControlPanel="uživatelské nastavení";
$VUserControlCenter="uživatelské kontrolní centrum";
$VPersonal="Soukromé";
$VNewPassword="Nové heslo";
$VPersonalText="Soukromý text";
$VList="Záznam";
$PBCodeAllowed="PBCode a smajlíci jsou povolení";
$VPasswordAgain="";
$VWhoIsOnline="Kdo je OnLine?";
$VLoggedIn="pøihlášený(á)";
$VLoggedOn="pøihlášený(á)";
$VLoggedOff="odhlášený(á)";
$VOr="nebo";
$NoAccess="Nemáte pøístup. Pokud si myslíte, že máte mít pøístup, tak kliknìte prosím na obnovit.";
$VDisableAttachments="Pøílohy vypnout";
$VEnableHTML="HTML povolené";
$VCensorWords="Urážející slova cenzurovat";
$VEnableBBCode="PBCode povolené";
$VEnableSmilies="Smajlíci povolení";
$VAllowNewUsers="Povolení noví uživatelé";
$VMaintenanceMode="Mód úpravy";
$VOnlyAdmins="Jen administrátoøi mají pøístup na fórum";
$RequireLogin="Uživatelé se musí pøihlásit";
$VToViewForum="aby vidìli zprávy";
$VMaintReason="Dùvod módu úprav";
$VBannedReason="Dùvod vylouèení";
$AdminEmail="E-mail adresa administrátora";
$AdminEmailReason="E-mail adresa ukazuje na chybovou stránku, tím je pøevzatá chybová hláška.";
$VComplete="Hotovo";
$VTemplateEditor="Editor šablon";
$VInfinity="nekoneèný";
$VBanned="Vylouèený";
$VCategory="Skupina";
$VAddCategory="Vložit skupinu";
$VEditCategories="Upravit skupiny";
$VEditCategory="Upravit skupinu";
$ExplainAddCategory="Vyplòte formuláø pøidání skupiny";
$VName="Název";
$VDesc="Popis";
$VVia="pøes";
$VPrivateMessage="Zpráva v rámci fóra";
$VWhichStatus="Jaký status";
$VBan="Vylouèit";
$VUnban="Povolit";
$VNever="Nikdy";
//$AdministrativeFunctions="";        //"administrative functions";  - not needed any more
$VOn="reakce";         // so und so vielten
$VBy="od";        // einer Person
$VSent="Odeslané";
$NoPermission="Nemáte povolení na tuto akci!";
$VLocked="Uzavøené";

// status 19 Sept 2002
$VHideEmail="E-mail adresu neukazovat jiným uživatelùm";
$VHidden="Skrýt";
$Charset="windows-1250";
// status 21 Sept 2002
$VNewMember="Nový uživatel fóra";
$VWith="s";
$VAllowEmail="Povolené E-maily";
$VThereIs="Momentálnì je";
$VThereAre="Momentálnì jsou";
$VEdited="Zpracovávané";
$VEditMembergroups="Upravit uživatelské skupiny";
//status 22 Sept 2002
$VAnd="&amp;";
$SetRequireLogin="Uživatelé se musí pøihlásit";
$VTo="komu";
$VSmilies="Smilies";
$VPBCode="PBCode";
$CVLogin="pøihlásit";
//status 23 Sept 2002
$VPosted="Upload";
$PBLSupportLink="Podpora PBLang v angliètinì";
$VReplySent="Dostali jste odpovìï";         //Prepis Emailu
$NotifyReplySent="Haló,\n\n    byla poslaná odpovìï na Vaši zprávu ".$sitetitle." k tématu ";     //Obsah mailu
$VNotifyByEmail="Chcete být E-mailem informovaný(á), jakmile bude napsaná odpovìï";
$EmailNotification="Oznámit E-mailem";
$VAdministrativeFunctions="Administrativní funkce";
$VURLAvatar="Avatar z URL";
//status 27 Sept. 2002
$ForumLocked="";
$WrongUsername="Špatné uživatelské jméno. Jmého se mùže skládat pouze z písmen a èíslic";
$WrongEmailAddress="Toto není platná E-mailová adresa";
//status 2 Oct 2002
$VFrom="od";
$VNoTemplatesEdit="Needitujte zde data. Použite na to odpovídající editor!";
//status 3. Oct. 2002
$VFont="Font";
$VFontColor="barva fontu";
$VFontsize="Velikost fontu";
//Following are datevariables which need to be filled in with so called placeholders, since time changes every time a page is called up. Fill in the appropriate string
//for your language!
/***************************************
usage of placeholders in datevariables:
%a= shortened name of weekday in local language
%A= full name of weekday in local language
%b= shortened name of month
%B= full name of month
%c= date and time in a format matching the format of the local language (if you don't know what to fill in, use this one)
%C= century
%d= day of month (00 to 31)
%D= shows "m/d/y", i.e. "06/23/02" (see example below)
%e= day of month as number, 0 to 31
%h= like %b
%H= hour in 24-hour format (00 to 24)
%I hour in 12-hour format (01 to 12)
%j= day of year (ßß1 to 366)
%m= month as decimal (01 to 12)
%M= minute as decimal (00 to 60)
%n= new line
%p= "am" or "pm", depending on time of the day and on the local language
%r= time in am- or pm formatting
%R= time in 24-hour format
%S= seconds as decimals
%t= tabulator
%T= actual time, represents %H%M%S
%u= day of week as decimal (1= Monday)
%U= number of week as decimal; Sunday is the first day of the week
%V= Calendarweek. Week begins Monday, first week is the week with at least 4 days in the new year
%w= weekday as decimal, Sunday is 0
%W= number of the week, first Monday in the year is the first day of the first week
%x= preferred date depending on set language
%X= preferred time depending on set language
%y= year as two-number-digit
%Y= year as four-number-digit
%Z= timezone
%%= the %-sign
***************************************/
$DateFormat1="%d.%m.%y";
$DateFormat2="%d. %B %Y, %H:%M";
$VLessThan="Ménì než";
$VLanguageEdit="Zpracovat jazyková data ";
//status 4. Oct. 2002
$VRemoveMembers="Vymaž uživatele";
$VRemove="Vymaž";
$VMemberRemoved="Tento uživatel už neexistuje";

/*below are the <alt> and <title> tags for the various buttons in PBLang. See further down towards the end of the file for the
appropriate variables to set the links to the buttons in your language. There an additional explanation is given*/
$Vpicturebuttons="Použít tlaèítka";
$profilealt="Prohlédnout profil";
$profiletitle="Náhled profilu";
$emailalt="E-Mail poslat";
$emailtitle="E-Mail poslat";
$Vemail="E-Mail poslat";
$editalt="Úprava pøíspìvku";
$edittitle="Úprava pøíspìvku";
$Vedit="Úprava pøíspìvku";
$sendpmalt="Poslat soukromou zprávu";
$sendpmtitle="Poslat soukromou zprávu";
$Vsendpm="Poslat soukromou zprávu";
$yimalt="YIM poslat";
$yimtitle="YIM poslat";
$Vyim="YIM poslat";
$aimalt="AIM poslat";
$aimtitle="AIM poslat";
$Vaim="AIM poslat";
$msnalt="MSN poslat";
$msntitle="MSN poslat";
$Vmsn="MSN poslat";
$icqalt="ICQ poslat";
$icqtitle="ICQ poslat";
$Vicq="ICQ poslat";
$wwwalt="Web-stránka";
$wwwtitle="Web-stránka";
$Vwww="Web-stránka";
//Posts
$newthreadalt="Nové téma";
$newthreadtitle="Nové téma";
$Vnewthread="Nové téma";
$replyalt="odpovídat";
$replytitle="odpovídat";
$lockedalt="Uzavøené";
$lockedtitle="Uzavøené";
//header images
$homealt="Fórum-Pøehled";
$hometitle="Fórum-Pøehled";
$searchalt="Hledej";
$searchtitle="Hledej";
$helpalt="Pomoc";
$helptitle="Pomoc";
$logoutalt="Odhlásit";
$logouttitle="Odhlásit";
$ucpalt="uživatelské nastavení";
$ucptitle="uživatelské nastavení";
$pmalt="Soukromá zpráva";
$pmtitle="Soukromá zpráva";
$loginalt="pøihlásit";
$logintitle="pøihlásit";
$registeralt="Registrovat";
$registertitle="Registrovat";
$adminalt="Administrátor";
$admintitle="Administrátor";
$memberslistalt="uživatel";
$memberslisttitle="uživatel";
//status 5th Oct. 2002
$VPreviousMessages="Pøedchozí zprávy";
$VTextColor="barva textu";
$VMoreThan="Více než";
//status 8th October
$NoSuchFile="Data neexistují!";
//status 9th October
$VRE="Odp.";
//status 10th October
$PWNoMatch="Hesla nesouhlasí! Zkuste znova.";
$VDefault="Normal";
$VStars="Hvìzdy";
$VFlames="Plameny";
$VRankImages="Status obrázek";
$VMaxPostsReply="Pøi odpovìdi zobrazit tolik zpráv";
$VEditPost="Zpracovat zprávu";
//status 11th October
$VReplied="Reply";
$VNew="Nový";
$VOriginalPM="Pøijatá zpráva";
$VRead="Pøeètené";
//status 12 Oct 2002
$VNoSubject="Žádný nadpis";
//status 13 Oct 2002
$VOrderOfReplies="Uspoøádání odpovìdi";
$VFirstReplyFirst="První zpráva na zaèátek";
$VFirstReplyLast="První zpráva na konec";
//status 14 Oct 2002
$VStyleHeaderFont="Typ písma";
$VStyleHeaderPage="Podklad stránek";
$VStyleHeaderTitle="Hlavièka fóra";
$VStyleHeaderMenu="Menu";
$VStyleHeaderDate="Datum";
$VStyleHeaderContainer="Oblast dat";
$VStyleHeaderHeader="Hlavièka";
$VStyleHeaderSubheader="Podtitul";
$VStyleHeaderMenu="Menu";
$VStyleHeaderForumButton="Pøehled fóra";
$VStyleHeaderUserColors="uživatelská barva";
$VStyleHeaderLinkColors="barva linek";

$VBackground="Podklad";
$VForm="Podklad celého fóra";
$VFormBorder="barva orámování fóra";
$VFormBorderSize="Velikost orámování";
$VForumHeaderBorder="barva rámeèku hlavièky";
$VForumHeaderBorderSize="Šíøka rámeèku hlavièky";
$VForumHeader="Podkladová barva hlavièky";
$VForumHeaderTitle="barva textu jmen ve fóru";
$VForumHeaderTitleSize="Velikost jmen ve fóru";
$VForumHeaderCaption="barva textu podtitulù";
$VForumHeaderWelcome="barva uvítacího textu";
$VForumHeaderMenu="Podklad hlavního menu";
$VForumHeaderMenuFont="barva textu hlavního menu";
$VDateColor="barva písma datumu";
$VContainerBorder="barva rámeèku datové oblasti";
$VContainerBorderSize="Velikost rámeèku datové oblasti";
$VContainerInner="Podklad datové oblasti";
$VHeaderColor="Podklad hlavièky datové oblasti";
$VHeaderGif="Podkladový obrázek hlavièky datové oblasti";
$VHeaderFont="barva textu hlavièky datové oblasti";
$VSubheaderColor="Podklad podtitulu datové oblasti";
$VSubheaderGif="Podkladový obrázek podtitulu datové oblasti";
$VSubheaderFont="barva textu podtitulu datové oblasti";
$VMenuColor="barva podkladu formuláøe";
$VFMenuColor="Podklad nadpisu formuláøe";
$VMenuFont="barva nadpisu formuláøe";
$VForumButtonColor="Podklad seznamu ";
$VForumButtonOver="Zmìna barvy seznamu";
$VForumButtonTopics="Podklad seznamu sloupce tém";
$VForumButtonReplies="Podklad seznamu sloupce odpovìdí";
$VForumButtonLast="Podklad seznamu sloupce posledních zpráv";
$VAdminColor="Administrátorská barva textu";
$VModColor="Moderátorská barva textu";
$VUserColor="uživatelská barva textu";
$VServerTimezone="Èas na serveru";
$VLocalTimezone="Èas ve fóru";
$VExplainTimezone="Pokud nesouhlasí èas ve fóru, nastavte ho pøíslušnou volbou";
$VTimeZone="Èasová zóna";
$VBurningFlames="Hoøící plameny";
/*The following 3 variables allow a better output in the stats-line. Ending 1 is the singular form for the beginning of the sentence like
"There is currently 1 members". Ending 24 und 59 are the plural forms for the beginning of the sentence like "There are currently 7 members".
If you had the variables $VCurrentMember and $VCurrentmembers in older lang-files, you can remove them now - they are no longer used.
*/
$VCurrentMembers1="V systému je";    //The variables $VCurrentMember and $VCurrentmembers can be removed!
$VCurrentMembers24="V systému jsou";
$VCurrentMembers59="V systému jsou";
$VEMSupport="Server podporuje E-Mail pomocí PHP";
$VNoEMSupport="Je mi líto, ale server nepodporuje E-mail pomocí PHP";
$VDefaultSlogan="Výchozí slogan";
$VExplainSlogan="Slogan je øádek pod Avatar-obrázkem";
$VPredefStyles="Pøipravené styly";
$VNotWriteable="Je mi líto, ale data nemùžou být zapsané";
$VRemoveStatus="Normální status";
$VOfTheseNew="Z toho nových";
$VMaxAtchSize="Max. velikost pøílohy v bytech (0neomezené)";
$VFileTooBig="Je mi líto, ale velikost dat je omezená. Toto nemùže být odeslané. Použijte namísto toho URL adresu k datùm.";
$VCookieError="Váš prohlížeè nepodporuje Cookies. Toto fórum však vyžaduje mít zapnuté Cookies.";
$VNotice="Poznámka";
$VUsernameGiven="Takové uživatelské jméno už existuje";
$VUsernameLimits="^[a-zA-Z0-9]+$";
$VDate="Datum";
$VLanguageSelection="Jazyk";
$VRepeatPassword="Opakujte heslo";
$qqalt="QQ";
$qqtitle="QQ";
$VStyleButtonChoice="Volba tlaèítek";
$VButtonLimits="Tato volba funguje, pouze pokud nepoužíváte speciální znaky jazyka.";
//status 4 Nov 2002
$VIn="v";
$VRealname="Skuteèné celé jméno";
$VAlias="Alias";
$VExplainAlias="I když Vaše pøihlašovací jméno zùstává nezmìnìné, mùžete si zvolit alias, pod kterým budete ve fóru.";
$VSlogan="Slogan";
//status 5 Nov 2002
$VStyleHeaderMemgroupColors="barva uživatelské skupiny";
$VDateJoined="Datum vstupu";
$VLastVisit="Poslední návštìva";
$VLastPost="Poslední zpráva";
$VGroupColors="Umožnit barvy skupiny";
$VGroupcolorsExplain="Tímto umožníte v online statistice zobrazit uživatele v barvì závislé na jeho uživatelské skupinì";
//status 6 November 2002
$VIPLogged="IP-adresu zapamatovat";
$VSiteLogo="Logo fóra (board-u)";
$VSiteLogoExplain="obrázek musí být uložený v adresáøi templates/pb/images. Zadejte pouze název souboru.";
$VMaxPPP="Tolik zpráv zobrazit na stránce";
//status 11 Nov 2002
$VRequestConfirmation="Potvrzování registrace pøes e-mail";
$VPleaseConfirm="Prosím potvrïte registraci kliknutím na následující odkaz:";
//status 12 Nov 2002
$VNoAvatar="Žádný avatar"; //in the selection list, choose this if you don't want an avatar
/*Following variable: Do not change the part &quot;$VURLAvatar&quot;, it will be translated automatically
with the words that you have put into the variable $VURLAvatar
This variable was in use earlier but has changed, so please remove it from the upper region of the file, if you are updating
an existing language file*/
$AvatarURLtip="(Tip: Musíte zvolit z výše nabízeného &quot;$VURLAvatar&quot; seznamu, aby jste mohli použít tuto funkci)";
//status 13 Nov 2002
$VDeleteCat="Vymazat skupinu";
$VConfirmation="Potvrzení registrace";
$VWrongConfirmationCode="Neplatný kód";
$VConfirmationError="Potvrzení zpùsobilo chybu";
$VNoCatDelete="Nemùžete vymazat skupinu, ktorá ještì obsahuje fórum. Vymažte nejdøíve fórum";
//status 15 Nov 2002
$VStyleAnnouncementFont="Nastavení pro poznámky";
//status 16 Nov 2002
$Vgladg="Šastná grimasa";
$Vgrinsg="Chechtající se grimasa";
$Vbadg="Špatnì naladìný";
$Vschluckg="Ó jé";
$Vsunglg="Nešastný";
$Vteardrop="Slzy";
$Vsurprised="Pøekvapený";
$Vsleeping="Spící";
$Vthmbup="Palec nahoru";
$Vthmbdn="Palec dolù";
$Vpfeilrg="Šipka vpravo";
$Vbulb="Nápad";
$VHelpg="Pomoc!";
$Vbounceg="Skákající";
$Vdanceg="Tanèící";
$Vredface2g="Èervený ksicht";
$Vdevilg="Ïábel";
$Vrespektg="";
$Vschimpfg="Nadávka";
$Vwallbashg="Hlavou proti zdi";
$Vofftopicg="Mimo téma!";
$VEnableAnimSmilies="Používat animované smajlíky (stránky se ale budou natahovat déle)";
//status 19 Nov 2002
$VAllowAlias="Alias povolit";
$VChangeAlias="Alias mùže být zmìnìný po";
$VDays="dní";
$ChangeAliasNotAllowed="Nemùžete momentálnì zmìnit alias";
$AliasAlreadyInUse="Tento alias je už používaný";
$VAllowAccess="Následujíci uživatelé mohou používat toto fórum";
$VAll="Všichni";
$VModerators="Moderátoøi";
$VFriend="Pøítel";
$VExplainFriend="Pøítel je uživatel, kterému se umožní pøístup na urèitá fóra, bez toho, aby mìl status moderátora.";
$VExpectConformationMail="Dostanete e-mail o pøihlášení. Po kliknutí na odkaz potvrdíte svoje pøihlásenie, tím se stanete uživatelem fóra.";
//status 20 Nov 2002
$VWelcomeMessage="Pøidat text do uvítací zprávy";
//status 21 Nov 2002
$VCheckIP="Zvýšit bezpeènost: chcete, aby IP-adresy návštevníkù byly kontrolované a uložené?";
$VSitelogoWidth="Šíøka loga v pixelech";
$VSitelogoHeight="Výška loga v pixelech";
//status 22 Nov 2002
$VAnnounce="Speciální oznámení na hlavní stránce";
//status  27 Nov 2002
$VToday="Dnes";
$VVisits1="návštìva";
$VVisits24="návštìvy";
$VVisits59="návštìv";
$VTotalVisits="Všech návštìv";
$VLastVisitors="Poslední návštìvník";
//status 30 Nov 2002
$VUsernameTooLong="uživatelské jméno je pøíliš dlouhé - povolených je maximálnì 25 znakù";
$VNotifyAdmin="Oznámit administrátorovi pøidání nového tématu";
$VNotifyAdminReplies="Oznámit administrátorovi každou novou zprávu";
//status 1 Dec 2002
$VNewReply="Nová odpovìï";
//status 4 Dec 2002
$VAlreadyUpdated="Zmìny už byly provedeny, není co mìnit";
//status 7 Dec 2002
$VFolderIconChoice="Zvolit adresáø symbolov";
$ficonalt="Adresáø symbolù";
//status 8 Dec 2002
$VForbiddenType="Nepodporovaný soubor. Mùžete uploadovat grafické soubory (gif, jpg, tif), textové soubory (txt) nebo archivní soubory (zip, rar)";        
$VUserIsOnline="uživatel je práve online a nemùže být vymazaný";
$VQuotaExceeded="Není dostatek prostoru na pøidání tohoto souboru";
$VMinimumSpace="Potøebný minimální volný prostor na serveru (v Bytech)";
//status 10 Dec 2002
$VGuestVisits="návštìv hostù";
$VTotalGuests="Všech hostù";
$VAllVisits="Hostù a uživatelù";
//status 11 Dec 2002
$VRules="Základní pravidla";
//status 12 Dec 2002
$DateFormat3="%d.%m.%y, %H:%M";
//status 13 Dec 2002
$VGuests1="host";
$VGuests24="hosté";
$VGuests59="hostù";
//status 15 Dec 2002
$PasswordMessage="Kontaktuj administrátora kvùli zmìnì hesla";
//status 16 Dec 2002
$VUnknown="neznámý";
$VRemoved="vymazaný";
$VMaxAvatarWidth="Max. šírka Avatar-obrázku v pixelech";
$VMaxAvatarHeight="Max. výška Avatar-obrázku v pixelech";
//status 17Dec 2002
$VAcceptRules="Souhlasím s pravidly";
$VRulesMustBeAccepted="Musíte akceptovat podmínky fóra. Zaškrtnìte, prosím, odpovídající políèko";
//status 7 Jan 2003
$VMaxLastPosts="Maximální poèet posledních zpráv";
$VLatestPosts="Nejnovìjší zprávy";
$Vreplies1="odpovìï";
$Vreplies24="odpovìdi";
$Vreplies59="odpovìdí";
//status 13 Jan 2003
$quotetitle="citovat";
$quotealt="citovat";
$VGenerell="Hlavní";
$VStyleQuoteFont="Nastavení písma citátu";
//status 20 Jan 2003
$VStickyMessage="Zafixovat zprávu";
$VStickyMessageExplain="Zafixovaná zpráva zùstává ve fóru vždy na prvním místì a tedy padne spíš do oka";
//3 March 2003
$VMaxRPP="Maximální poèet odpovìdí na stránce";
//10 March 2003
$VBoardwidth="Šíøka fóra (ménì než 101 znamená v procentech, více než 300 znamená v bodech)";
$VBackgroundimage="obrázek pozadí (jméno souboru v templates/pb/images)";
//status 10 April 2003
$VEnableWebAvatars='Web-Avatar obrázky povoleny (avatar stáhnuté z jiných stránek)';
//status 16 April 2003
$VAlign='zarovnání';
$VLeft='vlevo';
$VCenter='na støed';
$VRight='vpravo';
//status 19 April 2003
$VAllowReplyInLockedForum='Èlenové smí v uzavøených fórech odpovídat';
$VExplainLockedForum='Pouze admin a moderátoøi smí v tomto fóru psát nové zprávy';
//status 10 May 2003
$VBoardidentity='Údaje k identitì fóra';
$VBoardappearance='Vzhled fóra';
$VBoardsettings='Všeobecné nastavení fóra';
$VNotificationsettings='Nastavení pro notifikaci';
$VAliassettings='Nastavení pro alias';
$VAvatarsettings='Nastavení pro avatar';
$VPostsettings='Nastavení pro zprávy';
$VMembershipsettings='Nastavení pro uživatele';
$VQuoteBorder='velikost oramovaní citátu';
$VQuote='Citát';
//status 12 May 2003
$VDisableAvatars='Nezobrazuj avatar (vhodné pre nízké pøenosové rychlosti)';
$VIncompleteUpdate='Fórum nebylo správnì updatované. Pøeètìte si pozornì PBLang-doc.txt';
//status 14 May 2003
$VNoNews='Momentálnì nejsou žádné nové zprávy';
$TestRelease='Testujete novou verzi. Díky. V pøípadì problémù se obrate na autora softwaru!';
$StillBeta='Používáte ješte testovací verzi, ale už je k dispozici plná verze. Stáhnìte si prosím nejnovìjší verzi!';
//15 May 2003
$VReplyallowed='Smíte v tomto fóru odpovídat, ale ne psát nové zprávy.';
$OpenTopic20read='Otevøené téma s více než 20 zprávami - pøeètené';
$OpenTopicread='Otevøené téma - pøeètené';
$LockedTopicread='Uzavøené téma - pøeètené';
$StickyMessage='Fixovaná zpráva - nepøeètená';
$StickyMessageread='Fixovaná zpráva - pøeètená'; 
$VTextareawidth='Šíøka textového pole';
$VExplainTextareawidth='Pokud je fórum na stránkach s rámci (framy), tak textové pole pøi zadávaní/editování nových zpráv, nebo pøi odpovìdích je široké. Pokud snížíte tuto hodnotu, tak se vejde celá stránka do rámce.';
//17 May 2003
$VStylePrefix='Styl prefixu';
$VExplainStylePrefix='Styl prefixu urèuje, která tlaèítka a obrázky jsou pro tento styl. Pøeètìte si k tomu dokumentaci styles.txt v adresáøi doc.';  
$VRestrictedForum='Neveøejné fórum. Smíte sice na zprávy odpovídat, ale nemùžete zakládat nová témata';
//22 May 2003
$VAttachmenttypes='Povolit následující typy souborù jako pøílohy';
//13 Aug 2003
$VNoValidMessage='Pøi ukládání zprávy nastala chyba. Chybí adresát a obsah zprávy. Napište zprávu ješte jednou.!';



?>



