<?php
include_once('portal/teacher/conn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Faculty List</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="img/logo1.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="list/css/util.css">
	<link rel="stylesheet" type="text/css" href="list/css/main.css">
<!--===============================================================================================-->
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
    body
    {
      font-family: 'Roboto', sans-serif !important;
    }
    </style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<h1>Faculty List</h1>
			<div class="wrap-table100">
				<a class="btn btn-primary" href="add/index.php"><b>Add Faculty</b></a>
				<a class="btn btn-primary" href="portal/index.php"><b>Login</b></a>
				<br><br>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column2" style="padding-left: 20px;">S.No.</th>
									<th class="cell100 column1">Faculty Name</th>
									<th class="cell100 column3">Designation</th>
									<th class="cell100 column4">Email Id</th>
									<th class="cell100 column5">Details</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
								$sql = "SELECT q.fac_id, personal_details.name,personal_details.email,personal_details.designation FROM personal_details INNER JOIN q ON q.fac_id = personal_details.fac_id";
								$data = mysqli_query($con, $sql);
								$a=0;
								while($row = mysqli_fetch_array($data))
								{
								$a++;
								?>
									<tr class="row100 body">
									<td class="cell100 column2" style="padding-left: 30px;"><?php echo $a;?></td>
									<td class="cell100 column1"  style="text-transform: capitalize;"><?php echo $row['name'];?></td>
									<td class="cell100 column3"  style="text-transform: capitalize;"><?php echo $row['designation'];?></td>
									<td class="cell100 column4"><?php echo $row['email'];?></td>
									<td class="cell100 column5"><?php echo '<a href="index.php?q='.$row['fac_id'].'" class="btn btn-primary">View</a>'?></td>
								</tr>
								<?php	
								}
								?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="list/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="list/vendor/bootstrap/js/popper.js"></script>
	<script src="list/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="list/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="list/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="list/js/main.js"></script>

</body>
</html>