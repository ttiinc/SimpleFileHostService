<?php
/*
 +-------------------------------------------------------------------------+
 | CSS for Simple File Host Service                                        |
 +-------------------------------------------------------------------------+
 | Copyright © 2019 TTI, Inc.                                              |
 |                  euis.network(at)de.ttiinc.com                          |
 +-------------------------------------------------------------------------+
*/

$expire         = 60*60*24*1;   // seconds, minutes, hours, days
header ('content-type: text/css; charset: UTF-8');
header ('cache-control: must-revalidate');
header ('Expires: ' . gmdate('D, d M Y H:i:s', time()+$expire) . ' GMT');
?>
body { margin-left:0px;
    margin-right:0px;
    margin-top:0px;
    margin-bottom:0px; 
    background: url("../images/gray-tone-patt.gif") repeat scroll left top #b0b0b0;}

.alignc { display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center; }

#PageWrapper { background-color: #ffffff;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -moz-box-shadow: 0 3px 6px #333;
    -webkit-box-shadow: 0 3px 6px #333;
    box-shadow: 0 3px 6px #333;
    filter: progid:DXImageTransform.Microsoft.Shadow(strength = 10, direction = 157.5, color = '#c9c9c9');
    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(strength = 10, Direction = 157.5, Color = '#c9c9c9')";
    margin-top: 20px;
    margin-bottom: 40px;
    margin-left: auto;
    margin-right: auto;
    max-width: 1000px;
    min-width: 100px;
    padding: 10px 0px 0px 0px;
    width: 100%; }

#PageMain     { font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    line-height: 1.5em;
    padding: 0px 20px 0px 20px; }

#Footer       { background-color: #e6e6e6;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-top: 6px solid #003f72;
    clear: both;
    color: #000;
    font: 10px/1.8em "Franklin Gothic Book",Arial,sans-serif;
    height: 50px;
    margin: 10px auto 0px auto;
    padding: 12px;
    width: 976px; }

p.Title       { -moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
    -webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
    box-shadow: inset 0px 1px 0px 0px #bbdaf7;
    box-shadow: 10px 10px 5px #888888;
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5) );
    background:-moz-linear-gradient( center top, #79bbff 5%, #378de5 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5');
    background-color:#79bbff;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
    text-indent:0;
    border:1px solid #84bbf3;
    color:#ffffff;
    font-family:Arial;
    font-size:35px;
    font-weight:bold;
    font-style:normal;
    height:50px;
    line-height:50px;
    text-decoration:none;
    text-shadow:1px 1px 0px #528ecc;
    width: 95%;
    margin: 0px auto 30px auto;
    /* margin-left: auto;
    margin-right: auto; */
    text-align:center; }
ul.Error { text-decoration:none;
    width:60%;
    margin:auto;
    font-size:15px;
    color:#ff0000; }
a:link.inh   { font-size: inherit;
    text-decoration: none;
    color: inherit;
    font-family: inherit;
    font-weight: inherit;
    font-style: inherit;
    height: inherit;
    line-height: inherit;
    cursor:  inherit; }

a:visited.inh   { font-size: inherit;
    text-decoration: none;
    color: inherit;
    font-family: inherit;
    font-weight: inherit;
    font-style: inherit;
    height: inherit;
    line-height: inherit;
    cursor:  inherit; }

a:hover.inh   { font-size: inherit;
    text-decoration: none;
    color: inherit;
    font-family: inherit;
    font-weight: inherit;
    font-style: inherit;
    height: inherit;
    line-height: inherit;
    cursor:  inherit; }

a:active.inh   { font-size: inherit;
    text-decoration: none;
    color: inherit;
    font-family: inherit;
    font-weight: inherit;
    font-style: inherit;
    height: inherit;
    line-height: inherit;
    cursor:  inherit; }

.jbutton     { -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
    -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
    box-shadow:inset 0px 1px 0px 0px #ffffff;
    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
    background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
    background-color:#ededed;
    -webkit-border-radius:6px;
    -moz-border-radiust:6px;
    border-radius:6px;
    text-indent:0px;
    border:1px solid #dcdcdc;
    color:#777777;
    font-family:arial;
    font-size:25px;
    font-weight:bold;
    font-style:normal;
    height:50px;
    line-height:50px;
    cursor: pointer;
    width:75%;
    margin: 20px auto 20px auto;
    text-decoration:none;
    text-align:center;
    text-shadow:1px 1px 0px #ffffff; }

.jbutton:hover { background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
    background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
    background-color:#dfdfdf;
}
.classname:active {
    position:relative;
    top:1px;
}


.jtoggler    { margin: 5px auto 5px auto;
    width: 70% ;
    padding: 0px 50px 0px 50px; }

inputs:-webkit-input-placeholder {
    color: #b5b5b5;
}

inputs-moz-placeholder {
    color: #b5b5b5;
}


.TextInputA1 { width: 270px;
    padding: 5px 15px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #9D9E9E;
    text-shadow: 1px 1px 0 rgba(256, 256, 256, 1.0);
    background: #FFF;
    border: 1px solid #FFF;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50); }

.TextInputA1:focus { background: #DFE9EC;
    color: #414848;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    outline: 0; }

.TextInputA1:hover { background: #DFE9EC;
    color: #414848; }

.TextInputA2 { width: 50px;
    padding: 5px 15px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #9D9E9E;
    text-shadow: 1px 1px 0 rgba(256, 256, 256, 1.0);
    background: #FFF;
    border: 1px solid #FFF;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50); }

.TextInputA2:focus { background: #DFE9EC;
    color: #414848;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    outline: 0; }

.TextInputA2:hover { background: #DFE9EC;
    color: #414848; }

.TextInputA3 { width: 350px;
    padding: 10px 15px;
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida
    font-weight: 400;
    font-size: 16px;
    color: #9D9E9E;
    text-shadow: 1px 1px 0 rgba(256, 256, 256, 1.0);
    background: #FFF url(http://../images/lupe.png) no-repeat 4px 4px;
    border: 1px solid #FFF;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -moz-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50);
    -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.50); }

.TextInputA3:focus { background: #DFE9EC;
    color: #414848;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
    outline: 0; }

.TextInputA3:hover { background: #DFE9EC;
    color: #414848; } 

.ResultTableA1 {
    margin:0px;padding:0px;
    width:100%;
    box-shadow: 10px 10px 5px #888888;
    border:1px solid #000000;
    -moz-border-radius-bottomleft:6px;
    -webkit-border-bottom-left-radius:6px;
    border-bottom-left-radius:6px;
    -moz-border-radius-bottomright:6px;
    -webkit-border-bottom-right-radius:6px;
    border-bottom-right-radius:6px;
    -moz-border-radius-topright:6px;
    -webkit-border-top-right-radius:6px;
    border-top-right-radius:6px;
    -moz-border-radius-topleft:6px;
    -webkit-border-top-left-radius:6px;
    border-top-left-radius:6px;
}

.ResultTableA1 table{
    border-collapse: collapse;
    border-spacing: 0;
    width:100%;
    /* height:100%; */
    margin:0px;padding:0px; }

.ResultTableA1 tr:last-child td:last-child {
    -moz-border-radius-bottomright:6px;
    -webkit-border-bottom-right-radius:6px;
    border-bottom-right-radius:6px; }

.ResultTableA1 table tr:first-child td:first-child {
    -moz-border-radius-topleft:6px;
    -webkit-border-top-left-radius:6px;
    border-top-left-radius:6px; }

.ResultTableA1 table tr:first-child td:last-child {
    -moz-border-radius-topright:6px;
    -webkit-border-top-right-radius:6px;
    border-top-right-radius:6px; }

.ResultTableA1 tr:last-child td:first-child{
    -moz-border-radius-bottomleft:6px;
    -webkit-border-bottom-left-radius:6px;
    border-bottom-left-radius:6px; }

.ResultTableA1 tr:hover td{
    background-color:#cccc99; }

.ResultTableA1 td{
    vertical-align:middle;
    background-color:#cccccc;
    border:1px solid #000000;
    border-width:0px 1px 1px 0px;
    text-align:left;
    padding:2px;
    font-size:10px;
    font-family:Arial;
    font-weight:normal;
    color:#000000; }

.ResultTableA1 tr:last-child td{
    border-width:0px 1px 0px 0px; }

.ResultTableA1 tr td:last-child{
    border-width:0px 0px 1px 0px; }

.ResultTableA1 tr:last-child td:last-child{
    border-width:0px 0px 0px 0px; }

.ResultTableA1 tr:first-child td{
    background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
    background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");  background: -o-linear-gradient(top,#003366,003f7f);
    background-color:#003366;
    border:0px solid #000000;
    text-align:center;
    border-width:0px 0px 1px 1px;
    font-size:14px;
    font-family:Arial;
    font-weight:bold;
    color:#ffffff; }

.ResultTableA1 tr:first-child:hover td{
    background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);    background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
    background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");  background: -o-linear-gradient(top,#003366,003f7f);
    background-color:#003366; }

.ResultTableA1 tr:first-child td:first-child{
    border-width:0px 0px 1px 0px; }

.ResultTableA1 tr:first-child td:last-child{
    border-width:0px 0px 1px 1px; }
