<div class="wrapper" style="
    font-family: sans-serif;
    border: 1px solid #222;
    padding: 15px;
    background-color: #f8f8f8;
">

<?php

$servername = "localhost";
$username = "root";
$password = "DvsK*12G";
$dbname = "futureclouds";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

if (isset($_POST["article"]) && isset($_POST["amount"]) && isset($_POST["user"])) {
    $article = $_POST["article"];
    $amount = $_POST["amount"];
    $user = $_POST["user"];
    
    if ($article != 0 && $amount != 0 && $user != 0) {
        $sql = "INSERT INTO `order` (article, amount, user) VALUES ('$article', '$amount', '$user')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <table style="border: 1px dotted #444;">
        <tr>
            <td>Article:</td>
            <td>
                <select name="article" style="width: 100%;"
                    <?php
                    $sql = "SELECT * FROM article";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<pre>";
                            echo "<option value='".$row['id']."'>".$row['name']."</option>";
                            echo "</pre>";
                        }
                    } else {
                        echo "<option value='0'>No entries</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Amount:</td>
            <td>
                <input type="text" name="amount">
            </td>
        </tr>
        <tr>
            <td>User:</td>
            <td>
                <select name="user" style="width: 100%;">
                    <?php
                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<pre>";
                            echo "<option value='".$row['id']."'>".$row['email']."</option>";
                            echo "</pre>";
                        }
                    } else {
                        echo "<option value='0'>No entries</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
    </table>
    
    <input type="submit" style="margin-top: 5px;">
</form>

<div>
    <br>
    <hr>
    <br>
    
    <?php
    echo $sql = "SELECT * FROM article WHERE value>2800";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<pre>";
            echo print_r($row);
            echo "</pre>";
        }
    } else {
        echo "0 entries found";
    }
    ?>
    
    <br>
    <hr>
    <br>
    
    <?php
    echo $sql = "SELECT * FROM article WHERE value BETWEEN 3000 AND 5000";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<pre>";
            echo print_r($row);
            echo "</pre>";
        }
    } else {
        echo "0 entries found";
    }
    ?>
</div>

<?php

$conn->close();

?>

</div>