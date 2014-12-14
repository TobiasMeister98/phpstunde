<!DOCTYPE>

<html>
    <head>
        <title>2. Übung Array</title>
    </head>
    
    <body>
        <h1>Sportfest: Startzeiten und Veranstaltungen</h1>
        
        <?php
            // Definition und Füllen des Feldes
            $sportfest = array(array("09.30 Uhr",
                                     "Diskuswurf",
                                     "Nebenplatz",
                                     "Jugendmeisterschaften"),
                               array("10.00 Uhr",
                                     "5 km-Lauf",
                                     "Stadion - Laufbahn",
                                     "Offener Lauf"),
                               array("11.00 Uhr",
                                     "Halbmarathon",
                                     "Waldgebiet",
                                     "Teilnahme ab 18 Jahren"),
                               array("12.00 Uhr",
                                     "Stabhochsprung",
                                     "Stadion - Stabhochsprunganlage",
                                     "Nur Frauen")
                              );
            
            // Auslesen der Daten des Array und Ausgabe in Tabellenform
            echo "<table border = '1'>";
            echo "
                <tr>
                    <th width = '100'>Beginn</th>
                    <th width = '150'>Disziplin</th>
                    <th width = '250'>Ort</th>
                    <th width = '200'>Bemerkung</th>
                </tr>\n
            ";
            
            foreach($sportfest as $wettkampf) {
                list($beginn, $disziplin, $ort, $bemerkung) = $wettkampf;
                
                echo "
                    <tr>
                        <td>$beginn</td>
                        <td>$disziplin</td>
                        <td>$ort</td>
                        <td>$bemerkung</td>
                    </tr>\n
                ";
            }
            
            echo "</table>";
        ?>
    </body>
</html>