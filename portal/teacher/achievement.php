<?php $ok = "achieve" ?>
<?php $ok1 = "engagement" ?>
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
                                <h2 class="pb-3 display-5">Achievements</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Achievement</th>
                                          <th scope="col">Achievement Type</th>
                                          <th scope="col">Year</th>
                                          <th scope="col">Others</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM achievements WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$j = 'a';
                                                $k = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" value="<?php echo $rows['achievement']; ?>" disabled style="background: none;" class="achievement_<?php echo $j; ?>" name="achievement"></td>
                                                  <td><input type="text" value="<?php echo $rows['achievement_type']; ?>" disabled style="background: none; border:0px solid black;" class="achievement_<?php echo $j; ?>" name="achievement_type"></td>
                                              <td><select disabled style="background: none;" class="achievement_<?php echo $j; ?>" name="year">
											  <?php
											  for($x=date("Y");$x>=1950;$x--){
												  ?>
												  <option <?php if($x==$rows['year']) echo 'selected'; ?>><?php echo $x;; ?></option>
												  <?php
											  }
											  ?>
											  </select></td>
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="achievement_<?php echo $j; ?>" name="others"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="achievement_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_achievement_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_achievement_<?php echo $j; ?>(){
                                                       $(".achievement_<?php echo $j; ?>").removeAttr("disabled");
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
                                          <td><input type="text" style="background: none;" class="achievement_<?php echo $j; ?>" name="achievement_new"></td>
                                         <td><input type="text" style="background: none; border:0px solid black;" class="achievement_<?php echo $j; ?>" name="achievement_type_new"></td>
                                                  <td>
												  <select style="background: none;" class="achievement_<?php echo $j; ?>" name="year_new">
											  <?php
											  for($x=date("Y");$x>=1950;$x--){
												  ?>
												  <option><?php echo $x;; ?></option>
												  <?php
											  }
											  ?>
											  </select>
												  </td>
                                          <td><input type="text" style="background: none;" class="achievement_<?php echo $j; ?>" name="others_new"></td>
                                          <td><input type="text" style="background: none;" class="achievement_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="achievement_<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
        $achievement = $_POST['achievement'];
        $achievement_type = $_POST['achievement_type'];
        $year = $_POST['year'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE achievements
            SET achievement = '$achievement', achievement_type = '$achievement_type', year = '$year', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'achievement.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new'])) {
        $achievement_new = $_POST['achievement_new'];
        $achievement_type_new = $_POST['achievement_type_new'];
        $year_new = $_POST['year_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO achievements (achievement, achievement_type, year, others, remarks, fac_id)
        VALUES('$achievement_new', '$achievement_type_new', '$year_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'achievement.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM achievements WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'achievement.php';</script>";
        }
    }



?>