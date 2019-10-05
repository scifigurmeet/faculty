<?php $ok = "support" ?>
<?php include "header.php"; ?>
<?php include "conn.php"; ?>
<style>
    .bord {
        border: 1px solid #eee !important;
        text-align: center;
    }
    td > input:enabled {
        border-bottom: 1px solid grey !important;
    }
</style>
            <!-- MAIN CONTENT-->
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
<!--                        PHD-->
                        
                        
                        <div class="row">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">PHD Thesis</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Student Name</th>
                                          <th scope="col">Registration Date</th>
                                          <th scope="col">Supervisor</th>
                                          <th scope="col">Co Supervisor</th>
                                          <th scope="col">Current Status</th>
                                          <th scope="col">Submission Date</th>
                                          <th scope="col">Enrollment No</th>
                                          <th scope="col">Thesis Title</th>
                                          <th scope="col">Research Area</th>
                                          <th scope="col">Affiliated University</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM phd_thesis WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$j = 'a';
                                                $k = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" value="<?php echo $rows['student_name']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="student_name"></td>
                                          <td><input type="date" value="<?php echo $rows['registeration_date']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="registeration_date"></td>
                                          <td><input type="text" value="<?php echo $rows['supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="supervisor"></td>
                                          <td><input type="text" value="<?php echo $rows['co_supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="co_supervisor"></td>
                                          <td><select disabled style="background: none;" class="form-control supervisory_support_<?php echo $j; ?>" name="current_status">
										  <option <?php if($rows['current_status']=="Ongoing") echo 'selected'; ?>>Ongoing</option>
										  <option <?php if($rows['current_status']=="Completed") echo 'selected'; ?>>Completed</option>
										  </select>
										  </td>
                                          <td><input type="text" value="<?php echo $rows['submission_date']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="submission_date"></td>
                                          <td><input type="text" value="<?php echo $rows['enrollment_no']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="enrollment_no"></td>
                                          <td><input type="text" value="<?php echo $rows['thesis_title']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="thesis_title"></td>
                                          <td><input type="text" value="<?php echo $rows['research_area']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="research_area"></td>
                                          <td><input type="text" value="<?php echo $rows['affiliation_to_university']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="affiliation_to_university"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_phd"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_phd" class="edit_btn" onclick="edit_supervisory_support_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_phd" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_supervisory_support_<?php echo $j; ?>(){
                                                       $(".supervisory_support_<?php echo $j; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $j++;
                                                    $k++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn_phd'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="student_name_new"></td>
                                          <td><input type="date" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="registeration_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="supervisor_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="co_supervisor_new"></td>
                                          <td><select style="background: none;" class="form-control supervisory_support_<?php echo $j; ?>" name="current_status_new">
										  <option <?php if($rows['current_status']=="Ongoing") echo 'selected'; ?>>Ongoing</option>
										  <option <?php if($rows['current_status']=="Completed") echo 'selected'; ?>>Completed</option>
										  </select>
										  </td>
                                          <td><input type="date" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="submission_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="enrollment_no_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="thesis_title_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="research_area_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="affiliation_to_university_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="supervisory_support_<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new_phd">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_phd" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                        
<!--                        MTECH-->
                        
                        <div class="row" style="margin-top: 80px;">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">M. Tech. Thesis</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Student Name</th>
                                          <th scope="col">Registration Date</th>
                                          <th scope="col">Supervisor</th>
                                          <th scope="col">Co Supervisor</th>
                                          <th scope="col">Current Status</th>
                                          <th scope="col">Submission Date</th>
                                          <th scope="col">Enrollment No</th>
                                          <th scope="col">Thesis Title</th>
                                          <th scope="col">Research Area</th>
                                          <th scope="col">Affiliated University</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM mtech_thesis WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$i = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $i; ?></th>
                                          <td><input type="text" value="<?php echo $rows['student_name']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="student_name"></td>
                                          <td><input type="date" value="<?php echo $rows['registeration_date']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="registeration_date"></td>
                                          <td><input type="text" value="<?php echo $rows['supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="supervisor"></td>
                                          <td><input type="text" value="<?php echo $rows['co_supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="co_supervisor"></td>
                                          <td><select disabled style="background: none;" class="form-control supervisory_support_<?php echo $i; ?>" name="current_status">
										  <option <?php if($rows['current_status']=="Ongoing") echo 'selected'; ?>>Ongoing</option>
										  <option <?php if($rows['current_status']=="Completed") echo 'selected'; ?>>Completed</option>
										  </select>
										  </td>
                                          <td><input type="date" value="<?php echo $rows['submission_date']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="submission_date"></td>
                                          <td><input type="text" value="<?php echo $rows['enrollment_no']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="enrollment_no"></td>
                                          <td><input type="text" value="<?php echo $rows['thesis_title']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="thesis_title"></td>
                                          <td><input type="text" value="<?php echo $rows['research_area']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="research_area"></td>
                                          <td><input type="text" value="<?php echo $rows['affiliation_to_university']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="affiliation_to_university"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_supervisory_support_<?php echo $i; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_supervisory_support_<?php echo $i; ?>(){
                                                       $(".supervisory_support_<?php echo $i; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $i++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $i; ?></th>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="student_name_new"></td>
                                          <td><input type="date" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="registeration_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="supervisor_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="co_supervisor_new"></td>
                                         <td><select style="background: none;" class="form-control supervisory_support_<?php echo $i; ?>" name="current_status_new">
										  <option <?php if($rows['current_status']=="Ongoing") echo 'selected'; ?>>Ongoing</option>
										  <option <?php if($rows['current_status']=="Completed") echo 'selected'; ?>>Completed</option>
										  </select>
										  </td>
                                          <td><input type="date" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="submission_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="enrollment_no_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="thesis_title_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="research_area_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="affiliation_to_university_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--                        BTECH-->
                        
                        <div class="row" style="margin-top: 80px; margin-bottom: 50px;">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">B. Tech. Projects</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Student Name</th>
<!--                                          <th scope="col">registration Date</th>-->
                                          <th scope="col">Supervisor</th>
                                          <th scope="col">Co Supervisor</th>
                                          <th scope="col">Current Status</th>
                                          <th scope="col">Submission Date</th>
                                          <th scope="col">University Roll Number</th>
                                          <th scope="col">Project Title</th>
                                          <th scope="col">Session</th>
                                          <th scope="col">Others</th>
<!--
                                          <th scope="col">Research Area</th>
                                          <th scope="col">Affiliated University</th>
-->
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM btech_project WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$bt = "bt1";
                                                $i = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $i; ?></th>
                                          <td><input type="text" value="<?php echo $rows['student_name']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="student_name"></td>
                                          <td><input type="text" value="<?php echo $rows['supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="supervisor"></td>
                                          <td><input type="text" value="<?php echo $rows['co_supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="co_supervisor"></td>
                                        <td><select disabled style="background: none;" class="form-control supervisory_support_<?php echo $bt; ?>" name="current_status">
										  <option <?php if($rows['current_status']=="Ongoing") echo 'selected'; ?>>Ongoing</option>
										  <option <?php if($rows['current_status']=="Completed") echo 'selected'; ?>>Completed</option>
										  </select>
										  </td>
                                          <td><input type="date" value="<?php echo $rows['submission_date']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="submission_date"></td>
                                          <td><input type="text" value="<?php echo $rows['univ_roll_no']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="uni_roll_no"></td>
                                          <td><input type="text" value="<?php echo $rows['project_title']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="project_title"></td>
                                          <td><input type="text" value="<?php echo $rows['session_to']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="session"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="remarks"></td>
                                                  <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="others"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_btech"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_btech" class="edit_btn" onclick="edit_supervisory_support_<?php echo $bt; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_btech" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_supervisory_support_<?php echo $bt; ?>(){
                                                       $(".supervisory_support_<?php echo $bt; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $i++;
                                                    $bt++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn_btech'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $i; ?></th>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="student_name_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="supervisor_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="co_supervisor_new"></td>
                                          <td><select style="background: none;" class="form-control supervisory_support_<?php echo $bt; ?>" name="current_status_new">
										  <option <?php if($rows['current_status']=="Ongoing") echo 'selected'; ?>>Ongoing</option>
										  <option <?php if($rows['current_status']=="Completed") echo 'selected'; ?>>Completed</option>
										  </select>
										  </td>
                                          <td><input type="date" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="submission_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="uni_roll_no_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="project_title_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="session_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="remarks_new"></td>
                                                  <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="others_new"><input type="hidden" style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new_btech">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_btech" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                        <div class="row" style="height: 20px;">
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
    </div>
            </div>

            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>
<?php

// PHD
    if(isset($_POST['update_btn_phd'])) {
        $id = $_POST['del'];
        $student_name = $_POST['student_name'];
        $registeration_date = $_POST['registeration_date'];
        $supervisor = $_POST['supervisor'];
        $co_supervisor = $_POST['co_supervisor'];
        $current_status = $_POST['current_status'];
        $submission_date = $_POST['submission_date'];
        $enrollment_no = $_POST['enrollment_no'];
        $thesis_title = $_POST['thesis_title'];
        $research_area = $_POST['research_area'];
        $affiliation_to_university = $_POST['affiliation_to_university'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE phd_thesis
            SET student_name = '$student_name', registeration_date = '$registeration_date', supervisor = '$supervisor', co_supervisor = '$co_supervisor', current_status = '$current_status', submission_date = '$submission_date', enrollment_no = $enrollment_no, thesis_title = '$thesis_title', research_area = '$research_area', affiliation_to_university = '$affiliation_to_university', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new_phd'])) {
        $student_name_new = $_POST['student_name_new'];
        $registeration_date_new = $_POST['registeration_date_new'];
        $supervisor_new = $_POST['supervisor_new'];
        $co_supervisor_new = $_POST['co_supervisor_new'];
        $current_status_new = $_POST['current_status_new'];
        $submission_date_new = $_POST['submission_date_new'];
        $enrollment_no_new = $_POST['enrollment_no_new'];
        $thesis_title_new = $_POST['thesis_title_new'];
        $research_area_new = $_POST['research_area_new'];
        $affiliation_to_university_new = $_POST['affiliation_to_university_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO phd_thesis (student_name, registeration_date, supervisor, co_supervisor, current_status, submission_date, enrollment_no, thesis_title, research_area, affiliation_to_university, remarks, fac_id)
        VALUES('$student_name_new', '$registeration_date_new', '$supervisor_new', '$co_supervisor_new', '$current_status_new', '$submission_date_new', $enrollment_no_new, '$thesis_title_new', '$research_area_new', '$affiliation_to_university_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn_phd'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM phd_thesis WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
    }







//MTECH

if(isset($_POST['update_btn'])) {
        $id = $_POST['del'];
        $student_name = $_POST['student_name'];
        $registeration_date = $_POST['registeration_date'];
        $supervisor = $_POST['supervisor'];
        $co_supervisor = $_POST['co_supervisor'];
        $current_status = $_POST['current_status'];
        $submission_date = $_POST['submission_date'];
        $enrollment_no = $_POST['enrollment_no'];
        $thesis_title = $_POST['thesis_title'];
        $research_area = $_POST['research_area'];
        $affiliation_to_university = $_POST['affiliation_to_university'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE mtech_thesis
            SET student_name = '$student_name', registeration_date = '$registeration_date', supervisor = '$supervisor', co_supervisor = '$co_supervisor', current_status = '$current_status', submission_date = '$submission_date', enrollment_no = $enrollment_no, thesis_title = '$thesis_title', research_area = '$research_area', affiliation_to_university = '$affiliation_to_university', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new'])) {
        $student_name_new = $_POST['student_name_new'];
        $registeration_date_new = $_POST['registeration_date_new'];
        $supervisor_new = $_POST['supervisor_new'];
        $co_supervisor_new = $_POST['co_supervisor_new'];
        $current_status_new = $_POST['current_status_new'];
        $submission_date_new = $_POST['submission_date_new'];
        $enrollment_no_new = $_POST['enrollment_no_new'];
        $thesis_title_new = $_POST['thesis_title_new'];
        $research_area_new = $_POST['research_area_new'];
        $affiliation_to_university_new = $_POST['affiliation_to_university_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO mtech_thesis (student_name, registeration_date, supervisor, co_supervisor, current_status, submission_date, enrollment_no, thesis_title, research_area, affiliation_to_university, remarks, fac_id)
        VALUES('$student_name_new', '$registeration_date_new', '$supervisor_new', '$co_supervisor_new', '$current_status_new', '$submission_date_new', $enrollment_no_new, '$thesis_title_new', '$research_area_new', '$affiliation_to_university_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM mtech_thesis WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
    }


//BTECH

if(isset($_POST['update_btn_btech'])) {
        $id = $_POST['del'];
        $student_name = $_POST['student_name'];
        $supervisor = $_POST['supervisor'];
        $co_supervisor = $_POST['co_supervisor'];
        $current_status = $_POST['current_status'];
        $submission_date = $_POST['submission_date'];
        $session = $_POST['session'];
        $uni_roll_no = $_POST['uni_roll_no'];
        $project_title = $_POST['project_title'];
        $remarks = $_POST['remarks'];
        $others = $_POST['others'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE btech_project
            SET student_name = '$student_name', supervisor = '$supervisor', co_supervisor = '$co_supervisor', current_status = '$current_status', submission_date = '$submission_date', session_to = '$session', univ_roll_no = '$uni_roll_no', project_title = '$project_title', remarks = '$remarks', others = '$others', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new_btech'])) {
        $student_name_new = $_POST['student_name_new'];
        $supervisor_new = $_POST['supervisor_new'];
        $co_supervisor_new = $_POST['co_supervisor_new'];
        $current_status_new = $_POST['current_status_new'];
        $submission_date_new = $_POST['submission_date_new'];
        $session_new = $_POST['session_new'];
        $uni_roll_no_new = $_POST['uni_roll_no_new'];
        $project_title_new = $_POST['project_title_new'];
        $remarks_new = $_POST['remarks_new'];
        $others_new = $_POST['others_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO btech_project (student_name, supervisor, co_supervisor, current_status, submission_date, session_to, univ_roll_no, project_title, remarks, others, fac_id)
        VALUES('$student_name_new', '$supervisor_new', '$co_supervisor_new', '$current_status_new', '$submission_date_new', '$session_new', '$uni_roll_no_new', '$project_title_new', '$remarks_new', '$others_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn_btech'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM btech_project WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'supervisory_support.php';</script>";
        }
    }
?>