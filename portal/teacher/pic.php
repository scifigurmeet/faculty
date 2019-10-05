<?php $ok = "index" ?>
<?php include "header.php"; ?>
<style>
    .info_table {
        font-size: 18px;
        width: 100%;
    }
    .info_table > th, td {
        margin: 5px;
        padding: 3px 10px;
    }
    input:disabled {
        background: transparent !important;
        padding: 5px;
    }
    input:enabled {
        box-shadow: 0px 0px 1px grey;
        padding: 5px;
        background: none;
    }
    .title-1 {
        text-transform: uppercase;
    }
    .design {
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }
</style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
						<?php
						if(isset($_GET["updated"])){
							?>
							<div class="alert alert-success">
							Your Profile Picture has been successfully updated.
							</div>
							<?php
						}
						?>
						</div>
    <div style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px; width:400px;"  class="pull-right"><h3>Your Current Profile Picture</h3><br>
    <img class="img-fluid" src="fac-images/<?php echo $path; ?>"></div>
	</div><br>
						<div class="row" style="padding:30px;">
						<br><form enctype="multipart/form-data" action="" method="POST" id="upload_img_form">
<div style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;" style="display:inline-block;">
    <h3>Add/Update Profile Picture</h3><br>
    <input style="color:black; background-color:whitesmoke;" type="file" name="uploaded_file"></input>
    <input style="color:black; background-color:lavenderblush;" class="btn btn-success btn-lg" type="submit" value="Upload" name="img_submit"></input>
	</div>
  </form>
<?PHP
include "conn.php"; 
$fac_id=$_SESSION['id'];
if(isset($_POST["img_submit"])){
$image_set=0;
$username="chakdephatte";
//logics
$target_dir = "fac-images/";
$target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploaded_file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["uploaded_file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
}
else {
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "fac-images/";
	$date=date(" Y-m-d h-i-s");
	$pathf = $_FILES['uploaded_file']['name'];
	$ext = pathinfo($pathf, PATHINFO_EXTENSION);
    $path = $path . $username.$date.'.'.$ext;
    $path2 = $username.$date.'.'.$ext;
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "<br><div class='alert alert-success'>Profile Picture has been successfully updated.</div>";
	  $image_set=1;
	  //insert
		$sql = "UPDATE images SET path='$path2' WHERE fac_id='$fac_id'";
		mysqli_query($con, $sql);
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
}
if($image_set==1){
echo '<script>window.location="?updated=true";</script>';
}
$con->close();
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>