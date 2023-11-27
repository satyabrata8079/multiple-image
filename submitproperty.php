<?php 
//// code insert
//// add code
$error="";
$msg="";
$message="";
// if(isset($_POST['add']))
// {
	
// 	$title=$_POST['title'];
// 	$content=$_POST['content'];
// 	$ptype=$_POST['ptype'];
// 	$bhk=$_POST['bhk'];
// 	$bed=$_POST['bed'];
// 	$balc=$_POST['balc'];
// 	$stype=$_POST['stype'];
// 	$bath=$_POST['bath'];
// 	$kitc=$_POST['kitc'];

// 	// price & location
// 	$floor=$_POST['floor'];
// 	$totalfloor=$_POST['totalfl'];
// 	$price=$_POST['price'];
// 	$mprice=$_POST['mprice'];
// 	$mcharge=$_POST['mcharge'];
// 	$samount=$_POST['samount'];
// 	$city=$_POST['city'];
// 	$asize=$_POST['asize'];
// 	$loc=$_POST['loc'];
// 	$loc2=$_POST['loc2'];
// 	$loc3=$_POST['loc3'];
// 	$state=$_POST['state'];

// 	// furnshed status
// 	$furnshed=$_POST['furnshed'];
// 	$rfacing=$_POST['rfacing'];
// 	$construction=$_POST['agec'];

// 	// Transport area
// 	$bus_stop=$_POST['bus'];
// 	$railway=$_POST['railway'];
// 	$hospital=$_POST['hospital'];
// 	$market=$_POST['market'];
	
// 	// Amenities
// 	$swiming=isset($_POST['swiming']) ? "yes" : "no";
// 	$gym=isset($_POST['gym']) ? "yes" : "no";
// 	$security=isset($_POST['security']) ? "yes" : "no";
// 	$temple=isset($_POST['temple']) ? "yes" : "no";
// 	$comunity=isset($_POST['comunity']) ? "yes" : "no";
// 	$lift=isset($_POST['lift']) ? "yes" : "no";
// 	$cctv=isset($_POST['cctv']) ? "yes" : "no";
// 	$power=isset($_POST['power']) ? "yes" : "no";
// 	$water=isset($_POST['water']) ? "yes" : "no";
// 	$kids=isset($_POST['kids']) ? "yes" : "no";

// 	// parking area
// 	$parea=$_POST['parea'];
// 	$twheeler=$_POST['twheeler'];
	
	
// 	$status=$_POST['status'];
// 	$uid=$_SESSION['uid'];
	
// 	$aimage=$_FILES['aimage']['name'];
	
// 	// $sql="insert into property (title,pcontent,type,bhk,stype,bedroom,bathroom,balcony,kitchen,hall,floor,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,totalfloor)
// 	// values('$title','$content','$ptype','$bhk','$stype','$bed','$bath','$balc','$kitc','$hall','$floor','$asize','$price',
// 	// '$loc','$city','$state','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$fimage','$fimage1','$fimage2','$totalfloor')";
// 	$temp_name  =$_FILES['aimage']['tmp_name'];
// 	$valid_formats = array("jpg", "png","jpeg");
// 	$max_file_size = 1024*900; //100 kb
// 	$path = "admin/property"; // Upload directory
// 	$count = 0;
// 	$code=time();
// 	$uploaded_image_names = array();
// 	foreach ($_FILES['aimage']['name'] as $f => $imgname) {
// 		$file_tmp = $_FILES['aimage']['tmp_name'][$f];
// 		$file_size = $_FILES['aimage']['size'][$f];
// 		$file_ext = pathinfo($imgname, PATHINFO_EXTENSION);
	
// 		// Check if the file is valid
// 		if (!in_array($file_ext, $valid_formats)) {
// 			$message[] = "$imgname is not a valid format";
// 			continue; // Skip invalid file formats
// 		}
	
// 		// Check if the file size is within the allowed limit
// 		if ($file_size > $max_file_size) {
// 			$message[] = "$imgname is too large!";
// 			continue; // Skip large files
// 		}
	
// 		// No errors found, move the uploaded file
// 		if (move_uploaded_file($file_tmp, "$path/$code$imgname")) {
// 			$count++; // Number of successfully uploaded files
// 			// Store the image name in the array
// 			$uploaded_image_names[] = "$code$imgname";
// 		}
// 	}
// 	$image_names_csv = implode(',', $uploaded_image_names);
// 	// move_uploaded_file($temp_name,"admin/property/$aimage");
// 	$sql="insert into property (title,description,type,bhk,stype,bedroom,bathroom,balcony,kitchen,floor,size,
// 	price,maintenance,mcharge,seamt,farea,page,rfacing,railway,bustop,
// 	hospital,market,addr1,addr2,addr3,city,state,swimpool,park,cap,gym,security,temple,chall,lift,cctv,power,watertank,
// 	kplay,pimage,uid,status,totalfloor)
// 	values('$title','$content','$ptype','$bhk','$stype','$bed','$bath','$balc','$kitc','$floor','$asize','$price','$mprice',
// 	'$mcharge','$samount','$furnshed','$construction','$rfacing','$railway','$bus_stop','$hospital','$market','$loc',
// 	'$loc2','$loc3','$city','$state','$swiming','$parea','$twheeler','$gym','$security','$temple','$comunity',
// 	'$lift','$cctv','$power','$water','$kids','$image_names_csv','$uid','$status','$totalfloor')";
// 	$result=mysqli_query($con,$sql);
// 	if($result)
// 		{
// 			$msg="<p class='alert alert-success'>Property Inserted Successfully</p>";
					
// 		}
// 		else
// 		{
// 			$error="<p class='alert alert-warning'>Property Not Inserted Some Error</p>";
// 		}

// }							
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Homex - Real Estate Template</title>

<script>
	var selDiv = "";
		
	document.addEventListener("DOMContentLoaded", init, false);
	
	function init() {
		document.querySelector('#files').addEventListener('change', handleFileSelect, false);
		selDiv = document.querySelector("#selectedFiles");
	}
		
		
		
		//Display Loading Image
	function Display_Load()
	{
	    $("#loadingdiv").fadeIn(300,0);
		$("#loadingdiv").html("<img src='bigLoader.gif' />");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loadingdiv").fadeOut('slow');
	};
			
		
	function handleFileSelect(e) {
		
		if(!e.target.files || !window.FileReader) return;
		
		selDiv.innerHTML = "";
		
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		filesArr.forEach(function(f) {
			if(!f.type.match("image.*")) {
				return;
			}
			Display_Load();
	
			var reader = new FileReader();
			reader.onload = function (e) {
			
				var html = "<div class=\"img-icon\"><img src=\"" + e.target.result + "\" width=150 height=100></div>";
				selDiv.innerHTML += html;				
			}
			reader.readAsDataURL(f); 
			Hide_Load();
		});
		
		
	}
	</script>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<!-- <?php include("include/header.php");?> -->
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Submit Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Submit Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row">
            <div class="container">
                    <div class="row">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Submit Property</h2>
                        </div>
					</div>
                    <div class="row p-5 bg-white">
                        <form method="post" enctype="multipart/form-data">
								<div class="description">
									<h5 class="text-secondary">Basic Information</h5><hr>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
										<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">	Property Description</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Property Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
															<option value="appartment">Appartment</option>
															<option value="flat">Flat</option>
															<option value="bunglow">Bunglow</option>
															<option value="house">House</option>
															<option value="villa">Villa</option>
															<option value="office">Office</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bathroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bath" required placeholder="Enter Bathroom (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Kitchen</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="kitc" required placeholder="Enter Kitchen (only no 1 to 10)">
													</div>
												</div>
												
											</div>   
											<div class="col-xl-6">
												<div class="form-group row mb-3">
													<label class="col-lg-3 col-form-label">BHK</label>
													<div class="col-lg-9">
														<select class="form-control" required name="bhk">
															<option value="">Select BHK</option>
															<option value="1 BHK">1 BHK</option>
															<option value="2 BHK">2 BHK</option>
															<option value="3 BHK">3 BHK</option>
															<option value="4 BHK">4 BHK</option>
															<option value="5 BHK">5 BHK</option>
															<option value="1,2 BHK">6 BHK</option>
															<option value="2,3 BHK">7 BHK</option>
															<option value="2,3,4 BHK">8 BHK</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Bedroom</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bed" required placeholder="Enter Bedroom  (only no 1 to 10)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Balcony</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="balc" required placeholder="Enter Balcony  (only no 1 to 10)">
													</div>
												</div>
												
												
											</div>
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required name="floor">
															<option value="">Select Floor</option>
															<option value="1st Floor">1st Floor</option>
															<option value="2nd Floor">2nd Floor</option>
															<option value="3rd Floor">3rd Floor</option>
															<option value="4th Floor">4th Floor</option>
															<option value="5th Floor">5th Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Rent</label>
													<div class="col-lg-9">
														<input type="number" class="form-control" name="price" required placeholder="Enter Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Monthly maintenance</label>
													<div class="col-lg-9">
														<input type="number" class="form-control" name="mprice" required placeholder="Enter Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Monthly charge</label>
													<div class="col-lg-9">
														<input type="number" class="form-control" name="mcharge" required placeholder="Enter Price">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required placeholder="Enter City">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required placeholder="Enter State">
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Total Floor</label>
													<div class="col-lg-9">
														<select class="form-control" required name="totalfl">
															<option value="">Select Floor</option>
															<option value="1 Floor">1 Floor</option>
															<option value="2 Floor">2 Floor</option>
															<option value="3 Floor">3 Floor</option>
															<option value="4 Floor">4 Floor</option>
															<option value="5 Floor">5 Floor</option>
															<option value="6 Floor">6 Floor</option>
															<option value="7 Floor">7 Floor</option>
															<option value="8 Floor">8 Floor</option>
															<option value="9 Floor">9 Floor</option>
															<option value="10 Floor">10 Floor</option>
															<option value="11 Floor">11 Floor</option>
															<option value="12 Floor">12 Floor</option>
															<option value="13 Floor">13 Floor</option>
															<option value="14 Floor">14 Floor</option>
															<option value="15 Floor">15 Floor</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Security Amount</label>
													<div class="col-lg-9">
														<input type="number" class="form-control" name="samount" required placeholder="Enter Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Area Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required placeholder="Enter Area Size (in sqrt)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required placeholder="Enter plot number / area number">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address Line2</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc2" required placeholder="Enter location">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address Line3</label>
													<div class="col-lg-9">
														<input type="number" class="form-control" name="loc3" required placeholder="Enter pincode">
													</div>
												</div>
												
											</div>
										</div>
										<h5 class="text-secondary">..</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Furnshed status</label>
													<div class="col-lg-9">
														<select class="form-control" required name="furnshed">
															<option value="">Select Type</option>
															<option value="unfurnshed">un furnshed</option>
															<option value="semifurnshed">semi furnshed</option>
															<option value="furnshed">furnshed</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Room facing</label>
													<div class="col-lg-9">
														<select class="form-control" required name="rfacing">
															<option value="">Select Type</option>
															<option value="east">east</option>
															<option value="west">west</option>
															<option value="North">North</option>
															<option value="South">South</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Age of construction</label>
													<div class="col-lg-9">
														<select class="form-control" required name="agec">
															<option value="">Select Type</option>
															<option value="1 year">Less than 1 year</option>
															<option value="2 year">Less than 2 year</option>
															<option value="3 year">Less than 3 year</option>
															<option value="4 year">Less than 4 year</option>
															<option value="5 year">Less than 5 year</option>
															<option value="6 year">Less than 6 year</option>
															<option value="7 year">Less than 7 year</option>
															<option value="8 year">Less than 8 year</option>
															<option value="9 year">Less than 9 year</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<h5 class="text-secondary">Near Transport area</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Near Bus stop</label>
													<div class="col-lg-9">
														<select class="form-control" required name="bus">
															<option value="">Select Type</option>
															<option value="Less than 1 km">Less than 1 km</option>
															<option value="Less than 2 km">Less than 2 km</option>
															<option value="more than 3 km">more than 3 km</option>
															<option value="more than 4 km">more than 4 km</option>
															<option value="more than 5 km">more than 5 km</option>
															<option value="more than 6 km">more than 6 km</option>
															<option value="more than 7 km">more than 7 km</option>
															<option value="more than 8 km">more than 8 km</option>
															<option value="more than 9 km">more than 9 km</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Near Railway station</label>
													<div class="col-lg-9">
														<select class="form-control" required name="railway">
															<option value="">Select Type</option>
															<option value="Less than 1 km">Less than 1 km</option>
															<option value="Less than 2 km">Less than 2 km</option>
															<option value="more than 3 km">more than 3 km</option>
															<option value="more than 4 km">more than 4 km</option>
															<option value="more than 5 km">more than 5 km</option>
															<option value="more than 6 km">more than 6 km</option>
															<option value="more than 7 km">more than 7 km</option>
															<option value="more than 8 km">more than 8 km</option>
															<option value="more than 9 km">more than 9 km</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Near Hospital</label>
													<div class="col-lg-9">
														<select class="form-control" required name="hospital">
															<option value="">Select Type</option>
															<option value="Less than 1 km">Less than 1 km</option>
															<option value="Less than 2 km">Less than 2 km</option>
															<option value="more than 3 km">more than 3 km</option>
															<option value="more than 4 km">more than 4 km</option>
															<option value="more than 5 km">more than 5 km</option>
															<option value="more than 6 km">more than 6 km</option>
															<option value="more than 7 km">more than 7 km</option>
															<option value="more than 8 km">more than 8 km</option>
															<option value="more than 9 km">more than 9 km</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Near Market Area</label>
													<div class="col-lg-9">
														<select class="form-control" required name="market">
															<option value="">Select Type</option>
															<option value="Less than 1 km">Less than 1 km</option>
															<option value="Less than 2 km">Less than 2 km</option>
															<option value="more than 3 km">more than 3 km</option>
															<option value="more than 4 km">more than 4 km</option>
															<option value="more than 5 km">more than 5 km</option>
															<option value="more than 6 km">more than 6 km</option>
															<option value="more than 7 km">more than 7 km</option>
															<option value="more than 8 km">more than 8 km</option>
															<option value="more than 9 km">more than 9 km</option>
														</select>
													</div>
												</div>

											</div>
										</div>
										<h5 class="text-secondary">Amenities</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="row">
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="swiming">
															<label class="form-check-label" for="checkbox1">
																Swiming pool
															</label>
														</div>
													</div>
													
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="gym">
															<label class="form-check-label" for="checkbox3">
																GYM
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="security">
															<label class="form-check-label" for="checkbox3">
																Security
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="temple">
															<label class="form-check-label" for="checkbox3">
																temple
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="comunity">
															<label class="form-check-label" for="checkbox3">
																comunity hall
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="lift">
															<label class="form-check-label" for="checkbox3">
																Alivater
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="cctv">
															<label class="form-check-label" for="checkbox3">
																CCTV
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="power">
															<label class="form-check-label" for="checkbox3">
																Power Backup
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="water">
															<label class="form-check-label" for="checkbox3">
																Water storage
															</label>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="kids">
															<label class="form-check-label" for="checkbox3">
																Kids play area
															</label>
														</div>
													</div>
													<!-- Add more columns as needed for additional checkboxes -->
												</div>
											</div>
											
											
										</div>
										<h5 class="text-secondary"></h5><hr>
										<div class="row">
										<div class="col-xl-6">
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">Parking area</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="parea" required placeholder="Enter parking area size">
													</div>
											</div>
											<div class="col-md-4">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="twheeler" value="two wheeler">
													<label class="form-check-label" for="checkbox3">
														two Wheeler
													</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" name="twheeler" value="four wheeler">
													<label class="form-check-label" for="checkbox3">
														four Wheeler
													</label>
												</div>
											</div>
												
											</div>
										</div>
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<?php echo $message; ?>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage[]" id="files" multiple type="file" required="">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
											   <div id="selectedFiles">
												<table width="100%" height="100%" border="0" align="center" cellpadding="8" cellspacing="0">
												<tr>
													<td width="57%" height="233" align="center" valign="middle" ><div style="border: dashed 2px #FB7673; margin:0px; width:98%; height:98%; float:left;">
													<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
														<tr>
														<td align="center" valign="middle"><span class="style9"> Photos Here!</span></td>
														</tr>
													</table>
													</div></td>
													<td width="43%" align="left" valign="middle" bgcolor="#EBEBEB"><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
														<tr>
														<td height="46" colspan="2" align="center" valign="top"><span class="style8">Always Remember! </span></td>
														</tr>
														<tr>
														<td width="15%" height="57" align="center" valign="top"><img src="images/check-icon.png" width="15" height="15" /></td>
														<td width="85%" align="left" valign="top">Use original photos in .jpg, .gif or .png</td>
														</tr>
														<tr>
														<td height="57" align="center" valign="top"><img src="images/check-icon.png" width="15" height="15" /></td>
														<td align="left" valign="top">Add multiple photos. You can upload max. 10 photos.</td>
														</tr>
														<tr>
														<td align="center" valign="top"><img src="images/check-icon.png" width="15" height="15" /></td>
														<td align="left" valign="top">Avoid using low-light photos.</td>
														</tr>
													</table>              
												 
												</table>
       										</div>
											</div>
											
										</div>

										
							<input type="submit" value="Submit" class="btn btn-primary"name="add" style="margin-left:200px;">
										
								</div>
								</form>
                    </div>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		<!-- <?php include("include/footer.php");?> -->
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/tinymce/init-tinymce.min.js"></script>
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>