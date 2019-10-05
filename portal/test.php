<!--                        BTECH-->
                        
                        <div class="row" style="margin-top: 80px;">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">BTech. Projects</h2>
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
                                          <th scope="col">Faculty ID</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM btech_project WHERE fac_id =".$_SESSION['id'];
                                            $result = mysqli_query($con, $sql);
                                            if($result) {
                                                $bt = "bt1";
                                                $i = 1;
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $i; ?></th>
                                          <td><input type="text" value="<?php echo $rows['student_name']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="student_name"></td>
                                          <td><input type="text" value="<?php echo $rows['supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="supervisor"></td>
                                          <td><input type="text" value="<?php echo $rows['co_supervisor']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="co_supervisor"></td>
                                          <td><input type="text" value="<?php echo $rows['current_status']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="current_status"></td>
                                          <td><input type="text" value="<?php echo $rows['submission_date']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="submission_date"></td>
                                          <td><input type="text" value="<?php echo $rows['uni_roll_no']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="uni_roll_no"></td>
                                          <td><input type="text" value="<?php echo $rows['thesis_title']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="thesis_title"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="remarks"></td>
                                          <td><input type="text" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="supervisory_support_<?php echo $bt; ?>" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_supervisory_support_<?php echo $bt; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
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
                                                if(isset($_POST['add_new_btn'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $i; ?></th>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="student_name_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="registeration_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="supervisor_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="co_supervisor_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="current_status_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="submission_date_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="uni_roll_no_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="thesis_title_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="research_area_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="affiliation_to_university_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="remarks_new"></td>
                                          <td><input type="text" style="background: none;" class="supervisory_support_<?php echo $i; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
                                    <button type="submit" class="btn btn-dark btn-block" name="add_new_btn">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                        