txtBB
=====

txtbb is a fork of pblang focused on anonymity and security (supports 
proxy enforcement, works without javascript, somewhat bandwidth-friendly).

Features
========

txtBB is a forum software based on nothing but PHP, HTML and CSS. Users
don't even need to activate images, and of course no Javascript. txtBB
is a fork of [PBLang](http://sourceforge.net/projects/pblang/). Just
as PBLang, txtBB does not need a database (i.e. no hassle with SQL, easy
install and backup).

Features added:
* All functions work without Javascript
* Images completely removed for usage in low bandwidth environments
* Private messages are obfuscated (this does not mean: encrypted) on server
* Support for captchas using [textCAPTCHA](http://textcaptcha.com/) 
  (requires opening an external URL via PHP, i.e. the hoster has to allow
  this - bad, but not so bad, as most hosters do) 
* Support for enabling or disabling search engine indication of content
* Enforcing proxy usage, i.e. user anonymity, possible
* No BBCode, all messaging is text. Could be a security improvement.
* Tries to look a bit better on mobile. (Still, oldfashioned HTML. Yes, fact - sorry about that.)

Usage
=====

Read "ADMIN.txt" in txtbb/docs to learn how to setup and use txtBB (it 
is pretty simple).
Ask users to turn Javascript off if you fear someone (we never know if
there still could be an exploit) could try to hijack the forum and 
try to infect user machines. 
Users may additionally delete cookies after closing their
browser, and use an addon like NoScript to additionally protect their
identity from data thieves.
