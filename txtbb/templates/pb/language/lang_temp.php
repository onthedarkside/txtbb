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

$NoSuchForum="";        //"No such forum!";
$ViewForum="";        //"View Forum";
$NoTopics="";        //"No Topics in this forum!";
$DeleteForum="";        //"Delete Forum";
$VLockForum="";        //"Lock Forum";
$VUnlockForum="";        //"Unlock Forum";
$OpenTopic20="";        //"An open topic with more than 20 posts";
$OpenTopic="";        //"An open topic";
$LockedTopic="";        //"A locked topic";
$PMAlreadyDeleted="";        //"This PM has already been deleted!";
$DeletePostNotAllowed="";        //"This is not your post to delete!";
$NoEditInLockedForum="";        //"You cannot edit in a locked forum!";
$EditPost="";        //"Edit Post";
$VError="";        //"Error";
$ContactAdmin="";        //"Contact admin at";
$VHelp="";        //"Help";
$VExplanation="";        //"Explanation";
$VExplanationPoint="";        //"exclamation point";
$VHelpIMG="";        //"This is used to display images on your posts or signatures";
$VDisplays="";        //"Displays";
$VHelpURL="";        //"This is used to add web hyperlinks in your posts or signatures";
$VUsage="";        //"Usage";
$VHelpEMAIL="";        //"This is to add mailto: email links to your posts or signatures";
$VHelpGLOW="";        //"This adds glowtext to your post or signature. Replace COLOR with a color of your choice (red,blue,orange,green)";
$GlowText="";        //"Glow Text";
$VHelpITALICS="";        //"This makes your text italic in your post or signature";
$ItalicText="";        //"Italic Text";
$VHelpBold="";        //"This makes your text bold in your post or signature";
$BoldText="";        //"Bold text";
$VIndex="";        //"Index";
$WhoIsThere="";        //"Who's Logged on?";
$AlreadyLoggedIn="";        //"You are already logged in";
$RegistrationRequired="";        //"The board administrator requires that all veiwers login or <a href=\"register.php\">register</a> before viewing the board";
$NonExistingUser="";        //"User does not exist";
$UsernameRequired="";        //"Must enter a username";
$PasswordRequired="";        //"You must enter a password";
$PasswordLost="";        //"Lost Password at" - used as subject of the email in which the lost password is sent, it follows the name of the forum;
$PasswordSent="";        //"Your password has been sent to your email address";
$MemberList="";        //"Members List";
$PostReply="";        //"Post Reply";
$NoReplyInLockedForum="";        //"You can not reply in a locked forum";
$NoReplyInLockedTopic="";        //"You can not reply to a locked topic";
$UploadsNotAllowed="";        //"Uploads are not allowed! Post was made";
$PostWait="";        //"Please wait, redirecting to your post";
$NoNewTopicInLockedForum="";        //"You can not make new topics in a locked forum";
$LangLocale="";        //"en_EN"; or "de_DE" or "ru_RU" or "fi_FI" etc.
$PrivateMessaging="";        //"Private Messaging";
$NoMessages="";        //"No messages in inbox";
$ViewPost="";        //"View Post";
$VFunctions="";        //"Functions";
$DeleteTopic="";        //"Delete Topic";
$LockTopic="";        //"Lock Topic";
$UnlockTopic="";        //"Unlock Topic";
$AlreadyMember="";        //"You are already a member";
$NoNewUsers="";        //"The board administrator does not allow new users";
$VRegister="";        //"Register";
$PleaseComplete="";        //"Please complete all required form objects";
$WelcomeMessage="";        //"Welcome to";
$WelcomeMessage1="";        //"'s forums";
$ThanksMessage="";        //"Thank you for joining";
$UsernameTaken="";        //"Username taken!";
$VSearch="";        //"Search";
$NoResults="";        //"No Results Found";
$SendPM="";        //"Send PM";
$AuthorRequired="";        //"Must fill out author";
$MessageSent="";        //"Your private message has been sent";
$InvalidUsername="";        //"Invalid Username";
$NoSuchUser="";        //"Nice try, but that user does not exist";
$InvalidPassword="";        //"Invalid password";
$VUserCP="";        //"UserCP";
$ProfileUpdated="";        //"'s profile has been updated";
$VUpdated="";        //"Updated";
$VMembers="";        //"members";
$VMembers1="";        //"member";            //singular form
$VMembers24="";        //"members";          //plural form
$VMembers59="";        //"members";          //plural form - 2 forms needed for Russian language - hence also in other languages a second plural form
                        //$VMember="";        //"member"; - no longer needed
$VAdministrator="";        //"Administrator";
$VAdminPC="";        //"Admin Control Panel";
$VModerator="";        //"Moderator";
$VUser="";        //"User";
$AccessDenied="";        //"Access is Denied";
$AdminCenter="";        //"Admin Center";
$PbNews="";        //"PBLang News Feed";
$VWhatIsThe="";        //"What is the";
$AdminCenterExplain="";        /*"This is your 'PBLang Admin Center'. You can modify your settings and language files from here, as well
                                             as maintain your forums."*/
$VVersionCompare="";        //"Version comparison";
$CompareString="";        //"Newest/Yours";
$LatestRelease="";        //"You have the latest release!";
$NewerRelease="";        //"There is a newer release!";
$VForumSettings="";        //"Forum Settings";
$VTitle="";        //"Title";
$VTemplate="";        //"Template";
$VSiteMotto="";        //"SiteMotto";
$VFooter="";        //"Footer";
$VSubmit="";        //"Submit";
$VReset="";        //"Reset";
$VStylesColors="";        //"Styles/Colors";
$VBackground="";        //"Background";
$VBody="";        //"Body";
$VAlternatingColor1="";        //"Alternating Color 1";
$VAlternatingColor2="";        //"Alternating Color 2";
$VHeaderColor="";        //"Header Color";
$VHeaderBG="";        //"Header Background";
$VSubheaderColor="";        //"Sub Header Color";
$VSubheaderBG="";        //"Sub Header Background";
$VExtraBorderColor="";        //"Extra Border Color";
$VExtraBorderWidth="";        //"Extra Border Width";
$VStandardBorderColor="";        //"Standard Border Color";
$VBorderColor="";        //"Border Color";
$VLinkColor="";        //"Link Color";
$VVisitedLinkColor="";        //"Visited Link Color";
$VHoverLinkColor="";        //"Hover Link Color";
$VDone="";        //"done";
$VTemplate="";        //"Template";
$ChooseTemplate="";        //"Choose a template to edit. By editing these templates you can edit everything down to the HTML tables."
$VMenu="";        //"Menu";
$VView="";        //"View";
$VMain="";        //"Main";
$VSettings="";        //"Settings";
$VTemplates="";        //"Templates";
$VMemberGroups="";        //"Member Groups";
$VBanMembers="";        //"Ban Members";
$VBanMember="";        //"Ban Member";
$VEmailMembers="";        //"Email Members";
$VGrantStatus="";        //"Grant Status";
$VCategories="";        //"Categories";
$VForum="";        //"Forum";
$VForums="";        //"Forums";
$VAddForums="";        //"Add Forums";
$VEditForums="";        //"Edit Forums";
$VEditForum="";        //"Edit forum";
$VPrevPage="";        //"Prev Page";
$VNextPage="";        //"Next Page";
$VPage="";        //"Page";
$VOf="";        //"of";
$VSubject="";        //"Subject";
$VAuthor="";        //"Author";
$VReplies="";        //"Replies";
$VLastReply="";        //"Last Reply";
$VViews="";        //"Views";
$VOptions="";        //"Options";
$VUsername="";        //"Username";
$SubjectIcon="";        //"Subject &amp; Post Icon";
$VSmiley="";        //"Smiley";
$VShocked="";        //"Shocked";
$VHuh="";        //"Huh?";
$VTongue="";        //"Tongue";
$VWink="";        //"Wink";
$VEvil="";        //"Evil";
$VEmbarassed="";        //"Embarassed";
$VGoofy="";        //"Goofy";
$VRollEyes="";        //"Roll Eyes";
$VHyperlink="";        //"Hyperlink";
$VImage="";        //"Image";
$VEmail="";        //"Email";
$VGlow="";        //"Glow";
$VBold="";        //"Bold";
$VItalicize="";        //"Italicize";
$VContent="";        //"Content";
$VAttachment="";        //"Attachment";
$NoAttachments="";        //"No attachments are allowed right now";
$VSubmitForm="";        //"Submit Form";
$VHello="";        //"Hello";
$VYouHave="";        //"you have";
$VMessages="";        //"messages";
$VMessages1="";        //"message";
$VMessages24="";        //"messages";
$VMessages59="";        //"messages";
$VPlease="";        //"Please";
$VLogin="";        //"log in";
$VLogout="";        //"log out";
$VRegister="";        //"register";
$VHome="";        //"Home";
$VSearch="";        //"Search";
$VHelp="";        //"Help";
$VPM="";        //"Private Messages";
$AdminPC="";        //"AdminPC";
$VTopics="";        //"Topics";
$VTopics1="";        //"Topic";                      //singular and plural forms - see above under $VMembers for explanation!
$VTopics24="";        //"Topics";
$VTopics59="";        //"Topics";
$VLastPost="";        //"Last Post";
$TimeDate="";        //"The date and time is now ";
$VPassword="";        //"Password";
$RetrievePassword="";        //"Retrieve password"; on the button at registration to get the password via email
$VPosts="";        //"Posts";
$VPosts1="";        //"Post";                        //singular and plural forms - see above under $VMembers for explanation!
$VPosts24="";        //"Posts";
$VPosts59="";        //"Posts";
$VPosition="";        //"Status";
$VPost="";        //"Post";
$VDeletePost="";        //"Delete your post";
$VNewTopic="";        //"New Topic";
$VStandard="";        //"Standard";
$VThumbsUp="";        //"Thumbs up";
$VThumbsDown="";        //"Thumbs down";
$VExplanationPoint="";        //"Explanation point";
$VQuestionMark="";        //"Question mark";
$VAngry="";        //"Angry";
$VMad="";        //"Mad";
$VSad="";        //"Sad";
$VSendPM="";        //"Send PM";
$VReply="";        //"Reply";
$VDelete="";        //"Delete";
$VStatus="";        //"Status";
$VProfileFor="";        //"Profile for";
$VModify="";        //"Modify";
$VAvatar="";        //"Avatar";
$NoAvatars="";        //"No Avatars are allowed at this time";
$VEnableAvatars="";        //"Enable Avatars";
$VLocation="";        //"Location";
$VWebsite="";        //"Website";
$VSignature="";        //"Signature";
$VRegistrationComplete="";        //"Registration Complete";
$ThanksForSigning="";        //"Thanks for signing up";
$VHere="";        //"here";
$NoNewUsers="";        //"There are no new members allowed right now";
$VProfile="";        //"Profile";
$VNumber="";        //"Number";
$VRequired="";        //"Required";
$VTopicReview="";        //"Topic Review";
$VSearchTerms="";        //"Search Terms";
$VSearchResults="";        //"Search Results";
$VSendMessage="";        //"Send Message";
$VInbox="";        //"Inbox";
$VMessage="";        //"Message";
$VStats="";        //"Stats";
$VLatestMember="";        //"The newest member is";
$VTheSearchTerm="";        //"The Search Term";
$VFoundResults="";        //"found the following results";
$VUserControlPanel="";        //"User Control Panel";
$VUserControlCenter="";        //"User Control Center";
$VPersonal="";        //"Personal";
$VNewPassword="";        //"New Password";
$VPersonalText="";        //"Personal Text";
$VList="";        //"List";
$PBCodeAllowed="";        //"PBcode and smilies allowed";
$VPasswordAgain="";        //"Password Again";
$VWhoIsOnline="";        //"Who is online?";
$VLoggedIn="";        //"logged in";
$VLoggedOn="";        //"logged on";
$VLoggedOff="";        //"logged off";
$VOr="";        //"or";
$NoAccess="";        //"You do not have access, if you believe you do, please hit refresh.";
$VDisableAttachments="";        //"Disable Attachments";
$VEnableHTML="";        //"Enable HTML";
$VCensorWords="";        //"Censor bad words";
$VEnableBBCode="";        //"Enable BB code";
$VEnableSmilies="";        //"Enable smilies";
$VAllowNewUsers="";        //"Allow new users";
$VMaintenanceMode="";        //"Maintenance Mode";
$VOnlyAdmins="";        //"Only admins are granted access";
$RequireLogin="";        //"Require users to be logged on";
$VToViewForum="";        //"to view the messages";
$VMaintReason="";        //"Maintenance reason";
$VBannedReason="";        //"Banned Reason";
$AdminEmail="";        //"Admin's email address";
$AdminEmailReason="";        //"the email address will be seen on error pages to allow error reports";
$VComplete="";        //"Complete";
$VTemplateEditor="";        //"Template Editor";
$VInfinity="";        //"Infinity";
$VBanned="";        //"Banned";
$VCategory="";        //"Category";
$VAddCategory="";        //"Add Category";
$VEditCategories="";        //"Edit categories";
$VEditCategory="";        //"Edit category";
$ExplainAddCategory="";        //"Fill out thisform to add a category";
$VName="";        //"Name";
$VDesc="";        //"Description";
$VVia="";        //"Via";
$VPrivateMessage="";        //"Private Message";
$VWhichStatus="";        //"Which status";
$VBan="";        //"Ban";
$VUnban="";        //"Unban";
$VNever="";        //"Never";
//$AdministrativeFunctions="";        //"administrative functions";  - not needed any more
$VOn="";        //"on";         //  a particular date
$VBy="";        //"by";         //  a particular person
$VSent="";        //"Sent";
$NoPermission="";        //"You do not have permission to perform this action!";
$VLocked="";        //"topic is locked - no reply possible";

// status 19 Sept 2002
$VHideEmail="";          //"Hide email from other members";
$VHidden="";              //"Hidden";
$Charset="";              //"iso-8859-1";
// status 21 Sept 2002
$VNewMember="";          //"New member";
$VWith="";          //"with";
$VAllowEmail="";          //"Enable emails";
$VThereIs="";          //"there is";                  // 1 member online
$VThereAre="";          //"there are";         // n members online
$VEdited="";            //"Edited";
$VEditMembergroups="";          //"edit member groups";
//status 22 Sept 2002
$VAnd="";                  //"&amp;";
$SetRequireLogin="";                  //"Require users to be logged on";
$VTo="";                  //"To";   //a receiver of a message
$VSmilies="";                  //"Smilies";
$VPBCode="";                  //"PBCode";
$CVLogin="";                  //"Log in"; start with capital letter
//status 23 Sept 2002
$VPosted="";                 //"Posted"; a message has been posted...
$PBLSupportLink="";             //"Support for PBLang";  Headline for the link to the PBLang-forum
$VReplySent="";               //You received a reply";
$NotifyReplySent="";               //Hi,\n\n    A reply was sent to your post on ".$sitetitle." to the subject ";  //end then follows the subject line
$VNotifyByEmail="";               //Do you want to be notified if a reply is posted";
$EmailNotification="";               //Email notification";
$VAdministrativeFunctions="";               //Admnistrative functions";
$VURLAvatar="";               //Avatar via URL";
//status 27 Sept. 2002
$ForumLocked="";               //"This group is locked";
$WrongUsername="";               //"The username may contain only characters or numbers";
$WrongEmailAddress="";               //"This is not a valid email address";
//status 2 Oct 2002
$VFrom="";               //"from";  it's used in a line like "Message $VFrom: author"
$VNoTemplatesEdit="";               //"You should not edit any templates using this interface. Please use an appropriate editor to edit the source files";
//status 3. Oct. 2002
$VFont="";               //"Font";
$VFontColor="";               //"Font color";
$VFontsize="";               //"Font size";
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
$DateFormat1="";        //"%D";   this would be e.g. "06/23/02"
$DateFormat2="";        //"%A $%e, %Y, %r";  this would be eg "June 23, 2002, 03:15 pm"
$VLessThan="";        //"Less than";
$VLanguageEdit="";        //"Edit language file";
//status 4. Oct. 2002
$VRemoveMembers="";        //"Remove Members";
$VRemove="";        //"Remove";
$VMemberRemoved="";        //"This member has been removed";

/*below are the <alt> and <title> tags for the various buttons in PBLang. See further down towards the end of the file for the
appropriate variables to set the links to the buttons in your language. There an additional explanation is given*/
$Vpicturebuttons="";                    //"Use Buttons";
$profilealt="";                    //"Profile";
$profiletitle="";                    //"Profile";
$emailalt="";                    //"Send email";
$emailtitle="";                    //"Send email";
$Vemail="";                    //"Send email";
$editalt="";                    //"Edit Post";
$edittitle="";                    //"Edit Post";
$Vedit="";                    //"Edit Post";
$sendpmalt="";                    //"Send PM";
$sendpmtitle="";                    //"Send PM";
$Vsendpm="";                    //"Send PM";
$yimalt="";                    //"Send YIM";
$yimtitle="";                    //"Send YIM";
$Vyim="";                    //"Send YIM";
$aimalt="";                    //"Send AIM";
$aimtitle="";                    //"Send AIM";
$Vaim="";                    //"Send AIM";
$msnalt="";                    //"Send MSN";
$msntitle="";                    //"Send MSN";
$Vmsn="";                    //"Send MSN";
$icqalt="";                    //"Send ICQ";
$icqtitle="";                    //"Send ICQ";
$Vicq="";                    //"Send ICQ";
$wwwalt="";                    //"Website";
$wwwtitle="";                    //"Website";
$Vwww="";                    //"Website";
//Posts
$newthreadalt="";                    //"New Post";
$newthreadtitle="";                    //"New Post";
$Vnewthread=$newthreadtitle;
$replyalt="";                    //"Post Reply";
$replytitle="";                    //"Post Reply";
$lockedalt="";                    //"locked";
$lockedtitle="";                    //"locked";
//header images
$homealt="";                    //"Home";
$hometitle="";                    //"Home";
$searchalt="";                    //"Search";
$searchtitle="";                    //"Search";
$helpalt="";                    //"Help";
$helptitle="";                    //"Help";
$logoutalt="";                    //"Log out";
$logouttitle="";                    //"Log out";
$ucpalt="";                    //"UserCP";
$ucptitle="";                    //"UserCP";
$pmalt="";                    //"PM";
$pmtitle="";                    //"PM";
$loginalt="";                    //"Log in";
$logintitle="";                    //"Log in";
$registeralt="";                    //"Register";
$registertitle="";                    //"Register";
$adminalt="";                    //"AdminCP";
$admintitle="";                    //"AdminCP";
$memberslistalt="";                    //"Members";
$memberslisttitle="";                    //"Members";
//status 5th Oct. 2002
$VPreviousMessages="";                    //"Previous Messages";
$VTextColor="";                    //"text color";
$VMoreThan="";                    //"More than";
//status 8th October
$NoSuchFile="";                    //"The file doesn't exist!";
//status 9th October
$VRE="";                    //"RE";
//status 10th October
$PWNoMatch="";                    //"The password doesn't match. Please try again!";
$VDefault="";                    //"Default";
$VStars="";                    //"Stars";
$VFlames="";                    //"Flames";
$VRankImages="";                    //"Rank images";
$VMaxPostsReply="";                    //"show so many posts when replying";
$VEditPost="";                    //"Edit Post";
//status 11th October
$VReplied="";                    //"Replied";
$VNew="";                    //"New";
$VOriginalPM="";                    //"Original PM";
$VRead="";                    //"Read";
//status 12 Oct 2002
$VNoSubject="";                    //"No subject";
//status 13 Oct 2002
$VOrderOfReplies="";                    //"Order of replies";
$VFirstReplyFirst="";                    //"first reply first";
$VFirstReplyLast="";                    //"first reply last";
//status 14 Oct 2002
$VStyleHeaderFont="";                    //"Font style";
$VStyleHeaderPage="";                    //"Page background";
$VStyleHeaderTitle="";                    //"Forum header";
$VStyleHeaderMenu="";                    //"Forum header menu";
$VStyleHeaderDate="";                    //"Date label";
$VStyleHeaderContainer="";                    //"Form container";
$VStyleHeaderHeader="";                    //"Header";
$VStyleHeaderSubheader="";                    //"Subheader";
$VStyleHeaderMenu="";                    //"Menu";
$VStyleHeaderForumButton="";                    //"Forum button(s)";
$VStyleHeaderUserColors="";                    //"User colors";
$VStyleHeaderLinkColors="";                    //"Link colors";

$VBackground="";                    //"Background";
$VForm="";                    //"Inner background";
$VFormBorder="";                    //"Inner background border";
$VFormBorderSize="";                    //"Inner background border size";
$VForumHeaderBorder="";                    //"Header border color";
$VForumHeaderBorderSize="";                    //"Header border size";
$VForumHeader="";                    //"Header color";
$VForumHeaderTitle="";                    //"Header title font color";
$VForumHeaderTitleSize="";                    //"Header title font size";
$VForumHeaderCaption="";                    //"Header caption font color";
$VForumHeaderWelcome="";                    //"Header welcome font color";
$VForumHeaderMenu="";                    //"Header menu color";
$VForumHeaderMenuFont="";                    //"Header menu font color";
$VDateColor="";                    //"Date font";
$VContainerBorder="";                    //"Container border color";
$VContainerBorderSize="";                    //"Container border size";
$VContainerInner="";                    //"Container color";
$VHeaderColor="";                    //"Header color";
$VHeaderGif="";                    //"Header image";
$VHeaderFont="";                    //"Header font color";
$VSubheaderColor="";                    //"Subheader color";
$VSubheaderGif="";                    //"Subheader image";
$VSubheaderFont="";                    //"Subheader font color";
$VMenuColor="";                    //"Menu color";
$VFMenuColor="";                    //"Fixed menu color";
$VMenuFont="";                    //"Fixed menu font color";
$VForumButtonColor="";                    //"Forum button color";
$VForumButtonOver="";                    //"Forum button over color";
$VForumButtonTopics="";                    //"Forum topics color";
$VForumButtonReplies="";                    //"Forum Replies color";
$VForumButtonLast="";                    //"Forum last post color";
$VAdminColor="";                    //"Administrator font color";
$VModColor="";                    //"Moderator font color";
$VUserColor="";                    //"User font color";
$VServerTimezone="";                    //"Server timezone";
$VLocalTimezone="";                    //"Local time";
$VExplainTimezone="";                    //"If the local time is not correct, please adjust adjust it by selecting the appropriate number.";
$VTimeZone="";                    //"Time zone";
$VBurningFlames="";                    //"Burning flames";
/*The following 3 variables allow a better output in the stats-line. Ending 1 is the singular form for the beginning of the sentence like
"There is currently 1 members". Ending 24 und 59 are the plural forms for the beginning of the sentence like "There are currently 7 members".
If you had the variables $VCurrentMember and $VCurrentmembers in older lang-files, you can remove them now - they are no longer used.
*/
$VCurrentMembers1="";                    //"There is currently";
$VCurrentMembers24="";                    //"There are currently";
$VCurrentMembers59="";                    //"There are currently";
$VEMSupport="";                    //"Server supports email by PHP";
$VNoEMSupport="";                    //"Sorry, the server does not support email by PHP";
$VDefaultSlogan="";                    //"Default slogan";
$VExplainSlogan="";                    //"The slogan is the line beneath the avatar picture";
$VPredefStyles="";                    //"Predefined styles";
$VNotWriteable="";                    //"Sorry, could not write the file";
$VRemoveStatus="";                    //"regular status";
$VOfTheseNew="";                    //"Of these new";
$VMaxAtchSize="";                    //"max. size of attachment in bytes (0= unlimited)";
$VFileTooBig="";                    //"Sorry, the file is too big. There is a restriction on filesize. You may not upload this file. Set a link instead.";
$VCookieError="";                    /*"This board requires cookie-support,  while your browser does not seem to accept cookies. Please enable cookies, otherwise this board will
     not function proplery. Thank you!";*/
$VNotice="";                    //"Notice";
$VUsernameGiven="";                    //"Username is already in use";
$VUsernameLimits="^[a-zA-Z0-9]+$";       /*Do not change this!*/
$VDate="";                    //"Date";
$VLanguageSelection="";                    //"language";  - this was earlier at a higher position, its contents has changed - just one word: language
$VRepeatPassword="";                    //"repeat password";
$qqalt="QQ";
$qqtitle="QQ";
$VStyleButtonChoice="";                    //""Button Selection";
$VButtonLimits="";                    //""This choice has only an effect if you do not use a language-specific button set.";
//status 4 Nov 2002
$VIn="";                    //""in"; like: Messagetitle $VIn Forumtitle
$VRealname="";                    //"Real name";
$VAlias="";                    //"Alias";
$VExplainAlias="";                    //"While your login-username doesn't change, you can choose a different alias which will appear on this board";
$VSlogan="";                    //"Slogan";
//status 5 Nov 2002
$VStyleHeaderMemgroupColors="";                    //"Colors of member groups";
$VDateJoined="";                    //"Joined on";
$VLastVisit="";                    //"Last visit";
$VLastPost="";                    //"Last post";
$VGroupColors="";                    //"Enable group colors";
$VGroupcolorsExplain="";                    //"This will enable different colors for each membergroup in the user online statistics display";
//status 6 November 2002
$VIPLogged="";                    //"IP logged";
$VSiteLogo="";                    //"Site logo URL";
$VSiteLogoExplain="";                    //"Your image must be in the templates/pb/images-folder. It's enough to write the filename in the box";
$VMaxPPP="";                    //"Show so many posts per page";
//status 11 Nov 2002
$VRequestConfirmation="";                    //"Request confirmation of registration via email";
$VPleaseConfirm="";                    //"Please confirm your registration by going to the following page:";
//status 12 Nov 2002
$VNoAvatar="";                    //"No Avatar"; //in the selection list, choose this if you don't want an avatar
/*Following variable: Do not change the part &quot;$VURLAvatar&quot;, it will be translated automatically
with the words that you have put into the variable $VURLAvatar
This variable was in use earlier but has changed, so please remove it from the upper region of the file, if you are updating
an existing language file*/
$AvatarURLtip="";        //"(tip: You have to select &quot;$VURLAvatar&quot; from the above list to use this function!)";
//status 13 Nov 2002
$VDeleteCat="";        //"Delete Category";
$VConfirmation="";        //"Registration Confirmation";
$VWrongConfirmationCode="";        //"The confirmation code is not correct";
$VConfirmationError="";        //"There was an error during confirmation";
$VNoCatDelete="";        //"You may not delete a category which still contains a forum";
//status 15 Nov 2002
$VStyleAnnouncementFont="";        //"Styles in Announcement Box"
//status 16 Nov 2002
$Vgladg="";        //"glad grin";
$Vgrinsg="";        //"bright grin";
$Vbadg="";        //"bad mood";
$Vschluckg="";        //"oops";
$Vsunglg="";        //"unhappy";
$Vteardrop="";        //"teardrop";
$Vsurprised="";        //"surprised";
$Vsleeping="";        //"sleeping";
$Vthmbup="";        //"thumb's up";
$Vthmbdn="";        //"thumb's down";
$Vpfeilrg="";        //"arrow right";
$Vbulb="";        //"Idea";
$VHelpg="";        //"Help!";
$Vbounceg="";        //"bouncing";
$Vdanceg="";        //"dancing";
$Vredface2g="";        //"red face";
$Vdevilg="";        //"devil";
$Vrespektg="";        //"respectful";
$Vschimpfg="";        //"scolding";
$Vwallbashg="";        //"wall bashing";
$Vofftopicg="";        //"off topic!";
$VEnableAnimSmilies="";        //"Use animated smilies (longer loading time when editing messages)";
//status 19 Nov 2002
$VAllowAlias="";        //"Allow aliases";
$VChangeAlias="";        //"Allow alias change after";
$VDays="";        //"days";
$ChangeAliasNotAllowed="";        //"You may currently not change your alias. Try again later";
$AliasAlreadyInUse="";        //"This alias is already in use.";
$VAllowAccess="";        //"Allow the following users to access the forum";
$VAll="";        //"all";
$VModerators="";        //"moderators";
$VFriend="";        //"Friend";
$VExplainFriend="";        /*"A friend is a member who can get access to certain forums. (S)he will not have rights to manipulate forums and topics, like the
     moderator has.";*/
$VExpectConformationMail="";        /*"You'll receive an email with a link to confirm your membership. After you have visited that link, you will have
     access to this forum.";*/
//status 20 Nov 2002
$VWelcomeMessage="";        //"Message to welcome a user via E-Mail";
//status 21 Nov 2002
$VCheckIP="";        //"Additional security: do you want to check the IP of the visiting computer?";
$VSitelogoWidth="";        //"sitelogo width in pixels";
$VSitelogoHeight="";        //"sitelogo height in pixels";
//status 22 Nov 2002
$VAnnounce="";        //"Special announcement on entrance page";
//status  27 Nov 2002
$VToday="";        //"Today";
$VVisits1="";        //"visit";
$VVisits24="";        //"visits";
$VVisits59="";        //"visits";
$VTotalVisits="";        //"Total visits";
$VLastVisitors="";        //"Last visitors";
//status 30 Nov 2002
$VUsernameTooLong="";        //"Username is too long - maximum of 25 characters allowed";
$VNotifyAdmin="";        //"Notify Admin about new posts (topics only)";
$VNotifyAdminReplies="";        //"Notify Admin about any new posts";
//status 1 Dec 2002
$VNewReply="";        //"New reply";
//status 4 Dec 2002
$VAlreadyUpdated="";        //"You have already updated - nothing to do";
//status 7 Dec 2002
$VFolderIconChoice="";        //"folder icon set";
$ficonalt="";        //"folder icon";
//status 8 Dec 2002
$VForbiddenType="";        //"Forbidden filetype. You may only upload images (gif, jpg, tif), text files (txt) or archives (zip, rar)";
$VUserIsOnline="";        //"User is currently online and cannot be removed";
$VQuotaExceeded="";        //"There is not sufficient space to add this file";
$VMinimumSpace="";        //"Minimum space that must remain free on server (in Bytes)";
//status 10 Dec 2002
$VGuestVisits="";        //"Guest visits";  //for counter of guests
$VTotalGuests="";        //"All guests";
$VAllVisits="";        //"All visits";
//status 11 Dec 2002
$VRules="";        //"Terms of Use";
//status 12 Dec 2002
$DateFormat3="%D, %X";        /*shall return e.g. "23.12.2002, 13:03" or "12/23/2002, 1:03 pm" */
//status 13 Dec 2002
$VGuests1="";        //"guest";
$VGuests24="";        //"guests";
$VGuests59="";        //"guests";
//status 15 Dec 2002
$PasswordMessage="";        //"You need to ask the admin to give you a new password";
//status 16 Dec 2002
$VUnknown="";        //"unknown";
$VRemoved="";        //"removed";
$VMaxAvatarWidth="";        //"Maximum width of avatar picture in pixels";
$VMaxAvatarHeight="";        //"Maximum height of avatar picture in pixels";
//status 17Dec 2002
$VAcceptRules="";        //"I agree to the above rules";
$VRulesMustBeAccepted="";        //"You must accept the rules first. Please click in the appropriate box";
//status 7 Jan 2003
$VMaxLastPosts="";        //"max. number of last posts to display";
$VLatestPosts="";        //"latest posts";
$Vreplies1="";        //"reply";
$Vreplies24="";        //"replies";
$Vreplies59="";        //"replies";
//status 13 Jan 2003
$quotetitle="";        //"quote";
$quotealt="";        //"quote";
$VGenerell="";        //"generell";
$VStyleQuoteFont="";        //"quote font settings";
//status 20 Jan 2003
$VStickyMessage="";        //"Make this a sticky message";
$VStickyMessageExplain="";        //"A sticky message always appears at the top of a forum - suitable for welcome or warning messages";
//3 March 2003
$VMaxRPP="";        //'Maximum number of replies per page';
//10 March 2003
$VBoardwidth="";        //"Width of board (less than 101 is considered percent, more than 300 is considered pixels)";
$VBackgroundimage="";        //"name of background image (locate in templates/pb/images)";
//status 10 April 2003
$VEnableWebAvatars='';        //"'Allow web avatars (avatars which are loaded from a different web page)';
//status 16 April 2003
$VAlign='';        //"alignment";
$VLeft='';        //"left";
$VCenter='';        //"center";
$VRight='';        //"right"; (contrary to left)
//status 19 April 2003
$VAllowReplyInLockedForum='';        //'Allow members to reply if this forum is locked';
$VExplainLockedForum='';        //'Only admin and moderators can post new messages in this forum';
//status 10 May 2003
$VBoardidentity='';        //'Board Identity Settings';
$VBoardappearance='';        //'Appearance of the Board';
$VBoardsettings='';        //'General Board Settings';
$VNotificationsettings='';        //'Notification Settings';
$VAliassettings='';        //'Alias Settings';
$VAvatarsettings='';        //'Avatar Settings';
$VPostsettings='';        //'Post Settings';
$VMembershipsettings='';        //'Membership Settings';
$VQuoteBorder='';        //'borderwidth of quotes';
$VQuote='';        //'quote';
//status 12 May 2003
$VDisableAvatars='';        //''Don&#39;t display any avatars (helpful if you have a slow speed connection)';
$VIncompleteUpdate='';        //'The board hasn&#39;t been updated properly. Please read the documentation in PBLang-doc.txt carefully.';
//status 14 May 2003
$VNoNews='';        //'There are currently no news available';
$TestRelease='';        //'You are testing a new version. Thank you for your support! Please inform me about any problems you might encounter.';
$StillBeta='';        //'You still use a test version, even though the final release is already available. Please download the latest release!';
//15 May 2003
$VReplyallowed='';        //'You may post a reply in this forum, but you may not create a new thread.';
$OpenTopic20read='';        //"An open topic with more than 20 posts - read";
$OpenTopicread='';        //"An open topic - read";  - "read" means the topic has been read
$LockedTopicread='';        //"A locked topic - read";
$StickyMessage='';        //'A sticky message';
$StickyMessageread='';        //'A sticky message - read';
$VTextareawidth='';        //'width of text input field';
$VExplainTextareawidth='';        /*'If the board is located in a frame based site, the text input field is sometimes too wide to fit into the available space
	when a message is posted or answered to. If this value is decreased accordingly, also these pages will fit into the frame.';*/
//17 May 2003
$VStylePrefix='';        //'style prefix';
$VExplainStylePrefix='';        /*'The style prefix determines which buttons and images are to be used for this style. Please read the doc styles.txt
	in the doc folder for more details.';*/
$VRestrictedForum='';        //'Restricted Forum. You may reply to a message, but you may not begin a new topic in this forum.';
//22 May 2003
$VAttachmenttypes='';        //'Allow these filetypes as attachments';
//13 Aug 2003
$VNoValidMessage='';        //'An error occured saving your post. Subject and contents are missing. Please write the message again!';
//21 Aug 2003
$VWrote='';        //'wrote';
//Version 4.59 complete
//26 April 2004
$VSendersName='';        //'Sender&#39;s name';
//19 Oct 2004
$VOldPassword='';        //'Old Password';
$VHackerAlarmSub='';        /*'Hacker Alarm! Someone attempted to hack your board!';*/
$VHackerAlarmText='';        /*'There was an attempt to change a member&#39;s data, but the old password didn&#39;t match.';*/
$VNoOldPWMatch='';        /*'The old password you entered doesn&#39;t match the password you entered. Please check your entry.';*/
$VHackerWarning='';        /*'You have tried to change the data of another member. You will be reported to the admin and will be banned from this board in a short time.';*/
//20 Oct 2004
$VBoardInFrame='';        /*'Please enter the name of the frame in which the board is located (or "_self" if there are no frames)';*/
//25 OCt 2004
$VSeparateByComma='';        /*'Please separate each word with a comma';*/
$VCensorTheseWords='';        /*'censor the following words (in lowercase)';*/
//27 Feb 2005
$VTestMode='';        /*'Test mode';*/
$VExplainTestMode='';        /*'In test mode, all error messages of PHP will be displayed, which could aid a hacker to gain access to the server.';*/
$VFor='';        /*'for';*/
//28 Dec 2005
$VEmpty='';		/*'Empty!';*/

?>



