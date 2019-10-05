<?php
$sql17 = "SELECT * FROM extra_work where fac_id ='".$_GET["q"]."' order by assignment_date DESC, completion_date DESC";
$data17 = mysqli_query($con, $sql17);
$nows1 = mysqli_num_rows($data17);
if($nows1==0)
{
  echo "<style>
  #additional{
  display:none !important;
  </style>";
}

$sql18 = "SELECT * FROM workshops where fac_id ='".$_GET["q"]."' order by start_date DESC, end_date DESC";
$data18 = mysqli_query($con, $sql18);
$nows2 = mysqli_num_rows($data18);
if($nows2==0)
{
  echo "<style>
  #workshops{
  display:none !important;
  </style>";
}

if($nows1==0 and $nows2==0)
{
   echo "<style>
#additional_work {
display:none !important;
}
#menu_additional_work {
display:none !important;
}
</style>";  
}  

?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="additional_work">
        <div class="my-auto">
          <h2 class="mb-5">additional work</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" id="additional">ncc/nss/nso/warden/guidance/cultural/sports/hod/hoc/dean/etc.</h3><br>                      
                    <div class="row" id="additional">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>team name</th>
                              <th>position</th>
                              <th>assignment date</th>
                              <th>completion date</th>
                              <th>duration</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row17=mysqli_fetch_array($data17))
                            {
                              $a++;
                              $date1=date("Y-m-d",strtotime($row17['assignment_date']));
                              $date2=date("Y-m-d",strtotime($row17['completion_date']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");

                              echo "<tr>";
                              echo "<td>".$a."</td>";
                             
                              echo "<td>".$row17['team_name']."</td>";
                              echo "<td>".$row17['position']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row17['assignment_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row17['completion_date']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  </div>   <br id="additional"><br id="additional">


            <h3 class="mb-0" id="workshops">fdp's, sttp, stc, workshops attended etc.</h3><br>
              <div class="row" id="workshops">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>event type</th>
                              <th>course name</th>
                              <th>organisation</th>
                              <th>duration type</th>
                              <th>sponsored agency</th>
                              <th>start date</th>
                              <th>end date</th>
                              
                            </tr>
                                          
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row18=mysqli_fetch_array($data18))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                             
                              echo "<td>".$row18['event_type']."</td>";
                              echo "<td>".$row18['course_name']."</td>";
                              echo "<td>".$row18['organisation']."</td>";
                              echo "<td>".$row18['duration_type']."</td>";
                              echo "<td>".$row18['sponsors']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row18['start_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row18['end_date']))."</td>";
                              
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