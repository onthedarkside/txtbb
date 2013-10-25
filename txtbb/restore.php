<?php

/**
 * Copyleft (C) 2013 txtBB
 * */

define('IN_PB', "true");
define('IN_PBG', "true");
include("global.php");
include($dbpath."/settings.php");

//restore messages into their place if file does not already exist (does not overwrite)

$handle=opendir($dbpath."/backup/cats");
while ($file = readdir($handle)) {
     if ($file != "." && $file != ".." && $file !=".htaccess" && $file !="index.html" && $file != "cats") {
          if (!file_exists($dbpath."/cats/".$file)){
               copy ($dbpath."/backup/cats/".$file, $dbpath."/cats/".$file);
               echo 'restoring ',$dbpath,'/backup/cats/',$file,'<br>';
          }
     }
}
closedir($handle);


$handle=opendir($dbpath."/backup/posts");
while ($file = readdir($handle)) {
     if ($file != "." && $file != ".." && $file !=".htaccess" && $file !="index.html" && $file != "cats") {
          if (!file_exists($dbpath."/posts/".$file)){
               copy ($dbpath."/backup/posts/".$file, $dbpath."/posts/".$file);
               echo 'restoring ',$dbpath,'/backup/posts/',$file,'<br>';
          }
     }
}
closedir($handle);

?>
