<?php
/*
 +-------------------------------------------------------------------------+
 | File Host Service                                                       |
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

$view.= HtmlHeader();
$view.= PageHeader();
$view.= "<h1>Datenschutzerkl&auml;rung</h1>";
$view.= "
<b>Datenschutz</b>
<p style=\"margin-left: 20px\">
Wir haben diese Datenschutzerkl&auml;rung (Fassung 06.11.2019) verfasst, um Ihnen gem&auml;&szlig; 
der Vorgaben der Datenschutz-Grundverordnung (EU) 2016/679 zu erkl&auml;ren, welche 
Informationen wir sammeln, wie wir Daten verwenden und welche Entscheidungsm&ouml;glichkeiten 
Sie als Besucher dieser Webseite haben.<br />
<br />
Leider liegt es in der Natur der Sache, dass diese Erkl&auml;rungen sehr technisch 
klingen, wir haben uns bei der Erstellung jedoch bem&uuml;ht die wichtigsten Dinge so 
einfach und klar wie m&ouml;glich zu beschreiben.<br />
</p>
<b>Automatische Datenspeicherung</b>
<p style=\"margin-left: 20px\">
Wenn Sie heutzutage Webseiten besuchen, werden gewisse Informationen automatisch 
erstellt und gespeichert, so auch auf dieser Webseite.<br />
<br />
Wenn Sie unsere Webseite so wie jetzt gerade besuchen, speichert unser Webserver 
(Computer auf dem diese Webseite gespeichert ist) automatisch Daten wie
<ul>
<li>die Adresse (URL) der aufgerufenen Webseite<br /></li>
<li>die IP-Adresse des Ger&auml;ts von welchem aus zugegriffen wird<br /></li>
<li>Datum und Uhrzeit<br /></li>
</ul>
</p>
<p style=\"margin-left: 20px\">
in Dateien (Webserver-Logfiles).<br />
<br />
In der Regel werden Webserver-Logfiles zwei Wochen gespeichert und danach automatisch 
gel&ouml;scht. Wir geben diese Daten nicht weiter, k&ouml;nnen jedoch nicht ausschlie&szlig;en, 
dass diese Daten beim Vorliegen von rechtswidrigem Verhalten eingesehen werden.
Die Rechtsgrundlage besteht nach Artikel 6  Absatz 1 f DSGVO (Rechtm&auml;&szlig;igkeit der 
Verarbeitung) darin, dass berechtigtes Interesse daran besteht, den fehlerfreien 
Betrieb dieser Webseite durch das Erfassen von Webserver-Logfiles zu erm&ouml;glichen.<br />
</p>
<b>Speicherung pers&ouml;nlicher Daten</b>
<p style=\"margin-left: 20px\">
Pers&ouml;nliche Daten, die Sie uns auf dieser Website elektronisch &uuml;bermitteln, wie 
zum Beispiel Name, E-Mail-Adresse, Adresse oder andere pers&ouml;nlichen Angaben im 
Rahmen der &Uuml;bermittlung dieses Formulars, werden von uns 
gemeinsam mit dem Zeitpunkt und der IP-Adresse nur zum jeweils angegebenen Zweck 
verwendet, sicher verwahrt und nicht an Dritte weitergegeben.<br />
<br />
Wir nutzen Ihre pers&ouml;nlichen Daten somit nur f&uuml;r die Kommunikation mit jenen Besuchern, 
die Kontakt ausdr&uuml;cklich w&uuml;nschen und f&uuml;r die Abwicklung der auf dieser Webseite 
angebotenen Dienstleistungen und Produkte. Wir geben Ihre pers&ouml;nlichen Daten ohne 
Zustimmung nicht weiter, k&ouml;nnen jedoch nicht ausschlie&szlig;en, dass diese Daten beim 
Vorliegen von rechtswidrigem Verhalten eingesehen werden.<br />
<br />
Wenn Sie uns pers&ouml;nliche Daten per E-Mail schicken - somit abseits dieser Webseite - 
k&ouml;nnen wir keine sichere &Uuml;bertragung und den Schutz Ihrer Daten garantieren. 
Wir empfehlen Ihnen, vertrauliche Daten niemals unverschl&uuml;sselt per E-Mail zu &uuml;bermitteln.<br />
<br />
Die Rechtsgrundlage besteht nach Artikel 6  Absatz 1 a DSGVO (Rechtm&auml;&szlig;igkeit 
der Verarbeitung) darin, dass Sie uns die Einwilligung zur Verarbeitung der von 
Ihnen eingegebenen Daten geben. Sie k&ouml;nnen diesen Einwilligung jederzeit 
widerrufen - eine formlose E-Mail reicht aus, Sie finden unsere Kontaktdaten im Impressum.<br />
</p>
<b>Rechte laut Datenschutzgrundverordnung</b>
<p style=\"margin-left: 20px\">
Ihnen stehen laut den Bestimmungen der DSGVO grunds&auml;tzlich die folgende Rechte zu:<br />
<ul>
<li>Recht auf Berichtigung (Artikel 16 DSGVO)</li>
<li>Recht auf L&ouml;schung (\"Recht auf Vergessenwerden\") (Artikel 17 DSGVO)</li>
<li>Recht auf Einschr&auml;nkung der Verarbeitung (Artikel 18 DSGVO)</li>
<li>Recht auf Benachrichtigung – Mitteilungspflicht im Zusammenhang mit der Berichtigung</li>
oder L&ouml;schung personenbezogener Daten oder der Einschr&auml;nkung der Verarbeitung (Artikel 19 DSGVO)
<li>Recht auf Daten&uuml;bertragbarkeit (Artikel 20 DSGVO)
Widerspruchsrecht (Artikel 21 DSGVO)</li>
<li>Recht, nicht einer ausschlie&szlig;lich auf einer automatisierten Verarbeitung - 
einschlie&szlig;lich Profiling - beruhenden Entscheidung unterworfen zu werden (Artikel 22 DSGVO)</li>
</ul>
</p>
<p style=\"margin-left: 20px\">
Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht 
verst&ouml;&szlig;t oder Ihre datenschutzrechtlichen Anspr&uuml;che sonst in einer Weise verletzt 
worden sind, k&ouml;nnen Sie sich an die Bundesbeauftragte f&uuml;r den Datenschutz und die 
Informationsfreiheit (BfDI) wenden.<br />
</p>

";

$view.= PageFooter();
$view.= HtmlFooter();

#Throw up the page
header('X-Powered-By: PHP/3.0.19-bovine (AmigaOS) TTI, Inc. European IS Infrastructure Team');
header('Pragma: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expire) . ' GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Content-Type: text/html; charset=iso-8859-1');
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
echo $view;

?>
