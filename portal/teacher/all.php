<?php $ok = "all" ?>
<?php include "header.php"; ?>
<?php include "conn.php"; 
if($type=="hod"){
	$sql = "SELECT * FROM personal_details WHERE department='".$dep."'";
	if(isset($_GET["search"])){
		$search=$_GET["search"];
		$sql = "SELECT * FROM personal_details WHERE name LIKE '%$search%' AND department='".$dep."'";
	}
}
else if($type=="admin"){
    $sql = "SELECT * FROM personal_details";
	if(isset($_GET["search"])){
		$search=$_GET["search"];
		$sql = "SELECT * FROM personal_details WHERE name LIKE '%$search%'";
	}
}
else {
	echo "<script>alert('Access Denied! You Can Not Access This Page!');
	history.go(-1);</script>";
	exit("Access Denied!");
}
$result = mysqli_query($con, $sql);
	?>
<?php
			if(isset($_POST['gols'])){
				$hello=$_POST['gols'];
				$hello=substr($hello, 0, -1);
				echo $sql="UPDATE q SET type='".$_POST['decide']."' WHERE fac_id IN (".$hello.")";
				$resultx=mysqli_query($con,$sql);
				if($resultx){
					echo "<script>alert('Professor Rights Updated!');</script>";
				}
				else echo "<script>alert('Some Error!');</script>";
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
                        <div class="row" style="display:block !important;">
						<!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>All Professors</h3>
                                    <div class="filters m-b-45">
                                        <div class="row">
										<form method="POST" action="" id="rights" style="margin-right:10px;">
										<input type="hidden" id="actions" value="" name="gols">
                                            <select class="form-control" name="decide">
                                                <option value="prof">Assistant Professor</option>
                                                <option value="prof">Associate Professor</option>
                                                <option value="hod">Head of Department</option>
                                                <option value="admin">Adminstrator</option>
                                            </select>
										</form>
										<span id="assign" class="btn btn-danger">Assign Rights</span>
										<span style="margin-left:10px; display:none;" id="final" class="btn btn-success">Confirm</span>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" id="checkAll">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>Control</td>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php
											if($result) {
												while($rows = mysqli_fetch_assoc($result)) {
													$fac_name = $rows['name'];
													$fac_department = $rows['department'];
													$fac_id = $rows['fac_id'];
													$sql1 = "SELECT * FROM q WHERE fac_id='$fac_id'";
													$result1 = mysqli_query($con, $sql1);
													if($result1) {
													while($rows1 = mysqli_fetch_assoc($result1)) {
														$type=  $rows1['type'];
													}
													}
													?>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" class="chk" id="<?php echo $fac_id; ?>">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6><?php echo $fac_name; ?> (<?php echo $fac_id; ?>)</h6>
                                                            <span>
                                                                <a href="#"><?php echo $fac_department; ?></a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
													<?php if($type=="admin"){ $word = "ADMIN"; $style="danger";} 
							else if($type=="hod"){ $word = "HOD"; $style="success";} 
							else { $word = "PROFESSOR"; $style= "primary";}?>
                                                        <span class="role btn-<?php echo $style; ?>"><?php echo $word; ?></span>
                                                    </td>
                                                    <td>
                                                        <span class="more">
														<form action="smart.php" method="POST">
														<input type="hidden" value="<?php echo $fac_id;?>" name="fac_id">
														<button class="btn btn-warning" name="goto">
														Login
														</button>
														</form>
                                                        </span>
                                                    </td>
                                                </tr>
												<?php
												}
											}
											else {
												echo "<script>alert('ERROR !!')</script>";
											}
										?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <?php include "footer.php"; ?>
			<script>
$("#assign").click(function() {
	$("input:checkbox[class=chk]:checked").each(function () {
            $("#actions").val($("#actions").val()+"'"+$(this).attr("id")+"'"+",");
        });
	$("#final").removeAttr("style");
	$("#assign").hide();
});
$("#final").click(function() {
	$("#rights").submit();
});
$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
			</script>