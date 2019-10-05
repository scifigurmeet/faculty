<?php $ok = "workshops" ?>
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
                        
                        
                        
                        <div class="row">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">Workshops</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Event Type</th>
                                          <th scope="col">Course Name</th>
                                          <th scope="col">Organisation</th>
                                          <th scope="col">Duration Type</th>
                                          <th scope="col">Sponsors</th>
                                          <th scope="col">Start Date</th>
                                          <th scope="col">End Date</th>
                                          <th scope="col">Academic Year</th>
                                          <th scope="col">Others</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM workshops WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$j = 'a';
                                                $k = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" value="<?php echo $rows['event_type']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="event_type"></td>
                                                  <td><input type="text" value="<?php echo $rows['course_name']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="course_name"></td>
                                              <td><input type="text" value="<?php echo $rows['organisation']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="organisation"></td>
                                          <td><input type="duration_type" value="<?php echo $rows['duration_type']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="duration_type"></td>
                                                  <td><input type="text" value="<?php echo $rows['sponsors']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="sponsors"></td>
                                                  <td><input type="date" value="<?php echo $rows['start_date']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="start_date"></td>
                                                  <td><input type="date" value="<?php echo $rows['end_date']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="end_date"></td>
                                          <td><select disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="academic_year">
										  <?php
											  for($x=date("Y");$x>=1950;$x--){
												  ?>
												  <option <?php if($x==$rows['academic_year']) echo 'selected'; ?>><?php echo $x.'-'.($x+1); ?></option>
												  <?php
											  }
											  ?>
											  </select>
										  </td>
                                                  <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="others"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="event_type_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_event_type_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="upduration_type_btn" class="upduration_type_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_event_type_<?php echo $j; ?>(){
                                                       $(".event_type_<?php echo $j; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $j++;
                                                    $k++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="event_type_new"></td>
                                                  <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="course_name_new"></td>
                                                  <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="organisation_new"></td>
                                          <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="duration_type_new"></td>
                                          <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="sponsors_new"></td>
                                          <td><input type="date" style="background: none;" class="event_type_<?php echo $j; ?>" name="start_date_new"></td>
                                          <td><input type="date" style="background: none;" class="event_type_<?php echo $j; ?>" name="end_date_new"></td>
                                          <td><select style="background: none;" class="event_type_<?php echo $j; ?>" name="academic_year_new">
										  <?php
											  for($x=date("Y");$x>=1950;$x--){
												  ?>
												  <option><?php echo $x.'-'.($x+1); ?></option>
												  <?php
											  }
											  ?>
											  </select>
										  </td>
                                                  <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="others_new"></td>
                                          <td><input type="text" style="background: none;" class="event_type_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
                    
                        <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>
                        
                        <?php

// PHD
    if(isset($_POST['upduration_type_btn'])) {
        $id = $_POST['del'];
        $event_type = $_POST['event_type'];
        $course_name = $_POST['course_name'];
        $organisation = $_POST['organisation'];
        $duration_type = $_POST['duration_type'];
        $sponsors = $_POST['sponsors'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $academic_year = $_POST['academic_year'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE workshops
            SET event_type = '$event_type', course_name = '$course_name', organisation = '$organisation', duration_type = '$duration_type' , sponsors = '$sponsors' , start_date = '$start_date' , end_date = '$end_date', academic_year = '$academic_year', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record upduration_typed successfully.')</script>";
            echo "<script>window.location = 'workshops.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new'])) {
        $event_type_new = $_POST['event_type_new'];
        $course_name_new = $_POST['course_name_new'];
        $organisation_new = $_POST['organisation_new'];
        $duration_type_new = $_POST['duration_type_new'];
        $sponsors_new = $_POST['sponsors_new'];
        $start_date_new = $_POST['start_date_new'];
        $end_date_new = $_POST['end_date_new'];
        $academic_year_new = $_POST['academic_year_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO workshops (event_type, course_name, organisation, duration_type, sponsors, start_date, end_date, academic_year, others, remarks, fac_id)
        VALUES('$event_type_new', '$course_name_new', '$organisation_new', '$duration_type_new', '$sponsors_new', '$start_date_new', '$end_date_new', '$academic_year_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'workshops.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM workshops WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'workshops.php';</script>";
        }
    }



?>