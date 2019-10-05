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
                                <h2 class="pb-3 display-5">Journal Publications</h2>
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
                                          <th scope="col">Publication Month & Year</th>
                                          <th scope="col">Reffered</th>
                                          <th scope="col">Indexing</th>
                                          <th scope="col">Impact Factor</th>
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
                                            $sql = "SELECT * FROM publication_journal WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
											 $j = 'a';
                                                $k = 1;
                                            if($result) {
                                               
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" value="<?php echo $rows['first_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['first_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['second_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['second_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['third_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['third_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fourth_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fourth_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['title']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="title"></td>
                                                  
                                          <td><select disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="level">
										  <option <?php if($rows['level']=="Institutional") echo 'selected'; ?>>Institutional</option>
										  <option <?php if($rows['level']=="National") echo 'selected'; ?>>National</option>
										  <option <?php if($rows['level']=="International") echo 'selected'; ?>>International</option>
										  </select>
										  </td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['journal_name']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="journal_name"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['publisher']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publisher"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['issn']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issn"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['volume']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="volume"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['issue']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issue"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['pages']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="pages"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['weblinks']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="weblinks"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['doi']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="doi"></td>
                                                  
                                          <td><input type="month" value="<?php echo $rows['publication_month']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publication_month"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['referred']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="referred"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['indexing']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="indexing"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['impact_factor']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="impact_factor"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['academic_year']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="academic_year"></td>
                                                  
                                                  
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="others"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" name="fac_id"></td>
                                                  
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
                                          <td><select class="journal_conferences_<?php echo $j; ?>" name="level_new">
										  <option>Institutional</option>
										  <option>National</option>
										  <option>International</option>
										  </select></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="journal_name_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publisher_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issn_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="volume_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issue_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="pages_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="weblinks_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="doi_new"></td>
                                          <td><input type="month" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publication_month_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="referred_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="indexing_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="impact_factor_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="academic_year_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="others_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
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
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!--                        CONFERENCES-->
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-lg-12" style="background: #f7f7f7; padding: 20px; box-shadow: 0px 0px 8px grey; border-radius: 5px;">
                                <h2 class="pb-3 display-5">Conference Publications</h2>
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
                                          <th scope="col">Publisher</th>
                                          <th scope="col">ISSN</th>
                                          <th scope="col">ISBN</th>
                                          <th scope="col">Pages</th>
                                          <th scope="col">Weblinks</th>
                                          <th scope="col">DOI</th>
                                            <th scope="col">Conference Name</th>
                                          <th scope="col">Conference Place</th>
                                          <th scope="col">Country</th>
                                          <th scope="col">Start date</th>
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
                                            $sql = "SELECT * FROM publication_conference WHERE fac_id ='".$_SESSION['id']."'";
                                            $result = mysqli_query($con, $sql);
                                            if($result) {
                                                $j = 'co';
                                                $k = 1;
                                                while($rows = mysqli_fetch_assoc($result)) {
                                                    
                                                    ?>
                                          <tr>
                                              <form method="POST">
                                          <th scope="row"><?php echo $k; ?></th>
                                                  
                                          <td><input type="text" value="<?php echo $rows['first_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['first_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="first_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['second_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['second_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="second_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['third_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['third_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="third_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fourth_author']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['fourth_author_affiliation']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fourth_author_affiliation"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['title']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="title"></td>
                                                  
                                          <td><select disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="level">
										  <option <?php if($rows['level']=="Institutional") echo 'selected'; ?>>Institutional</option>
										  <option <?php if($rows['level']=="National") echo 'selected'; ?>>National</option>
										  <option <?php if($rows['level']=="International") echo 'selected'; ?>>International</option>
										  </select>
										  </td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['publisher']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publisher"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['issn']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issn"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['isbn']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="isbn"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['pages']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="pages"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['weblinks']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="weblinks"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['doi']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="doi"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['conference_name']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="conference_name"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['conference_place']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="conference_place"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['country']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="country"></td>
                                                  
                                          <td><input type="date" value="<?php echo $rows['start_date']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="start_date"></td>
                                                  
                                          <td><input type="date" value="<?php echo $rows['end_date']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="end_date"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['academic_year']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="academic_year"></td>
                                                  
                                                  
                                          <td><input type="text" value="<?php echo $rows['others']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="others"></td>
                                                  
                                          <td><input type="text" value="<?php echo $rows['remarks']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="remarks"><input type="hidden" value="<?php echo $rows['fac_id']; ?>" disabled style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fac_id"></td>
                                                  
                                              <form method="post">
                                                  <td class="bord"><input type="hidden" name ="del" value="<?php echo $rows['id']; ?>"><button type="submit" name="delete_btn_conference"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="button" name="edit_btn_conference" class="edit_btn" onclick="edit_journal_conferences_<?php echo $j; ?>()"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
                                              <td class="bord"><button type="submit" name="update_btn_conference" class="update_btn"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
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
                                                if(isset($_POST['add_new_btn_conference'])) {
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
                                          <td><select class="journal_conferences_<?php echo $j; ?>" name="level_new">
										  <option>Institutional</option>
										  <option>National</option>
										  <option>International</option>
										  </select></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="publisher_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="issn_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="isbn_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="pages_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="weblinks_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="doi_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="conference_name_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="conference_place_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="country_new"></td>
                                          <td><input type="date" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="start_date_new"></td>
                                          <td><input type="date" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="end_date_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="academic_year_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="others_new"></td>
                                          <td><input type="text" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="remarks_new"><input type="hidden" style="background: none;" class="journal_conferences_<?php echo $j; ?>" name="fac_id_new" value="<?php echo $_SESSION['id'];?>"></td>
                                              <td>
                                                  <button type="submit" class="btn btn-dark btn-block" name="insert_new_conference">SUBMIT</button></td>
                                                  </form>
                                          </tr>
                                          <?php
                                                }
                                          ?>
                                  </tbody>
                            </table>
                        </div>
                                <form method="post">
                                    <button type="submit" class="btn btn-dark" name="add_new_btn_conference" style="margin-top: 20px; float:right;">
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

// JOURNAL
    if(isset($_POST['update_btn_journal'])) {
        $id = $_POST['del'];
        $first_author = $_POST['first_author'];
        $first_author_affiliation = $_POST['first_author_affiliation'];
        $second_author = $_POST['second_author'];
        $second_author_affiliation = $_POST['second_author_affiliation'];
        $third_author = $_POST['third_author'];
        $third_author_affiliation = $_POST['third_author_affiliation'];
        $fourth_author = $_POST['fourth_author'];
        $fourth_author_affiliation = $_POST['fourth_author_affiliation'];
        $title = $_POST['title'];
        $level = $_POST['level'];
        $journal_name = $_POST['journal_name'];
        $publisher = $_POST['publisher'];
        $issn = $_POST['issn'];
        $volume = $_POST['volume'];
        $issue = $_POST['issue'];
        $pages = $_POST['pages'];
        $weblinks = $_POST['weblinks'];
        $doi = $_POST['doi'];
        $publication_month = $_POST['publication_month'];
        $publication_year = $_POST['publication_year'];
        $referred = $_POST['referred'];
        $indexing = $_POST['indexing'];
        $impact_factor = $_POST['impact_factor'];
        $academic_year = $_POST['academic_year'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE publication_journal
            SET first_author = '$first_author', first_author_affiliation = '$first_author_affiliation', second_author = '$second_author', second_author_affiliation = '$second_author_affiliation', third_author = '$third_author', third_author_affiliation = '$third_author_affiliation', fourth_author = '$fourth_author', fourth_author_affiliation = '$fourth_author_affiliation', title = '$title', journal_name = '$journal_name', level='$level', publisher = '$publisher', issn = '$issn', volume = '$volume', issue = '$issue', pages = '$pages', weblinks = '$weblinks', doi = '$doi', publication_month = '$publication_month', publication_year = '$publication_year', referred = '$referred', indexing = '$indexing', impact_factor = '$impact_factor', academic_year = '$academic_year', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
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
        $second_author_new = $_POST['second_author_new'];
        $second_author_affiliation_new = $_POST['second_author_affiliation_new'];
        $third_author_new = $_POST['third_author_new'];
        $third_author_affiliation_new = $_POST['third_author_affiliation_new'];
        $fourth_author_new = $_POST['fourth_author_new'];
        $fourth_author_affiliation_new = $_POST['fourth_author_affiliation_new'];
        $title_new = $_POST['title_new'];
        $level_new = $_POST['level_new'];
        $journal_name_new = $_POST['journal_name_new'];
        $publisher_new = $_POST['publisher_new'];
        $issn_new = $_POST['issn_new'];
        $volume_new = $_POST['volume_new'];
        $issue_new = $_POST['issue_new'];
        $pages_new = $_POST['pages_new'];
        $weblinks_new = $_POST['weblinks_new'];
        $doi_new = $_POST['doi_new'];
        $publication_month_new = $_POST['publication_month_new'];
        $publication_year_new = $_POST['publication_year_new'];
        $referred_new = $_POST['referred_new'];
        $indexing_new = $_POST['indexing_new'];
        $impact_factor_new = $_POST['impact_factor_new'];
        $academic_year_new = $_POST['academic_year_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO publication_journal (first_author, first_author_affiliation, second_author, second_author_affiliation, third_author, third_author_affiliation, fourth_author, fourth_author_affiliation, title, level, journal_name, publisher, issn, volume, issue, pages, weblinks, doi, publication_month, publication_year, referred, indexing, impact_factor, academic_year, others, remarks, fac_id)
        VALUES('$first_author_new', '$first_author_affiliation_new', '$second_author_new', '$second_author_affiliation_new', '$third_author_new', '$third_author_affiliation_new', '$fourth_author_new', '$fourth_author_affiliation_new', '$title_new', '$level_new', '$journal_name_new', '$publisher_new', '$issn_new', '$volume_new', '$issue_new', '$pages_new', '$weblinks_new', '$doi_new', '$publication_month_new', '$publication_year_new', '$referred_new', '$indexing_new', '$impact_factor_new', '$academic_year_new', '$others_new', '$remarks_new', '$fac_id_new')";
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

                        
                        
                        // CONFERENCE
    if(isset($_POST['update_btn_conference'])) {
        $id = $_POST['del'];
        $first_author = $_POST['first_author'];
        $first_author_affiliation = $_POST['first_author_affiliation'];
        $second_author = $_POST['second_author'];
        $second_author_affiliation = $_POST['second_author_affiliation'];
        $third_author = $_POST['third_author'];
        $third_author_affiliation = $_POST['third_author_affiliation'];
        $fourth_author = $_POST['fourth_author'];
        $fourth_author_affiliation = $_POST['fourth_author_affiliation'];
        $title = $_POST['title'];
        $level = $_POST['level'];
        $publisher = $_POST['publisher'];
        $issn = $_POST['issn'];
        $isbn = $_POST['isbn'];
        $pages = $_POST['pages'];
        $weblinks = $_POST['weblinks'];
        $doi = $_POST['doi'];
        $conference_name = $_POST['conference_name'];
        $conference_place = $_POST['conference_place'];
        $country = $_POST['country'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $academic_year = $_POST['academic_year'];
        $others = $_POST['others'];
        $remarks = $_POST['remarks'];
        $fac_id = $_SESSION['id'];
        $sql = "UPDATE publication_conference
            SET first_author = '$first_author', first_author_affiliation = '$first_author_affiliation', second_author = '$second_author', second_author_affiliation = '$second_author_affiliation', third_author = '$third_author', third_author_affiliation = '$third_author_affiliation', fourth_author = '$fourth_author', fourth_author_affiliation = '$fourth_author_affiliation', title = '$title', publisher = '$publisher', level='$level', issn = '$issn', isbn = '$isbn', pages = '$pages', weblinks = '$weblinks', doi = '$doi', conference_name = '$conference_name', conference_place = '$conference_place', country = '$country', start_date = '$start_date', end_date = '$end_date', academic_year = '$academic_year', others = '$others', remarks = '$remarks', fac_id = '$fac_id'
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

    if(isset($_POST['insert_new_conference'])) {
        $first_author_new = $_POST['first_author_new'];
        $first_author_affiliation_new = $_POST['first_author_affiliation_new'];
        $second_author_new = $_POST['second_author_new'];
        $second_author_affiliation_new = $_POST['second_author_affiliation_new'];
        $third_author_new = $_POST['third_author_new'];
        $third_author_affiliation_new = $_POST['third_author_affiliation_new'];
        $fourth_author_new = $_POST['fourth_author_new'];
        $fourth_author_affiliation_new = $_POST['fourth_author_affiliation_new'];
        $title_new = $_POST['title_new'];
        $level_new = $_POST['level_new'];
        $publisher_new = $_POST['publisher_new'];
        $issn_new = $_POST['issn_new'];
        $isbn_new = $_POST['isbn_new'];
        $pages_new = $_POST['pages_new'];
        $weblinks_new = $_POST['weblinks_new'];
        $doi_new = $_POST['doi_new'];
        $conference_name_new = $_POST['conference_name_new'];
        $conference_place_new = $_POST['conference_place_new'];
        $country_new = $_POST['country_new'];
        $start_date_new = $_POST['start_date_new'];
        $end_date_new = $_POST['end_date_new'];
        $academic_year_new = $_POST['academic_year_new'];
        $others_new = $_POST['others_new'];
        $remarks_new = $_POST['remarks_new'];
        $fac_id_new = $_SESSION['id'];
        $sql = "INSERT INTO publication_conference (first_author, first_author_affiliation, second_author, second_author_affiliation, third_author, third_author_affiliation, fourth_author, fourth_author_affiliation, title, level, publisher, issn, isbn, pages, weblinks, doi, conference_name, conference_place, country, start_date, end_date, academic_year, others, remarks, fac_id)
        VALUES('$first_author_new', '$first_author_affiliation_new', '$second_author_new', '$second_author_affiliation_new', '$third_author_new', '$third_author_affiliation_new', '$fourth_author_new', '$fourth_author_affiliation_new', '$title_new', '$level_new', '$publisher_new', '$issn_new', '$isbn_new', '$pages_new', '$weblinks_new', '$doi_new', '$conference_name_new', '$conference_place_new', '$country_new', '$start_date_new', '$end_date_new', '$academic_year_new', '$others_new', '$remarks_new', '$fac_id_new')";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record added successfully.')</script>";
            echo "<script>window.location = 'journal_conferences.php';</script>";
        }
        else {
            echo "<script>alert('ERROR')</script>";
        }
    }

if(isset($_POST['delete_btn_conference'])) {
        $id = $_POST['del'];
        $sql = "DELETE FROM publication_conference WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<script>alert('Record deleted successfully.')</script>";
            echo "<script>window.location = 'journal_conferences.php';</script>";
        }
    }



?>