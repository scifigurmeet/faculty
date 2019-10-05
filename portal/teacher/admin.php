<?php $ok = "index" ?>
<?php include "header.php"; ?>
<?php include "conn.php"; 
    $sql = "SELECT * FROM personal_details WHERE fac_id ='".$_SESSION['id']."'";
    $result = mysqli_query($con, $sql);
    if($result) {
        while($rows = mysqli_fetch_assoc($result)) {
            $fac_name = $rows['name'];
            $fac_dob = $rows['date_of_birth'];
            $fac_designation = $rows['designation'];
            $fac_highest_qualification = $rows['highest_qualification'];
            $fac_department = $rows['department'];
            $fac_joining_date = $rows['joining_date'];
            $fac_present_post_held_from = $rows['present_post_held_from'];
            $fac_experience_within_inst = $rows['experience_within_inst'];
            $fac_total_experience = $rows['total_experience'];
            $fac_remarks = $rows['remarks'];
        }
    }
    else {
        echo "<script>alert('ERROR !!')</script>";
    }
?>
<style>
    .info_table {
        font-size: 18px;
        width: 100%;
    }
    .info_table > th, td {
        margin: 5px;
        padding: 3px 10px;
    }
    input:disabled {
        background: transparent !important;
        padding: 5px;
    }
    input:enabled {
        box-shadow: 0px 0px 1px grey;
        padding: 5px;
        background: none;
    }
    .title-1 {
        text-transform: uppercase;
    }
    .design {
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }
</style>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"><?php echo $fac_name; ?></h2>
                                    <span class="alert alert-primary design">
                                        <?php echo $fac_designation; ?>, <?php echo $fac_department; ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="margin-top: 30px; padding: 10px; background: #eee; box-shadow: 0px 0px 5px grey;">
                            <table class="info_table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Date Of Birth</th><td>:</td><td><input type="text" value="<?php echo $fac_dob; ?>" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>Highest Qualification</th><td>:</td><td><input type="text" value="<?php echo $fac_highest_qualification; ?>" disabled></td>
                                    </tr>
                                    <tr>
                                        <th>Date of Joining the Institute</th><td>:</td><td><input type="text" value="<?php echo $fac_joining_date; ?>" disabled></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>