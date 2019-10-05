<?php
    $id=$_GET["q"];
    $id=stripcslashes($id);
    $sql = "SELECT * FROM personal_details WHERE fac_id ='".$id."'";
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
            $interest = $rows['interest_areas'];
            $phone = $rows['phone'];
            $email = $rows['email'];
            $exp = $rows['total_experience'];
        }
      }
?>

<section class="resume-section p-3 p-lg-5 d-flex d-column pull-right" id="about">
        <div class="my-auto">
          <h1 class="mb-0">
           <?php echo $fac_name;?>
            
          </h1><br><br>
          <div class="row" style="width:120%;">
            <div class="col-lg-12">
            <div class="card">
                  <div class="card-header" style=" background-image:url('img/bg7.jpg');">
                    <h3 class="mb-0" style="color:white;">personal details</h3>
                  </div>
                  <div class="card-body">
                    <div class="default-tab">
                      <nav>
                      </nav>
                      <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="" method="post" class="form-horizontal">
                      
                      <script>
                      function edit_basic(){
                         $("#a_name").removeAttr("disabled");
                         $("#a_dep").removeAttr("disabled");
                         $("#a_dob").removeAttr("disabled");
                         $("#a_doj").removeAttr("disabled");
                         $("#a_hqual").removeAttr("disabled");
                         $("#a_pos").removeAttr("disabled");
                         $("#a_ppd").removeAttr("disabled");
                      }
                      </script>
                      
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">Full Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_name" name="fac_name" placeholder="Enter Your Full Name" class="form-control" value="<?php echo $fac_name; ?>" disabled>
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
                          echo '<span class="btn">'.$diff.'</span>';
                          ?>
                                                </div>
                                            </div>
                      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Designation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_pos" name="fac_designation" placeholder="Enter Your Designation" class="form-control" value="<?php echo $fac_designation; ?>" disabled>
                                                </div>
                                            </div>
                      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Highest Qualification</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_hqual" name="fac_highest_qualification" placeholder="Enter Your Highest Qualificaion" class="form-control" value="<?php echo $fac_highest_qualification; ?>" disabled>
                                                </div>
                                            </div>
                      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Department</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="a_dep" name="fac_department" placeholder="Choose Your Department" class="form-control" disabled value="<?php echo $fac_department;?>"> 
                                                </div>
                                            </div>
                      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Date of Joining the Institution</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input style="width:180px; display:inline-block;" style="width:180px;" type="date" id="a_doj" name="fac_joining_date" placeholder="Enter Your Date of Joining" class="form-control" value="<?php echo date("Y-m-d",strtotime($fac_joining_date)); ?>" disabled>
                           <?php
                          $date1=date("Y-m-d",strtotime($fac_joining_date));
                          $date2=date("Y-m-d",strtotime("today"));
                          $date1=date_create($date1);
                          $date2=date_create($date2);
                          $diff=date_diff($date1,$date2);
                          $diff=$diff->format("%y Years %m Months");
                          echo '<span class="btn">'.$diff.'</span>';
                          ?>
                                                </div>
                                            </div>
                      <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Present Post Held From</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input style="width:180px; display:inline-block;" style="width:180px;" type="date" id="a_ppd" name="fac_present_post_held_from" placeholder="Enter When Occupied Present Post" class="form-control" value="<?php echo date("Y-m-d",strtotime($fac_present_post_held_from)); ?>" disabled>
                           <?php
                          $date1=date("Y-m-d",strtotime($fac_present_post_held_from));
                          $date2=date("Y-m-d",strtotime("today"));
                          $date1=date_create($date1);
                          $date2=date_create($date2);
                          $diff=date_diff($date1,$date2);
                          $diff=$diff->format("%y Years %m Months");
                          echo '<span class="btn">'.$diff.'</span>';
                          ?>
                                                </div>
                                            </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Areas Of Specialization</label>
                                                </div>
                            <div class="col-12 col-md-9">
                                                    <input type="text" id="a_pos" name="fac_designation" placeholder="Enter Your Designation" class="form-control" value="<?php echo $interest; ?>" disabled>
                                                </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Total Experience (in years)</label>
                                                </div>
                            <div class="col-12 col-md-9">
                                                    <input type="text" id="a_pos" name="fac_designation" placeholder="" class="form-control" value="<?php echo $exp; ?>" disabled>
                                                </div>
                          </div>

                           <div class="row form-group">
                            <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Email Id</label>
                                                </div>
                            <div class="col-12 col-md-9">
                                                    <input type="text" id="a_pos"  class="form-control" value="<?php echo $email; ?>" disabled>
                                                </div>
                          </div>

                          <!-- <div class="row form-group">
                            <div class="col col-md-3">
                                                    <label for="hf-password" class=" form-control-label">Contact No.</label>
                                                </div>
                            <div class="col-12 col-md-9">
                                                    <input type="text" id="a_pos"  class="form-control" value="<?php echo $phone; ?>" disabled>
                                                </div>
                          </div>
                         -->
                        </form>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-12">
              <br><br>
              <div class="card">
                  <div class="card-header" style=" background-image:url(img/bg7.jpg);">
                     <h3 class="mb-0" style="color:white;">Qualification Details</h3>
                  </div>
                  <div class="card-body">
                  <?php include('timeline.php'); ?>
                  </div>
                </div>
            </div>
          </div>
        </div>
  </section>