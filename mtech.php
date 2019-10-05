<?php
$sql4 = "SELECT * FROM mtech_thesis where current_status = 'completed' and fac_id ='".$_GET["q"]."' ORDER BY submission_date DESC";
$data4 = mysqli_query($con, $sql4);
$nows1 = mysqli_num_rows($data4);
if($nows1==0)
{
echo "<style>
  #mtech_completed{
  display:none !important;
  </style>";
}
$sql5 = "SELECT * FROM mtech_thesis where current_status = 'ongoing' and fac_id ='".$_GET["q"]."'";
$data5 = mysqli_query($con, $sql5);

$nows2 = mysqli_num_rows($data5);
if($nows2==0)
{
echo "<style>
  #mtech_ongoing{
  display:none !important;
  </style>";
}

if($nows1==0 and $nows2==0)
{
  echo "<style>
#mtech_thesis {
display:none !important;
}
</style>"; 
}
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="mtech_thesis">
        <div class="my-auto">
          <h2 class="mb-5">m.tech. thesis guided</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" id="mtech_completed">completed</h3><br>                      
                    <div class="row" id="mtech_completed">                        
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
                            while($row4=mysqli_fetch_array($data4))
                            {
                              $a++;

                              $date1=date("Y-m-d",strtotime($row4['registeration_date']));
                              $date2=date("Y-m-d",strtotime($row4['submission_date']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");

                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row4['student_name']."</td>";
                              echo "<td>".$row4['enrollment_no']."</td>";
                              
                              echo "<td>".$row4['thesis_title']."</td>";
                              echo "<td>".$row4['research_area']."</td>";
                              echo "<td>".$row4['supervisor']."</td>";
                              echo "<td>".$row4['co_supervisor']."</td>";
                              echo "<td>".$row4['affiliation_to_university']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row4['registeration_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row4['submission_date']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  </div> <br id="mtech_completed"><br id="mtech_completed">     


          <h3 class="mb-0" id="mtech_ongoing">ongoing</h3><br> 
          <div class="row" id="mtech_ongoing">                        
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
                            while($row5=mysqli_fetch_array($data5))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                             
                              echo "<td>".$row5['student_name']."</td>";
                              echo "<td>".$row5['enrollment_no']."</td>";
                              
                              echo "<td>".$row5['thesis_title']."</td>";
                              echo "<td>".$row5['research_area']."</td>";
                              echo "<td>".$row5['supervisor']."</td>";
                              echo "<td>".$row5['co_supervisor']."</td>";
                              echo "<td>".$row5['affiliation_to_university']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row5['registeration_date']))."</td>";
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