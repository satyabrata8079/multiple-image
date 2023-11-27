<?php
// DB Connection==>
$hostname="localhost";
$username="root";
$password="";
$dbname="essarimages";

$mysqli = new mysqli($hostname, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


// insert multiple Image ==>
$valid_formats = array("jpg", "png","jpeg");
$max_file_size = 1024*900; //100 kb
$path = "upload"; // Upload directory
$count = 0;
$code=time();
$uploaded_image_names = array();
foreach ($_FILES['image_icon']['name'] as $f => $imgname) {
    $file_tmp = $_FILES['image_icon']['tmp_name'][$f];
    $file_size = $_FILES['image_icon']['size'][$f];
    $file_ext = pathinfo($imgname, PATHINFO_EXTENSION);

    // Check if the file is valid
    if (!in_array($file_ext, $valid_formats)) {
        $message[] = "$imgname is not a valid format";
        continue; // Skip invalid file formats
    }

    // Check if the file size is within the allowed limit
    if ($file_size > $max_file_size) {
        $message[] = "$imgname is too large!";
        continue; // Skip large files
    }

    // No errors found, move the uploaded file
    if (move_uploaded_file($file_tmp, "$path/$code$imgname")) {
        $count++; // Number of successfully uploaded files
        // Store the image name in the array
        $uploaded_image_names[] = "$code$imgname";
    }
}
$image_names_csv = implode(',', $uploaded_image_names);
$insert_img = $mysqli->query("INSERT INTO multiple_image(image) VALUES ('$image_names_csv')");

//  foreach ($_FILES['image_icon']['name'] as $f => $imgname) {     
// 	    if ($_FILES['image_icon']['error'][$f] == 4) {
// 	        continue; // Skip file if any error found
// 	    }	       
// 	    if ($_FILES['image_icon']['error'][$f] == 0) {	           
	        // if ($_FILES['image_icon']['size'][$f] > $max_file_size) {
	        //     $message[] = "$imgname is too large!.";
	        //     continue; // Skip large files
	        // }
			// else if( ! in_array(pathinfo($imgname, PATHINFO_EXTENSION), $valid_formats) ){
			// 	$message[] = "$imgname is not a valid format";
			// 	continue; // Skip invalid file formats
			// }
// 	        else{ // No error found! Move uploaded files 
			
// 			$insert_img=$mysqli->query("INSERT INTO multiple_image(image) VALUES ('$code$imgname')");
			
			
	            // if(move_uploaded_file($_FILES["image_icon"]["tmp_name"][$f], "$path/$code$imgname")) {
	            // 	$count++; // Number of successfully uploaded files
	            // }
// 	        }
// 	    }
// 	}
 
 
 	# error messages
	
		if(isset($message)) {
			foreach ($message as $msg) {
				printf("<p class='status'>%s</p></ br>\n", $msg);
			}
		}
		# success message
		if($count !=0){
			printf("<p class='status'>%d files added successfully!</p>\n", $count);
		}
  
?>