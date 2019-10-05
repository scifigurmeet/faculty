<?php $ok = "index" ?>
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
					<div class="col-lg-4">
					<div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">Professor Details</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img style="width:250px;" class="mx-auto d-block" src="fac-images/<?php echo $path; ?>" alt="Card image cap">
                                            <h2 class="text-sm-center mt-2 mb-1"><?php echo $fac_name; ?></h2>
                                            <div class="location text-sm-center role btn-success">
                                             <?php echo $fac_department; ?></div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
							</div>
						<div class="pull-right col-lg-8" style="width:600px;">
						<div class="card">
									<div class="card-header">
										<h4>Basic Details</h4>
									</div>
									<div class="card-body">
										<div class="default-tab">
											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profile Info</a>
													<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Qualification Timeline</a>
													<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Update Qualifications</a>
												</div>
											</nav>
											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
												<form action="" method="post" class="form-horizontal">
											<span class="btn btn-danger" onclick="edit_basic()">Add/Edit</span>
											<script>
											function edit_basic(){
												 $("#a_name").removeAttr("disabled");
												 $("#a_dep").removeAttr("disabled");
												 $("#a_dob").removeAttr("disabled");
												 $("#a_doj").removeAttr("disabled");
												 $("#a_hqual").removeAttr("disabled");
												 $("#a_pos").removeAttr("disabled");
												 $("#a_ppd").removeAttr("disabled");
												 $("#a_spec").removeAttr("disabled");
												 $("#a_phone").removeAttr("disabled");
												 $("#a_email").removeAttr("disabled");
												 $("#a_total_experience").removeAttr("disabled");
											}
											</script>
											<button class="btn btn-success" name="a_update">Update</button><br><br>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_name" name="fac_name" placeholder="Enter Your Full Name" class="form-control" value="<?php echo $fac_name; ?>" disabled required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Date of Birth</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input style="width:180px; display:inline-block;" type="date" id="a_dob" name="fac_dob" placeholder="Enter Your Date of Birth" class="form-control" value="<?php echo date("Y-m-d",strtotime($fac_dob)); ?>" disabled>
													<?php
													$date1=date("Y-m-d",strtotime($fac_dob));
													$date2=date("Y-m-d",strtotime("today"));
													$date1=date_create($date1);
													$date2=date_create($date2);
													$diff=date_diff($date1,$date2);
													$diff=$diff->format("%y Years %m Months");
													echo '<span class="btn btn-primary">'.$diff.'</span>';
													?>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Designation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_pos" name="fac_designation" placeholder="Enter Your Designation" class="form-control" value="<?php echo $fac_designation; ?>" disabled required>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Highest qualification</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_hqual" name="fac_highest_qualification" placeholder="Enter Your Highest qualification" class="form-control" value="<?php echo $fac_highest_qualification; ?>" disabled required>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Area of Specialization</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_spec" name="interest_areas" placeholder="Enter Your Area of Specialization" class="form-control" value="<?php echo $fac_spec_area; ?>" disabled required>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Department</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="a_dep" name="fac_department" placeholder="Choose Your Department" class="form-control" disabled>
													<option <?php if($fac_department=="Department of Information Technology") echo 'selected';?>>Department of Information Technology</option>
													<option <?php if($fac_department=="Department of Computer Science and Engineering") echo 'selected';?>>Department of Computer Science and Engineering</option>
													<option <?php if($fac_department=="Department of Electronics and Communication Engineering") echo 'selected';?>>Department of Electronics and Communication Engineering</option>
													<option <?php if($fac_department=="Department of Electical Engineering") echo 'selected';?>>Department of Electical Engineering</option>
													<option <?php if($fac_department=="Department of Mechanical Engineering") echo 'selected';?>>Department of Mechanical Engineering</option>
													<option <?php if($fac_department=="Department of Production Engineering") echo 'selected';?>>Department of Production Engineering</option>
													<option <?php if($fac_department=="Department of Applied Sciences") echo 'selected';?>>Department of Applied Sciences</option>
													<option <?php if($fac_department=="Department of Civil Engineering") echo 'selected';?>>Department of Civil Engineering</option>
													<option <?php if($fac_department=="Department of MBA") echo 'selected';?>>Department of MBA</option>
													<option <?php if($fac_department=="Department of MCA") echo 'selected';?>>Department of MCA</option>
													</select>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Date of Joining</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input required  style="width:180px; display:inline-block;" style="width:180px;" type="date" id="a_doj" name="fac_joining_date" placeholder="Enter Your Date of Joining" class="form-control" value="<?php echo date("Y-m-d",strtotime($fac_joining_date)); ?>" disabled>
													 <?php
													$date1=date("Y-m-d",strtotime($fac_joining_date));
													$date2=date("Y-m-d",strtotime("today"));
													$date1=date_create($date1);
													$date2=date_create($date2);
													$diff=date_diff($date1,$date2);
													$diff=$diff->format("%y Years %m Months");
													echo '<span class="btn btn-primary">'.$diff.'</span>';
													?>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Present Post Held From</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input required  style="width:180px; display:inline-block;" style="width:180px;" type="date" id="a_ppd" name="fac_present_post_held_from" placeholder="Enter When Occupied Present Post" class="form-control" value="<?php echo date("Y-m-d",strtotime($fac_present_post_held_from)); ?>" disabled>
													 <?php
													$date1=date("Y-m-d",strtotime($fac_present_post_held_from));
													$date2=date("Y-m-d",strtotime("today"));
													$date1=date_create($date1);
													$date2=date_create($date2);
													$diff=date_diff($date1,$date2);
													$diff=$diff->format("%y Years %m Months");
													echo '<span class="btn btn-primary">'.$diff.'</span>';
													?>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Total Experience (In Years)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_total_experience" name="total_experience" placeholder="Enter Your Total Experience in Years Only, Eg. 25" class="form-control" value="<?php echo $total_experience; ?>" disabled required>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_email" name="email" placeholder="Enter Your Email" class="form-control" value="<?php echo $fac_email; ?>" disabled required>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Phone Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_phone" name="phone" placeholder="Enter Your Phone Number" class="form-control" value="<?php echo $fac_phone; ?>" disabled required>
                                                </div>
                                            </div>
                                        </form>
												</div>
												<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
												<?php include('timeline.php'); ?>
												</div>
												<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
												<?php include('qedit.php'); ?>
												</div>
											</div>

										</div>
									</div>
								</div>
						</div>
						</div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>