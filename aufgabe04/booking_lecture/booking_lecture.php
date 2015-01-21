<?php

$servername = "localhost";
$username = "root";
$password = "DvsK*12G";

$db = new mysqli($servername, $username, $password);

if ($db->connect_error) {
    die("Connection failed: ".$db->connect_error);
}

?>

<div class="booking-main">
    <ul>
        <li>
            <div class="booking-content">
                <?php include("form/form_attendant.html"); ?>
            </div>
        </li>
        <li>
            <div class="booking-content">
                <?php include("form/form_reservation.html"); ?>
            </div>
        </li>
        <li>
            <div class="booking-content">
                <?php include("form/form_lecture.html"); ?>
            </div>
        </li>
        <li>
            <div class="booking-content">
                <?php include("form/form_room.html"); ?>
            </div>
        </li>
        <li>
            <div class="booking-content">
                <?php include("form/form_time.html"); ?>
            </div>
        </li>
        <li>
            <div class="booking-content">
                <?php include("form/form_trainer.html"); ?>
            </div>
        </li>
        <li>
            <div class="booking-submit">
                <input type="submit" value="Bestellung aufgeben">
            </div>
        </li>
    </ul>
</div>