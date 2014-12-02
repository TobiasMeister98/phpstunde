<html>
    <head>
        <title>Buchung</title>
        
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
            $name = 0;
            $vorname = 0;
            $geburtsdatum = 0;
            $email = 0;
            $name = $_POST["name"];
            $vorname = $_POST["vorname"];
            $geburtsdatum = $_POST["geburtsdatum"];
            $email = $_POST["email"];
            
            $kursart1 = 0;
            $kursbezeichnung1 = 0;
            $kursart2 = 0;
            $kursbezeichnung2 = 0;
            $kursart3 = 0;
            $kursbezeichnung3 = 0;
            $kursart1 = $_POST["kursart1"];
            $kursbezeichnung1 = $_POST["kursbezeichnung1"];
            $kursart2 = $_POST["kursart2"];
            $kursbezeichnung2 = $_POST["kursbezeichnung2"];
            $kursart3 = $_POST["kursart3"];
            $kursbezeichnung3 = $_POST["kursbezeichnung3"];
            
            $kurspreis = 90;
            $summenetto = 0;
            $mwstsatz = 0.19;
            $mwstbetrag = 0;
            $brutto = 0;
            
            $anzahlKurse = 3;
            if($kursart1 == "0" || $kursbezeichnung1 == "0")
                $anzahlKurse--;
            if($kursart2 == "0" || $kursbezeichnung2 == "0")
                $anzahlKurse--;
            if($kursart3 == "0" || $kursbezeichnung3 == "0")
                $anzahlKurse--;
            
            if($anzahlKurse == 0) {
            ?>
                
                <div id="wrapper">
                    <div id="unsuccessful">
                        <table>
                            <caption>
                                <strong>Buchung gescheitert!</strong>
                                <hr>
                            </caption>
                        </table>
                    </div>
                </div>
                
            <?php
            } else {
            
            $summenetto = $kurspreis * $anzahlKurse;
            $mwstbetrag = $summenetto * $mwstsatz;
            $brutto = $summenetto + $mwstbetrag;
            ?>
                
                <div id="wrapper">
                    <div id="successful">
                        <table>
                            <caption>
                                <strong>Erfolgreiche Buchung</strong>
                                <hr>
                            </caption>

                            <tbody>
                                <tr>
                                    <th class="float_right">
                                        Buchungen:
                                    </th>
                                    
                                    <td>
                                        <?=$anzahlKurse?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th class="float_right">
                                        Preis:
                                    </th>
                                    
                                    <td>
                                        <?=$brutto;?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            <?php
            }
            ?>
    </body>
</html>