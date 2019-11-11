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
$view.= "<h1>Impressum</h1>";
$view.= "
<b>Dienstanbieter nach &sect;5 TMG:</b><br />
<p style=\"margin-left: 20px\">
Firman Name<br />
<br />
Strasse 1<br />
88888 Ortschaft<br />
Deutschland<br />
<br />
Tel: +49 (0)815<br />
E-Mail: info@irgendwas.com<br />
<br />
St&auml;ndiger Vertreter der Niederlassung Hans Mustermann<br />
</p>
<b>Externe Links</b>
<p style=\"margin-left: 20px\">
Alle Links auf externe Seiten wurden von uns bei Erstellung der Seite sorgf&auml;ltig 
gepr&uuml;ft. M&ouml;gliche Rechtsverst&ouml;&szlig;e waren zum Zeitpunkt der Verlinkung nicht 
erkennbar. Allerdings haben wir keinen Einfluss auf die Inhalte verlinkter 
Seiten, hierf&uuml;r ist der jeweilige Dienstanbieter verantwortlich. Sollten 
rechtswidrige Seiten &uuml;ber die Hyperlinks abrufbar sein, bitten wir um eine Mitteilung an
<a href=\"mailto:info@irgendwas.de\">info@irgendwas.de<a>.
Wir werden dies dann &uuml;berpr&uuml;fen und die Links ggf. entfernen.
</p>
<b>Datenschutzerkl&auml;rung</b>
<p style=\"margin-left: 20px\">
Bei allen Vorg&auml;ngen der Datenverarbeitung (z.B. Erhebung, Verarbeitung und 
&Uuml;bermittlung) verfahren wir nach den gesetzlichen Vorschriften. Ihre f&uuml;r die 
Gesch&auml;ftsabwicklung notwendigen Daten werden gespeichert und f&uuml;r die 
Bestellabwicklung im erforderlichen Umfang an von uns beauftragte Dienstleister 
weiter gegeben. Dar&uuml;ber hinaus findet keine Datenweitergabe an Dritte statt.<br />
<br />
Wenn Sie weitere Fragen hinsichtlich der Verarbeitung Ihrer pers&ouml;nlicher Daten 
haben, k&ouml;nnen Sie sich direkt an unseren Beauftragten f&uuml;r den Datenschutz wenden, 
der auch im Falle von Auskunftsersuchen, Antr&auml;gen oder Beschwerden zur Verf&uuml;gung steht:<br />
<br />
Dr. Hans Mustermann<br />
Strasse 1<br />
88888 Ortschaft<br />
<br />
Tel: +49 0815<br />
Fax: +49 0815<br />
info@irgendwas.de<br />
</p>
<b> Firman Name</b>
<p style=\"margin-left: 20px\">
Die TTI, Inc. beh&auml;lt sich alle Rechte vor. Jegliche Nutzung, Vervielf&auml;ltigung oder 
Verbreitung in jedem Medium, als Ganzes oder in Teilen, bedarf der schriftlichen Zustimmung der Firmen Name.
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
