<?php
$sql18 = "SELECT * FROM consultancy where status = 'completed' and fac_id ='".$_GET["q"]."'
 ORDER BY commencement_date DESC";
$data18 = mysqli_query($con, $sql18);
$nows1 = mysqli_num_rows($data18);
if($nows1==0)
{
  echo "<style>
  #consultancy_completed{
  display:none !important;
  </style>";
}

$sql19 = "SELECT * FROM consultancy where status = 'ongoing' and fac_id ='".$_GET["q"]."'
 ORDER BY commencement_date DESC";
$data19 = mysqli_query($con, $sql19);
$nows2 = mysqli_num_rows($data19);
if($nows2==0)
{
  echo "<style>
  #consultancy_ongoing{
  display:none !important;
  </style>";
}

if($nows1==0 and $nows2==0)
{
  echo "<style>
  #consultancy{
  display:none !important;
  </style>";
}
?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="consultancy">
        <div class="my-auto">
          <h2 class="mb-5">consultancy</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
            	<h3 class="mb-0" id="consultancy_completed">completed</h3><br> 
            	<div class="row" id="consultancy_completed">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>project title</th>
                               <th>position</th>
                              <th>cost ( ₹ )</th>
                              <th>sponsors</th>
                              <th>commencement date</th>
                              <th>start date</th>
                              <th>end date</th>
                              <th>duration</th>
                              
                            </tr>
                           
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row18=mysqli_fetch_array($data18))
                            {
                              $a++;
                              $date1=date("Y-m-d",strtotime($row18['duration_from']));
                              $date2=date("Y-m-d",strtotime($row18['duration_to']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");

                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row18['project_title']."</td>";
                              echo "<td>".$row18['position']."</td>";
                              echo "<td>".$row18['cost']."</td>";
                              echo "<td>".$row18['sponsor']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row18['commencement_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row18['duration_from']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row18['duration_to']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div><br id="consultancy_completed"><br id="consultancy_completed">

                <h3 class="mb-0" id="consultancy_ongoing">ongoing</h3><br> 
                <div class="row" id="consultancy_ongoing">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>project title</th>
                               <th>position</th>
                              <th>cost ( ₹ )</th>
                              <th>sponsors</th>
                              <th>commencement date</th>
                              <th>start date</th>
                              
                            </tr>
                            
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row19=mysqli_fetch_array($data19))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row19['project_title']."</td>";
                              echo "<td>".$row19['position']."</td>";
                              echo "<td>".$row19['cost']."</td>";
                              echo "<td>".$row19['sponsor']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row19['commencement_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row19['duration_from']))."</td>";
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