<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="essarimages";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$sql = "SELECT * FROM multiple_image";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <style>
        /* Define a CSS class for the images with fixed width and height */
        .fixed-image {
            width: 100px; /* Adjust the width as needed */
            height: 100px; /* Adjust the height as needed */
        }
    </style>
</head>
<body>
    <table id="data-table" class="display">
        <thead>
            <tr>
                <th>Serial No</th>
                <th>Image</th>
                <th>flat</th>
                <th>rent</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id=$row["id"];
                    $flat=$row["flat"];
                    $rent=$row["rent"];
                    // Split image filenames by comma and create an array
                    $imageFilenames = explode(",", $row["image"]);

                    // echo "Serial No: " . $row["serial_no"] . "<br>";

                    // Display each image
                    // foreach ($imageFilenames as $filename) {
                    //     echo '<img src="upload/' . trim($filename) . '" alt="' . $filename . '"><br>';
                    // }
                        ?>
                    <tr>
                        <td><?php echo "$id" ?></td>
                        <td>
                            <!-- <img src="upload/ " alt="Image 1" class="fixed-image">  -->
                            <?php
                            // foreach ($imageFilenames as $filename) {
                            echo '<img src="upload/' . trim($imageFilenames[0]) . '" alt="' . $imageFilenames[0] . '" class="fixed-image"><br>';
                            //}
                            ?>
                        </td>
                        <td><?php echo "$flat" ?></td>
                        <td><?php echo "$rent" ?></td>
                        <td>
                        <a href="edit_form.php?id=<?php echo $id; ?>">Update</a>
                            <!-- <button>Delete</button> -->
                        </td>
                    </tr>
                        <?php
                    // Add more data or formatting as needed
                }
            } else {
                echo "No records found in the database.";
            }
            ?>
        </tbody>
    </table>
    
    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        });
    </script>
</body>
</html>
