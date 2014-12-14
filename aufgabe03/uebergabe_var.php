<!DOCTYPE>

<html>
    <head>
        <title>Formular mit Selbstverweis</title>
    </head>
    
    <body bgcolor="<?php if(isset($_POST['background'])) echo $_POST['background']; ?>">
        <h1>Hintergrundfarbe w&auml;hlen</h1>
        W&auml;hlen Sie eine Hintergrundfarbe f&uuml;r die Datei aus:
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>
                <input type="radio" name="background" value="#FFFF00">gelb
                <input type="radio" name="background" value="#8FEC95">hellgr&uuml;n
                <input type="radio" name="background" value="#FFA000">orange
                <input type="radio" name="background" value="#FFFFFF">wei&szlig;
            </p>
            
            <p>
                <input type="submit" name="absenden" value="Absenden">
            </p>
        </form>
        
        <?php
            if(isset($_POST["absenden"]) && isset($_POST["background"]))
                echo "<em>Ihre Auswahl wird als Hintergrundfarbe angezeigt.</em>";
        ?>
    </body>
</html>