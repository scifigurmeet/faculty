<?php
    if(isset($_POST['insert_new_qual'])) {
        $qual = $_POST['qual'];
        $year = $_POST['year'];
		$fac_id = $_SESSION['id'];
        $sql = "INSERT INTO qualifications (qual,year,fac_id)
        VALUES('$qual', '$year','$fac_id')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            ?>
		 <script>
										  $('.nav-tabs a[href="#nav-contact"]').tab('show');
										  </script>
		<?php
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }
	if(isset($_POST['delete_btn_qual'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM qualifications WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            ?>
		 <script>
										  $('.nav-tabs a[href="#nav-contact"]').tab('show');
										  </script>
		<?php
        }
    }
	if(isset($_POST['update_btn_qual'])) {
        $id = $_POST['del'];
        $qual = $_POST['qual'];
        $year = $_POST['year'];
        $sql = "UPDATE qualifications SET qual = '$qual', year = '$year' WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            ?>
		 <script>
										  $('.nav-tabs a[href="#nav-contact"]').tab('show');
										  </script>
		<?php
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

?>
<div id="qualtable" class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">Qualification</th>
                                          <th scope="col">Year</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM qualifications WHERE fac_id ='".$_SESSION['id']."' ORDER BY year DESC";
                                            $result = mysqli_query($con, $sql);
											 $j = 'a';
                                                $k = 1;
                                            if($result) {
                                               
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input required  type="text" value="<?php echo $rows['qual']; ?>" disabled style="background: none;" class="qual_qual_<?php echo $j; ?>" name="qual"></td>
                                                  
                                          <td><select required disabled style="background: none;" class="qual_qual_<?php echo $j; ?>" name="year">
										  <?php for($x=1950;$x<=date("Y");$x++){ ?>
										  <option <?php if($rows['year']==$x) echo 'selected'; ?>><?php echo $x; ?></option>
										  <?php  }?>
										  </select>
										  </td>
                                                  
                                                  
                                                  
                                              <form method="post">
                                                  <td class="bord"><input required  type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_qual"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_qual" class="edit_btn" onclick="edit_qual_qual_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_qual" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_qual_qual_<?php echo $j; ?>(){
                                                       $(".qual_qual_<?php echo $j; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $j++;
                                                    $k++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn_qual'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $k; ?></th>
                                          <td><input required  type="text" style="background: none;" class="qual_qual_<?php echo $j; ?>" name="qual"></td>
                                          <td><select required style="background: none;" class="qual_qual_<?php echo $j; ?>" name="year">
										  <?php for($x=1950;$x<=date("Y");$x++){ ?>
										  <option <?php if($rows['year']==$x) echo 'selected'; ?>><?php echo $x; ?></option>
										  <?php  }?>
										  </select></td>
                                          <td><button type="submit" class="btn btn-dark btn-block" name="insert_new_qual">SUBMIT</button></td>
										  
                                                  
                                                  </form>
                                          </tr>
										  <script>
										  $('.nav-tabs a[href="#nav-contact"]').tab('show');
										  </script>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
						<form method="post" action="#qualtable">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_qual" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>