<?php

$sql13 = "SELECT * FROM activities_organized where fac_id ='".$_GET["q"]."' order by duration_from DESC";
$data13 = mysqli_query($con, $sql13);
$nows1  = mysqli_num_rows($data13);
if($nows1==0)
{
 echo "<style>
#organized {
display:none !important;
</style>";  
}     

$sql14 = "SELECT * FROM participation_organized where fac_id ='".$_GET["q"]."' order by duration_from DESC, duration_to DESC";
$data14 = mysqli_query($con, $sql14);   
$nows2  = mysqli_num_rows($data14);
if($nows2==0)
{
 echo "<style>
#participated {
display:none !important;
</style>";  
}         

if($nows1==0 and $nows2==0)
{
   echo "<style>
#activities {
display:none !important;
}
#menu_activities {
display:none !important;
}
</style>";  
}  
          
?>
<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="activities">
        <div class="my-auto">
          <h2 class="mb-5">activities</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" id="organized">organized</h3><br>                      
                    <div class="row" id="organized">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              <th>title</th>
                              <th>major sponsors</th>
                              <th>level</th>
                              <th>start date</th>
                              <th>end date</th>
                              <th>duration</th>
                            </tr>
                           
                          </thead>
                          <tbody>
                            <?php
                           
                            $a=0;

                            while($row13=mysqli_fetch_array($data13))
                            {
                              $a++;

                              $date1=date("Y-m-d",strtotime($row13['duration_from']));
                              $date2=date("Y-m-d",strtotime($row13['duration_to']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row13['title']."</td>";
                              
                              echo "<td>".$row13['major_sponsor']."</td>";
                              echo "<td>".$row13['level']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row13['duration_from']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row13['duration_to']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  </div> <br id="organized"><br id="organized">     

          <h3 class="mb-0" id="participated">participated</h3><br> 
          <div class="row" id="participated">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              
                              <th>title</th>
                             
                              <th>name of institute</th>
                               <th>start date</th>
                               <th>end date</th>
                               <th>duration</th>
                            </tr>
                            
                          </thead>
                          <tbody>
                            <?php
                           
                            $a=0;
                            while($row14=mysqli_fetch_array($data14))
                            {
                              $a++;

                               $date1=date("Y-m-d",strtotime($row14['duration_from']));
                              $date2=date("Y-m-d",strtotime($row14['duration_to']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");

                              echo "<tr>";
                              echo "<td>".$a."</td>";
                             
                              echo "<td>".$row14['title']."</td>";
                              
                              echo "<td>".$row14['institution']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row14['duration_from']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row14['duration_to']))."</td>";
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