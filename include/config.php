<?php
/*
 +-------------------------------------------------------------------------+
 | Config file for Simple File Hosting Service                             |
 +-------------------------------------------------------------------------+
 | Copyright © 2019 TTI, Inc.                                              |
 |                  euis.network(at)de.ttiinc.com                          |
 +-------------------------------------------------------------------------+
*/

$pagetitle              = "Simple File Host Service";
$pageauthor             = "John Doe";
$pagekeywords           = "Simple File Host Service";
$pagedescription        = "Simple file hosting service with email notification";
$timestart              = microtime(true);
$rootpath               = realpath($_SERVER["DOCUMENT_ROOT"]);
$sitename               = "Simple File Host Service";
$sitesender             = "FileHostService@yourdomain.com";
$file_prefix            = "prefix-";                                 // Prefix for file names
$file_maxsize_mbytes    = 12;                                       // This is in MegaByte
$site_name              = $_SERVER['HTTP_HOST'];
$url_dir                = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$url_this               = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$upload_dir             = "data/";
$upload_url             = $url_dir."/$upload_dir/";
$allowedextensions      = array('txt', 'png', 'gif', 'jpg', 'jpeg', 'pfx', 'dll', 'zip', 'pdf'); 
$validation             = "OK";
$validationmsg          = "";

// $max_size               = 512000000;
// $expire                 = 5*0*0*0;   // seconds, minutes, hours, days
// $message                = "";
// $DELETABLE              = false; // if the file is deletable by the user afterwards

?>
