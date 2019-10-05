<?php $ok = "instruction" ?>
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
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Semester</th>
                                          <th scope="col">Course Number</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Session From</th>
                                          <th scope="col">Session To</th>
                                          <th scope="col">Class Strength</th>
                                          <th scope="col">Result</th>
                                          <th scope="col"></th>
                                          <th scope="col">Hours Engaged</th>
                                          <th scope="col"></th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
										                    <tr>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col">Lecture</th>
                                          <th scope="col">Tutorial</th>
                                          <th scope="col">Practical</th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                          <th scope="col"></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM instructional_work WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
                                                $i = 1;
                                            if($result) {
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $i; ?></th>
                                          <td>
										  <select disabled class="form-control instructional_work_<?php echo $i; ?>" name="semester">
										  <?php for($x=1;$x<=8;$x++) { ?>
										  <option <?php if($rows['semester']==$x) echo 'selected'; ?>><?php echo $x; ?></option>
										  <?php } ?>
										  </select>
										  </td>
                                          <td>
						<select name="course_no" class="form-control instructional_work_<?php echo $i; ?>" disabled>
										  <?php
										  $sql2 = "SELECT * FROM subjects";
                                            $result2 = mysqli_query($con, $sql2);
                                            if($result2) {
                                                while($rosy = mysqli_fetch_assoc($result2)) {
										  ?>
							<option <?php if($rows['course_no']==$rosy['subject_code']) echo 'selected'; ?>><?php echo $rosy['subject_code']?></option>
										  <?php
												}
											}
										  ?>
										  </select>
										  </td>
                                          <td><input type="text" value="<?php echo $rows['title']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="title"></td>
                                          <td><input type="month" value="<?php echo $rows['session_from']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="session_from"></td>
                                          <td><input type="month" value="<?php echo $rows['session_to']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="session_to"></td>
                                          <td><input type="number" min="0" value="<?php echo $rows['class_strength']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="class_strength"></td>
                                          <td><input type="number" min="0" value="<?php echo $rows['result_pass_percent']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="result_pass_percent"></td>
                                          <td><input type="number" min="0" value="<?php echo $rows['hrs_engaged_pw_l']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="hrs_engaged_pw_l"></td>
                                          <td><input type="number" min="0" value="<?php echo $rows['hrs_engaged_pw_t']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="hrs_engaged_pw_t"></td>
                                          <td><input type="number" min="0" value="<?php echo $rows['hrs_engaged_pw_p']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="hrs_engaged_pw_p"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="instructional_work_<?php echo $i; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_instructional_work_<?php echo $i; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_instructional_work_<?php echo $i; ?>(){
                                                       $(".instructional_work_<?php echo $i; ?>").removeAttr("disabled");
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
                                          <td>
										  <select class="form-control instructional_work_<?php echo $i; ?>" name="semester_new">
										  <?php for($x=1;$x<=8;$x++) { ?>
										  <option><?php echo $x; ?></option>
										  <?php } ?>
										  </select>
										  </td>
                                          <td>
										  <select name="course_no_new" class="form-control instructional_work_<?php echo $i; ?>">
										  <?php
										  $sql2 = "SELECT * FROM subjects";
                                            $result2 = mysqli_query($con, $sql2);
                                            if($result2) {
                                                while($rosy = mysqli_fetch_assoc($result2)) {
										  ?>
							<option <?php if($rows['course_no']==$rosy['subject_code']) echo 'selected'; ?>><?php echo $rosy['subject_code']?></option>
										  <?php
												}
											}
										  ?>
										  </select>
										  </td>
                                          <td><input type="text" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="title_new"></td>
                                          <td><input type="month" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="session_from_new"></td>
                                          <td><input type="month" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="session_to_new"></td>
                                          <td><input type="number" min="0" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="class_strength_new"></td>
                                          <td><input type="number" min="0" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="result_pass_percent_new"></td>
                                          <td><input type="number" min="0" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="hrs_engaged_pw_l_new"></td>
                                          <td><input type="number" min="0" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="hrs_engaged_pw_t_new"></td>
                                          <td><input type="number" min="0" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="hrs_engaged_pw_p_new"></td>
                                          <td><input type="text" style="background: none;" class="instructional_work_<?php echo $i; ?>" name="remarks_new"><input type="hidden" style="background: none;" disabled name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
                    </div>
    </div>
            </div>

            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>
<?php
    if(isset($_POST['update_btn'])) {
        $id = $_POST['del'];
        $semester = $_POST['semester'];
        $course_no = $_POST['course_no'];
        $title = $_POST['title'];
        $session_from = $_POST['session_from'];
        $session_to = $_POST['session_to'];
        $class_strength = $_POST['class_strength'];
        $result_pass_percent = $_POST['result_pass_percent'];
        $hrs_engaged_pw_l = $_POST['hrs_engaged_pw_l'];
        $hrs_engaged_pw_t = $_POST['hrs_engaged_pw_t'];
        $hrs_engaged_pw_p = $_POST['hrs_engaged_pw_p'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE instructional_work
            SET semester = '$semester', course_no = '$course_no', title = '$title', session_from = '$session_from', session_to = '$session_to', class_strength = $class_strength, result_pass_percent = '$result_pass_percent', hrs_engaged_pw_l = '$hrs_engaged_pw_l', hrs_engaged_pw_t = '$hrs_engaged_pw_t', hrs_engaged_pw_p = '$hrs_engaged_pw_p', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'instructional_work.php';</script>";
        }
    }

    if(isset($_POST['insert_new'])) {
        $semester_new = $_POST['semester_new'];
        $course_no_new = $_POST['course_no_new'];
        $title_new = $_POST['title_new'];
        $session_from_new = $_POST['session_from_new'];
        $session_to_new = $_POST['session_to_new'];
        $class_strength_new = $_POST['class_strength_new'];
        $result_pass_percent_new = $_POST['result_pass_percent_new'];
        $hrs_engaged_pw_l_new = $_POST['hrs_engaged_pw_l_new'];
        $hrs_engaged_pw_t_new = $_POST['hrs_engaged_pw_t_new'];
        $hrs_engaged_pw_p_new = $_POST['hrs_engaged_pw_p_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO instructional_work (semester, course_no, title, session_from, session_to, class_strength, result_pass_percent, hrs_engaged_pw_l, hrs_engaged_pw_t, hrs_engaged_pw_p, remarks, fac_id)
        VALUES('$semester_new', '$course_no_new', '$title_new', '$session_from_new', '$session_to_new', $class_strength_new, '$result_pass_percent_new', '$hrs_engaged_pw_l_new', '$hrs_engaged_pw_t_new', '$hrs_engaged_pw_p_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'instructional_work.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM instructional_work WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'instructional_work.php';</script>";
        }
    }
?>