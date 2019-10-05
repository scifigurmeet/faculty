<?php $ok = "csv" ?>
<?php include "header.php"; ?>
<?php include "conn.php"; 
			if(isset($_POST["a_update"])){
	$sql = "UPDATE personal_details SET name = '".$_POST['fac_name']."', date_of_birth = '".$_POST['fac_dob']."', designation = '".$_POST['fac_designation']."', highest_qualification = '".$_POST['fac_highest_qualification']."', department = '".$_POST['fac_department']."', joining_date = '".$_POST['fac_joining_date']."', present_post_held_from = '".$_POST['fac_present_post_held_from']."' WHERE fac_id='".$_SESSION['id']."'";
    mysqli_query($con, $sql);
			}
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
<?php
if($type=="hod" OR $type=="admin"){
	$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$_POST['table']."'";
}
else {
	echo "<script>alert('Access Denied! You Can Not Access This Page!');
	history.go(-1);</script>";
	exit("Access Denied!");
}
?>
            <!-- MAIN CONTENT-->
			<?php
			$result = mysqli_query($con, $sql);
			$columns="";
			$count=0;
			while($rows = mysqli_fetch_assoc($result)){
			$column=$rows["COLUMN_NAME"];
			if(isset($_POST[$column])){
				$columns.=$column.",";
				$colo[$count]=ucfirst(str_replace("_"," ",$column));
				$count++;
			}
			}
			$columns=substr($columns, 0, -1); 
			?>
            <div class="main-content">
                <div class="section__content section__content--p30">
				<form action="#colso" style="background:white; padding:25px; width:50%; border-radius:10px;" method="POST">
				Select Appropriate Category<br><br>
				<select name="table" class="form-control">
				<?php
				$sql="SELECT DISTINCT TABLE_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = N'id6678524_gne'";
			$result = mysqli_query($con, $sql);
			while($rows = mysqli_fetch_assoc($result)){?>
				<option value="<?php echo $rows["TABLE_NAME"];?>"><?php echo ucfirst(str_replace("_"," ",$rows["TABLE_NAME"]));?></option>
			<?php } ?>
				</select><br>
				<button id="colso" class="btn btn-success">Submit</button>
				</form><br>
				<?php
			if(isset($_POST["generate"])){
				if($type=="admin"){
	$sql="SELECT ".$columns." FROM ".$_POST['table'];
				}
				else
			$sql="SELECT ".$columns." FROM ".$_POST['table']." WHERE fac_id IN (SELECT fac_id from personal_details WHERE department='Department of Information Technology')";
			$result = mysqli_query($con, $sql);
			$date=date("Y-m-d h-i-sa");
$fp = fopen('downloads/'.$date.'.csv', 'w');
fputcsv($fp, $colo);
if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        fputcsv($fp, $row);
    }
	$chak="CHAK";
}

			fclose($fp);}
			?>
<?php if(isset($_POST["generate"])){?>
<a id="chakde" class="btn btn-success" href="downloads/<?php echo $date ?>.csv" target="_blank" download>Download now!</a>
<?php }?>
				<?php if(isset($_POST["table"])){?>
				<form action="" method="POST">
				<?php if(!isset($_POST["generate"])){?>
				<div style="background:white; padding:25px; width:40%; border-radius:30px;">
				<table>
				<tbody>
				<h3>Select the Columns To Export</h3><br>
			<?php
			$sql="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'".$_POST['table']."' AND TABLE_SCHEMA='id6678524_gne'";
			$result = mysqli_query($con, $sql);
			$count=0;
			while($rows = mysqli_fetch_assoc($result)){
			?>
			<tr>
			<?php
			$cname=str_replace("_"," ",$rows["COLUMN_NAME"]);
			$cname=ucfirst($cname);
			?>
			<td><?php echo $cname;?></td>
			<td>
				<label class="au-checkbox" >
                <input type="checkbox" id="checkAll<?php echo $count;?>" name="<?php echo $rows["COLUMN_NAME"];?>">
                <span class="au-checkmark"></span>
				</label>
			</td>
			</tr>
			<?php 
			$count++;
			}?>
			<tr><td></td><td> </td></tr>
			</tbody>
			</table>
			</div>
				<?php } ?><br>
			<input type="hidden" value="<?php echo $_POST['table'];?>" name="table">
			<?php if(!isset($_POST["generate"])){?>
			<button class="btn btn-success" name="generate">Generate</button>
			<?php } ?>
				</form><br>
                </div>
            </div>
			<!-- END MAIN CONTENT-->
				<?php } include "footer.php"; ?>