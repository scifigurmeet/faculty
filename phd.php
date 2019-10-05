<?php
$sql6 = "SELECT * FROM phd_thesis where current_status = 'completed' and fac_id ='".$_GET["q"]."' order by submission_date DESC";
$data6 = mysqli_query($con, $sql6);
$nows1 = mysqli_num_rows($data6);
if($nows1==0)
{
   echo "<style>
  #completed{
  display:none !important;
  </style>";
}

$sql7 = "SELECT * FROM phd_thesis where current_status = 'ongoing' and fac_id ='".$_GET["q"]."'";
$data7 = mysqli_query($con, $sql7);
$nows2 = mysqli_num_rows($data7);
if($nows2==0)
{
   echo "<style>
  #ongoing{
  display:none !important;
  </style>";
}

if($nows1==0 and $nows2==0)
{
  echo "<style>
#phd_thesis {
display:none !important;
}
</style>"; 
}
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="phd_thesis">
        <div class="my-auto">
          <h2 class="mb-5">phd thesis guided</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" id="completed">completed</h3><br>                      
                    <div class="row" id="completed">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>candidate name</th>
                              <th>Roll no.</th>
                              <th>thesis Title</th>
                              <th>research area</th>
                              <th>supervisor</th>
                              <th>co-supervisor</th>
                              <th>university affiliation</th>
                              <th>registeration date</th>
                              <th>submission date</th>
                              <th>duration</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row6=mysqli_fetch_array($data6))
                            {
                              $a++;
                              $date1=date("Y-m-d",strtotime($row6['registeration_date']));
                              $date2=date("Y-m-d",strtotime($row6['submission_date']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");

                              echo "<tr>";
                              echo "<td>".$a."</td>";
                             
                              echo "<td>".$row6['student_name']."</td>";
                              echo "<td>".$row6['enrollment_no']."</td>";
                             
                              echo "<td>".$row6['thesis_title']."</td>";
                              echo "<td>".$row6['research_area']."</td>";
                              echo "<td>".$row6['supervisor']."</td>";
                              echo "<td>".$row6['co_supervisor']."</td>";
                              echo "<td>".$row6['affiliation_to_university']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row6['registeration_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row6['submission_date']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  </div> <br id="completed"><br id="completed">     



          <h3 class="mb-0" id="ongoing">ongoing</h3><br> 
          <div class="row"  id="ongoing">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>candidate name</th>
                               <th>Roll no.</th>
                               
                              <th>thesis Title</th>
                              <th>research area</th>
                              <th>supervisor</th>
                              <th>co-supervisor</th>
                              <th>university affiliation</th>
                              <th>registeration date</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row7=mysqli_fetch_array($data7))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row7['student_name']."</td>";
                              echo "<td>".$row7['enrollment_no']."</td>";
                              
                              echo "<td>".$row7['thesis_title']."</td>";
                              echo "<td>".$row7['research_area']."</td>";
                              echo "<td>".$row7['supervisor']."</td>";
                              echo "<td>".$row7['co_supervisor']."</td>";
                              echo "<td>".$row7['affiliation_to_university']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row7['registeration_date']))."</td>";
                            
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