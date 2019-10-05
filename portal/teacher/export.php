<?php $ok = "export" ?>
<?php include "header.php"; ?>
<?php include "conn.php"; 
			if(isset($_POST["a_update"])){
	$sql = "UPDATE personal_details SET name = '".$_POST['fac_name']."', date_of_birth = '".$_POST['fac_dob']."', designation = '".$_POST['fac_designation']."', highest_qualification = '".$_POST['fac_highest_qualification']."', department = '".$_POST['fac_department']."', joining_date = '".$_POST['fac_joining_date']."', present_post_held_from = '".$_POST['fac_present_post_held_from']."', interest_areas='".$_POST['interest_areas']."', email='".$_POST['email']."', phone='".$_POST['phone']."', total_experience='".$_POST['total_experience']."' WHERE fac_id='".$_SESSION['id']."'";
    mysqli_query($con, $sql);
			}
    $sql = "SELECT * FROM personal_details WHERE fac_id ='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    if($result) {
        while($rows = mysqli_fetch_assoc($result)) {
            $fac_name = $rows['name'];
            $fac_dob = $rows['date_of_birth'];
            $fac_designation = $rows['designation'];
            $fac_highest_qualification = $rows['highest_qualification'];
            $fac_department = $rows['department'];
            $fac_joining_date = $rows['joining_date'];
            $fac_present_post_held_from = $rows['present_post_held_from'];
            $fac_experience_within_inst = $rows['experience_within_inst'];
            $fac_total_experience = $rows['total_experience'];
            $fac_remarks = $rows['remarks'];
			$fac_spec_area = $rows['interest_areas'];
			$fac_email = $rows['email'];
			$fac_phone = $rows['phone'];
			$total_experience = $rows['total_experience'];
        }
    }
    else {
        echo "<script>alert('ERROR !!')</script>";
    }
?>
<?php
if($type=="admin"){
	$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$_POST['table']."'";
}
else {
	echo "<script>alert('Access Denied! You Can Not Access This Page!');
	history.go(-1);</script>";
	exit("Access Denied!");
}
?>
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
					<div class="col-lg-12">
					<div class="card">
                    <div class="card-header">
					Download Database
					</div>
					<div class="card-body">
					<p>Here, you can download the whole database for Maintainence and Security Purposes.</p><br>
					<a href="exporter/demo.php" target="_blank">
					<button class="btn btn-success">Export & Download</button></a>
					</div>
                    </div>
							</div>
						
						</div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>