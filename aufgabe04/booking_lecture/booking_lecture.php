<?php

$servername = "localhost";
$username = "root";
$password = "DvsK*12G";
$dbname = "aufgabe04";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

/* fetch */
/*
$sql = "SELECT * FROM `attendant`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<pre>";
    while($row = $result->fetch_assoc()) {
        echo var_dump($row)."<br>";
    }
    echo "</pre>";
} else {
    echo "0 results";
}
*/

/* insert */
/*
$email = "test@email.com";
$pass = "123456";
$sha_pass = sha1($pass);

$sql = "INSERT INTO attendant (email, password) VALUES ('" . $email . "', UNHEX('" . $sha_pass . "'))";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

$conn->close();

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