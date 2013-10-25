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

$NoSuchForum="F�rum neexistuje!";
$ViewForum="Vzhled f�ra";
$NoTopics="��dn� t�mata v tomto f�ru!";
$DeleteForum="Smazat f�rum";
$VLockForum="Zamknout f�rum";
$VUnlockForum="Otev��t f�rum";
$OpenTopic20="Otev�en� t�ma s v�ce ne� 20 zpr�vami";
$OpenTopic="Otev�en� t�ma";
$LockedTopic="Zam�en� t�ma";
$PMAlreadyDeleted="Tuto zpr�vu jste pr�v� smazali!";
$DeletePostNotAllowed="Nesm�te smazat tuto zpr�vu!";
$NoEditInLockedForum="Nem��ete upravovat zpr�vy v priv�tn�m f�ru!";
$EditPost="�prava zpr�vy";
$VError="Chyba";
$ContactAdmin="Pros�m, kontaktujte administr�tora";
$VHelp="Pomoc";
$VExplanation="Vysv�tlen�";
$VExplanationPoint="Vyk�i�n�k";
$VHelpIMG="Zde m��ete zobrazit ve zpr�v� nebo podpisu obr�zky";
$VDisplays="Zobrazit jako";
$VHelpURL="Zde m��ete vlo�it do zpr�vy nebo podpisu odkaz";
$VUsage="Vyu�it�";
$VHelpEMAIL="Zde m��ete vlo�it do zpr�vy nebo podpisu odkaz na e-mail adresu";
$VHelpGLOW="Zde m��ete vlo�it do zpr�vy nebo podpisu zv�razn�n� text. Barvy red (�erven�), blue (modr�), green (zelen�)";
$GlowText="Zv�razn�n� text";
$VHelpITALICS="Zde m��ete text ve zpr�v� nebo podpisu zm�nit na kurz�vu";
$ItalicText="Kurz�va";
$VHelpBold="Zde m��ete text ve zpr�v� nebo podpisu zm�nit na tu�n�";
$BoldText="Tu�n�";
$VIndex="Obsah";
$WhoIsThere="Kdo je p�ihl�en�?";
$AlreadyLoggedIn="Jste p�ihl�en(�)";
$RegistrationRequired="P�ed vstupem do f�ra se p�ihla�te nebo <a href\"register.php\">registrujte</a>.";
$NonExistingUser="U�ivatel f�ra neexistuje";
$UsernameRequired="Zadejte u�ivatelsk� jm�no";
$PasswordRequired="Zadejte heslo";
$PasswordLost="Zapomenut� heslo u�ivatele";
$PasswordSent="Va�e heslo bylo odeslan� na Va�i e-mail adresu";      
$MemberList="Seznam u�ivatel�";       
$PostReply="Odpov�d�t";       
$NoReplyInLockedForum="Nem��ete odpov�dat v priv�tn�m f�ru";
$NoReplyInLockedTopic="Nem��ete ps�t odpov�� k priv�tn�mu t�matu";
$UploadsNotAllowed="Nedovolen� upload. Zpr�va byla odeslan�";
$PostWait="�ekejte pros�m! P��jem Va�� zpr�vy";
$NoNewTopicInLockedForum="Nem��ete vytv��et nov� t�mata v privatn�m f�ru";
$LangLocale="cs_CS";
$PrivateMessaging="Osobn� zpr�vy";
$NoMessages="��dn� zpr�vy";
$ViewPost="Otev��t zpr�vu";
$VFunctions="Funkce";
$DeleteTopic="Vymazat t�ma";
$LockTopic="Uzav��t t�ma";
$UnlockTopic="Odemknout t�ma";
$AlreadyMember="Jste u�ivatel f�ra";
$NoNewUsers="Nejsou ��dn� nov� u�ivatel�";
$VRegister="registrujte se";
$PleaseComplete="Vypl�te povinn� polo�ky";
$WelcomeMessage="V�tejte,";
$WelcomeMessage1="";
$ThanksMessage="D�ky!";
$UsernameTaken="u�ivatelsk� jm�no u� existuje";
$VSearch="Hledej";
$NoResults="Nalezen�";
$SendPM="Poslat zpr�vu";
$AuthorRequired="Mus� b�t zadan� autor";
$MessageSent="Va�a zpr�va byla odeslan�";
$InvalidUsername="Neplatn� u�ivatelsk� jm�no";
$NoSuchUser="Dobr� pokus, ale takov� u�ivatel neexistuje";
$InvalidPassword="Neplatn� heslo";
$VUserCP="u�ivatelsk� nastaven�";
$ProfileUpdated=" - u�ivatelsk� profil zm�n�n�";
$VUpdated="Zm�nit";
$VMembers="u�ivatel";
$VMembers1="u�ivatel";                  //Singularforma
$VMembers24="u�ivatel�";               // Pluralforma
$VMembers59="u�ivatel�";               //Pluralforma  - 2 Pluralforma pouzivana v rustine
                        //$VMember="";        //"member"; - no longer needed
$VAdministrator="Administr�tor";
$VAdminPC="Administr�torsk� kontroln� centrum";
$VModerator="Moder�tor";
$VUser="u�ivatel";
$AccessDenied="P��stup zam�tnut�";
$AdminCenter="AdminCenter";
$PbNews="Aktu�ln� zpr�vy PBLang";
$VWhatIsThe="";
$AdminCenterExplain="Toto je va�e AdminCentrum. M��ete m�nit nastaven�, jazyk a spravovat f�ra.";
$VVersionCompare="Porovn�n� verze";
$CompareString="Nejnov�j�� verze/Va�e verze";
$LatestRelease="M�te nejnov�j�� verzi";
$NewerRelease="Je u� nov�j�� verze";
$VForumSettings="Nastaven� f�ra";
$VTitle="F�rum-n�zev";
$VTemplate="P��klady";
$VSiteMotto="Motto Web str�nky nebo f�ra";
$VFooter="Pati�ka";
$VSubmit="OK";
$VReset="Reset";
$VStylesColors="Styly/Barvy";
$VBackground="Podklad";
$VBody="T�lo (Body)";
$VAlternatingColor1="Alternativn� barva 1";
$VAlternatingColor2="Alternativn� barva 2";
$VHeaderColor="Podklad hlavi�ky datov� oblasti";
$VHeaderBG="Podklad hlavi�ky";
$VSubheaderColor="Podklad podtitulu datov� oblasti";
$VSubheaderBG="Podklad podn�zvu";
$VExtraBorderColor="barva r�me�ku";
$VExtraBorderWidth="��rka r�me�ku";
$VStandardBorderColor="�tandartn� barva r�me�ku";
$VBorderColor="barva r�me�ku";
$VLinkColor="barva odkazu";
$VVisitedLinkColor="barva nav�t�ven�ho odkazu";
$VHoverLinkColor="barva, pokud je my� nad linkou (hover)";
$VDone="Hotovo";
$VTemplate="P��klady";
$ChooseTemplate="Zvolte �ablonu. M��ete v�echno m�nit.";
$VMenu="Menu";
$VView="Vzhled";
$VMain="Hlavn�";
$VSettings="Nastaven�";
$VTemplates="�ablony";
$VMemberGroups="U�ivatelsk� skupiny";
$VBanMembers="Vylou�it u�ivatele";
$VBanMember="Vylou�it u�ivatele";
$VEmailMembers="Poslat e-mail u�ivatel�m";
$VGrantStatus="Zm�nit status";
$VCategories="Kategorie";
$VForum="";
$VForums="F�ra";
$VAddForums="Vlo�it f�rum";
$VEditForums="Editovat f�rum";
$VEditForum="Editovat f�rum";
$VPrevPage="P�edchodz� strana";
$VNextPage="N�sleduj�c� strana";
$VPage="strana";
$VOf="od";
$VSubject="N�zev";
$VAuthor="Autor";
$VReplies="Odpov�di";
$VLastReply="Posledn� odpov��";
$VViews="Prohl�dnuto";
$VOptions="Nastaven�";
$VUsername="U�ivatelsk� jm�no";
$SubjectIcon="N�zev &amp; ikony";
$VSmiley="Smajl�k";
$VShocked="Vystra�en�";
$VHuh="He?";
$VTongue="Jazyk";
$VWink="M�ouraj�c�";
$VEvil="Zl�";
$VEmbarassed="Trapn�";
$VGoofy="Hotov�";
$VRollEyes="Koulej�c� o�ima";
$VHyperlink="Hyperlink";
$VImage="Obr�zek";
$VEmail="E-Mail poslat";
$VGlow="Zv�razn�n�";
$VBold="Tu�n�";
$VItalicize="Kurz�va";
$VContent="Obsah";
$VAttachment="P��loha";
$NoAttachments="Moment�ln� nejsou dovolen� p��lohy";
$VSubmitForm="P�evz�t �daje";
$VHello="Nazdar";
$VYouHave="m�te";
$VMessages="zpr�vy";
$VMessages1="zpr�vu";
$VMessages24="zpr�vy";
$VMessages59="zpr�v";
$VPlease="Pros�m";
$VLogin="p�ihlaste se";
$VLogout="Odhl�en�";
$VRegister="registrujte se";
$VHome="Hlavn� str�nka";
$VSearch="Hledej";
$VHelp="Pomoc";
$VPM="Priv�tn� zpr�va";
$AdminPC="Administr�torsk� zpr�va";
$VTopics="T�mata";
$VTopics1="t�ma";      //Singular- und Pluralform - f�r Erkl�rung s. oben unter $VMembers
$VTopics24="t�mata";
$VTopics59="t�mata";
$VLastPost="Posledn� zpr�va";
$TimeDate="Dnes je";
$VPassword="Heslo";
$RetrievePassword="Poslat heslo";
$VPosts="zpr�vy";
$VPosts1="Zpr�va";                 //Singular- und Pluralform - f�r Erkl�rung s. oben unter $VMembers
$VPosts24="zpr�v";
$VPosts59="zpr�v";
$VPosition="Status";
$VPost="Zpr�va";
$VDeletePost="Vymazat zpr�vu";
$VNewTopic="Nov� t�ma";
$VStandard="Standard";
$VThumbsUp="Palec nahoru";
$VThumbsDown="Palec dolu";
$VExplanationPoint="Vyk�i�n�k";
$VQuestionMark="Otazn�k";
$VAngry="Nahn�van�";
$VMad="Hotov�";
$VSad="Smutn�";
$VSendPM="Poslat soukromou zpr�vu";
$VReply="odpov�dat";
$VDelete="Vymazat";
$VStatus="Status";
$VProfileFor="Profil ";
$VModify="Zm�na";
$VAvatar="Avatar";
$NoAvatars="Nejsou moment�ln� mo�n� ��dn� Avatary";
$VEnableAvatars="Avatar povolen�";
$VLocation="M�sto";
$VWebsite="Web-str�nka";
$VSignature="Podpis";
$VRegistrationComplete="Registrace ukon�en�";
$ThanksForSigning="D�ky za registraci";
$VHere="zde";
$NoNewUsers="Nejsou ��dn� nov� u�ivatel�";
$VProfile="Prohl�dnout profil";
$VNumber="��slo";
$VRequired="Povinn�";
$VTopicReview="";
$VSearchTerms="Hled�n� pojmu";
$VSearchResults="V�sledek hled�n�";
$VSendMessage="Zpr�vu odeslat";
$VInbox="Doru�en� zpr�vy";
$VMessage="Zpr�va";
$VStats="Statistiky";
$VLatestMember="Nov� u�ivatel je";
$VTheSearchTerm="Hledan� slovo";
$VFoundResults="V�sledek hled�n�";
$VUserControlPanel="u�ivatelsk� nastaven�";
$VUserControlCenter="u�ivatelsk� kontroln� centrum";
$VPersonal="Soukrom�";
$VNewPassword="Nov� heslo";
$VPersonalText="Soukrom� text";
$VList="Z�znam";
$PBCodeAllowed="PBCode a smajl�ci jsou povolen�";
$VPasswordAgain="";
$VWhoIsOnline="Kdo je OnLine?";
$VLoggedIn="p�ihl�en�(�)";
$VLoggedOn="p�ihl�en�(�)";
$VLoggedOff="odhl�en�(�)";
$VOr="nebo";
$NoAccess="Nem�te p��stup. Pokud si mysl�te, �e m�te m�t p��stup, tak klikn�te pros�m na obnovit.";
$VDisableAttachments="P��lohy vypnout";
$VEnableHTML="HTML povolen�";
$VCensorWords="Ur�ej�c� slova cenzurovat";
$VEnableBBCode="PBCode povolen�";
$VEnableSmilies="Smajl�ci povolen�";
$VAllowNewUsers="Povolen� nov� u�ivatel�";
$VMaintenanceMode="M�d �pravy";
$VOnlyAdmins="Jen administr�to�i maj� p��stup na f�rum";
$RequireLogin="U�ivatel� se mus� p�ihl�sit";
$VToViewForum="aby vid�li zpr�vy";
$VMaintReason="D�vod m�du �prav";
$VBannedReason="D�vod vylou�en�";
$AdminEmail="E-mail adresa administr�tora";
$AdminEmailReason="E-mail adresa ukazuje na chybovou str�nku, t�m je p�evzat� chybov� hl�ka.";
$VComplete="Hotovo";
$VTemplateEditor="Editor �ablon";
$VInfinity="nekone�n�";
$VBanned="Vylou�en�";
$VCategory="Skupina";
$VAddCategory="Vlo�it skupinu";
$VEditCategories="Upravit skupiny";
$VEditCategory="Upravit skupinu";
$ExplainAddCategory="Vypl�te formul�� p�id�n� skupiny";
$VName="N�zev";
$VDesc="Popis";
$VVia="p�es";
$VPrivateMessage="Zpr�va v r�mci f�ra";
$VWhichStatus="Jak� status";
$VBan="Vylou�it";
$VUnban="Povolit";
$VNever="Nikdy";
//$AdministrativeFunctions="";        //"administrative functions";  - not needed any more
$VOn="reakce";         // so und so vielten
$VBy="od";        // einer Person
$VSent="Odeslan�";
$NoPermission="Nem�te povolen� na tuto akci!";
$VLocked="Uzav�en�";

// status 19 Sept 2002
$VHideEmail="E-mail adresu neukazovat jin�m u�ivatel�m";
$VHidden="Skr�t";
$Charset="windows-1250";
// status 21 Sept 2002
$VNewMember="Nov� u�ivatel f�ra";
$VWith="s";
$VAllowEmail="Povolen� E-maily";
$VThereIs="Moment�ln� je";
$VThereAre="Moment�ln� jsou";
$VEdited="Zpracov�van�";
$VEditMembergroups="Upravit u�ivatelsk� skupiny";
//status 22 Sept 2002
$VAnd="&amp;";
$SetRequireLogin="U�ivatel� se mus� p�ihl�sit";
$VTo="komu";
$VSmilies="Smilies";
$VPBCode="PBCode";
$CVLogin="p�ihl�sit";
//status 23 Sept 2002
$VPosted="Upload";
$PBLSupportLink="Podpora PBLang v angli�tin�";
$VReplySent="Dostali jste odpov��";         //Prepis Emailu
$NotifyReplySent="Hal�,\n\n    byla poslan� odpov�� na Va�i zpr�vu ".$sitetitle." k t�matu ";     //Obsah mailu
$VNotifyByEmail="Chcete b�t E-mailem informovan�(�), jakmile bude napsan� odpov��";
$EmailNotification="Ozn�mit E-mailem";
$VAdministrativeFunctions="Administrativn� funkce";
$VURLAvatar="Avatar z URL";
//status 27 Sept. 2002
$ForumLocked="";
$WrongUsername="�patn� u�ivatelsk� jm�no. Jm�ho se m��e skl�dat pouze z p�smen a ��slic";
$WrongEmailAddress="Toto nen� platn� E-mailov� adresa";
//status 2 Oct 2002
$VFrom="od";
$VNoTemplatesEdit="Needitujte zde data. Pou�ite na to odpov�daj�c� editor!";
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
%j= day of year (��1 to 366)
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
$VLessThan="M�n� ne�";
$VLanguageEdit="Zpracovat jazykov� data ";
//status 4. Oct. 2002
$VRemoveMembers="Vyma� u�ivatele";
$VRemove="Vyma�";
$VMemberRemoved="Tento u�ivatel u� neexistuje";

/*below are the <alt> and <title> tags for the various buttons in PBLang. See further down towards the end of the file for the
appropriate variables to set the links to the buttons in your language. There an additional explanation is given*/
$Vpicturebuttons="Pou��t tla��tka";
$profilealt="Prohl�dnout profil";
$profiletitle="N�hled profilu";
$emailalt="E-Mail poslat";
$emailtitle="E-Mail poslat";
$Vemail="E-Mail poslat";
$editalt="�prava p��sp�vku";
$edittitle="�prava p��sp�vku";
$Vedit="�prava p��sp�vku";
$sendpmalt="Poslat soukromou zpr�vu";
$sendpmtitle="Poslat soukromou zpr�vu";
$Vsendpm="Poslat soukromou zpr�vu";
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
$wwwalt="Web-str�nka";
$wwwtitle="Web-str�nka";
$Vwww="Web-str�nka";
//Posts
$newthreadalt="Nov� t�ma";
$newthreadtitle="Nov� t�ma";
$Vnewthread="Nov� t�ma";
$replyalt="odpov�dat";
$replytitle="odpov�dat";
$lockedalt="Uzav�en�";
$lockedtitle="Uzav�en�";
//header images
$homealt="F�rum-P�ehled";
$hometitle="F�rum-P�ehled";
$searchalt="Hledej";
$searchtitle="Hledej";
$helpalt="Pomoc";
$helptitle="Pomoc";
$logoutalt="Odhl�sit";
$logouttitle="Odhl�sit";
$ucpalt="u�ivatelsk� nastaven�";
$ucptitle="u�ivatelsk� nastaven�";
$pmalt="Soukrom� zpr�va";
$pmtitle="Soukrom� zpr�va";
$loginalt="p�ihl�sit";
$logintitle="p�ihl�sit";
$registeralt="Registrovat";
$registertitle="Registrovat";
$adminalt="Administr�tor";
$admintitle="Administr�tor";
$memberslistalt="u�ivatel";
$memberslisttitle="u�ivatel";
//status 5th Oct. 2002
$VPreviousMessages="P�edchoz� zpr�vy";
$VTextColor="barva textu";
$VMoreThan="V�ce ne�";
//status 8th October
$NoSuchFile="Data neexistuj�!";
//status 9th October
$VRE="Odp.";
//status 10th October
$PWNoMatch="Hesla nesouhlas�! Zkuste znova.";
$VDefault="Normal";
$VStars="Hv�zdy";
$VFlames="Plameny";
$VRankImages="Status obr�zek";
$VMaxPostsReply="P�i odpov�di zobrazit tolik zpr�v";
$VEditPost="Zpracovat zpr�vu";
//status 11th October
$VReplied="Reply";
$VNew="Nov�";
$VOriginalPM="P�ijat� zpr�va";
$VRead="P�e�ten�";
//status 12 Oct 2002
$VNoSubject="��dn� nadpis";
//status 13 Oct 2002
$VOrderOfReplies="Uspo��d�n� odpov�di";
$VFirstReplyFirst="Prvn� zpr�va na za��tek";
$VFirstReplyLast="Prvn� zpr�va na konec";
//status 14 Oct 2002
$VStyleHeaderFont="Typ p�sma";
$VStyleHeaderPage="Podklad str�nek";
$VStyleHeaderTitle="Hlavi�ka f�ra";
$VStyleHeaderMenu="Menu";
$VStyleHeaderDate="Datum";
$VStyleHeaderContainer="Oblast dat";
$VStyleHeaderHeader="Hlavi�ka";
$VStyleHeaderSubheader="Podtitul";
$VStyleHeaderMenu="Menu";
$VStyleHeaderForumButton="P�ehled f�ra";
$VStyleHeaderUserColors="u�ivatelsk� barva";
$VStyleHeaderLinkColors="barva linek";

$VBackground="Podklad";
$VForm="Podklad cel�ho f�ra";
$VFormBorder="barva or�mov�n� f�ra";
$VFormBorderSize="Velikost or�mov�n�";
$VForumHeaderBorder="barva r�me�ku hlavi�ky";
$VForumHeaderBorderSize="���ka r�me�ku hlavi�ky";
$VForumHeader="Podkladov� barva hlavi�ky";
$VForumHeaderTitle="barva textu jmen ve f�ru";
$VForumHeaderTitleSize="Velikost jmen ve f�ru";
$VForumHeaderCaption="barva textu podtitul�";
$VForumHeaderWelcome="barva uv�tac�ho textu";
$VForumHeaderMenu="Podklad hlavn�ho menu";
$VForumHeaderMenuFont="barva textu hlavn�ho menu";
$VDateColor="barva p�sma datumu";
$VContainerBorder="barva r�me�ku datov� oblasti";
$VContainerBorderSize="Velikost r�me�ku datov� oblasti";
$VContainerInner="Podklad datov� oblasti";
$VHeaderColor="Podklad hlavi�ky datov� oblasti";
$VHeaderGif="Podkladov� obr�zek hlavi�ky datov� oblasti";
$VHeaderFont="barva textu hlavi�ky datov� oblasti";
$VSubheaderColor="Podklad podtitulu datov� oblasti";
$VSubheaderGif="Podkladov� obr�zek podtitulu datov� oblasti";
$VSubheaderFont="barva textu podtitulu datov� oblasti";
$VMenuColor="barva podkladu formul��e";
$VFMenuColor="Podklad nadpisu formul��e";
$VMenuFont="barva nadpisu formul��e";
$VForumButtonColor="Podklad seznamu ";
$VForumButtonOver="Zm�na barvy seznamu";
$VForumButtonTopics="Podklad seznamu sloupce t�m";
$VForumButtonReplies="Podklad seznamu sloupce odpov�d�";
$VForumButtonLast="Podklad seznamu sloupce posledn�ch zpr�v";
$VAdminColor="Administr�torsk� barva textu";
$VModColor="Moder�torsk� barva textu";
$VUserColor="u�ivatelsk� barva textu";
$VServerTimezone="�as na serveru";
$VLocalTimezone="�as ve f�ru";
$VExplainTimezone="Pokud nesouhlas� �as ve f�ru, nastavte ho p��slu�nou volbou";
$VTimeZone="�asov� z�na";
$VBurningFlames="Ho��c� plameny";
/*The following 3 variables allow a better output in the stats-line. Ending 1 is the singular form for the beginning of the sentence like
"There is currently 1 members". Ending 24 und 59 are the plural forms for the beginning of the sentence like "There are currently 7 members".
If you had the variables $VCurrentMember and $VCurrentmembers in older lang-files, you can remove them now - they are no longer used.
*/
$VCurrentMembers1="V syst�mu je";    //The variables $VCurrentMember and $VCurrentmembers can be removed!
$VCurrentMembers24="V syst�mu jsou";
$VCurrentMembers59="V syst�mu jsou";
$VEMSupport="Server podporuje E-Mail pomoc� PHP";
$VNoEMSupport="Je mi l�to, ale server nepodporuje E-mail pomoc� PHP";
$VDefaultSlogan="V�choz� slogan";
$VExplainSlogan="Slogan je ��dek pod Avatar-obr�zkem";
$VPredefStyles="P�ipraven� styly";
$VNotWriteable="Je mi l�to, ale data nem��ou b�t zapsan�";
$VRemoveStatus="Norm�ln� status";
$VOfTheseNew="Z toho nov�ch";
$VMaxAtchSize="Max. velikost p��lohy v bytech (0neomezen�)";
$VFileTooBig="Je mi l�to, ale velikost dat je omezen�. Toto nem��e b�t odeslan�. Pou�ijte nam�sto toho URL adresu k dat�m.";
$VCookieError="V� prohl�e� nepodporuje Cookies. Toto f�rum v�ak vy�aduje m�t zapnut� Cookies.";
$VNotice="Pozn�mka";
$VUsernameGiven="Takov� u�ivatelsk� jm�no u� existuje";
$VUsernameLimits="^[a-zA-Z0-9]+$";
$VDate="Datum";
$VLanguageSelection="Jazyk";
$VRepeatPassword="Opakujte heslo";
$qqalt="QQ";
$qqtitle="QQ";
$VStyleButtonChoice="Volba tla��tek";
$VButtonLimits="Tato volba funguje, pouze pokud nepou��v�te speci�ln� znaky jazyka.";
//status 4 Nov 2002
$VIn="v";
$VRealname="Skute�n� cel� jm�no";
$VAlias="Alias";
$VExplainAlias="I kdy� Va�e p�ihla�ovac� jm�no z�st�v� nezm�n�n�, m��ete si zvolit alias, pod kter�m budete ve f�ru.";
$VSlogan="Slogan";
//status 5 Nov 2002
$VStyleHeaderMemgroupColors="barva u�ivatelsk� skupiny";
$VDateJoined="Datum vstupu";
$VLastVisit="Posledn� n�v�t�va";
$VLastPost="Posledn� zpr�va";
$VGroupColors="Umo�nit barvy skupiny";
$VGroupcolorsExplain="T�mto umo�n�te v online statistice zobrazit u�ivatele v barv� z�visl� na jeho u�ivatelsk� skupin�";
//status 6 November 2002
$VIPLogged="IP-adresu zapamatovat";
$VSiteLogo="Logo f�ra (board-u)";
$VSiteLogoExplain="obr�zek mus� b�t ulo�en� v adres��i templates/pb/images. Zadejte pouze n�zev souboru.";
$VMaxPPP="Tolik zpr�v zobrazit na str�nce";
//status 11 Nov 2002
$VRequestConfirmation="Potvrzov�n� registrace p�es e-mail";
$VPleaseConfirm="Pros�m potvr�te registraci kliknut�m na n�sleduj�c� odkaz:";
//status 12 Nov 2002
$VNoAvatar="��dn� avatar"; //in the selection list, choose this if you don't want an avatar
/*Following variable: Do not change the part &quot;$VURLAvatar&quot;, it will be translated automatically
with the words that you have put into the variable $VURLAvatar
This variable was in use earlier but has changed, so please remove it from the upper region of the file, if you are updating
an existing language file*/
$AvatarURLtip="(Tip: Mus�te zvolit z v��e nab�zen�ho &quot;$VURLAvatar&quot; seznamu, aby jste mohli pou��t tuto funkci)";
//status 13 Nov 2002
$VDeleteCat="Vymazat skupinu";
$VConfirmation="Potvrzen� registrace";
$VWrongConfirmationCode="Neplatn� k�d";
$VConfirmationError="Potvrzen� zp�sobilo chybu";
$VNoCatDelete="Nem��ete vymazat skupinu, ktor� je�t� obsahuje f�rum. Vyma�te nejd��ve f�rum";
//status 15 Nov 2002
$VStyleAnnouncementFont="Nastaven� pro pozn�mky";
//status 16 Nov 2002
$Vgladg="��astn� grimasa";
$Vgrinsg="Chechtaj�c� se grimasa";
$Vbadg="�patn� nalad�n�";
$Vschluckg="� j�";
$Vsunglg="Ne��astn�";
$Vteardrop="Slzy";
$Vsurprised="P�ekvapen�";
$Vsleeping="Sp�c�";
$Vthmbup="Palec nahoru";
$Vthmbdn="Palec dol�";
$Vpfeilrg="�ipka vpravo";
$Vbulb="N�pad";
$VHelpg="Pomoc!";
$Vbounceg="Sk�kaj�c�";
$Vdanceg="Tan��c�";
$Vredface2g="�erven� ksicht";
$Vdevilg="��bel";
$Vrespektg="";
$Vschimpfg="Nad�vka";
$Vwallbashg="Hlavou proti zdi";
$Vofftopicg="Mimo t�ma!";
$VEnableAnimSmilies="Pou��vat animovan� smajl�ky (str�nky se ale budou natahovat d�le)";
//status 19 Nov 2002
$VAllowAlias="Alias povolit";
$VChangeAlias="Alias m��e b�t zm�n�n� po";
$VDays="dn�";
$ChangeAliasNotAllowed="Nem��ete moment�ln� zm�nit alias";
$AliasAlreadyInUse="Tento alias je u� pou��van�";
$VAllowAccess="N�sleduj�ci u�ivatel� mohou pou��vat toto f�rum";
$VAll="V�ichni";
$VModerators="Moder�to�i";
$VFriend="P��tel";
$VExplainFriend="P��tel je u�ivatel, kter�mu se umo�n� p��stup na ur�it� f�ra, bez toho, aby m�l status moder�tora.";
$VExpectConformationMail="Dostanete e-mail o p�ihl�en�. Po kliknut� na odkaz potvrd�te svoje p�ihl�senie, t�m se stanete u�ivatelem f�ra.";
//status 20 Nov 2002
$VWelcomeMessage="P�idat text do uv�tac� zpr�vy";
//status 21 Nov 2002
$VCheckIP="Zv��it bezpe�nost: chcete, aby IP-adresy n�v�tevn�k� byly kontrolovan� a ulo�en�?";
$VSitelogoWidth="���ka loga v pixelech";
$VSitelogoHeight="V��ka loga v pixelech";
//status 22 Nov 2002
$VAnnounce="Speci�ln� ozn�men� na hlavn� str�nce";
//status  27 Nov 2002
$VToday="Dnes";
$VVisits1="n�v�t�va";
$VVisits24="n�v�t�vy";
$VVisits59="n�v�t�v";
$VTotalVisits="V�ech n�v�t�v";
$VLastVisitors="Posledn� n�v�t�vn�k";
//status 30 Nov 2002
$VUsernameTooLong="u�ivatelsk� jm�no je p��li� dlouh� - povolen�ch je maxim�ln� 25 znak�";
$VNotifyAdmin="Ozn�mit administr�torovi p�id�n� nov�ho t�matu";
$VNotifyAdminReplies="Ozn�mit administr�torovi ka�dou novou zpr�vu";
//status 1 Dec 2002
$VNewReply="Nov� odpov��";
//status 4 Dec 2002
$VAlreadyUpdated="Zm�ny u� byly provedeny, nen� co m�nit";
//status 7 Dec 2002
$VFolderIconChoice="Zvolit adres�� symbolov";
$ficonalt="Adres�� symbol�";
//status 8 Dec 2002
$VForbiddenType="Nepodporovan� soubor. M��ete uploadovat grafick� soubory (gif, jpg, tif), textov� soubory (txt) nebo archivn� soubory (zip, rar)";        
$VUserIsOnline="u�ivatel je pr�ve online a nem��e b�t vymazan�";
$VQuotaExceeded="Nen� dostatek prostoru na p�id�n� tohoto souboru";
$VMinimumSpace="Pot�ebn� minim�ln� voln� prostor na serveru (v Bytech)";
//status 10 Dec 2002
$VGuestVisits="n�v�t�v host�";
$VTotalGuests="V�ech host�";
$VAllVisits="Host� a u�ivatel�";
//status 11 Dec 2002
$VRules="Z�kladn� pravidla";
//status 12 Dec 2002
$DateFormat3="%d.%m.%y, %H:%M";
//status 13 Dec 2002
$VGuests1="host";
$VGuests24="host�";
$VGuests59="host�";
//status 15 Dec 2002
$PasswordMessage="Kontaktuj administr�tora kv�li zm�n� hesla";
//status 16 Dec 2002
$VUnknown="nezn�m�";
$VRemoved="vymazan�";
$VMaxAvatarWidth="Max. ��rka Avatar-obr�zku v pixelech";
$VMaxAvatarHeight="Max. v��ka Avatar-obr�zku v pixelech";
//status 17Dec 2002
$VAcceptRules="Souhlas�m s pravidly";
$VRulesMustBeAccepted="Mus�te akceptovat podm�nky f�ra. Za�krtn�te, pros�m, odpov�daj�c� pol��ko";
//status 7 Jan 2003
$VMaxLastPosts="Maxim�ln� po�et posledn�ch zpr�v";
$VLatestPosts="Nejnov�j�� zpr�vy";
$Vreplies1="odpov��";
$Vreplies24="odpov�di";
$Vreplies59="odpov�d�";
//status 13 Jan 2003
$quotetitle="citovat";
$quotealt="citovat";
$VGenerell="Hlavn�";
$VStyleQuoteFont="Nastaven� p�sma cit�tu";
//status 20 Jan 2003
$VStickyMessage="Zafixovat zpr�vu";
$VStickyMessageExplain="Zafixovan� zpr�va z�st�v� ve f�ru v�dy na prvn�m m�st� a tedy padne sp� do oka";
//3 March 2003
$VMaxRPP="Maxim�ln� po�et odpov�d� na str�nce";
//10 March 2003
$VBoardwidth="���ka f�ra (m�n� ne� 101 znamen� v procentech, v�ce ne� 300 znamen� v bodech)";
$VBackgroundimage="obr�zek pozad� (jm�no souboru v templates/pb/images)";
//status 10 April 2003
$VEnableWebAvatars='Web-Avatar obr�zky povoleny (avatar st�hnut� z jin�ch str�nek)';
//status 16 April 2003
$VAlign='zarovn�n�';
$VLeft='vlevo';
$VCenter='na st�ed';
$VRight='vpravo';
//status 19 April 2003
$VAllowReplyInLockedForum='�lenov� sm� v uzav�en�ch f�rech odpov�dat';
$VExplainLockedForum='Pouze admin a moder�to�i sm� v tomto f�ru ps�t nov� zpr�vy';
//status 10 May 2003
$VBoardidentity='�daje k identit� f�ra';
$VBoardappearance='Vzhled f�ra';
$VBoardsettings='V�eobecn� nastaven� f�ra';
$VNotificationsettings='Nastaven� pro notifikaci';
$VAliassettings='Nastaven� pro alias';
$VAvatarsettings='Nastaven� pro avatar';
$VPostsettings='Nastaven� pro zpr�vy';
$VMembershipsettings='Nastaven� pro u�ivatele';
$VQuoteBorder='velikost oramovan� cit�tu';
$VQuote='Cit�t';
//status 12 May 2003
$VDisableAvatars='Nezobrazuj avatar (vhodn� pre n�zk� p�enosov� rychlosti)';
$VIncompleteUpdate='F�rum nebylo spr�vn� updatovan�. P�e�t�te si pozorn� PBLang-doc.txt';
//status 14 May 2003
$VNoNews='Moment�ln� nejsou ��dn� nov� zpr�vy';
$TestRelease='Testujete novou verzi. D�ky. V p��pad� probl�m� se obra�te na autora softwaru!';
$StillBeta='Pou��v�te je�te testovac� verzi, ale u� je k dispozici pln� verze. St�hn�te si pros�m nejnov�j�� verzi!';
//15 May 2003
$VReplyallowed='Sm�te v tomto f�ru odpov�dat, ale ne ps�t nov� zpr�vy.';
$OpenTopic20read='Otev�en� t�ma s v�ce ne� 20 zpr�vami - p�e�ten�';
$OpenTopicread='Otev�en� t�ma - p�e�ten�';
$LockedTopicread='Uzav�en� t�ma - p�e�ten�';
$StickyMessage='Fixovan� zpr�va - nep�e�ten�';
$StickyMessageread='Fixovan� zpr�va - p�e�ten�'; 
$VTextareawidth='���ka textov�ho pole';
$VExplainTextareawidth='Pokud je f�rum na str�nkach s r�mci (framy), tak textov� pole p�i zad�van�/editov�n� nov�ch zpr�v, nebo p�i odpov�d�ch je �irok�. Pokud sn��te tuto hodnotu, tak se vejde cel� str�nka do r�mce.';
//17 May 2003
$VStylePrefix='Styl prefixu';
$VExplainStylePrefix='Styl prefixu ur�uje, kter� tla��tka a obr�zky jsou pro tento styl. P�e�t�te si k tomu dokumentaci styles.txt v adres��i doc.';  
$VRestrictedForum='Neve�ejn� f�rum. Sm�te sice na zpr�vy odpov�dat, ale nem��ete zakl�dat nov� t�mata';
//22 May 2003
$VAttachmenttypes='Povolit n�sleduj�c� typy soubor� jako p��lohy';
//13 Aug 2003
$VNoValidMessage='P�i ukl�d�n� zpr�vy nastala chyba. Chyb� adres�t a obsah zpr�vy. Napi�te zpr�vu je�te jednou.!';



?>



