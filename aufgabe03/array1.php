<!DOCTYPE>

<html>
    <head>
        <title>Arrayfelder</title>
    </head>
    
    <body>
        <h1>Autokennzeichen und dazugeh&ouml;rige St&auml;dte</h1>
        
        <?php
            // Definition und Füllen des Feldes
            $daten = array("HH" => "Hamburg",
                           "B" => "Berlin",
                           "S" => "Stuttgart");
            
            // Hinzufügen weiterer Werte
            $daten["F"] = "Frankfurt";
            $daten["HB"] = "Bremen";
            
            // Weitere Operationen: Löschen und Überschreiben
            unset($daten["HB"]);
            $daten["F"] = "Frankfurt am Main";
            
            // Auslesen der Daten des Arrays und Ausgabe in Tabellenform
            echo "<table border = '1'>";
            echo "
                <tr>
                    <th width = '125'>Kennzeichen</th>
                    <th width = '125'>Stadt</th>
                </tr>\n
            ";
            
            foreach($daten as $kennzeichen => $stadt) {
                echo "
                    <tr>
                        <td>$kennzeichen</td>
                        <td>$stadt</td>
                    </tr>\n
                ";
            }
            
            echo "</table>";
        ?>
    </body>
</html>