<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="http://www.allfinance.be/All_Finance.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="All Finance, Kredieten, Leningen, Krediet Aanvragen, Leonardstraat 16 - Leopoldsburg, Liliane Ten Grootenhuyzen, kortlopende leningen, langlopende leningen, financieringen, leasingen, kredieten: leningen, kortlopende leningen, langlopende leningen, financieringen, leasingen, overbruggingskredieten, eigenaarskredieten, hypotheken" />
<title>All Finance BVBA</title>
<link href="test.css" type="text/css" rel="stylesheet"/>
<style type="text/css">
<!--
.stijl1 {
	color: #000000;
	font-size: 20px;
	font-style: italic;
}
.stijl27 {
	font-size: 10px;
	color: #FFFF00;
	font-family: arial;
	line-height: 20px;
	letter-spacing: 0.1em;
}
a:hover {
	color: #FFFF00;
	text-decoration: none;
}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.stijl36 {color: #000000}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.stijl53 {font-style: normal; font-weight: normal; font-family: arial; font-size: 12px;}
.stijl44 {font-size: 14px}
.stijl59 {line-height: 20px; letter-spacing: 0.1em; color: #FF0000; font-family: "Comic Sans MS"; font-size: medium; }
.stijl62 {font-size: 12px}
.stijl63 {	color: #000000;
	font-size: 20px;
}
.stijl55 {	font-size: 13px
}
.stijl64 {font-size: 11px; }
.stijl65 {
	color: #FF0000;
	font-size: 36px;
}
.stijl3 {	color: #FFFFFF;
	font-size: 12px;
	font-style: normal;
	font-weight: normal;
	font-family: arial;
}
.stijl66 {color: #333333}
.stijl67 {color: #000000; font-size: 12px; }
-->
</style>
<style>
.small{
	width:50px;
	margin-right:5px;}
table{
	text-align:left;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:12px;
	}
td{
	
	vertical-align:top;}
.three, .four{
	width:900px;
	border:1px solid black;
	margin-bottom:10px;}
.three .first{
	width:200px;}
.four td{
	width:25%;}
.smalltable input{
	width:50px;
	padding:0px;
	margin:0px;}

</style>
</head>
<body oncontextmenu="return false;" ondragstart="return false;" onselectstart="return false; document.getElementById('loading').style.display = 'none'; reveal();">
<body bgcolor="#0DA1E7" background="wb_01.gif">
<table width="900" height="215%" align="center" bgcolor="#FAFBFB" bordercolor="#FAFBFB">
<tr>
            <th scope="col" height="10"><table width="100%" height="114" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#0033FF">
            <tr align="center">
                  <th height="80" bordercolor="#993300" class="stijl27" scope="col"><img src="All_Finance_BVBA_Banner.jpg" width="898" height="80" hspace="0" vspace="5" />
                    <ul id="Home" class="MenuBarHorizontal">
                      <li>
                        <div align="center" class="stijl44">
                          <div align="center"><a href="index.html" target="_self" class="stijl64">Home</a></div>
                        </div>
                      </li>
                      <li>
                        <div align="center" class="stijl64"><a href="Historie.html" target="_self">Historie</a></div>
                      </li>
                      <li>
                        <div align="center" class="stijl64"><a href="Leningen.html" target="_self">Leningen</a></div>
                  </li>
                      <li>
                        <div align="center" class="stijl64"><a href="Hypotheken.html" target="_self">Hypotheken</a></div>
                      </li>
                      <li>
                        <div align="center" class="stijl64"><a href="Krediet_Aanvragen.html" target="_self">Krediet aanvragen</a></div>
                      </li>
              </ul>                    
                    <ul id="MenuBar2" class="MenuBarHorizontal">
                      <li>
                        <div align="center" class="stijl64"><a href="mailto:lilianetg@hotmail.com" target="_blank">Contact</a></div>
                      </li>
              </ul>              </th>
              </tr>
    </table> <?php
// multiple recipients
if( $_POST['gewenst_bedrag'] == ""){
	echo "U dient het formulier zo volledig mogelijk in te vullen";
	die();
}
$to  = 'elsen_frederik@hotmail.com'; // note the comma


// subject
$subject = 'Inzending Kredietaanvraag formulier';

// message
$message =  "<html>
<head>
<style>
.small{
	width:50px;
	margin-right:5px;}
table{
	font-size:12px;
	}
td{
	
	vertical-align:top;}
.three, .four{
	width:1000px;
	border:1px solid black;
	margin-bottom:10px;}
.three .first{
	width:200px;}
.four td{
	width:25%;}
.smalltable input{
	width:50px;
	padding:0px;
	margin:0px;}

</style>
</head>
<body>


<table class='three'>
<tr>
<td class='first'>Gewenst bedrag: </td><td colspan='2'><span class='fill_in'>".$_POST['gewenst_bedrag']."</span>
Doel: 
<span class='fill_in'>".$_POST['doel']."</span></td></tr>
</table>
<table class='three'>
<tr><td class='first'>Uw gegevens</td><td class='second'>Ontlener</td><td class='third'>Mede-ontlener</td></tr>
<tr><td>Telefoonnummer</td><td><span class='fill_in'>".$_POST['tel_ontlener']."</span></td><td><span class='fill_in'>".$_POST['tel_mede_ontlener']."</span></td></tr>
<tr><td>Naam<td><span class='fill_in'>".$_POST['naam_ontlener']."</span></td><td><span class='fill_in'>".$_POST['naam_mede_ontlener']."</span></td></tr>
<tr><td>Voornaam</td><td><span class='fill_in'>".$_POST['voornaam_ontlener']."</span></td><td><span class='fill_in'>".$_POST['voornaam_mede_ontlener']."</span></td></tr>
<tr><td>Geboortedatum (dd - mm - jjjj)</td><td><span class='fill_in'>".$_POST['dag_ontlener']."</span>/<span class='fill_in'>".$_POST['maand_ontlener']."</span>/<span class='fill_in'>".$_POST['jaar_ontlener']."</span></td>
<td><span class='fill_in'>".$_POST['dag_mede_ontlener']."</span>/<span class='fill_in'>".$_POST['maand_mede_ontlener']."</span>/<span class='fill_in'>".$_POST['jaar_mede_ontlener']."</span></td></tr>
<tr><td>Adres</td><td colspan='2'><span class='fill_in'>".$_POST['adres']."</span> Nr: <span class='fill_in'>".$_POST['huisnummer']."</span> Bus: <span class='fill_in'>".$_POST['bus']."</span></td></tr>
<tr><td>Postcode &amp; Plaats</td><td colspan='2'><span class='fill_in'>".$_POST['postcode']."</span> <span class='fill_in'>".$_POST['plaats']."</span>  </td></tr>
<tr><td>Rijksregisternummer<td><span class='fill_in'>".$_POST['rijksregister_ontlener']."</span></td><td><span class='fill_in'>".$_POST['rijksregister_mede_ontlener']."</span></td></tr>

</table>

<table class='three'>
<tr><td class='first'>Burgerlijke staat</td>
<td class='second'>
<span class='fill_in'>".$_POST['burgerlijke_staat_ontlener']."</span>
</td>
<td class='third'>
<span class='fill_in'>".$_POST['burgerlijke_staat_mede_ontlener']."</span>
</td>

</tr>
</table>
<table class='three'>
<tr>
<td class='first'>
Uw maandelijks nettoinkomen
</td>
<td  class='second'>
<table class='smalltable'>
<tr><td>Salaris: </td><td>".$_POST['salaris_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Werkloosheiduitkering: </td><td>".$_POST['werkloosheidsuitkering_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Pensioen:</td><td>".$_POST['pensioen_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Invaliditeitsuitkering: </td><td>".$_POST['invaliditeitsuitkering_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Kinderbijslag: </td><td>".$_POST['kinderbijslag_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Andere: </td><td>".$_POST['andere_ontlener_value']." &euro;/maand</td></tr></table>

</td>

<td class='third'>
<table class='smalltable'>
<tr><td>Salaris: </td><td>".$_POST['salaris_mede_ontlener_value']." &euro;/maand' </td></tr>
<tr><td>Werkloosheiduitkering: </td><td>".$_POST['werkloosheidsuitkering_mede_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Pensioen: </td><td>".$_POST['pensioen_mede_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Invaliditeitsuitkering: </td><td>".$_POST['invaliditeitsuitkering_mede_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Kinderbijslag: </td><td>".$_POST['kinderbijslag_mede_ontlener_value']." &euro;/maand</td></tr>
<tr><td>Andere:</td><td>".$_POST['andere_mede_ontlener_value']." &euro;/maand</td></tr></table>

</td>
</tr>
</table>

<table class='four'>
<tr><td rowspan='4'>Andere kredieten in omloop<br  />(hypothecair krediet inbegrepen)<br /><br /><span class='fill_in'>".$_POST['krediet']."</span></td>
<td class='bold'>Maatschappij(en)</td>
<td class='bold'>Geleend bedrag</td>
<td class='bold'>Duurtijd</td>
</tr>
<tr>
<td><span class='fill_in'>".$_POST['maatschappij1']."</span><br /><span class='fill_in'>".$_POST['maatschappij2']."</span><br /><span class='fill_in'>".$_POST['maatschappij3']."</span><br /><span class='fill_in'>".$_POST['maatschappij4']."</span></td>
<td><span class='fill_in'>".$_POST['geleendbedrag1']."</span> &euro;<br /><span class='fill_in'>".$_POST['geleendbedrag2']."</span> &euro;<br /><span class='fill_in'>".$_POST['geleendbedrag3']."</span> &euro;<br /><span class='fill_in'>".$_POST['geleendbedrag4']."</span> &euro;</td>
<td>
<span class='fill_in'>".$_POST['looptijd1']."</span> maand<br /><span class='fill_in'>".$_POST['looptijd2']."</span> maand<br /><span class='fill_in'>".$_POST['looptijd3']."</span> maand<br /><span class='fill_in'>".$_POST['looptijd4']."</span> maand
</td>
</tr>
<tr>
<td class='bold'>Maandelijkse termijnen</td>
<td class='bold'>In omloop sinds</td>
<td class='bold'>Terug te betalen?</td>
</tr>
<tr>
<td><span class='fill_in'>".$_POST['termijnen1']."</span> &euro;<br /><span class='fill_in'>".$_POST['termijnen2']."</span> &euro;<br /><span class='fill_in'>".$_POST['termijnen3']."</span> &euro;<br /><span class='fill_in'>".$_POST['termijnen4']."</span> &euro;</td>
<td>
<span class='fill_in'>".$_POST['omloop1_sinds_dag']."</span>/
<span class='fill_in'>".$_POST['omloop1_sinds_maand']."</span>/
<span class='fill_in'>".$_POST['omloop1_sinds_jaar']."</span><br />
<span class='fill_in'>".$_POST['omloop2_sinds_dag']."</span>/
<span class='fill_in'>".$_POST['omloop2_sinds_maand']."</span>/
<span class='fill_in'>".$_POST['omloop2_sinds_jaar']."</span><br />
<span class='fill_in'>".$_POST['omloop3_sinds_dag']."</span>/
<span class='fill_in'>".$_POST['omloop3_sinds_maand']."</span>/
<span class='fill_in'>".$_POST['omloop3_sinds_jaar']."</span><br />
<span class='fill_in'>".$_POST['omloop4_sinds_dag']."</span>/
<span class='fill_in'>".$_POST['omloop4_sinds_maand']."</span>/
<span class='fill_in'>".$_POST['omloop4_sinds_jaar']."</span><br /></td>
<td>
<span class='fill_in'>".$_POST['tebetalen1']."</span> &euro;<br /><span class='fill_in'>".$_POST['tebetalen2']."</span> &euro;<br /><span class='fill_in'>".$_POST['tebetalen3']."</span> &euro;<br /><span class='fill_in'>".$_POST['tebetalen4']."</span> &euro;
</td>
</tr>

</table>


<table class='three'>
<tr><td class='first'>Uw werkgever of betalende instantie</td>
<td class='second' style='vertical-align:bottom;'><span class='fill_in'>".$_POST['naam_betalendeinstantie_ontlener']."</span></td>
<td class='third' style='vertical-align:bottom;'><span class='fill_in'>".$_POST['naam_betalendeinstantie_mede_ontlener']."</span></td></tr>
<tr><td class='first'>Plaats</td>
<td class='second'><span class='fill_in'>".$_POST['adres_betalendeinstantie_ontlener']."</span></td>
<td class='third'><span class='fill_in'>".$_POST['adres_betalendeinstantie_mede_ontlener']."</span></td></tr>
<tr><td class='first'>Sinds (dd mm jjjj)</td>
<td class='second'><span class='fill_in'>".$_POST['sinds_dag_ontlener']."</span>/<span class='fill_in'>".$_POST['sinds_maand_ontlener']."</span>/<span class='fill_in'>".$_POST['sinds_jaar_ontlener']."</span></td>
<td class='third'><span class='fill_in'>".$_POST['sinds_dag_mede_ontlener']."</span>/<span class='fill_in'>".$_POST['sinds_maand_mede_ontlener']."</span>/<span class='fill_in'>".$_POST['sinds_jaar_mede_ontlener']."</span></td></tr>
<tr><td class='first'></td>
<td class='second'>".$_POST['woonsituatie_huur'].$_POST['huurder_value']." &euro;/maand</td>
<td class='third'>".$_POST['woonsituatie_verhuur'].$_POST['verhuurder_value']." &euro;/maand</td>
</tr>


</table></body></html>";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: All Finance <info@allfinance.be>' . "\r\n";
$headers .= 'From: All Finance Website <info@allfinance.be>' . "\r\n";


// Mail it
if(mail($to, $subject, $message, $headers)){
	echo "Deze mail is succesvol verzonden";}
?>
       <p align="center"><span class="stijl3 stijl36"><span class="stijl66">Copyright (C) 2008-2013 All Finance BVBA All rights Reserved.</span></span></p>
                      </td>
                  </tr>
                </table>
                  <div align="center" class="stijl36"><span class="stijl53">
                  </span></div>                </th>
              </tr>
            </table></td>
</tr></table>
</form>
<script type="text/javascript">
<!--
//-->
</script>
</body>
</html>