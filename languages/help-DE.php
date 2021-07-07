<?php

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2007, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Help file in German
?>
<h3><strong><img src="img/top_help.gif" width="41" height="47" align="left"></strong><br>
Hilfe f&uuml;r das &quot;Members&quot;- Module</h3>
<p>&quot;Members&quot; ist ein universelles Modul zum Auflisten, Darstellen und Verwalten
von &quot;Dingen&quot; aller Art.</p>
<p>&quot;Members&quot; kann sehr verschieden eingestellt sein, durch die vielen Platzhalter
  kann Members f&uuml;r alles m&ouml;gliche verwendet werden. Unter &quot;Presets&quot; k&ouml;nnen fertige
  Einstellungen geladen werden.<br>
  Auf websitebaker.at/module/ finden sich viele
  weitere Beispiel. <br>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td width="14%">Platzhalter</td>
    <td width="86%">Beispiel, Ausgabe</td>
  </tr>
  <tr>
    <td>Header/Footer</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>[WB_URL]<br>
      [PAGE_TITLE]<br>
      [MENU_TITLE]<br>
      [PAGES_DIRECTORY]<br>
      [MEDIA_DIRECTORY]<br>
      [LANGUAGE]</p>
    </td>
    <td>Entsprechend den gleichnamigen Konstanten</td>
  </tr>
  <tr>
    <td>[LIST_GROUP_LINKS]<br>
    [LIST_GROUP_LINKS_FULL]</td>
    <td>Nur Header: Eine Liste mit Springmarken zu den einzelnen Eintr&auml;gen. Die
      Ziele werden automatisch erzeugt, wenn einer dieser Platzhalter vorhanden
      ist.</td>
  </tr>
  <tr>
    <td>[REVERSESORTING]</td>
    <td><p>Mit dem Parameter &quot;sort&quot; (zb: ?sort=2) kann die Sortier-Reihenfolge der
        Eintr&auml;ge per URL ver&auml;ndert werden. (1: Position, 2: Name, 3:
        Sortierzeichen, 4: Score; negative Werte: Umgekehrt)</p>
      <p>Beispiel: Sortieren nach: &lt;a href=&quot;?sort=1&quot;&gt;Position&lt;/a&gt; | &lt;a
        href=&quot;?sort=2&quot;&gt;Name&lt;/a&gt; | &lt;a href=&quot;?sort=3&quot;&gt;Sorter&lt;/a&gt; | &lt;a
        href=&quot;?sort=4&quot;&gt;Score&lt;/a&gt; | &lt;a class=&quot;members-showsortlink[REVERSESORTING]&quot; href=&quot;?sort=[REVERSESORTING]&quot;&gt;Sortierung
      umkehren&lt;/a&gt;</p>
      <p>        [REVERSESORTING] stellt den Parameter
        f&uuml;r die Umkehrung
        zur Verf&uuml;gung.<br>
        Beispiel: &lt;a class=&quot;members-showsortlink[REVERSESORTING]&quot; href=&quot;?sort=[REVERSESORTING]&quot;&gt;Sortierung
        umkehren&lt;/a&gt;<br>
        Im CSS: .members-showsortlink0 {display:none;} um den Link unsichtbar
      zu machen, wenn kein Parameter &uuml;bergeben wurde.</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Nur Gruppe Header:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>{GROUPNAME}<br>
{GROUPDESC}</p>
      <p>[GROUPNAME]<br>
        [GROUPDESC]<br>
    </p></td>
    <td>Platzhalter in eckigen Klammern [] geben nur den Feldinhalt aus. <br>
      Platzhalter in geschweiften Klammern {} erzeugen eine vollst&auml;ndige Ausgabe:
      &lt;div class=&quot;...&quot;&gt;Inhalt&lt;/div&gt;, aber nur dann, wenn das Feld auch Inhalt
      hat. Damit werden leere Divs vermieden.<br>
    </td>
  </tr>
  <tr>
    <td>[LIST_MEMBERS_LINKS] </td>
    <td>Eine Liste mit Springmarken zu den einzelnen Eintr&auml;gen.</td>
  </tr>
  <tr>
    <td>[GROUP_ID]</td>
    <td>zb: 2 (Zahl, Nummer der Gruppe, fest und unver&auml;nderlich)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr>
    <p>Eintrag (Member)</p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>[MEMBER_ID]</td>
    <td>23 (Zahl, fest und unver&auml;nderlich)</td>
  </tr>
  <tr>
    <td>[GROUP_ID]</td>
    <td>5 (Zahl, fest und unver&auml;nderlich)</td>
  </tr>
  <tr>
    <td>[PICNAME]</td>
    <td>&quot;bildname.jpg&quot; Der Name des Bildes, wie angegeben</td>
  </tr>
  <tr>
    <td>[PICTURE]<br>
&nbsp;</td>
    <td>"http://... verzeichnis/ding.jpg" ODER "http://.modules/members/img/nopic.jpg"<br>
      Ausgabe ist von weiteren Faktoren abh&auml;ngig.</td>
  </tr>
  <tr>
    <td>[NAME]</td>
    <td>Ferdi Dings</td>
  </tr>
  <tr>
    <td>[SCORE]</td>
    <td>1056 (Zahl, frei ver&auml;nderbar)</td>
  </tr>
  <tr>
    <td>[SHORT1]<br/>
      [SHORT2]</td>
    <td>Kurzer Text1 / 2<br>
      In diesen Felder wird (Voreinstellung) ein \ zu &lt;br/&gt;</td>
  </tr>
  <tr>
    <td>[LONG1]<br/>
      [LONG2]</td>
    <td>L&auml;ngerer Text1<br>
      L&auml;ngerer Text2</td>
  </tr>
  <tr>
    <td>[LINK]<br>
&nbsp;</td>
    <td><p>Externer Link oder eMail-Adresse, vom Fall abh�ngig:<br>
        Eingabe: http://www.fremdedomain.de Linktext ODER mail@mail.de Linktext<br>
        Ausgabe: &lt;a href=&quot;http://www.fremdedomain.de/"&gt;Linktext&lt;a/&gt; <br>
        ODER &lt;a ref=mailto:"mail@mail.de"&gt;Linktext&lt;/a&gt;<br>
      </p>
    </td>
  </tr>
  <tr>
    <td>[MEMBERPAGE]<br>
&nbsp;</td>
    <td>22 ($page_id) -&gt; http://www.meinedomain.de/diesesseite.php (Link zu
      interner Seite)<br>
      Achtung; [MEMBERPAGE] enth&auml;lt keinen Link-Tag &lt;a href....&gt; Siehe
      {MEMBERPAGE}</td>
  </tr>
  <tr>
    <td>[SORTT]</td>
    <td>zb: T180 (Ein kurzer String, frei w&auml;hlbar) Nach dieser Zeichenkette
      kann sortiert werden.</td>
  </tr>
  <tr>
    <td>[MROW]</td>
    <td>1 oder 0 abwechselnd</td>
  </tr>
  <tr>
    <td>[ROWCOUNT]</td>
    <td>1 (Laufende Nummer pro Gruppe)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p>&nbsp;</p>
        <p>Wie oben, aber mit div und Klassen. Wichtiger Unterschied: Diese Bereiche
          werden nur ausgegeben, wenn sie Inhalt haben. Damit werden Konstrukte
          wie &lt;div&gt;&lt;/div&gt; verhindert, die sich mitunter st&ouml;rend
          auswirken.</p>
    </td>
  </tr>
  <tr>
    <td>{GROUPNAME}<br>
      {GROUPDESC}</td>
    <td>&lt;div class=&quot;mgroup-name&quot;&gt;Gruppenname&lt;/div&gt;<br>
&lt;div class=&quot;mgroup-desc&quot;&gt;Beschreibung der Gruppe&lt;/div&gt; </td>
  </tr>
  <tr>
    <td>{SCORE}<br/>
      {SHORT1}<br>
      {SHORT2} <br/>
      {LONG1} <br/>
      {LONG2}<br/>
      {LINK}<br/>
      {MEMBERPAGE}<br/>
      {SORTT}</td>
    <td>&lt;div class=&quot;member-score&quot;&gt;1056&lt;/div&gt;<br>
  &lt;
      div class=&quot;member-short1&quot;&gt;Kurzer Text 1&lt;/div&gt;<br>
&lt;div class=&quot;member-short2&quot;&gt;Kurzer Text 2&lt;/div&gt; <br>
&lt;div class=&quot;member-long1&quot;&gt;Langer Text 1&lt;/div&gt;<br>
&lt;div class=&quot;member-long2&quot;&gt;Langer Text 2&lt;/div&gt;<br>
&lt;div class=&quot;member-link&quot;&gt;Siehe [LINK] &lt;/div&gt; <br>
&lt;div class=&quot;member-page&quot;&gt;&lt;a href=&quot;....&quot;&gt; Titel
der Seite&lt;/a&gt;&lt;/div&gt; <br>
&lt;div class=&quot;member-sortt&quot;&gt;T180&lt;/div&gt;</td>
  </tr>
  <tr valign="top">
    <td><p>&nbsp;</p>
        <p>[WB_URL]<br>
        [PAGE_TITLE]<br>
        [MENU_TITLE]<br>
        [PAGES_DIRECTORY]<br>
        [MEDIA_DIRECTORY]<br>
        [LANGUAGE]</p>
    </td>
    <td><p>&nbsp;</p>
        <p>Entsprechend den WB-Konstanten.</p>
        <p>Hinweis: Diese Platzhalter werden auch bei eingeschaltetem Caching
          ersetzt.</p>
    </td>
  </tr>
</table>
<h2>Wissenswertes &uuml;ber &quot;Members&quot;:</h2>
<p>Ein Eintrag (Member) kann zwischen Gruppen und Seiten verschoben werden. Dabei
  sollte man nat&uuml;rlich darauf achten, dass in der neuen Gruppe &auml;hnliche Einstellungen
sind.</p>
<p>Die Datei /modules/members/module_settings.php bietet viele Einstellungsm&ouml;glichkeiten, </p>
<p>&quot;Members&quot; unterst&uuml;tzt &quot;Aliases&quot;, also Platzhalter. Ein Alias ist nur ein &quot;Abbild&quot;
  eines &quot;Originals&quot;. Weil das etwas kompliziert zu verstehen
  ist, ist diese Option deaktiviert.</p>
<p><br>
  Hilfe f&uuml;r User</p>
<table width="100%" border="0" cellspacing="0" cellpadding="6">
  <tr valign="top">
    <td width="90"><div align="center">
      <p><strong><img src="img/top_new.gif" width="80" height="47"><img src="img/modg.gif" width="22" height="22"></strong></p>
    </div></td>
    <td><strong>Hinzuf&uuml;gen Gruppe</strong><br>
      <strong>Modifizieren Gruppe</strong><br>
      Name und Beschreibung
    der Gruppe erscheinen (normalerweise) oberhalb einer Auflistung.</td>
  </tr>
  <tr valign="top">
    <td width="90"><div align="center"><strong><img src="img/top_options.gif" width="41" height="47"></strong></div></td>
    <td><p><strong>Optionen</strong><br>
        <strong>Wichtig vorab:</strong> Wenn Mitglieder oder deren Platzhalter &uuml;ber Seiten/Abschnitte
hinweg verschoben werden sollen, sollten &uuml;berall die gleichen Einstellungen
verwendet werden, weil es sonst zu seltsamen Effekten kommen kann. Ganz unten
befindet sich ein Option-Schalter, mit der das einfach m&ouml;glich ist.<br>
Der erste
Bereich enth&auml;lt einige Einstellungen wie Members innerhalb des
Abschnittes/der Gruppe sortiert und behandelt werden sollen.<br>
Die weiteren Bereiche werden unter Hilfe f&uuml;r Admins beschrieben.</p>
    </td>
  </tr>
  <tr valign="top">
    <td><img src="img/top_sort2.gif" width="41" height="47"><img src="img/top_sort1.gif" width="41" height="47"></td>
    <td><strong>Sortieren</strong> (Drag&amp;Drop / Normal)<br>
      Nur aktiv, wenn die Sortierung auf &quot;Nach Position, ASC&quot; gestellt ist.</td>
  </tr>
  <tr valign="top">
    <td width="90"><div align="center"><strong><img src="img/top_ghosts.gif" width="41" height="47"></strong></div></td>
    <td><p><strong>Geister verwalten</strong><br>
        Wenn ein Member gel&ouml;scht wird, verbleibt er zun&auml;chst als Geist. In
diesem Bereich k&ouml;nnen Geister reaktiviert, verschoben oder endg&uuml;ltig
gel&ouml;scht werden.<br>
Wichtig: Wenn das Original eines Members endg&uuml;ltig
  gel&ouml;scht wird, werden nat&uuml;rlich auch &uuml;berall seine Stellvertreter
  gel&ouml;scht.</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr valign="top">
    <td width="90"><p align="center"><strong><img src="img/addgm.gif" width="22" height="22"></strong></p>
    <p align="center"><strong><img src="img/modm.gif" width="16" height="16"></strong></p></td>
    <td><p><strong>Hinzuf&uuml;gen Mitglied<br>
       Modifizieren</strong> <strong>Mitglied</strong><br>
       Im linken Bereich ist die Zuordnung zur Gruppe m&ouml;glich, in der Option
       werden zuerst die Gruppen dieser Seite und dann alle Gruppen insgesamt
       gelistet.<br>
  Je nachdem, wie Mitglieder sortiert werden sollen, gibt es mehrere Felder:
  Name (Pflichtfeld), optional "Nach Zeichen sortieren" oder eine Zahl (Punkte
  odgl)<br>
  Bilder: 
  Bilder m&uuml;ssen sich im Verzeichnis "/media/members" befinden
  und sollten eine einheitliche Gr&ouml;&szlig;e haben.<br>
  In der Voreinstellung bleiben in Lang-Feldern Zeilenumbr&uuml;che erhalten. In Kurzfeldern
  bewirkt ein \ einen Zeilenumbruch.</p>
    </td>
  </tr>
  <tr valign="top">
    <td width="90"><div align="center"><img src="img/addalias.gif" width="16" height="16"></div></td>
    <td><p><strong>Alias hinzuf&uuml;gen</strong><br>
        Ein "Alias" ist ein Platzhalter/Stellvertreter. Damit kann
        ein Member in mehreren Gruppen - auch verschieden sortiert sein. Ein
        Alias wird kursiv dargestellt.<br>
Nat&uuml;rlich kann auch von einem Alias ein Alias erzeugt werden; dieses verweist
aber auf das Original.</p>
    </td>
  </tr>
  <tr valign="top">
    <td width="90"></td>
    <td>Au&szlig;er den Feldern zur Sortierung hat werden bei einem Alias immer
      die Felder des Originals verwendet. &Auml;ndert sich zb die Bezeichnung
      des Originales, &auml;ndert sich diese auch bei allen Stellvertretern; &uuml;berall. <br>
Wenn es von einem Original Aliases gibt, steht neben dem Original in Klammer
deren Anzahl.</td>
  </tr>
  <tr valign="top">
    <td width="90"></td>
    <td><strong>Aktiv: Ja/nein</strong><br>
Ein inaktiver Member verbleibt in der Gruppe, ist aber nicht sichtbar. (im Unterschied
  zu einem Geist &#8211; dieser ist in einer eigenen, immer unsichtbaren Gruppe)</td>
  </tr>
</table>
<h2> Hilfe f&uuml;r Admins:</h2>
<p>Neben den WB-typischen Optionen gibt es die Datei <strong>module-settings.php</strong> im Verzeichnis
  modules/members/, mit der weitere Einstellungen und insbesonders auch Vorgaben
  f&uuml;r die Optionen erstellt werden k&ouml;nnen. Auf der Website zu Members
  (www.beesign.com/members/) gibt es einige vorgefertigte Settings f&uuml;r
  verschiedene Zwecke. Auch im Verzeichnis &quot;demo-settings&quot; befinden
  sich einige Muster, die beim n&auml;chsten Anlegen einer Members-Seite die
  entsprechenden Felder vorbelegen.<br>
  Um die Datei module-settings.php zu &auml;ndern, sind nur sehr geringe php-Kenntnisse
n&ouml;tig, das meiste davon kann sp&auml;ter auch in den Optionen ver&auml;ndert werden.</p>
<p>Weitere Einstellm&ouml;glichkeiten sind in &quot;backend.css&quot; zu finden,
  etwa welche Bereiche in den Optionen (un)sichtbar sein sollen.</p>
<p><strong>Optionen [2]<br>
</strong>Im zweiten Abschnitt werden die Namen der Felder
  festgelegt. Wenn ein Feld keinen Namen hat, ist es im Backend und im Frontend
  nicht sichtbar und auch
  nicht bearbeitbar. (Hinweis: Wenn ein Feld nicht mehr bearbeitbar ist, wird
  beim erneuten Speichern auch sein etwaiger Inhalt gel&ouml;scht)<br>
  Es stehen jeweils 2 kurze und 2 lange Textfelder zu Verf&uuml;gung. Weiters
  gibt es optional ein Feld "Link", das eine eMail-Adresse oder eine
  URL (beginnend mit http://") enthalten kann. Danach kann noch weiterer
  Text stehen, dieser wird als Linktext verwendet. Ein Beispiel:<br>
  <span style="color:#000099">media@beesign.com Chio Maisriml</span> wird zu <a href="mailto:media@beesign.com">Chio
  Maisriml</a> (optional mit Javascript
  maskiert)<br>
  <span style="color:#000099">http://www.beesign.com Chio&#8217;s Seite</span> wird zu <a href="http://www.beesign.com" target="_blank" rel="noopener">Chio&#8217;s
  Seite</a><br>
  Das optionale Feld memberpage_id kann eine Zahl enthalten, und zwar die page_id
  einer internen Seite.<br>
Ausprobieren!</p>
<p><strong>Optionen [3]</strong><br>
  Der dritte Abschnitt enth&auml;lt WebsiteBaker-typisch die Einstellungen f&uuml;r
  die Ausgabe. Es gibt sehr viele M&ouml;glichkeiten, im Anhang der Hilfe ist
  die vollst&auml;ndige Liste.<br>
  Gut zu wissen: <br>
  H&auml;ufig gibt es sowohl [FELD] als auch {FELD}<br>
  Der Unterschied: Bei [FELD] wird nur der Inhalt ausgegeben, bei {FELD} ein
  vollst&auml;ndiger Tag: &lt;div class="member-feld"&gt;FELD&lt;/div&gt;<br>
  Wenn ein Feld nicht zwangsl&auml;ufig etwas enth&auml;lt, ist die Variante
  {FELD} besser, weil ein leeres Feld dann auch keinen leeren Tag bzw leeren
  Link erzeugt.</p>
<h2>Tipps/Tricks</h2>
<p>  Siehe die Seiten http://websitebaker.at/wb/module/members.html</p>
<h2>Probleme/Troubleshooting:</h2>
<p>  Auftauchende Probleme sind meist keine Bugs, sondern "Konflikte" zwischen
  verschiedenen M&ouml;glichkeiten. Diese k&ouml;nnten nur durch a) Einschr&auml;nkung
  der M&ouml;glichkeiten oder b) Noch mehr Optionen verhindert werden.</p>
<p><strong>Bilder von Members bzw der Aliases:</strong><br>
  Es kann zu Konflikten kommen, wenn Eintr&auml;ge verschoben werden und Bildordner
    verschieden sind. Da ein Alias immer das selbe Bild wie das Original hat,
    gibt es derzeit noch
    Probleme,
    wenn
    sich
    ein Alias
    in einer
    anderen
    Gruppe als das Original befindet, und die andere Gruppe einen anderen Bilderordner
hat.</p>
<p><strong>Caching:</strong><br>
  Standardm&auml;&szlig;ig ist Caching eingeschaltet. Es kann vorkommen, dass der Cache
     &quot;von Hand&quot; aktualisiert (=gel&ouml;scht) werden muss. Dazu einfach eine Optionenseite
    (irgendeine) erneut speichern. Das bewirkt in der Folge den Neuaufbau des
    gesamten Caches. Optional
    kann der Cache generell deaktiviert werden, auch dazu muss er eventuell gel&ouml;scht  werden.
    Das Deaktivieren des Caches ist sinnvoll, wenn andere Module indirekt mit
    einer Members-Seite interagieren.<br>
</p>
<hr>
<p>Hinweise: Feld &quot;m_Link&quot;: Dieses Feld kann eine eMail-Adresse oder einen Link
  enthalten. In jedem Fall muss das erste wort mit http:// beginnen (=Link) ODER
  ein &quot;@&quot; und &quot;.&quot; enhalten (eMail). Danach kann weiterer Text stehen, dieser
  wird als Linktext gesehen.<br>
  Beispiel: &quot;gerti@maier.com Frau Gerti Meier&quot; wird zu &quot;&lt;a href=&quot;mailto:gerti@maier.com&gt;Frau
  Gerti Meier&lt;/a&gt;. Optional werden eMail-Adressen per Javascript maskiert, das
  kann aber zu Konflikten mit dem WB-Output-Filter f&uuml;hren.</p>
<p>&nbsp;</p>
<p><strong>Wichtig f&uuml;r Administratoren:</strong></p>
<p>Einige Einstellungen wurden in die Datei module_settings.php als php-Code
  ausgelagert. <br>
  Die Variablen und Einstellungen sind dort beschrieben.<br>
  Die meisten der Variablen haben selbsterkl&auml;rende Namen.
</p>
<p><a href="http://websitebaker.at/wb/module/members.html" target="_blank" rel="noopener">Weiteres dazu hier</a></p>
