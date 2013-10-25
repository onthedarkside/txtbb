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

   Slovenski  prevod za PBLang, razli�ico 4.5.

   Version | Verzija: 1.0
   This translation's language: sloven��ina/slovenian
   Finished | Narejeno:  28. november 2003
   simbol: si

   The author of this translation | pripravil: simon
   Webpage of translator:
   Forum of translator (in her or his language): http://www.dsss.org/forum


**********************************************************************************

   Slovenski  prevod za PBLang, razli�ico 4.65.

   Version| Verzija: 2.0 (updates and  improvements)
   This translation's language: sloven��ina/slovenian
   Finished | Narejeno: 24. februar 2005
   simbol: si

   The author of this translation | Pripravil: Peter Orban
   E-mail: peter_orban1@yahoo.co.uk
   Forum of translator (in her or his language): http://www.dos1-lendava.com/Forum/


********************************************************************************/


$NoSuchForum="Ni takega foruma";        //"No such forum!";
$ViewForum="Poglejte forum";        //"View Forum";
$NoTopics="V tem forumu ni nobene teme";        //"No Topics in this forum!";
$DeleteForum="Zbri�ite forum";        //"Delete Forum";
$VLockForum="Zaklenite forum";        //"Lock Forum";
$VUnlockForum="Odklenite forum";        //"Unlock Forum";
$OpenTopic20="Odprta tema z ve� kot 20 sporo�ili";        //"An open topic with more than 20 posts";
$OpenTopic="Odprta tema";        //"An open topic";
$LockedTopic="Zaklenjena tema";        //"A locked topic";
$PMAlreadyDeleted="To Zasebno Sporo�ilo (ZS) je bilo �e izbrisano";        //"This PM has already been deleted!";
$DeletePostNotAllowed="To ni va�e sporo�ilo. Ne morete ga zbrisati";        //"This is not your post to delete!";
$NoEditInLockedForum="Ne morete popravljati v zaklenjenem forumu!";        //"You cannot edit in a locked forum!";
$EditPost="Popravite sporo�ilo!";        //"Edit Post";
$VError="Napaka";        //"Error";
$ContactAdmin="";        //"Contact admin at";
$VHelp="Pomo�";        //"Help";
$VExplanation="Razlaga";        //"Explanation";
$VExplanationPoint="";        //"exclamation point";
$VHelpIMG="Za prikaz slik v sporo�ilih in podpisih";        //"This is used to display images on your posts or signatures";
$VDisplays="Prika�e";        //"Displays";
$VHelpURL="Za dodajanje spletnih povezav (linkov) v sporo�ilih in podpisih";        //"This is used to add web hyperlinks in your posts or signatures";
$VUsage="Uporaba";        //"Usage";
$VHelpEMAIL="Za dodajanje povezav na elektronsko po�to v sporo�ilih in podpisih";        //"This is to add mailto: email links to your posts or signatures";
$VHelpGLOW="Za dodajanje �arenja besedila v sporo�ilih in podpisih. Zamenjaj COLOR z barvo po izbiri (red,blue,orange,green)";        //"This adds glowtext to your post or signature. Replace COLOR with a color of your choice (red,blue,orange,green)";
$GlowText="�are�e besedilo";        //"Glow Text";
$VHelpITALICS="Za nastavitev le�e�ega besedila v sporo�ilih in podpisih";        //"This makes your text italic in your post or signature";
$ItalicText="Le�e�e besedilo";        //"Italic Text";
$VHelpBold="Za nastavitev krepkega besedila v sporo�ilih in podpisih";        //"This makes your text bold in your post or signature";
$BoldText="Krepko besedilo";        //"Bold text";
$VIndex="Indeks";        //"Index";
$WhoIsThere="Kdo je prijavljen";        //"Who's Logged on?";
$AlreadyLoggedIn="Vi ste �e prijavljeni";        //"You are already logged in";
$RegistrationRequired="Administrator zahteva, da se vsi prijavijo ali <a href=\"register.php\">registrirajo</a> pred ogledom table";        //"The board administrator requires that all veiwers login or <a href=\"register.php\">register</a> before viewing the board";
$NonExistingUser="Uporabnik ne obstaja (najprej se registrirajte)";        //"User does not exist";
$UsernameRequired="Vpi�ite va�e uporabni�ko ime";        //"Must enter a username";
$PasswordRequired="Vnesite geslo";        //"You must enter a password";
$PasswordLost="Izgubljeno geslo na";        //"Lost Password at" - used as subject of the email in which the lost password is sent, it follows the name of the forum;
$PasswordSent="Geslo je bilo poslano po elektronski po�ti";        //"Your password has been sent to your email address";
$MemberList="Spisek �lanov";        //"Members List";
$PostReply="Odgovor";        //"Post Reply";
$NoReplyInLockedForum="Ne morete odgovarjati v zaklenjenem forumu";        //"You can not reply in a locked forum";
$NoReplyInLockedTopic="Ne morete odgovarjati v zaklenjeni temi";        //"You can not reply to a locked topic";
$UploadsNotAllowed="Upload datotek ni dovoljen! Sporo�ilo bo objavljeno";        //"Uploads are not allowed! Post was made";
$PostWait="Prosim po�akajte, preusmerjam va�e sporo�ilo";        //"Please wait, redirecting to your post";
$NoNewTopicInLockedForum="Ne morete za�eti nove teme v zaklenjenem forumu";        //"You can not make new topics in a locked forum";
$LangLocale="si_SI";        //"en_EN"; or "de_DE" or "ru_RU" or "fi_FI" etc.
$PrivateMessaging="Zasebna sporo�ila (ZS)";        //"Private Messaging";
$NoMessages="Ni sporo�il v nabiralniku";        //"No messages in inbox";
$ViewPost="Poglejte sporo�ilo";        //"View Post";
$VFunctions="Funkcije";        //"Functions";
$DeleteTopic="Zbri�ite temo";        //"Delete Topic";
$LockTopic="Zaklenite temo";        //"Lock Topic";
$UnlockTopic="Odklenite temo";        //"Unlock Topic";
$AlreadyMember="Vi ste �e �lan";        //"You are already a member";
$NoNewUsers="Administrator ne dovoli novih uporabnikov";        //"The board administrator does not allow new users";
$VRegister="Registrirajte se";        //"Register";
$PleaseComplete="Prosim izpolnite vsa zahtevana polja";        //"Please complete all required form objects";
$WelcomeMessage="Pozdravljeni na ";        //"Welcome to";
$WelcomeMessage1=" forumu";        //"'s forums";
$ThanksMessage="Zahvaljujemo se za v�lanitev";        //"Thank you for joining";
$UsernameTaken="Uporabni�ko ime zasedeno!";        //"Username taken!";
$VSearch="Iskanje";        //"Search";
$NoResults="Ni rezultatov iskanja";        //"No Results Found";
$SendPM="Po�ljite Zasebno Sporo�ilo (ZS)";        //"Send PM";
$AuthorRequired="Morate napisati ime avtorja";        //"Must fill out author";
$MessageSent="Va�e Zasebno Sporo�ilo (ZS) je bilo poslano";        //"Your private message has been sent";
$InvalidUsername="Napa�no uporabni�ko ime";        //"Invalid Username";
$NoSuchUser="Lep poskus, ampak ta uporabnik ne obstaja";        //"Nice try, but that user does not exist";
$InvalidPassword="Napa�no geslo";        //"Invalid password";
$VUserCP="Uporabnikova nadzorna plo��a";        //"UserCP";
$ProfileUpdated=" profil je bil osve�en";        //"'s profile has been updated";
$VUpdated="Osve�eno";        //"Updated";
$VMembers="�lani";        //"members";
$VMembers1="�lan";        //"member";            //singular form
$VMembers24="�lanov";        //"members";          //plural form
$VMembers59="�lanov";        //"members";          //plural form - 2 forms needed for Russian language - hence also in other languages a second plural form
                        //$VMember="";        //"member"; - no longer needed
$VAdministrator="Administrator";        //"Administrator";
$VAdminPC="Admin - Nadzorna plo��a";        //"Admin Control Panel";
$VModerator="Moderator";        //"Moderator";
$VUser="Uporabnik";        //"User";
$AccessDenied="Dostop zavrnjen";        //"Access is Denied";
$AdminCenter="Admin center";        //"Admin Center";
$PbNews="PBLang novice";        //"PBLang News Feed";
$VWhatIsThe="Kaj je";        //"What is the";
$AdminCenterExplain="To je va� 'Admin Center'. Tukaj lahko spreminjate nastavitve, jezikovno datoteko in upravljate s forumi.";        /*"This is your 'PBLang Admin Center'. You can modify your settings and language files from here, as well
                                             as maintain your forums."*/
$VVersionCompare="Primerjava verzij";        //"Version comparison";
$CompareString="Najnovej�a/Va�a";        //"Newest/Yours";
$LatestRelease="Imate zadnjo verzijo!";        //"You have the latest release!";
$NewerRelease="Obstaja novej�a verzija!";        //"There is a newer release!";
$VForumSettings="Nastavitve foruma";        //"Forum Settings";
$VTitle="Naziv";        //"Title";
$VTemplate="Predloga";        //"Template";
$VSiteMotto="Moto strani";        //"SiteMotto";
$VFooter="Noga";        //"Footer";
$VSubmit="Shrani";        //"Submit";
$VReset="Resetiranje";        //"Reset";
$VStylesColors="Stili/Barve";        //"Styles/Colors";
$VBackground="Ozadje";        //"Background";
$VBody="Telo";        //"Body";
$VAlternatingColor1="Alternativna barva 1";        //"Alternating Color 1";
$VAlternatingColor2="Alternativna barv 2";        //"Alternating Color 2";
$VHeaderColor="Header Color";        //"Header Color";
$VHeaderBG="Header Background";        //"Header Background";
$VSubheaderColor="Sub Header Color";        //"Sub Header Color";
$VSubheaderBG="Sub Header Background";        //"Sub Header Background";
$VExtraBorderColor="Extra Border Color";        //"Extra Border Color";
$VExtraBorderWidth="Extra Border Width";        //"Extra Border Width";
$VStandardBorderColor="Standard Border Color";        //"Standard Border Color";
$VBorderColor="Border Color";        //"Border Color";
$VLinkColor="Link Color";        //"Link Color";
$VVisitedLinkColor="Visited Link Color";        //"Visited Link Color";
$VHoverLinkColor="Hover Link Color";        //"Hover Link Color";
$VDone="done";        //"done";
$VTemplate="Slog";        //"Template";
$ChooseTemplate="Izberite slog za urejanje. Pri urejanju slogov lahko spremenite vse vklju�no do HTML tabel.";        //"Choose a template to edit. By editing these templates you can edit everything down to the HTML tables."
$VMenu="Meni";        //"Menu";
$VView="Pogled";        //"View";
$VMain="Glavni";        //"Main";
$VSettings="Nastavitve";        //"Settings";
$VTemplates="Predloge";        //"Templates";
$VMemberGroups="Skupine �lanov";        //"Member Groups";
$VBanMembers="Izklju�itev �lanov";        //"Ban Members";
$VBanMember="Izklju�itev �lana";        //"Ban Member";
$VEmailMembers="Po�ljite e-mail �lanom";        //"Email Members";
$VGrantStatus="Dodelite status";        //"Grant Status";
$VCategories="Kategorije";        //"Categories";
$VForum="Forum";        //"Forum";
$VForums="Forumi";        //"Forums";
$VAddForums="Dodajte forume";        //"Add Forums";
$VEditForums="Popravite forume";        //"Edit Forums";
$VEditForum="Popravite forum";        //"Edit forum";
$VPrevPage="Prej. stran";        //"Prev Page";
$VNextPage="Nasl. stran";        //"Next Page";
$VPage="Stran";        //"Page";
$VOf="od";        //"of";
$VSubject="Predmet";        //"Subject";
$VAuthor="Avtor";        //"Author";
$VReplies="Avtor";        //"Replies";
$VLastReply="Zadnji odgovor";        //"Last Reply";
$VViews="Ogledov";        //"Views";
$VOptions="Mo�nosti";        //"Options";
$VUsername="Uporabni�ko ime";        //"Username";
$SubjectIcon="Predmet &amp; Ikona sporo�ila";        //"Subject &amp; Post Icon";
$VSmiley="Sme�ko";        //"Smiley";
$VShocked="�okiran";        //"Shocked";
$VHuh="Huh?";        //"Huh?";
$VTongue="Jezik";        //"Tongue";
$VWink="Pome�ik";        //"Wink";
$VEvil="Hudoben";        //"Evil";
$VEmbarassed="V zadregi";        //"Embarassed";
$VGoofy="Neumen";        //"Goofy";
$VRollEyes="Zavija z o�mi";        //"Roll Eyes";
$VHyperlink="Povezava";        //"Hyperlink";
$VImage="Slika";        //"Image";
$VEmail="E-mail";        //"Email";
$VGlow="�are�e besedilo";        //"Glow";
$VBold="Krepko besedilo";        //"Bold";
$VItalicize="Le�e�e besedilo";        //"Italicize";
$VContent="Vsebina";        //"Content";
$VAttachment="Priponka";        //"Attachment";
$NoAttachments="Priponke trenutno niso dovoljene";        //"No attachments are allowed right now";
$VSubmitForm="Po�ljite obrazec";        //"Submit Form";
$VHello="Pozdravljeni";        //"Hello";
$VYouHave="Imate";        //"you have";
$VMessages="sporo�il";        //"messages";
$VMessages1="sporo�ilo";        //"message";
$VMessages24="sporo�il";        //"messages";
$VMessages59="sporo�il";        //"messages";
$VPlease="Prosim";        //"Please";
$VLogin="prijavite se";        //"log in";
$VLogout="Odjava";        //"log out";
$VRegister="registrirajte se";        //"register";
$VHome="Za�etna stran";        //"Home";
$VSearch="Iskanje";        //"Search";
$VHelp="Pomo�";        //"Help";
$VPM="Zasebna sporo�ila (ZS) - Nabiralnik";        //"Private Messages";
$AdminPC="Administrator - Nadzorna plo��a";        //"AdminPC";
$VTopics="Tema";        //"Topics";
$VTopics1="Tema";        //"Topic";                      //singular and plural forms - see above under $VMembers for explanation!
$VTopics24="Tem";        //"Topics";
$VTopics59="Tem";        //"Topics";
$VLastPost="Zadnje sporo�ilo";        //"Last Post";
$TimeDate="Datum in �as:";        //"The date and time is now ";
$VPassword="Geslo";        //"Password";
$RetrievePassword="Po�lji geslo";        //"Retrieve password"; on the button at registration to get the password via email
$VPosts="Sporo�il(a)";        //"Posts";
$VPosts1="Sporo�ilo";        //"Post";                        //singular and plural forms - see above under $VMembers for explanation!
$VPosts24="Sporo�il(a)";        //"Posts";
$VPosts59="Sporo�il(a)";        //"Posts";
$VPosition="Status";        //"Status";
$VPost="Sporo�ilo";        //"Post";
$VDeletePost="Zbri�i svoje sporo�ilo";        //"Delete your post";
$VNewTopic="Nova tema";        //"New Topic";
$VStandard="Standard";        //"Standard";
$VThumbsUp="Palec gor";        //"Thumbs up";
$VThumbsDown="Palec dol";        //"Thumbs down";
$VExplanationPoint="Klicaj";        //"Explanation point";
$VQuestionMark="Vpra�aj";        //"Question mark";
$VAngry="Jezen";        //"Angry";
$VMad="Besen";        //"Mad";
$VSad="�alosten";        //"Sad";
$VSendPM="Po�ljite Zasebno Sporo�ilo (ZS)";        //"Send PM";
$VReply="Odgovor";        //"Reply";
$VDelete="Zbri�i";        //"Delete";
$VStatus="Status";        //"Status";
$VProfileFor="Profil za";        //"Profile for";
$VModify="Sprememba";        //"Modify";
$VAvatar="Avatar";        //"Avatar";
$NoAvatars="Avatarji trenutno niso dovoljeni";        //"No Avatars are allowed at this time";
$VEnableAvatars="Omogo�ite avatarje";        //"Enable Avatars";
$VLocation="Lokacija";        //"Location";
$VWebsite="Spletna stran";        //"Website";
$VSignature="Podpis";        //"Signature";
$VRegistrationComplete="Registracija zaklju�ena";        //"Registration Complete";
$ThanksForSigning="Hvala za vpis";        //"Thanks for signing up";
$VHere="tukaj";        //"here";
$NoNewUsers="Novi �lani trenutno niso dovoljeni";        //"There are no new members allowed right now";
$VProfile="Profil";        //"Profile";
$VNumber="�tevilo";        //"Number";
$VRequired="Zahtevano";        //"Required";
$VTopicReview="Pregled tem";        //"Topic Review";
$VSearchTerms="Iskanje izraza";        //"Search Terms";
$VSearchResults="Rezultati iskanja";        //"Search Results";
$VSendMessage="Po�ljite sporo�ilo";        //"Send Message";
$VInbox="Nabiralnik";        //"Inbox";
$VMessage="Sporo�ilo";        //"Message";
$VStats="Statistika";        //"Stats";
$VLatestMember="Najnovej�i �lan je";        //"The newest member is";
$VTheSearchTerm="Iskani izraz";        //"The Search Term";
$VFoundResults="na�el naslednje rezultate";        //"found the following results";
$VUserControlPanel="Uporabnikova nadzorna plo��a";        //"User Control Panel";
$VUserControlCenter="Uporabnikov nadzorni center";        //"User Control Center";
$VPersonal="Osebno";        //"Personal";
$VNewPassword="Novo geslo";        //"New Password";
$VPersonalText="Osebni tekst";        //"Personal Text";
$VList="List";        //"List";
$PBCodeAllowed="Dovoljeni so PBcode in sme�ki";        //"PBcode and smilies allowed";
$VPasswordAgain="Ponovite Geslo";        //"Password Again";
$VWhoIsOnline="Kdo je online?";        //"Who is online?";
$VLoggedIn="prijavljen";        //"logged in";
$VLoggedOn="prijavljen";        //"logged on";
$VLoggedOff="odjavljen";        //"logged off";
$VOr="ali";        //"or";
$NoAccess="Nimate dostopa. �e mislite, da ga imate, kliknite osve�itev";        //"You do not have access, if you believe you do, please hit refresh.";
$VDisableAttachments="Onemogo�i priponke";        //"Disable Attachments";
$VEnableHTML="Omogo�i HTML";        //"Enable HTML";
$VCensorWords="Cenzuriraj kletvice";        //"Censor bad words";
$VEnableBBCode="Omogo�i BB code";        //"Enable BB code";
$VEnableSmilies="Omogo�i sme�ke";        //"Enable smilies";
$VAllowNewUsers="Omogo�i nove uporabnike";        //"Allow new users";
$VMaintenanceMode="Vzdr�evanje strani";        //"Maintenance Mode";
$VOnlyAdmins="Samo administratorji imajo dovoljen vstop";        //"Only admins are granted access";
$RequireLogin="Zahteva, da je uporabnik prijavljen";        //"Require users to be logged on";
$VToViewForum="za pregled sporo�il";        //"to view the messages";
$VMaintReason="Razlog za vzdr�evanje";        //"Maintenance reason";
$VBannedReason="Razlog za izkjlu�itev";        //"Banned Reason";
$AdminEmail="Administratorjev e-mail";        //"Admin's email address";
$AdminEmailReason="e-mail bo viden na 'error pages' za sporo�ila o napaki";        //"the email address will be seen on error pages to allow error reports";
$VComplete="Zaklju�en";        //"Complete";
$VTemplateEditor="Template Editor";        //"Template Editor";
$VInfinity="Neskon�nost";        //"Infinity";
$VBanned="Izklju�en";        //"Banned";
$VCategory="Kategorija";        //"Category";
$VAddCategory="Dodajte kategorijo";        //"Add Category";
$VEditCategories="Popravite kategorije";        //"Edit categories";
$VEditCategory="Popravite kategorijo";        //"Edit category";
$ExplainAddCategory="Izpolnite obrazec za dodajanje kategorije";        //"Fill out thisform to add a category";
$VName="Ime";        //"Name";
$VDesc="Opis";        //"Description";
$VVia="preko";        //"Via";
$VPrivateMessage="Zasebno sporo�ilo (ZS)";        //"Private Message";
$VWhichStatus="Kateri status";        //"Which status";
$VBan="Izklju�en";        //"Ban";
$VUnban="Vklju�en";        //"Unban";
$VNever="Nikoli";        //"Never";
//$AdministrativeFunctions="";        //"administrative functions";  - not needed any more
$VOn="Dne";        //"on";         //  a particular date
$VBy="napisal";        //"by";         //  a particular person
$VSent="Poslano";        //"Sent";
$NoPermission="Za to nimate pravice!";        //"You do not have permission to perform this action!";
$VLocked="Tema je zaklenjena - ni mo�no odgovarjati";        //"topic is locked - no reply possible";

// status 19 Sept 2002
$VHideEmail="Skriti e-mail pred drugimi �lani";          //"Hide email from other members";
$VHidden="Skrit";              //"Hidden";
$Charset="iso-8859-2";              //"iso-8859-1";
// status 21 Sept 2002
$VNewMember="Nov �lan";          //"New member";
$VWith="z";          //"with";
$VAllowEmail="Omogo�i avtomatski e-mail";          //"Enable emails";
$VThereIs="Pravkar je";          //"there is";                  // 1 member online
$VThereAre="Pravkar je";          //"there are";         // n members online
$VEdited="Spremenjeno";            //"Edited";
$VEditMembergroups="spremeni skupine �lanov";          //"edit member groups";
//status 22 Sept 2002
$VAnd="&amp;";                  //"&amp;";
$SetRequireLogin="Zahtevaj, da so uporabniki logirani";                  //"Require users to be logged on";
$VTo="Za";                  //"To";   //a receiver of a message
$VSmilies="Sme�ki";                  //"Smilies";
$VPBCode="PBCode";                  //"PBCode";
$CVLogin="Logiraj";                  //"Log in"; start with capital letter
//status 23 Sept 2002
$VPosted="Poslano";                 //"Posted"; a message has been posted...
$PBLSupportLink="Podpora za PBLang";             //"Support for PBLang";  Headline for the link to the PBLang-forum
$VReplySent="Prejeli ste odgovor";               //You received a reply";
$NotifyReplySent="Pozdravljeni,\n\n    dobili ste odgovor na va�e sporo�ilo na ".$sitetitle." na ";               //Hi,\n\n    A reply was sent to your post on ".$sitetitle." to the subject ";  //end then follows the subject line
$VNotifyByEmail="Ali �elite biti obve��eni o odgovorih na va�a sporo�ila?";               //Do you want to be notified if a reply is posted";
$EmailNotification="E-mail obvestilo";               //Email notification";
$VAdministrativeFunctions="Admnistratorske funkcije";               //Admnistrative functions";
$VURLAvatar="URL Avatar";               //Avatar via URL";
//status 27 Sept. 2002
$ForumLocked="Ta skupina je zaklenjena";               //"This group is locked";
$WrongUsername="Uporabni�ko ime lahko vsebuje samo �rke in �tevilke";               //"The username may contain only characters or numbers";
$WrongEmailAddress="To ni veljaven e-mail";               //"This is not a valid email address";
//status 2 Oct 2002
$VFrom="od";               //"from";  it's used in a line like "Message $VFrom: author"
$VNoTemplatesEdit="Ne sme� popravljati nobene predloge preko tega vmesnika. Prosimo, da uporabi� ustrezen editor in popravi� izvorno kodo";               //"You should not edit any templates using this interface. Please use an appropriate editor to edit the source files";
//status 3. Oct. 2002
$VFont="Vrsta pisave";               //"Font";
$VFontColor="Barva pisave";               //"Font color";
$VFontsize="Velikost pisave";               //"Font size";
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
$DateFormat1="%d. %m. %Y";        //"%D";   this would be e.g. "06/23/02"
$DateFormat2="%e %B, %Y, %R";        //"%A $%e, %Y, %r";  this would be eg "June 23, 2002, 03:15 pm"
$VLessThan="Manj kot";        //"Less than";
$VLanguageEdit="Spremeni jezikovno datoteko";        //"Edit language file";
//status 4. Oct. 2002
$VRemoveMembers="Odstranite �lane";        //"Remove Members";
$VRemove="Odstrani";        //"Remove";
$VMemberRemoved="Ta �lan je bil odstranjen";        //"This member has been removed";

/*below are the <alt> and <title> tags for the various buttons in PBLang. See further down towards the end of the file for the
appropriate variables to set the links to the buttons in your language. There an additional explanation is given*/
$Vpicturebuttons="Uporabite gumbe";                    //"Use Buttons";
$profilealt="Profil";                    //"Profile";
$profiletitle="Profil";                    //"Profile";
$emailalt="Po�lji e-mail";                    //"Send email";
$emailtitle="Po�lji e-mail";                    //"Send email";
$Vemail="Po�lji e-mail";                    //"Send email";
$editalt="Popravite sporo�ilo";                    //"Edit Post";
$edittitle="Popravite sporo�ilo";                    //"Edit Post";
$Vedit="Popravi sporo�ilo";                    //"Edit Post";
$sendpmalt="Po�lji Zasebno Sporo�ilo (ZS)";                    //"Send PM";
$sendpmtitle="Po�lji Zasebno Sporo�ilo (ZS)";                    //"Send PM";
$Vsendpm="Po�lji Zasebno Sporo�ilo (ZS)";                    //"Send PM";
$yimalt="Po�lji YIM";                    //"Send YIM";
$yimtitle="Po�lji YIM";                    //"Send YIM";
$Vyim="Po�lji YIM";                    //"Send YIM";
$aimalt="Po�lji AIM";                    //"Send AIM";
$aimtitle="Po�lji AIM";                    //"Send AIM";
$Vaim="Po�lji AIM";                    //"Send AIM";
$msnalt="Po�lji MSN";                    //"Send MSN";
$msntitle="Po�lji MSN";                    //"Send MSN";
$Vmsn="Po�lji MSN";                    //"Send MSN";
$icqalt="Po�lji ICQ";                    //"Send ICQ";
$icqtitle="Po�lji ICQ";                    //"Send ICQ";
$Vicq="Po�lji ICQ";                    //"Send ICQ";
$wwwalt="Spletna stran";                    //"Website";
$wwwtitle="Spletna stran";                    //"Website";
$Vwww="Spletna stran";                    //"Website";
//Posts
$newthreadalt="Novo sporo�ilo";                    //"New Post";
$newthreadtitle="Novo sporo�ilo";                    //"New Post";
$Vnewthread=$newthreadtitle;
$replyalt="Odgovori na sporo�ilo";                    //"Post Reply";
$replytitle="Odgovori na sporo�ilo";                    //"Post Reply";
$lockedalt="zaklenjen";                    //"locked";
$lockedtitle="zaklenjen";                    //"locked";
//header images
$homealt="Za�etna stran";                    //"Home";
$hometitle="Za�etna stran";                    //"Home";
$searchalt="Iskanje";                    //"Search";
$searchtitle="Iskanje";                    //"Search";
$helpalt="Pomo�";                    //"Help";
$helptitle="Pomo�";                    //"Help";
$logoutalt="Odjava";                    //"Log out";
$logouttitle="Odjava";                    //"Log out";
$ucpalt="Uporabnik - Nadzorna plo��a";                    //"UserCP";
$ucptitle="Uporabnik - Nadzorna plo��a";                    //"UserCP";
$pmalt="Zasebno Sporo�ilo (ZS) - Nabiralnik";                    //"PM";
$pmtitle="Zasebno Sporo�ilo (ZS) - Nabiralnik";                    //"PM";
$loginalt="Prijava";                    //"Log in";
$logintitle="Prijava";                    //"Log in";
$registeralt="Registracija";                    //"Register";
$registertitle="Registracija";                    //"Register";
$adminalt="Administrator - Nadzorna plo��a";                    //"AdminCP";
$admintitle="Administrator - Nadzorna plo��a";                    //"AdminCP";
$memberslistalt="�lani";                    //"Members";
$memberslisttitle="�lani";                    //"Members";
//status 5th Oct. 2002
$VPreviousMessages="Prej�nja sporo�ila";                    //"Previous Messages";
$VTextColor="barva teksta";                    //"text color";
$VMoreThan="Ve� kot";                    //"More than";
//status 8th October
$NoSuchFile="Datoteka ne obstaja!";                    //"The file doesn't exist!";
//status 9th October
$VRE="RE";                    //"RE";
//status 10th October
$PWNoMatch="Geslo se ne ujema. Poskusite znova!";                    //"The password doesn't match. Please try again!";
$VDefault="Privzeto";                    //"Default";
$VStars="Zvezde";                    //"Stars";
$VFlames="Plamen�ki";                    //"Flames";
$VRankImages="Slike �inov";                    //"Rank images";
$VMaxPostsReply="prika�i toliko sporo�il, ko odgovarja�";                    //"show so many posts when replying";
$VEditPost="Uredi sporo�ilo";                    //"Edit Post";
//status 11th October
$VReplied="Odgovorjeno";                    //"Replied";
$VNew="Novo";                    //"New";
$VOriginalPM="Originalno Zasebno Sporo�ilo (ZS)";                    //"Original PM";
$VRead="Prebrano";                    //"Read";
//status 12 Oct 2002
$VNoSubject="Brez predmeta";                    //"No subject";
//status 13 Oct 2002
$VOrderOfReplies="Vrstni red odgovorov";                    //"Order of replies";
$VFirstReplyFirst="najprej prvi";                    //"first reply first";
$VFirstReplyLast="najprej zadnji";                    //"first reply last";
//status 14 Oct 2002
$VStyleHeaderFont="Pisava";                    //"Font style";
$VStyleHeaderPage="Ozadje strani";                    //"Page background";
$VStyleHeaderTitle="Forum header";                    //"Forum header";
$VStyleHeaderMenu="Forum header menu";                    //"Forum header menu";
$VStyleHeaderDate="Date label";                    //"Date label";
$VStyleHeaderContainer="Form container";                    //"Form container";
$VStyleHeaderHeader="Header";                    //"Header";
$VStyleHeaderSubheader="Subheader";                    //"Subheader";
$VStyleHeaderMenu="Meni";                    //"Menu";
$VStyleHeaderForumButton="Gumbi na forumu";                    //"Forum button(s)";
$VStyleHeaderUserColors="Barve uporabnikov";                    //"User colors";
$VStyleHeaderLinkColors="Barve povezav";                    //"Link colors";

$VBackground="Ozadje";                    //"Background";
$VForm="Ozadje foruma";                    //"Inner background";
$VFormBorder="Inner background border";                    //"Inner background border";
$VFormBorderSize="Inner background border size";                    //"Inner background border size";
$VForumHeaderBorder="Header border color";                    //"Header border color";
$VForumHeaderBorderSize="Header border size";                    //"Header border size";
$VForumHeader="Header color";                    //"Header color";
$VForumHeaderTitle="Header title font color";                    //"Header title font color";
$VForumHeaderTitleSize="Header title font size";                    //"Header title font size";
$VForumHeaderCaption="Header caption font color";                    //"Header caption font color";
$VForumHeaderWelcome="Header welcome font color";                    //"Header welcome font color";
$VForumHeaderMenu="Header menu color";                    //"Header menu color";
$VForumHeaderMenuFont="Header menu font color";                    //"Header menu font color";
$VDateColor="Barva datuma";                    //"Date font";
$VContainerBorder="Container border color";                    //"Container border color";
$VContainerBorderSize="Container border size";                    //"Container border size";
$VContainerInner="Container color";                    //"Container color";
$VHeaderColor="Header color";                    //"Header color";
$VHeaderGif="Slika naslova foruma";                    //"Header image";
$VHeaderFont="Barva pisave v naslovu foruma";                    //"Header font color";
$VSubheaderColor="Barva podnaslova";                    //"Subheader color";
$VSubheaderGif="Slika podnaslova";                    //"Subheader image";
$VSubheaderFont="Barva pisave podnaslova";                    //"Subheader font color";
$VMenuColor="Barva menija";                    //"Menu color";
$VFMenuColor="Barva fiksnega menija";                    //"Fixed menu color";
$VMenuFont="Barva pisave fiksnega menija";                    //"Fixed menu font color";
$VForumButtonColor="Barva gumba na forumu";                    //"Forum button color";
$VForumButtonOver="Barva ko gre� preko gumba na forumu";                    //"Forum button over color";
$VForumButtonTopics="Barva tem na forumu";                    //"Forum topics color";
$VForumButtonReplies="Barva odgovorov";                    //"Forum Replies color";
$VForumButtonLast="Barva zadnjega sporo�ila na forumu";                    //"Forum last post color";
$VAdminColor="Barva administratorja";                    //"Administrator font color";
$VModColor="Barva moderatorja";                    //"Moderator font color";
$VUserColor="Barva uporabnika";                    //"User font color";
$VServerTimezone="�asovni pas serverja";                    //"Server timezone";
$VLocalTimezone="Lokalni �as";                    //"Local time";
$VExplainTimezone="�e lokalni �as ni pravilen, ga prilagodi z izbiro ustrezne korekcije.";                    //"If the local time is not correct, please adjust adjust it by selecting the appropriate number.";
$VTimeZone="�asovni pas";                    //"Time zone";
$VBurningFlames="Gore�i plamen�ki";                    //"Burning flames";
/*The following 3 variables allow a better output in the stats-line. Ending 1 is the singular form for the beginning of the sentence like
"There is currently 1 members". Ending 24 und 59 are the plural forms for the beginning of the sentence like "There are currently 7 members".
If you had the variables $VCurrentMember and $VCurrentmembers in older lang-files, you can remove them now - they are no longer used.
*/
$VCurrentMembers1="Trenutno je registriran";                    //"There is currently";
$VCurrentMembers24="Trenutno je registrirano";                    //"There are currently";
$VCurrentMembers59="Trenutno je registrirano";                    //"There are currently";
$VEMSupport="Server podpira PHP email";                    //"Server supports email by PHP";
$VNoEMSupport="Oprostite, server ne podpira PHP emaila";                    //"Sorry, the server does not support email by PHP";
$VDefaultSlogan="Privzeti slogan";                    //"Default slogan";
$VExplainSlogan="Slogan je vrstica pod sliko avatarja";                    //"The slogan is the line beneath the avatar picture";
$VPredefStyles="Predefinirani stili";                    //"Predefined styles";
$VNotWriteable="Oprostite, te nisem mogel vpisati v datoteko";                    //"Sorry, could not write the file";
$VRemoveStatus="obi�ajen status";                    //"regular status";
$VOfTheseNew="Od tega novih";                    //"Of these new";
$VMaxAtchSize="max. velikost priponke v bytih (0=neomejeno)";                    //"max. size of attachment in bytes (0= unlimited)";
$VFileTooBig="Tale datoteka je prevelika. Obstaja omejitev glede velikosti. Zato je ne morete nalo�iti. Lahko pa postavite povezavo (link).";                    //"Sorry, the file is too big. There is a restriction on filesize. You may not upload this file. Set a link instead.";
$VCookieError="Tale forum zahteva podporo pi�kotkom (angl. cookies),  medtem ko va� brskalnik ne sprejema pi�kotkov. Omogo�ite pi�kotke, sicer forum ne bo deloval pravilno. Hvala!";                    /*"This board requires cookie-support,  while your browser does not seem to accept cookies. Please enable cookies, otherwise this board will
     not function proplery. Thank you!";*/
$VNotice="Opomba";                    //"Notice";
$VUsernameGiven="Uporabni�ko ime je �e v uporabi";                    //"Username is already in use";
$VUsernameLimits="^[a-zA-Z0-9]+$";       /*Do not change this!*/
$VDate="Date";                    //"Date";
$VLanguageSelection="jezik";                    //"language";  - this was earlier at a higher position, its contents has changed - just one word: language
$VRepeatPassword="Ponovite geslo";                    //"repeat password";
$qqalt="QQ";
$qqtitle="QQ";
$VStyleButtonChoice="Izbira gumbov";                    //""Button Selection";
$VButtonLimits="Ta izbira je aktivna samo, �e ne uporabljate jezikovno specifi�nih gumbov.";                    //""This choice has only an effect if you do not use a language-specific button set.";
//status 4 Nov 2002
$VIn="in";                    //""in"; like: Messagetitle $VIn Forumtitle
$VRealname="Pravo ime";                    //"Real name";
$VAlias="Vzdevek";                    //"Alias";
$VExplainAlias="Uporabni�ko ime se ne spreminja, lahko pa izberete drug vzdevek, pod katerim se boste pojavljali na forumu";                    //"While your login-username doesn't change, you can choose a different alias which will appear on this board";
$VSlogan="Slogan";                    //"Slogan";
//status 5 Nov 2002
$VStyleHeaderMemgroupColors="Barve skupin �lanov";                    //"Colors of member groups";
$VDateJoined="Pridru�en od";                    //"Joined on";
$VLastVisit="Zadnji obisk";                    //"Last visit";
$VLastPost="Zadnje sporo�ilo";                    //"Last post";
$VGroupColors="Omogo�i barve skupin";                    //"Enable group colors";
$VGroupcolorsExplain="Omogo�i razli�ne barve za vsako skupino �lanov v prikazu \"Kdo je prijavljen\" ";                    //"This will enable different colors for each membergroup in the user online statistics display";
//status 6 November 2002
$VIPLogged="IP zabele�en";                    //"IP logged";
$VSiteLogo="URL naslov logotipa strani";                    //"Site logo URL";
$VSiteLogoExplain="Slika mora biti v mapi templates/pb/images. Dovolj je, da vpi�ete v polje samo ime slike";                    //"Your image must be in the templates/pb/images-folder. It's enough to write the filename in the box";
$VMaxPPP="Prika�i toliko sporo�il /stran";                    //"Show so many posts per page";
//status 11 Nov 2002
$VRequestConfirmation="Zahtevaj potrditev preko emaila za registracijo";                    //"Request confirmation of registration via email";
$VPleaseConfirm="Prosimo, potrdite registracijo na tej strani:";                    //"Please confirm your registration by going to the following page:";
//status 12 Nov 2002
$VNoAvatar="Brez avatarja";                    //"No Avatar"; //in the selection list, choose this if you don't want an avatar
/*Following variable: Do not change the part &quot;$VURLAvatar&quot;, it will be translated automatically
with the words that you have put into the variable $VURLAvatar
This variable was in use earlier but has changed, so please remove it from the upper region of the file, if you are updating
an existing language file*/
$AvatarURLtip=" vpi�ite celoten URL va�ega avatarja in izberite &quot;$VURLAvatar&quot; v prej�njem meniju!";        //"(tip: You have to select &quot;$VURLAvatar&quot; from the above list to use this function!)";
//status 13 Nov 2002
$VDeleteCat="Zbri�i kategorijo";        //"Delete Category";
$VConfirmation="Potrditev registracije";        //"Registration Confirmation";
$VWrongConfirmationCode="Potrditvena koda ni prava";        //"The confirmation code is not correct";
$VConfirmationError="Pri�lo je do napake med potrditvijo";        //"There was an error during confirmation";
$VNoCatDelete="Ne morete zbrisati foruma, ki ni prazen";        //"You may not delete a category which still contains a forum";
//status 15 Nov 2002
$VStyleAnnouncementFont="Stili v predalu za obvestila";        //"Styles in Announcement Box"
//status 16 Nov 2002
$Vzadovoljen_boldog="Zadovoljen";        //"glad grin";
$Vnasmeh_mosoly="Nasmejan";        //"bright grin";
$Vlol="LOL";        //"bad mood";
$Vspaka_grimasz="Spaka";        //"oops";
$Vmezikanje_kacsint="Mezikajo�";        //"unhappy";
$Vmahajoc_integeto="Mahajo�";        //"teardrop";
$Vangel_angyal="Angel";        //"surprised";
$Vcool="Cool";        //"sleeping";
$Vjezik_nyelv="Jezik ka�e";        //"thumb's up";
$Vzardel_voros="Zardet";        //"thumb's down";
$Vdajmi_adj="�akajo�";        //"arrow right";
$Vgenij_zseni="Genij";        //"Idea";
$Vresen_komoly="Resen!";        //"Help!";
$Verrr="Errr...";        //"bouncing";
$Vemmm="Emmm...";        //"dancing";
$Vnipreprican_nembiztos="Ni prepri�an";        //"red face";
$Vnerazume_nemert="Ne razume";        //"devil";
$Vzacuden_furcsa="Za�uden";        //"respectful";
$Vplasen_felenk="Pla�en";        //"scolding";
$Vhuh="HUH!";        //"wall bashing";
$Vhlipav_szotlan="Hlipav";        //"off topic!";
$VEnableAnimSmilies="Uporabite animirane sme�ke (dalj�i �as nalaganja strani pri popravljanju sporo�il)";        //"Use animated smilies (longer loading time when editing messages)";
//status 19 Nov 2002
$VAllowAlias="Dovolite vzdevke";        //"Allow aliases";
$VChangeAlias="Dovolite spremembo vzdevka �ez";        //"Allow alias change after";
$VDays="dni";        //"days";
$ChangeAliasNotAllowed="Trenutno ne morete spremeniti vzdevka. Poskusite kasneje";        //"You may currently not change your alias. Try again later";
$AliasAlreadyInUse="Ta vzdevek je �e v uporabi.";        //"This alias is already in use.";
$VAllowAccess="Dovoli naslednjim uporabnikom dostop do foruma";        //"Allow the following users to access the forum";
$VAll="vsi";        //"all";
$VModerators="moderatorji";        //"moderators";
$VFriend="prijatelj";        //"Friend";
$VExplainFriend="Prijatelj je �lan ki pridobi dostop do dolo�enih forumov. �e vedno pa ne more spreminjati forumov in tem kot moderatorji.";        /*"A friend is a member who can get access to certain forums. (S)he will not have rights to manipulate forums and topics, like the
     moderator has.";*/
$VExpectConformationMail="Poslali smo vam email s povezavo za potrditev registracije. �ele po potrditvi boste imeli dostop do foruma.";        /*"You'll receive an email with a link to confirm your membership. After you have visited that link, you will have
     access to this forum.";*/
//status 20 Nov 2002
$VWelcomeMessage="Sporo�ilo za dobrodo�lico novemu �lanu preko e-mail";        //"Message to welcome a user via E-Mail";
//status 21 Nov 2002
$VCheckIP="Dodatna varnost: ali �eli� preverjati IP obiskovalcev?";        //"Additional security: do you want to check the IP of the visiting computer?";
$VSitelogoWidth="�irina logotipa strani v pikslih";        //"sitelogo width in pixels";
$VSitelogoHeight="vi�ina logotipa strani v pikslih";        //"sitelogo height in pixels";
//status 22 Nov 2002
$VAnnounce="Obvestilo na prvi strani";        //"Special announcement on entrance page";
//status  27 Nov 2002
$VToday="Danes";        //"Today";
$VVisits1="obisk";        //"visit";
$VVisits24="obiskov";        //"visits";
$VVisits59="obiskov";        //"visits";
$VTotalVisits="Skupaj obiskov �lanov";        //"Total visits";
$VLastVisitors="Zadnji obiskovalci";        //"Last visitors";
//status 30 Nov 2002
$VUsernameTooLong="Uporabni�ko ime je predolgo - dovoljenih je najve� 25 znakov";        //"Username is too long - maximum of 25 characters allowed";
$VNotifyAdmin="Obvesti administratorja o novih sporo�ilih (samo nove teme)";        //"Notify Admin about new posts (topics only)";
$VNotifyAdminReplies="Obvesti administratorja o vseh novih sporo�ilih";        //"Notify Admin about any new posts";
//status 1 Dec 2002
$VNewReply="Nov odgovor";        //"New reply";
//status 4 Dec 2002
$VAlreadyUpdated="Osve�itev je bila �e narejena...";        //"You have already updated - nothing to do";
//status 7 Dec 2002
$VFolderIconChoice="Set ikon za mape";        //"folder icon set";
$ficonalt="ikona mape";        //"folder icon";
//status 8 Dec 2002
$VForbiddenType="Prepovedan tip datoteke. Nalo�ite lahko samo slike (gif, jpg, tif), tekstovne datoteke (txt) ali stisnjene datoteke (zip, rar)";        //"Forbidden filetype. You may only upload images (gif, jpg, tif), text files (txt) or archives (zip, rar)";
$VUserIsOnline="Uporabnik je trenutno online in ne more biti odstranjen";        //"User is currently online and cannot be removed";
$VQuotaExceeded="Ni dovolj prostora za datoteko";        //"There is not sufficient space to add this file";
$VMinimumSpace="Minimalno mora ostati na serverju �e (v bytih)";        //"Minimum space that must remain free on server (in Bytes)";
//status 10 Dec 2002
$VGuestVisits="Obiskov gostov";        //"Guest visits";  //for counter of guests
$VTotalGuests="Skupaj gostov";        //"All guests";
$VAllVisits="Vsi obiski";        //"All visits";
//status 11 Dec 2002
$VRules="Pogoji za uporabo";        //"Terms of Use";
//status 12 Dec 2002
$DateFormat3="%d. %b. %Y, %X";        /*shall return e.g. "23.12.2002, 13:03" or "12/23/2002, 1:03 pm" */
//status 13 Dec 2002
$VGuests1="gost";        //"guest";
$VGuests24="gostov";        //"guests";
$VGuests59="gostov";        //"guests";
//status 15 Dec 2002
$PasswordMessage="Morate prositi administratorja, da Vam dodeli novo geslo";        //"You need to ask the admin to give you a new password";
//status 16 Dec 2002
$VUnknown="nepoznan";        //"unknown";
$VRemoved="odstranjen";        //"removed";
$VMaxAvatarWidth="Maksimalna �irina avatar slike v pikslih";        //"Maximum width of avatar picture in pixels";
$VMaxAvatarHeight="Maksimalna vi�ina avatar slike v pikslih";        //"Maximum height of avatar picture in pixels";
//status 17Dec 2002
$VAcceptRules="Strinjam se z navedenimi pravili";        //"I agree to the above rules";
$VRulesMustBeAccepted="Najprej morate sprejeti pravila. Prosimo, ozna�ite ustrezen kvadratek";        //"You must accept the rules first. Please click in the appropriate box";
//status 7 Jan 2003
$VMaxLastPosts="Najve�je �tevilo prikazanih zadnjih sporo�il";        //"max. number of last posts to display";
$VLatestPosts="zadnja sporo�ila";        //"latest posts";
$Vreplies1="odgovor";        //"reply";
$Vreplies24="odgovorov";        //"replies";
$Vreplies59="odgovorov";        //"replies";
//status 13 Jan 2003
$quotetitle="citiraj";        //"quote";
$quotealt="citiraj";        //"quote";
$VGenerell="Splo�no";        //"generell";
$VStyleQuoteFont="vrsta pisave za citat";        //"quote font settings";
//status 20 Jan 2003
$VStickyMessage="naredi tole sporo�ilo lepljiv";        //"Make this a sticky message";
$VStickyMessageExplain="Lepljivo sporo�ilo se vedno poka�e na vrhu - primerno za dobrodo�lico ali opozorilo";        //"A sticky message always appears at the top of a forum - suitable for welcome or warning messages";
//3 March 2003
$VMaxRPP="Maksimalno �evilo odgovorov na stran";        //'Maximum number of replies per page';
//10 March 2003
$VBoardwidth="�irina tabele (manj kot 101 se smatra v odstotkih, ve� kot 300 se smatra v pikslih)";        //"Width of board (less than 101 is considered percent, more than 300 is considered pixels)";
$VBackgroundimage="ime slike za ozadje (nalo�i jo v template/pb/images)";        //"name of background image (locate in templates/pb/images)";
//status 10 April 2003
$VEnableWebAvatars='';        //"'Allow web avatars (avatars which are loaded from a different web page)';
//status 16 April 2003
$VAlign='poravnava';        //"alignment";
$VLeft='levo';        //"left";
$VCenter='sredina';        //"center";
$VRight='desno';        //"right"; (contrary to left)
//status 19 April 2003
$VAllowReplyInLockedForum='Dovoli �lanom odgovarjanje, �e je ta forum zaklenjen';        //'Allow members to reply if this forum is locked';
$VExplainLockedForum='Samo administratorji in moderatorji lahko odgovarjajo v tem forumu';        //'Only admin and moderators can post new messages in this forum';
//status 10 May 2003
$VBoardidentity='Nastavitve identitete table';        //'Board Identity Settings';
$VBoardappearance='Izgled table';        //'Appearance of the Board';
$VBoardsettings='Splo�ne nastavitve table';        //'General Board Settings';
$VNotificationsettings='Nastavitve objav';        //'Notification Settings';
$VAliassettings='Nastavitve vzdevkov';        //'Alias Settings';
$VAvatarsettings='Nastavitve avatarjev';        //'Avatar Settings';
$VPostsettings='Nastavitve sporo�il';        //'Post Settings';
$VMembershipsettings='Nastavitve �lanov';        //'Membership Settings';
$VQuoteBorder='Debelina okvirja za citate';        //'borderwidth of quotes';
$VQuote='citat';        //'quote';
//status 12 May 2003
$VDisableAvatars='Ne prika�i avatarjev (�e imate po�asno povezavo)';        //''Don&#39;t display any avatars (helpful if you have a slow speed connection)';
$VIncompleteUpdate='Tabla ni bila pravilno osve�ena. Prosim pazljivo preberite dokumentacijo in PBLang-doc.txt';        //'The board hasn&#39;t been updated properly. Please read the documentation in PBLang-doc.txt carefully.';
//status 14 May 2003
$VNoNews='Trenutno ni na voljo nobenih novic';        //'There are currently no news available';
$TestRelease='Testira� novo verzijo. Hvala za podporo! Prosim, da me obvesti� o vseh mogo�ih te�avah.';        //'You are testing a new version. Thank you for your support! Please inform me about any problems you might encounter.';
$StillBeta='�e vedno uporablja� testno verzijo, �eprav je �e na voljo kon�na verzija. Prosim, nalo�i kon�no verzijo!';        //'You still use a test version, even though the final release is already available. Please download the latest release!';
//15 May 2003
$VReplyallowed='Lahko odgovarjate v tem forumu, ne morete pa odpreti nove teme.';        //'You may post a reply in this forum, but you may not create a new thread.';
$OpenTopic20read='Odprta tema z ve� kot 20 sporo�ili - prebrana';        //"An open topic with more than 20 posts - read";
$OpenTopicread='Odprta tema - prebrana';        //"An open topic - read";  - "read" means the topic has been read
$LockedTopicread='Zaklenjena tema - prebrana';        //"A locked topic - read";
$StickyMessage='Lepljivo sporo�ilo';        //'A sticky message';
$StickyMessageread='Lepljivo sporo�ilo - prebran';        //'A sticky message - read';
$VTextareawidth='�irina polja za vnos teksta';        //'width of text input field';
$VExplainTextareawidth='�e je tabla postavljena na stran z okvirji, je polje za vnos teksta v�asih pre�iroko, da bi se prilegalo v prostor, ki je na voljo ko kreira� novo sporo�ilo ali na enega odgovarja�. �e tole vrednost ustrezno zmanj�a�, bodo tudi te strani ustrezale v okvir. ';        /*'If the board is located in a frame based site, the text input field is sometimes too wide to fit into the available space
	when a message is posted or answered to. If this value is decreased accordingly, also these pages will fit into the frame.';*/
//17 May 2003
$VStylePrefix='predpona stila';        //'style prefix';
$VExplainStylePrefix='Predpona stila dolo�a kateri gumbi in slike bodo uporabljeni v tem stilu. Prosim preberi styles.txt v doc mapi, kjer bo� na� ve� podrobnosti.';        /*'The style prefix determines which buttons and images are to be used for this style. Please read the doc styles.txt
	in the doc folder for more details.';*/
$VRestrictedForum='Omejen forum. Lahko odgovarja� na sporo�ilo, ne more� pa odpreti nove teme v tem forumu.';        //'Restricted Forum. You may reply to a message, but you may not begin a new topic in this forum.';
//22 May 2003
$VAttachmenttypes='Dovoli priponke naslednjih tipov datotek';        //''Allow these filetypes as attachments';
//13 Aug 2003
$VNoValidMessage='Pri�lo je do napake med shranjevanjem va�ega sporo�ila. Naslov in vsebina manjkata. Prosimo, napi�ite sporo�ilo �e enkrat!';        //'An error occured saving your post. Subject and contents are missing. Please write the message again!';
//21 Aug 2003
$VWrote='je napisal';        //'wrote';
//26 April 2004
$VSendersName='Po�iljateljevo ime';
//19 Oct 2004
$VOldPassword='Staro geslo';
$VHackerAlarmSub='Hacker Alarm! Nekdo je �elel vdreti v Va� sistem foruma!';
$VHackerAlarmText='Eden od �lanov je �elel speremeniti uporabni�ko ime, vendar se staro geslo ni ujemalo.';
$VNoOldPWMatch='Staro geslo se ne ujema z geslom ki ste jo pravkar vpisali. Prosimo, preverite va� vnos.';
$VHackerWarning='�eleli ste spremeniti podatke drugega uporabnika. Prijava je poslana administratorju ki vas bo v kratkem izklju�il iz foruma!';
//20 Oct 2004
$VBoardInFrame='Forum se prika�e v okvirju';
//Version 4.65 complete (22. february 2005)
?>



