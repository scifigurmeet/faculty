<?php $ok = "expert_talks" ?>
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
                                <h2 class="pb-3 display-5">Expert Talks</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Talk Title</th>
                                          <th scope="col">Event Name</th>
                                          <th scope="col">Organised By</th>
                                          <th scope="col">Date</th>
                                          <th scope="col">Level</th>
                                          <th scope="col">Academic Year</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM expert_talks WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$j = 'a';
                                                $k = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" value="<?php echo $rows['talk_title']; ?>" disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="talk_title"></td>
                                                  <td><input type="text" value="<?php echo $rows['event_name']; ?>" disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="event_name"></td>
                                              <td><input type="text" value="<?php echo $rows['organised_by']; ?>" disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="organised_by"></td>
                                          <td><input type="date" value="<?php echo $rows['date']; ?>" disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="date"></td>
                                          <td><select disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="level">
										  <option <?php if($rows['level']=="Institutional") echo 'selected'; ?>>Institutional</option>
										  <option <?php if($rows['level']=="National") echo 'selected'; ?>>National</option>
										  <option <?php if($rows['level']=="International") echo 'selected'; ?>>International</option>
										  </select>
										  </td>
                                                  <td><select disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="others">
												   <?php
											  for($x=date("Y");$x>=1950;$x--){
												  ?>
												  <option <?php if($x==$rows['others']) echo 'selected'; ?>><?php echo $x.'-'.($x+1); ?></option>
												  <?php
											  }
											  ?>
											  </select>
												  </td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="talk_title_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_talk_title_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_talk_title_<?php echo $j; ?>(){
                                                       $(".talk_title_<?php echo $j; ?>").removeAttr("disabled");
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
                                          <td><input type="text" style="background: none;" class="talk_title_<?php echo $j; ?>" name="talk_title_new"></td>
                                                  <td><input type="text" style="background: none;" class="talk_title_<?php echo $j; ?>" name="event_name_new"></td>
                                                  <td><input type="text" style="background: none;" class="talk_title_<?php echo $j; ?>" name="organised_by_new"></td>
                                          <td><input type="date" style="background: none;" class="talk_title_<?php echo $j; ?>" name="date_new"></td>
                                          <td><select style="background: none;" class="talk_title_<?php echo $j; ?>" name="level_new">
										  <option>Institutional</option>
										  <option>National</option>
										  <option>International</option>
										  </select></td>
                                                  <td>
												  <select style="background: none;" class="talk_title_<?php echo $j; ?>" name="others_new">
												   <?php
											  for($x=date("Y");$x>=1950;$x--){
												  ?>
												  <option <?php if($x==$rows['others']) echo 'selected'; ?>><?php echo $x.'-'.($x+1); ?></option>
												  <?php
											  }
											  ?>
											  </select>
												  </td>
                                          <td><input type="text" style="background: none;" class="talk_title_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
    if(isset($_POST['update_btn'])) {
        $id = $_POST['del'];
        $talk_title = $_POST['talk_title'];
        $event_name = $_POST['event_name'];
        $organised_by = $_POST['organised_by'];
        $date = $_POST['date'];
        $level = $_POST['level'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE expert_talks
            SET talk_title = '$talk_title', event_name = '$event_name', organised_by = '$organised_by', date = '$date', level = '$level', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'expert_talks.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new'])) {
        $talk_title_new = $_POST['talk_title_new'];
        $event_name_new = $_POST['event_name_new'];
        $organised_by_new = $_POST['organised_by_new'];
        $date_new = $_POST['date_new'];
        $level_new = $_POST['level_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO expert_talks (talk_title, event_name, organised_by, date, level, others, remarks, fac_id)
        VALUES('$talk_title_new', '$event_name_new', '$organised_by_new', '$date_new', '$level_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'expert_talks.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM expert_talks WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'expert_talks.php';</script>";
        }
    }



?>