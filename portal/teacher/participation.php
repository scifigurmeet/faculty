<?php $ok = "parti" ?>
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
                                <h2 class="pb-3 display-5">Participations</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Participation Type</th>
                                          <th scope="col">Duration From</th>
                                          <th scope="col">Duration To</th>
                                          <th scope="col">Institution</th>
                                          <th scope="col">Others</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM participation_organized WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$j = 'a';
                                                $k = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" value="<?php echo $rows['title']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="title"></td>
                                          <td><input type="text" value="<?php echo $rows['participation']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="participation"></td>
                                                  <td><input type="date" value="<?php echo $rows['duration_from']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="duration_from"></td>
                                              <td><input type="date" value="<?php echo $rows['duration_to']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="duration_to"></td>
                                          <td><input type="text" value="<?php echo $rows['institution']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="institution"></td>
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="others"></td>
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="participation_<?php echo $j; ?>" name="fac_id"></td>
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn" class="edit_btn" onclick="edit_participation_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_participation_<?php echo $j; ?>(){
                                                       $(".participation_<?php echo $j; ?>").removeAttr("disabled");
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
                                          <td><input type="text" style="background: none;" class="participation_<?php echo $j; ?>" name="title_new"></td>
                                          <td><input type="text" style="background: none;" class="participation_<?php echo $j; ?>" name="participation_new"></td>
                                                  <td><input type="date" style="background: none;" class="participation_<?php echo $j; ?>" name="duration_from_new"></td>
                                                  <td><input type="date" style="background: none;" class="participation_<?php echo $j; ?>" name="duration_to_new"></td>
                                          <td><input type="text" style="background: none;" class="participation_<?php echo $j; ?>" name="institution_new"></td>
                                          <td><input type="text" style="background: none;" class="participation_<?php echo $j; ?>" name="others_new"></td>
                                          <td><input type="text" style="background: none;" class="participation_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="participation_<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
        $title = $_POST['title'];
        $participation = $_POST['participation'];
        $duration_from = $_POST['duration_from'];
        $duration_to = $_POST['duration_to'];
        $institution = $_POST['institution'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE participation_organized
            SET title = '$title', participation = '$participation', duration_from = '$duration_from', duration_to = '$duration_to', institution = '$institution', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'participation.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new'])) {
        $title_new = $_POST['title_new'];
        $participation_new = $_POST['participation_new'];
        $duration_from_new = $_POST['duration_from_new'];
        $duration_to_new = $_POST['duration_to_new'];
        $institution_new = $_POST['institution_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        echo $sql = "INSERT INTO participation_organized (title, participation, duration_from, duration_to, institution, others, remarks, fac_id)
        VALUES('$title_new', '$participation_new', '$duration_from_new', '$duration_to_new', '$institution_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'participation.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM participation_organized WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'participation.php';</script>";
        }
    }



?>