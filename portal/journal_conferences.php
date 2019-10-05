<?php $ok = "journal" ?>
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
                        
                        
<!--                        JOURNAL-->
                        <div class="row">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">Activities Organised</h2>
                                <div class="table-responsive table--no-card m-b-30" style="margin-bottom: 5px">
                                    <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                        <tr>
                                          <th scope="col">S No.</th>
                                          <th scope="col">First Author</th>
                                          <th scope="col">First Author Affiliation</th>
                                            <th scope="col">Second Author</th>
                                          <th scope="col">Second Author Affiliation</th>
                                            <th scope="col">Third Author</th>
                                          <th scope="col">Third Author Affiliation</th>
                                            <th scope="col">Fourth Author</th>
                                          <th scope="col">Fourth Author Affiliation</th>
                                          <th scope="col">Title</th>
                                          <th scope="col">Level</th>
                                          <th scope="col">Journal Name</th>
                                          <th scope="col">Publisher</th>
                                          <th scope="col">ISSN</th>
                                            <th scope="col">Volume</th>
                                          <th scope="col">Issue</th>
                                          <th scope="col">Pages</th>
                                          <th scope="col">Weblinks</th>
                                          <th scope="col">DOI</th>
                                            <th scope="col">Publication Month</th>
                                          <th scope="col">Publication Year</th>
                                          <th scope="col">Reffered</th>
                                          <th scope="col">Indexing</th>
                                          <th scope="col">Impact Factor</th>
                                            <th scope="col">Academic Year</th>
                                          <th scope="col">Others</th>
                                          <th scope="col">Remarks</th>
                                          <th scope="col">Faculty ID</th>
                                          <th scope="col">Delete</th>
                                          <th scope="col">Edit</th>
                                          <th scope="col">Update</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          <?php
                                            $sql = "SELECT * FROM publication_journal WHERE fac_id =".$_SESSION['id'];
                                            $result = mysqli_query($con, $sql);
                                            if($result) {
                                                $j = 'a';
                                                $k = 1;
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" value="<?php echo $rows['first_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['first_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="	first_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['second_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['	second_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="	second_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['third_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['third_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fourth_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fourth_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['title']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="title"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['level']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="level"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['journal_name']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="journal_name"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['publisher']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publisher"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['issn']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issn"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['volume']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="volume"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['issue']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issue"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['pages']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="pages"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['weblinks']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="weblinks"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['doi']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="doi"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['publication_month']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publication_month"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['publication_year']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publication_year"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['referred']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="referred"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['indexing']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="indexing"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['impact_factor']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="impact_factor"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['academic_year']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="academic_year"></td>
                                                  
                                                  
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="others"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="remarks"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fac_id"></td>
                                                  
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_journal"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_journal" class="edit_btn" onclick="edit_journal_conferences_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_journal" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
                                              </form>
                                              </form>
                                        </tr>
                                          
                                          <script>
                                                function edit_journal_conferences_<?php echo $j; ?>(){
                                                       $(".journal_conferences_<?php echo $j; ?>").removeAttr("disabled");
                                                   };
                                            </script>
                                          
                                          <?php
                                                    $j++;
                                                    $k++;
                                                }
                                            }
                                                if(isset($_POST['add_new_btn_journal'])) {
                                                    ?>
                                          <tr>
                                              <form method="post">
                                              <th scope="row"><?php echo $k; ?></th>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author_affiliation_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author_affiliation_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author_affiliation_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author_affiliation_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="title_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="level_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="journal_name_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publisher_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issn_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="volume_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issue_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="pages_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="weblinks_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="doi_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publication_month_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publication_year_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="referred_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="indexing_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="impact_factor_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="academic_year_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="others_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="remarks_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new_journal">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_journal" style="margin-top: 20px; float:right;">
                                        ADD NEW
                                    </button>
                                    </form>
                    </div>
                </div>
                    
                        <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>
                        
                        <?php

// PHD
    if(isset($_POST['update_btn_journal'])) {
        $id = $_POST['del'];
        $first_author = $_POST['first_author'];
        $first_author_affiliation = $_POST['first_author_affiliation'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $title = $_POST['title'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_POST['fac_id'];
        $sql = "UPDATE publication_journal
            SET first_author = '$first_author', first_author_affiliation = '$first_author_affiliation', duration_to = '$duration_to', major_sponsor = '$major_sponsor', level = '$level', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
            WHERE id =".$id;
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record updated successfully.')</script>";
            echo "<script>window.location = 'journal_conferences.php';</script>";
        }
        else {
            echo "ERRORrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr";
        }
    }

    if(isset($_POST['insert_new_journal'])) {
        $first_author_new = $_POST['first_author_new'];
        $first_author_affiliation_new = $_POST['first_author_affiliation_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $title_new = $_POST['title_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_POST['fac_id_new'];
        $sql = "INSERT INTO publication_journal (first_author, first_author_affiliation, duration_to, major_sponsor, level, others, remarks, fac_id)
        VALUES('$first_author_new', '$first_author_affiliation_new', '$duration_to_new', '$major_sponsor_new', '$level_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'journal_conferences.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn_journal'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM publication_journal WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'journal_conferences.php';</script>";
        }
    }



?>