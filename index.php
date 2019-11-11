<?php
/*
 +-------------------------------------------------------------------------+
 | Simple File Host Service                                                |
 +-------------------------------------------------------------------------+
 | Copyright © 2019 TTI, Inc.                                              |
 |                  euis.network(at)de.ttiinc.com                          |
 +-------------------------------------------------------------------------+
*/

# First things first
include('./include/config.php');
include('./include/functions.php');
define("php_self", 'index.php');
define("php_self2", 'index.html');
$view                   = "";
$body                   = "";
$emailheaders           = "";
$stage                  = gpvar('stage');
$email                  = gpvar('email');
$subject                = gpvar('subject');
$sender                 = gpvar('sender');
$uploadedfile           = gpvar('uploadedfile');

if (!is_dir("$upload_dir")) {
    if (!mkdir($upload_dir))
    die ("upload_files directory doesn't exist and creation failed");
    if (!chmod($upload_dir,0755))
    die ("change permission to 755 failed.");
}

if ($_POST['stage']=="upload") {
    if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
        $validation="NOTOK";
        $validationmsg.="<li>You have to enter a valid email address.</li>\n";
    }
    if (strlen($sender)<2) {
        $validation="NOTOK";
        $validationmsg.="<li>Your Name needs to be at least 2 Characters long.</li>\n";
    }
    if (ereg('[^A-Za-z]',str_replace(' ', '', $sender))) {
        $validation="NOTOK";
        $validationmsg.="<li>Please use only alphabets A to Z as your name.</li>\n";
    }
    if (empty($subject)) {
        $validation="NOTOK";
        $validationmsg.="<li>You have to enter some kind of a subject.</li>\n";
    }
    if (empty($_FILES['uploadedfile']['name'])) {
        $validation="NOTOK";
        $validationmsg.="<li>Come on, you really need to choose a file to upload. Why else are you here?</li>\n";
    }
    if ($validation <> "OK") {
        $view.= HtmlHeader();
        $view.= PageHeader();
        $view.="<div class=\"boxa\">
                <center><font size=\"+2\"><br /><br /><br />Oooops, something's wrong</font><br /><br /><br /></center>
                <ul class=\"Error\">";
        $view.= $validationmsg;
        $view.="</ul>\n<center><br /><br /><br /><input class=\"jbutton\" type=\"submit\" value=\"Retry\" onClick=\"history.go(-1)\"></center></div>";
        $view.= PageFooter();
        $view.= HtmlFooter();
    } else {
        $view = "";
        $view.= HtmlHeader();
        $view.= PageHeader();
        $view.= "<center>\n";
        $view.= "&nbsp;<br /><br /><br />&nbsp;";
        $randomString = "$file_prefix-";
        for ($i = 0; $i < 9; $i++) {
            if ($i < 8) {
                $randomString.=rand(0,9);
            }
            if ($i == 8) {
                $randomString.=chr(rand(65,90));
            }
        }
        $target_path = $upload_dir;
        $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
        $temp_name = $_FILES['uploadedfile']['tmp_name'];
        $file_name = $_FILES['uploadedfile']['name'];
        $file_size = $_FILES['uploadedfile']['size'];
        $file_type = $_FILES['uploadedfile']['type'];
        $file_path = $upload_dir.$randomString.'_'.$file_name;
        $file_ext = strtolower(end(explode('.',$_FILES['uploadedfile']['name'])));
        if (in_array($file_ext,$allowedextensions) === false) {
            $file_error = "<p>Wrong file type.</p>\n";
        }
        $file_maxsize_bytes = ($file_maxsize_mbytes * 1048576);
        if ($file_size > $file_maxsize_bytes) {
            $file_error = "<p>Wrong file size.</p>\n";
        }
        if (empty($file_error)==true) {
            move_uploaded_file($temp_name, $file_path);
            $view.= "<p>$file_name uploaded successfully.</p>";
            $view.= "<table>";
            $view.= "<tr><td>file name:</td><td>$file_name</td></tr>";
            $view.= "<tr><td>file size:</td><td>$file_size Bytes</td></tr>";
            $view.= "</table>";
            // $view.= "<p>URL: $url_dir/$file_path</p> ";
            $view.= "<p>URL: $url_dir$file_path</p> ";
            $view.= "<p>This file will be available to download for the next 7 days.</p>";
            $view.= "<br /><br />";
            $view.= "<p>Sending mail to $to ... (done).</p><br /><br /><br />\n";
            $view.= "<form action=\"index.php\">\n<input class=\"jbutton\" type=\"submit\" value=\"Upload another file.\"><br /><br />";
            $view.= PageFooter();
            $view.= HtmlFooter();
            $to = "$email";
            $subject = $subject;
            $emailheaders.= "MIME-Version: 1.0" . "\r\n";
            $emailheaders.= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $emailheaders.= "From: <$sitesender>" . "\r\n";
            $body.= MailHeader();
            $body.= "<p>Hi, someone uploaded a file for you at $pagetitle.\n\n\n</p>";
            $body.= "<table>";
            $body.= "<tr><td>Sender:</td><td>$sender</td></tr>";
            $body.= "<tr><td>Subject:</td><td>$subject</td></tr>";
            $body.= "<tr><td>Orig. file name:</td><td>$file_name</td></tr>";
            $body.= "<tr><td>File size:</td><td>$file_size</td></tr>";
            $body.= "</table>";
            $body.= "<p>The path to your file is: <a href=\"$url_dir$file_path\">$url_dir$file_path</a><p>";
            $body.= MailFooter();
            mail($to,$subject,$body,$emailheaders);
        } else {
            $view.= "<h1>Error!</h1>";
            $view.= "<table>";
            $view.= "<tr><td>Error Message:</td><td>$file_error</td></tr>";
            $view.= "<tr><td>file name:</td><td>$file_name</td></tr>";
            $view.= "<tr><td>file size:</td><td>$file_size</td></tr>";
            $view.= "<tr><td>Max file size bytes:</td><td>$file_maxsize_bytes</td></tr>";
            $view.= "<tr><td>Max file size Mbytes:</td><td>$file_maxsize_mbytes</td></tr>";
            $view.= "</table><br><br><br>";
            $view.= "<form><input type=\"button\" class=\"jbutton\" value=\"Go back\" onclick=\"history.back()\"></form>";
            $view.= PageFooter();
            $view.= HtmlFooter();
        }
    }
} else {
    $view.= HtmlHeader();
    $view.= PageHeader();
    $view.= "<center>\n";
    $view.= "&nbsp;<br /><br /><br />&nbsp;";
    $view.= "<form enctype=\"multipart/form-data\" action=\"index.php\" method=\"POST\">";
    $view.= "<input type=\"hidden\" name=\"stage\" value=\"upload\" />";
    $view.= "<table>
             <tr><td class=\"post_unsinn\">Recepient<br />
             <font size=\"-2\">(Recepients eMail address)</font></td><td><input class=\"unsinn\" name=\"email\" type=\"text\" size=\"45\"></td></tr>
             <tr><td class=\"post_unsinn\">Sender<br />
             <font size=\"-2\">(Your name or eMail address)</font></td><td><input class=\"unsinn\" name=\"sender\" type=\"text\" size=\"45\"></td></tr>
             <tr><td class=\"post_unsinn\">Subject</td><td><input class=\"unsinn\" name=\"subject\" type=\"text\" size=\"45\"></td></tr>
             <tr><td>&nbsp;<br /><br /><br />&nbsp;</td><td>&nbsp;<br /><br /><br />&nbsp;</td></tr>
             <tr><td class=\"post_unsinn\">File<br /></td><td><input class=\"unsinn\" name=\"uploadedfile\" type=\"file\"></td></tr>
             <tr><td><font size=\"-2\">(Max. file size: $file_maxsize_mbytes MB)</td><td>
             <font size=\"-1\">You may upload files with the following extensions:<br />
             ".implode(", ",$allowedextensions)."</font></td></tr>";
    $view.= "</table>\n";
    $view.= "<br /><br /><input class=\"jbutton\" type=\"submit\" value=\"Upload File\" name=\"submit\">&nbsp;<br /><br /><br />&nbsp;\n";
    $view.= "</form>\n";
    $view.= "</center>\n";
    $view.= PageFooter();
    $view.= HtmlFooter();
}

#Throw up the page
header('X-Powered-By: PHP/3.0.19-bovine (AmigaOS) TTI, Inc. European IS Infrastructure Team');
header('Pragma: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expire) . ' GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Content-Type: text/html; charset=iso-8859-1');
header("Cache-Control: no-cache, must-revalidate");
echo $view;

?>
