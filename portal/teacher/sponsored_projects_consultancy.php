<?php $ok = "project" ?>
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
                        
                        
<!--                        PROJECTS-->
                        <div class="row">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">Sponsored Projects</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Project Title</th>
                                          <th scope="col">External Funds Received (In ₹)</th>
                                          <th scope="col">Position</th>
                                          <th scope="col">Sponsor</th>
                                          <th scope="col">Commencement Date</th>
                                          <th scope="col">Duration From</th>
                                          <th scope="col">Duration To</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Others</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM sponsored_projects WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											$j = 'a';
                                                $k = 1;
                                            if($result) {
                                                
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" value="<?php echo $rows['project_title']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="project_title"></td>
                                                  
                                          <td><input type="number" value="<?php echo $rows['ext_funds_received']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="ext_funds_received"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['position']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="position"></td>
                                                  
                                                  <td><input type="text" value="<?php echo $rows['sponsor']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="sponsor"></td>
                                                  
                                          <td><input type="date" value="<?php echo $rows['commencement_date']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="commencement_date"></td>
                                                  
                                                  <td><input type="date" value="<?php echo $rows['duration_from']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_from"></td>
                                                  
                                              <td><input type="date" value="<?php echo $rows['duration_to']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_to"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['status']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="status"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="others"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="fac_id"></td>
                                                  
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_projects"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_projects" class="edit_btn" onclick="edit_sponsored_projects_consultancy<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_projects" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_sponsored_projects_consultancy<?php echo $j; ?>(){
                                                       $(".sponsored_projects_consultancy<?php echo $j; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $j++;
                                                    $k++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn_projects'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="project_title_new"></td> 
                                                  
                                          <td><input type="number" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="ext_funds_received_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="position_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="sponsor_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="commencement_date_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_from_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_to_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="status_new"></td>
                                                  
                                          <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="others_new"></td>
                                                  
                                          <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                                  
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new_projects">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_projects" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                        
                        
                        
                        
                        
<!--                        CONSULTANCY-->
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">Consultancy</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Project Title</th>
                                          <th scope="col">(In ₹)</th>
                                          <th scope="col">Position</th>
                                          <th scope="col">Sponsor</th>
                                          <th scope="col">Commencement Date</th>
                                          <th scope="col">Duration From</th>
                                          <th scope="col">Duration To</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Others</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM consultancy WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
                                            if($result) {
                                                $j = 'a';
                                                $k = 1;
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" value="<?php echo $rows['project_title']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="project_title"></td>
                                                  
                                          <td><input type="number" value="<?php echo $rows['cost']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="cost"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['position']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="position"></td>
                                                  
                                                  <td><input type="text" value="<?php echo $rows['sponsor']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="sponsor"></td>
                                                  
                                          <td><input type="date" value="<?php echo $rows['commencement_date']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="commencement_date"></td>
                                                  
                                                  <td><input type="date" value="<?php echo $rows['duration_from']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_from"></td>
                                                  
                                              <td><input type="date" value="<?php echo $rows['duration_to']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_to"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['status']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="status"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="others"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="fac_id"></td>
                                                  
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_consultancy"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_consultancy" class="edit_btn" onclick="edit_sponsored_projects_consultancy<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_consultancy" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_sponsored_projects_consultancy<?php echo $j; ?>(){
                                                       $(".sponsored_projects_consultancy<?php echo $j; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $j++;
                                                    $k++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn_consultancy'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="project_title_new"></td> 
                                                  
                                          <td><input type="number" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="cost_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="position_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="sponsor_new"></td>
                                                  
                                                  <td><input type="date" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="commencement_date_new"></td>
                                                  
                                                  <td><input type="date" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_from_new"></td>
                                                  
                                                  <td><input type="date" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="duration_to_new"></td>
                                                  
                                                  <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="status_new"></td>
                                                  
                                          <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="others_new"></td>
                                                  
                                          <td><input type="text" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="sponsored_projects_consultancy<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                                  
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new_consultancy">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_consultancy" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                        <div style="height: 50px;">
                        </div>
                    
                        <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>
                        
                        <?php

// PORJECTS
    if(isset($_POST['update_btn_projects'])) {
        $id = $_POST['del'];
        $project_title = $_POST['project_title'];
        $ext_funds_received = $_POST['ext_funds_received'];
        $position = $_POST['position'];
        $sponsor = $_POST['sponsor'];
        $commencement_date = $_POST['commencement_date'];
        $duration_from = $_POST['duration_from'];
        $duration_to = $_POST['duration_to'];
        $status = $_POST['status'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE sponsored_projects
            SET project_title = '$project_title', ext_funds_received = '$ext_funds_received', position = '$position', sponsor = '$sponsor', commencement_date = '$commencement_date', duration_from = '$duration_from', duration_to = '$duration_to', status = '$status', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'sponsored_projects_consultancy.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new_projects'])) {
        $project_title_new = $_POST['project_title_new'];
        $ext_funds_received_new = $_POST['ext_funds_received_new'];
        $position_new = $_POST['position_new'];
        $sponsor_new = $_POST['sponsor_new'];
        $commencement_date_new = $_POST['commencement_date_new'];
        $duration_from_new = $_POST['duration_from_new'];
        $duration_to_new = $_POST['duration_to_new'];
        $status_new = $_POST['status_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO sponsored_projects (project_title, ext_funds_received, position, sponsor, commencement_date, duration_from, duration_to, status, others, remarks, fac_id)
        VALUES('$project_title_new', '$ext_funds_received_new', '$position_new', '$sponsor_new', '$commencement_date_new', '$duration_from_new', '$duration_to_new', '$status_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'sponsored_projects_consultancy.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn_projects'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM sponsored_projects WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'sponsored_projects_consultancy.php';</script>";
        }
    }
                        
                        // CONSULTANCY
    if(isset($_POST['update_btn_consultancy'])) {
        $id = $_POST['del'];
        $project_title = $_POST['project_title'];
        $cost = $_POST['cost'];
        $position = $_POST['position'];
        $sponsor = $_POST['sponsor'];
        $commencement_date = $_POST['commencement_date'];
        $duration_from = $_POST['duration_from'];
        $duration_to = $_POST['duration_to'];
        $status = $_POST['status'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE consultancy
            SET project_title = '$project_title', cost = '$cost', position = '$position', sponsor = '$sponsor', commencement_date = '$commencement_date', duration_from = '$duration_from', duration_to = '$duration_to', status = '$status', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'sponsored_projects_consultancy.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new_consultancy'])) {
        $project_title_new = $_POST['project_title_new'];
        $cost_new = $_POST['cost_new'];
        $position_new = $_POST['position_new'];
        $sponsor_new = $_POST['sponsor_new'];
        $commencement_date_new = $_POST['commencement_date_new'];
        $duration_from_new = $_POST['duration_from_new'];
        $duration_to_new = $_POST['duration_to_new'];
        $status_new = $_POST['status_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO consultancy (project_title, cost, position, sponsor, commencement_date, duration_from, duration_to, status, others, remarks, fac_id)
        VALUES('$project_title_new', '$cost_new', '$position_new', '$sponsor_new', '$commencement_date_new', '$duration_from_new', '$duration_to_new', '$status_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'sponsored_projects_consultancy.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn_consultancy'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM consultancy WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'sponsored_projects_consultancy.php';</script>";
        }
    }



?>