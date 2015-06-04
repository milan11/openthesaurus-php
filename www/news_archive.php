<?php
include("./include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
include("./include/tool.php");
$db = new DB_Thesaurus;

$title = _("OpenThesaurus - News Archiv");
include("./include/top.php");
?>

<table border="0" cellpadding="5" cellspacing="0">
<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2009</td>
	<td></td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2009-02-20</span></td>
    <td valign="top">Auf der Ergebnisseite wurde ein Link zu
		<a href="http://www.eyeplorer.com">eyeplorer.com</a> hinzugefügt</td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2008</td>
	<td></td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2008-12-22</span></td>
    <td valign="top">Die Wikipedia-Links (im rechten Bereich auf der Seite mit den Suchergebnissen)
    	wurden aktualisiert. Der Stand der Links entspricht der Wikipedia vom 2008-12-06.</td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2008-11-23</span></td>
    <td valign="top">OpenThesaurus enthält durch die starke Community-Beteiligung insbesondere
    	in den letzten Wochen jetzt erstmals 50.000 Wörter. 
		Das wurde auch als Anlass genommen, um der Homepage www.openthesaurus.de ein neues Design zu geben.</td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2008-09-28</span></td>
    <td valign="top">Im bald erscheinenden OpenOffice.org 3.0 werden Wörterbücher
    und Thesauri als Extensions installiert. Den jeweils tagesaktuellen OpenThesaurus
    gibt es deshalb unter "Download" jetzt auch als Extension, also im .oxt-Format.
    Die Installation erfolgt ganz einfach über das Menü in OpenOffice.org unter
    <em>Extras -> Extension Manager</em>. Die alten Thesaurus-Dateiformate
    funktionieren in OpenOffice.org 3.0 übrigens nicht mehr.
    </td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2008-08-09</span></td>
    <td valign="top">Wer OpenThesaurus mit <a rel="nofollow" href="http://www.openoffice.org/">OpenOffice.org</a>
     3.0 beta nutzen möchte, braucht dazu
     <a rel="nofollow" href="http://extensions.services.openoffice.org/project/dict-de">diese Extension</a>,
     die auch das Wörterbuch für die deutsche Rechtschreibprüfung enthält.
    </td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2008-04-08</span></td>
    <td valign="top">Das kürzlich veröffentlichte
        <a href="http://download.openoffice.org/">OpenOffice.org 2.4</a>
        enthält leider einen recht alten Thesaurus. Über <em>Datei -> Assistenten
        -> Weitere Wörterbücher installieren...</em> kann man
        aber sehr einfach eine neue Version mit den aktuellen OpenThesaurus-Daten installieren. 
    </td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2008-03-15</span></td>
    <td valign="top">Für Mac-User (ab Mac OS X 10.5) gibt es jetzt von Wolfgang Reszel
        ein <a href="http://www.tekl.de/deutsch/OpenThesaurus_Deutsch.html">Wörterbuch-Plugin</a>,
        mit dem man OpenThesaurus im Mac-Wörterbuch durchsuchen kann. 
        Ein ähnliches Plugin gibt es von <a href="http://www.pindarsign.de/webblog/?p=57">Simon Dittlmann</a>.
    </td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2007</td>
	<td></td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2007-09-29</span></td>
	<td valign="top">Ab sofort steht ein <a href="feed.xml">RSS-Feed</a> zur Verfügung,
		der alle Änderungen in den Thesaurus-Daten auflistet.
	</td>
</tr>
<tr>
    <td valign="top" align="right" width="90"><span class="newsdate">2007-07-12</span></td>
    <td valign="top">Ab jetzt sind auf der Ergebnis-Seite auch Links
        aus der Wikipedia integriert. Dabei handelt es sich nicht einfach um Synonyme,
        sondern um Wörter, die im Wikipedia-Artikel zum aktuellen Suchbegriff verlinkt
        sind. Damit eignet sich OpenThesaurus jetzt noch besser zum Auffinden von
        Assoziationen. Beispiele zum Ausprobieren:
        <a href="overview.php?word=Demokratie">Demokratie</a>,
        <a href="overview.php?word=Welt">Welt</a>, <a href="overview.php?word=Wald">Wald</a>
    </td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2007-05-11</span></td>
	<td valign="top">Mehr Eintr&auml;ge aus dem deutschen <a href="http://de.wiktionary.org">Wiktionary</a>:
		schon l&auml;nger wird bei jeder Suche automatisch auch das Wiktionary durchsucht --
		diese Daten wurden aktualisiert und umfassen jetzt &uuml;ber 21.000 
		deutsche W&ouml;rter, zus&auml;tzlich zu den über 41.000 W&ouml;rtern aus OpenThesaurus.</td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2006</td>
	<td></td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-09-25</span></td>
	<td valign="top">Bessere Performance: Nach einem Umzug des Servers vor drei Wochen
		hatte die Geschwindigkeit von www.openthesaurus.de etwas nachgelassen. Durch
		Optimierungen an der Datenbank sollte die gesamte Website
		jetzt wieder deutlich schneller sein.</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-07-04</span></td>
	<td valign="top">Das neue <a href="http://de.openoffice.org">OpenOffice.org</a> 2.0.3 enthält
		jetzt den deutschen OpenThesaurus, so dass keine nachträgliche Installation des Thesaurus 
		mehr nötig ist.</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-06-11</span></td>
	<td valign="top">Die für OpenOffice.org exportierten Dateien enthalten jetzt auch
		Antonyme, z.B. findet man bei der Suche nach <span class="bsp">Krieg</span> auch den
		Eintrag <span class="bsp">Frieden (Antonym)</span>. Da viele Wörter allerdings
		keine echten Antonyme haben, betrifft das insgesamt nur wenige Einträge.</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-03-17</span></td>
	<td valign="top">OpenThesaurus steht ab sofort nicht mehr unter der
		<a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> zu Verfügung, sondern
		unter der <a href="http://www.gnu.org/copyleft/lesser.html">LGPL</a>.</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-02-22</span></td>
	<td valign="top">Der Datenexport für OpenOffice.org 2.x wurde so verbessert, dass jetzt auch Wörter gefunden werden 
		die in Klammern Zusatzinformationen haben, z.B. <span class="bsp">Velo (schweiz.)</span>. Bisher 
		wurde dieser Eintrag bei der Suche nach <span class="bsp">Velo</span> nicht gefunden, mit der 
		aktuellen Version geht das jetzt. Insgesamt betrifft das ca. 1000 Wörter, 
		ein Update (in OpenOffice.org über "Assistenten" -&gt; "Weitere Wörterbücher installieren") lohnt sich also.
		Siehe auch <a href="faq.php#ooo">den Eintrag in der FAQ</a>.</td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2005</td>
	<td></td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2005-04-18</span></td>
	<td valign="top">Der Thesaurus für OpenOffice.org 2.0 beinhaltet ab jetzt auch Oberbegriffe.
		Außerdem sei noch auf die Seite <a
		href="background.php">Hintergrundinformationen</a> hingewiesen, auf der sich
		zwei Papers über OpenThesaurus befinden.</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2005-03-04</span></td>
	<td valign="top">Passend zur <a href="http://download.openoffice.org/680/index.html">OpenOffice.org&nbsp;2.0
		beta</a> gibt es jetzt hier auch den Thesaurus für OOo&nbsp;2.0 -- der alte Thesaurus
		funktioniert nämlich nicht mehr (und genauso läuft der neue nicht mit OpenOffice&nbsp;1.x).
		Hauptvorteil des neuen Thesaurus ist die Unterstützung mehrerer Bedeutungen pro Wort,
		z.&nbsp;B. findet <span class="bsp">Auflösung</span> jetzt die verschiedenen 
		Bedeutungen (<span class="bsp">Auflösung</span> im Sinne von <span class="bsp">Antwort</span>,
		im Sinne von <span class="bsp">Granularität</span> etc) und zu
		diesen dann die Synonyme -- ähnlich wie hier auf der Website.
	</td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2004</td>
	<td></td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-09-27</span></td>
	<td valign="top">Es stehen jetzt einige shortcuts ("access keys") zur Verfügung, so dass
		man Teile dieser Website über Tastaturkürzel bedienen kann:
		<a href="keys.php#korr">Liste der Tastaturkürzel</a>. Außerdem kann man jetzt
		auch auf den Text neben einer Checkbox klicken, um diese zu aktivieren
		(bisher musste man die Checkbox selber anklicken).
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-06-21</span></td>
	<td valign="top">An die aktiven Teilnehmer: beachtet bitte die zwei kleinen
		Ergänzungen zum Thema regionale und veraltete Wörter
		in der <a href="faq.php#korr">FAQ</a>.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-06-16</span></td>
	<td valign="top">Umzug auf den neuen Server abgeschlossen.</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-04-07</span></td>
	<td valign="top">Aus Geschwindigkeitsgründen kann die Datenbank-Statistik
		auf der Homepage nur noch alle 10 Minuten aktualisiert werden. Die
		<a href="top_users.php">Benutzer-Top10</a> wird weiterhin
		 in Echtzeit aktualisiert.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-04-04</span></td>
	<td valign="top">OpenThesaurus ist jetzt unter der Domain
		<span style="color:#666666;font-weight:bold">www.openthesaurus.de</span>
		zu erreichen.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-03-31</span></td>
	<td valign="top">Neues Feature: <a href="top_users.php">Benutzer-Top10</a>
		-- listet die Top 15 der Benutzer, die in den letzten 7 bzw. 365 Tagen
		die meisten Beiträge geleistet haben. Aus Datenschutzgründen
		muss man als Benutzer erst auf der Seite <a href="prefs.php">Einstellungen</a>
		seinen Namen (oder ein Pseudonym) angeben, sonst erscheint
		der eigene Eintrag nur als "anonym".
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-01-12</span></td>
	<td valign="top">Es gibt jetzt es eine Mailingliste
				für Diskussionen und Announcements zu OpenThesaurus:
				<a href="http://lists.berlios.de/mailman/listinfo/openthesaurus-discuss#sub">Hier eintragen</a>
				<!-- (<a href="http://lists.berlios.de/pipermail/openthesaurus-discuss/">Archiv der Beiträge</a>) -->
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-01-06</span></td>
	<td valign="top">Es stehen ab sofort auch einzelne
			Begriffe in den Daten, also Wörter ohne Synonyme. Das hat seine
			Richtigkeit, denn es wird jetzt eine Begriffshierarchie aufgebaut.
			Oberster Begriff, der alle anderen Nomen umfasst, ist
			<a href="synset.php?id=<?php print TOP_SYNSET_ID?>"><?php
				print TOP_SYNSET_NAME ?></a>.
			Mehr dazu in der <a href="faq.php#hierarchie">FAQ</a>.</td>
</tr>

<tr><td>&nbsp;</td></tr>
<tr class="newsYearDelimiter">
	<td>2003</td>
	<td></td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2003-11-06</span></td>
	<td valign="top"><a href="download/openthesaurus.pdf">An
			English language paper about OpenThesaurus (PDF, 266 KB)</a> is now available.
			<br />Update 2004-06-13: the paper has been slightly updated.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2003-10-18</span></td>
	<td valign="top">
		OpenThesaurus wird jetzt
		auch mit <a href="http://www.suse.de/de/private/products/suse_linux/i386/">Suse Linux 9.0</a>
		mitgeliefert und automatisch 
		zusammen mit OpenOffice.org installiert. Wer die aktuellste
		OpenThesaurus-Version nutzen möchte, kann natürlich weiterhin die ZIP-Datei
		von dieser Website runterladen und die vorhandenen Dateien
		einfach überspielen. Damit man sehen kann, wieviel
		geändert wurde, habe ich die Datenbank-Statistik verbessert:
		Es wird jetzt angezeigt, wieviele Wörter in den letzten
		7 Tagen hinzugefügt wurden.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2003-09-26</span></td>
	<td valign="top">
		Als eingeloggter User
		kann man ab jetzt in einer Synonymgruppe auf die
		einzelnen Wörter klicken, um ihren Status auf z.B. 
		"umgangssprachlich" zu setzen. Ab sofort sind diese
		Informationen über die Benutzung von Wörtern auch Teil
		des OpenOffice.org-Thesaurus.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2003-09-16</span></td>
	<td valign="top">
		Ab sofort kann man auch
		nach flektierten Wörtern suchen. Zum Beispiel wird bei der Suche
		nach <span class="bsp">gehst</span> oder <span class="bsp">ging</span>
		jetzt automatisch eine Suche nach <span class="bsp">gehen</span>
		vorgeschlagen.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2003-09-12</span></td>
	<td valign="top">
		Das Suchen nach Wörtern sollte
		jetzt auch funktionieren, wenn man Cookies deaktiviert hat. Meldet Euch, falls
		das nicht klappt. (Nur zum Login sind weiter Cookies nötig.)
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2003-09-10</span></td>
	<td valign="top">
		Es ist jetzt kein Login als
		"guest" mehr nötig, wenn man nur nach Begriffen suchen will. Wie
		bisher muss man sich einloggen, um Begriffe einzufügen oder
		zu löschen. Übrigens: unter <a href="prefs.php">Einstellungen</a> kann
		man dann auch sein Passwort ändern und eine persönliche Statistik
		der hinzugefügten/gelöschten Einträge abrufen.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">März 2003</span></td>
	<td valign="top">
		OpenThesaurus geht online.
	</td>
</tr>
</table>

<?php include("./include/textads_news_archive.php"); ?>

<?php 
include("./include/bottom.php"); 
page_close();
?>
