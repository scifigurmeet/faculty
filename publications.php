<?php
$sql2 = "SELECT * FROM publication_journal where fac_id ='".$_GET["q"]."' ORDER BY publication_year DESC";
$data2 = mysqli_query($con, $sql2);
$nows1 = mysqli_num_rows($data2);
if($nows1==0)
{
echo "<style>
  #journal{
  display:none !important;
  </style>";
}

$sql3 = "SELECT * FROM publication_conference where fac_id ='".$_GET["q"]."' order by start_date DESC, end_date DESC";
$data3 = mysqli_query($con, $sql3);
$nows2 = mysqli_num_rows($data3);
if($nows2==0)
{
echo "<style>
  #conference{
  display:none !important;
  </style>";
}

if($nows1==0 and $nows2==0)
{
	echo "<style>
  #publications{
  display:none !important;
  </style>";
}
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="publications">
        <div class="my-auto">
          <h2 class="mb-5">PUBLICATIONS</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
          		<h3 class="mb-0" id="journal">JOURNAL</h3><br>                      
                    <div class="row" id="journal">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
					          				<tr class="text-uppercase">
					          					<th>S.no.</th>
					          				    <th>Title</th>
					          					<th>level</th>
					          					<th>journal name</th>
					          					<th>publisher</th>
					          					<th>issn / isbn</th>
					          					<th>volume</th>
					          					<th>issue</th>
					          					<th>pages</th>
					          					<th>publication month</th>
					          					<th>publication year</th>
					          					
					          				</tr>
					          			</thead>
					          			<tbody>
					          				<?php
					          				
					          				$a=0;
					          				while($row2=mysqli_fetch_array($data2))
					          				{
					          					$a++;
					          					echo "<tr>";
					          					echo "<td>".$a."</td>";
					          					
					          					echo "<td>".$row2['title']."</td>";
					          					echo "<td>".$row2['level']."</td>";
					          					echo "<td>".$row2['journal_name']."</td>";
					          					echo "<td>".$row2['publisher']."</td>";
					          					echo "<td>".$row2['issn']."</td>";
					          					echo "<td>".$row2['volume']."</td>";
					          					echo "<td>".$row2['issue']."</td>";
					          					echo "<td>".$row2['pages']."</td>";
					          					echo "<td>".$row2['publication_month']."</td>";
					          					echo "<td>".$row2['publication_year']."</td>";
					          					
					          					echo "</tr>";
					          				}
					          				?>
					          			</tbody>
					          		</table>
					          	</div>
					        </div>
					        </div> <br id="journal"><br id="journal">     



			    <h3 class="mb-0" id="conference">conference</h3><br> 
			    <div class="row" id="conference">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
					          				<tr class="text-uppercase">
					          					<th>S.no.</th>
					          					
					          					<th>Title</th>
					          					<th>level</th>
					          					<th>publisher</th>
					          					<th>pages</th>
					          					<th>name of conference</th>
					          					<th>place of conference</th>
					          					<th>country</th>
					          					<th>start date</th>
					          					<th>end date</th>
					          					<th>duration</th>
					          				</tr>
					          			</thead>
					          			<tbody>
					          				<?php
					          				
					          				$a=0;

					          				while($row3=mysqli_fetch_array($data3))
					          				{
					          					$a++;
					          					$date1=date("Y-m-d",strtotime($row3['start_date']));
					                              $date2=date("Y-m-d",strtotime($row3['end_date']));
					                              $date1=date_create($date1);
					                              $date2=date_create($date2);
					                              $diff=date_diff($date1,$date2);
					                              $diff=$diff->format("%y Years %m Months");

					          					echo "<tr>";
					          					echo "<td>".$a."</td>";
					          					
					          					echo "<td>".$row3['title']."</td>";
					          					echo "<td>".$row3['level']."</td>";
					          					echo "<td>".$row3['publisher']."</td>";
					          					echo "<td>".$row3['pages']."</td>";
					          					echo "<td>".$row3['conference_name']."</td>";
					          					echo "<td>".$row3['conference_place']."</td>";
					          					echo "<td>".$row3['country']."</td>";
					          					echo "<td>".date("d/m/Y", strtotime($row3['start_date']))."</td>";
					          					echo "<td>".date("d/m/Y", strtotime($row3['end_date']))."</td>";
					          					echo "<td>".$diff."</td>";
					          					echo "</tr>";
					          				}
					          				?>
					          			</tbody>
					          		</table>
					          	</div>
					        </div>
					    </div>
          	</div>
          </div>
        </div>
      </section>