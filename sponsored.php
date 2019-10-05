<?php
$sql15 = "SELECT * FROM sponsored_projects where status='completed' and fac_id ='".$_GET["q"]."' ORDER BY commencement_date DESC";
$data15 = mysqli_query($con, $sql15);
$nows1 = mysqli_num_rows($data15);
if($nows1==0)
{
  echo "<style>
  #project_completed{
  display:none !important;
  </style>";
}
$sql16 = "SELECT * FROM sponsored_projects where status='ongoing' and fac_id ='".$_GET["q"]."' ORDER BY commencement_date DESC";
$data16 = mysqli_query($con, $sql16);
$nows2 = mysqli_num_rows($data16);
if($nows2==0)
{
  echo "<style>
  #project_ongoing{
  display:none !important;
  </style>";
}

if($nows1==0 and $nows2==0)
{
  echo "<style>
  #sponsored_projects{
  display:none !important;
  </style>";
}
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="sponsored_projects">
        <div class="my-auto">
          <h2 class="mb-5">sponsored projects</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" id="project_completed">completed</h3><br>
               <div class="row" id="project_completed">                     
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">

                              <th>S.no.</th>
                              <th>project title</th>
                              <th>external funds received</th>
                              <th>position</th>
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
                            while($row15=mysqli_fetch_array($data15))
                            {
                              $a++;

                              $date1=date("Y-m-d",strtotime($row15['duration_from']));
                              $date2=date("Y-m-d",strtotime($row15['duration_to']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");

                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row15['project_title']."</td>";
                             
                              echo "<td>".$row15['ext_funds_received']."</td>";
                              echo "<td>".$row15['position']."</td>";
                              echo "<td>".$row15['sponsor']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row15['commencement_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row15['duration_from']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row15['duration_to']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  </div><br id="project_completed"><br id="project_completed">

                  <h3 class="mb-0" id="project_ongoing">ongoing</h3><br>
                  <div class="row" id="project_ongoing">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              <th>project title</th>
                              <th>external funds received</th>
                              <th>position</th>
                              <th>sponsors</th>
                              <th>commencement date</th> 
                              <th>start date</th> 
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row16=mysqli_fetch_array($data16))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row16['project_title']."</td>";
                             
                              echo "<td>".$row16['ext_funds_received']."</td>";
                              echo "<td>".$row16['position']."</td>";
                              echo "<td>".$row16['sponsor']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row16['commencement_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row16['duration_from']))."</td>";
                              
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