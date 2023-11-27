<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "essarimages";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM multiple_image WHERE id = $id";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $flat = $row["flat"];
        $rent = $row["rent"];
        $imageFilenames = explode(",", $row["image"]);
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "ID not provided.";
    exit;
}
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form action="update_data.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <!-- Display form fields for editing flat, rent, and images here -->
        <!-- For example, input fields for flat and rent, and an image upload field -->
        <label for="flat">Flat:</label>
        <input type="text" name="flat" value="<?php echo $flat; ?>"><br>
        
        <label for="rent">Rent:</label>
        <input type="text" name="rent" value="<?php echo $rent; ?>"><br>

        <!-- You can display and edit images here -->
        
        

        <!-- Add an input field for uploading new images if needed -->

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
