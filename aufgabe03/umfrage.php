<!DOCTYPE>

<html>
    <head>
        <title>Umfrage</title>
        
        <style type="text/css" media="screen">
            
            html {
                font-family: Arial, 'Trebuchet MS', Verdana, Helvetica, sans-serif;
            }
            
            .float_right {
                float: right;
            }
            
            .float_left {
                float: left;
            }
            
            .tbl_style {
                background-color: #EEE;
                border: 1px solid;
                padding-left: 1em;
                padding-bottom: 1em;
            }
            
            form {
                background-color: #FFF9CC;
                border: 2px solid;
                padding-left: 1em;
                padding-top: 1em;
                padding-bottom: 1em;
            }
            
            #tbl1 {
                width: 290px;
            }
            
            #tbl2 {
                width: 400px;
            }
            
        </style>
    </head>
    
    <body>
        <h1>Bitte f&uuml;llen Sie das Formular komplett aus</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div id="tbl1" class="tbl_style">
                <table>
                    <caption>
                        <h2>Pers&ouml;nliche Daten</h2>
                        <hr>
                    </caption>

                    <tbody>
                        <tr>
                            <th class="float_right">
                                Vorname:
                            </th>

                            <td>
                                <input type="text" name="vorname" >
                            </td>
                        </tr>

                        <tr>
                            <th class="float_right">
                                Nachname:
                            </th>

                            <td>
                                <input type="text" name="nachname" >
                            </td>
                        </tr>

                        <tr>
                            <th class="float_right">
                                Wohnort:
                            </th>

                            <td>
                                <input type="text" name="wohnort" >
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div id="tbl2" class="tbl_style" style="margin-top: 1em;">
                <table>
                    <caption>
                        <h2>Was wir wissen wollen</h2>
                        <hr>
                    </caption>

                    <tbody>
                        <tr>
                            <th class="float_left">
                                Wie wohnen Sie?
                            </th>
                        </tr>

                        <tr>
                            <td>
                                <input type="radio" name="live" value="Einfamilienhaus">Einfamilienhaus<br>
                                <input type="radio" name="live" value="Eigentumswohnung">Eigentumswohnung<br>
                                <input type="radio" name="live" value="Mehrfamilienhaus">Mehrfamilienhaus
                            </td>
                        </tr>

                        <tr>
                            <th class="float_left" style="margin-top: 1em;">
                                Welche TV-Sendungen sehen Sie gern?
                            </th>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" name="tv[]" value="Dokumentationen">Dokumentationen<br>
                                <input type="checkbox" name="tv[]" value="Nachrichten">Nachrichten<br>
                                <input type="checkbox" name="tv[]" value="Spielfilme">Spielfilme<br>
                                <input type="checkbox" name="tv[]" value="Sport">Sport
                            </td>
                        </tr>

                        <tr>
                            <th class="float_left" style="margin-top: 1em;">
                                Haben Sie noch eine Nachricht an uns?
                            </th>
                        </tr>

                        <tr>
                            <td>
                                <textarea cols="50" rows="6" name="msg" style="resize: none;" placeholder="Zus&auml;tzliche Informationen"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div style="margin-top: 1em;">
                <input type="submit" name="absenden" value="Abschicken">
                <input type="reset">
            </div>
        </form>

        <?php
            error_reporting(0);
            
            if(isset($_POST["absenden"])) {
                $vorname = $_POST["vorname"];
                $nachname = $_POST["nachname"];
                $wohnort = $_POST["wohnort"];

                $wohnart = $_POST["live"];
                $sendungen = $_POST["tv"];
                $message = $_POST["msg"];

                $mail = "meister.tobias21@gmail.com";
                
                $sendungen = implode(", ", $sendungen);
                
                mail($mail, "Umfrage", "Vorname: $vorname\nNachname: $nachname\nWohnort: $wohnort\n\nWie wohnen Sie?\n$wohnart\n\nWelche TV-Sendungen sehen Sie gern?\n$sendungen\n\nHaben Sie noch eine Nachricht an uns?\n$message", "From: $mail");
                
                error_reporting(1);
            }
        ?>
    </body>
</html>