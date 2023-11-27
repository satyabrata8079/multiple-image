<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "essarimages";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['flat']) && isset($_POST['rent'])) {
        $id = $_POST['id'];
        $flat = $_POST['flat'];
        $rent = $_POST['rent'];

        // Update the data in the database
        $sql = "UPDATE multiple_image SET flat = '$flat', rent = '$rent' WHERE id = $id";

        if ($mysqli->query($sql) === TRUE) {
            header("Location: showimage.php");
        } else {
            echo "Error updating data: " . $mysqli->error;
        }
    } else {
        echo "Missing data for update.";
    }
}

$mysqli->close();
?>
