<?php
/*
 +-------------------------------------------------------------------------+
 | functions for Simple File Hosting Service                               |
 +-------------------------------------------------------------------------+
 | Copyright © 2019 TTI, Inc.                                              |
 |                  euis.network(at)de.ttiinc.com                          |
 +-------------------------------------------------------------------------+
*/

function gpvar($v) {
    global $_GET, $_POST, $stage;
    $x = "";
    if ($_GET[$v])  $x = $_GET[$v];
    if ($_POST[$v]) $x = $_POST[$v];
    if (get_magic_quotes_gpc()) $x = stripslashes($x);
    return $x;
}

function HtmlHeader () {
    global $pagetitle, $pageauthor, $pagekeywords, $pagedescription;
    $view = "";
    $view.= "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">";
    $view.= "\n\n<html>\n<head>\n<title>$pagetitle</title>\n";
    $view.= "<meta name=\"Author\" CONTENT=\"$pageauthor\">\n";
    $view.= "<meta name=\"Keywords\" CONTENT=\"$pagekeywords\">\n";
    $view.= "<meta name=\"Description\" CONTENT=\"$pagedescription\">\n";
    $view.= "<meta name-equiv=\"Content-Language\" CONTENT=\"de-DE\">\n";
    $view.= "<meta name-equiv=\"content-type\" CONTENT=\"text/html; charset=ISO-8859-1\">\n";
    $view.= "<link rel=\"stylesheet\" href=\"include/css.php\" type=\"text/css\">\n";
    $view.= "</head>\n\n<body>\n";
    return $view;
}

function HtmlFooter () {
    global $pagetitle, $pageauthor, $pagekeywords, $pagedescription;
    $timeend = microtime(true);
    $pagetime = round(($timeend - $timestart), 4);
    $view = "";
    $view.= "\n\n</body></html>";
    $view.= "\n<!-- it took me $pagetime seconds to throw this page up. -->\n";
    return $view;
}

function PageHeader () {
    global $pagetitle, $pageauthor, $pagekeywords, $pagedescription;
    $view = "";
    $view.= "<div id=\"PageWrapper\">\n";
    $view.= "<p class=\"Title\">$pagetitle</p>\n";
    $view.= "<div id=\"PageMain\">\n";
    return $view;
}

function PageFooter () {
    global $pagetitle, $pageauthor, $pagekeywords, $pagedescription;
    $view = "";
    $view.= "</div><!-- PageMain -->\n";
    $view.= "<div id=\"Footer\">\n";
    $view.= "\n";
    $view.= "<a href=\"index.php\">Home</a> | <a href=\"datenschutz.php\">Datenschutz</a> | <a href=\"impressum.php\">Impressum</a>";
    $view.= "</div><!-- Footer -->\n";
    $view.= "</div><!-- PageWrapper -->\n";
    return $view;
}

function MailHeader () {
    global $pagetitle, $pageauthor, $pagekeywords, $pagedescription;
    $body = "";
    $body.= "<html><head><title>TitleTitle</title></head>";
    $body.= "<style type=\"text/css\">";
    $body.= "body { font-family: Arial,Helvetica,sans-serif;";
    $body.= "       font-size: 12px;";
    $body.= "}";
    $body.= "</style>";
    $body.= "<body>";
    $body.= "";
    $body.= "";
    $body.= "";
    $body.= "";
    $body.= "";
    $body.= "";
    $body.= "";
    $body.= "";
    $body.= "";
    return $body;
}

function MailFooter () {
    global $pagetitle, $pageauthor, $pagekeywords, $pagedescription;
    $body = "";
    $body.= "</body></html>";
    return $body;
}

?>
