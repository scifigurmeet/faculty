<?php
$sql8 = "SELECT * FROM btech_project where current_status = 'completed' and fac_id ='".$_GET["q"]."' ORDER BY submission_date DESC";
$data8 = mysqli_query($con, $sql8);
$nows1 = mysqli_num_rows($data8);
if($nows1==0)
{
  echo "<style>
  #completed{
  display:none !important;
  </style>";
}
$sql9 = "SELECT * FROM btech_project where current_status = 'ongoing' and fac_id ='".$_GET["q"]."'";
$data9 = mysqli_query($con, $sql9);
$nows2 = mysqli_num_rows($data9);
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
#btech_project {
display:none !important;
}
#menu_btech_project {
display:none !important;
}
</style>"; 
}
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="btech_project">
        <div class="my-auto">
          <h2 class="mb-5">b.tech./m.tech./mba/mca projects</h2>
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
                              <th>project Title</th>
                              <th>co-supervisor</th>
                              <th>DATE of submission</th>
                             
                              <th colspan="2">session</th>
                            </tr>
                            <tr class="text-uppercase">
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              
                              <th>from</th>
                              <th>to</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row8=mysqli_fetch_array($data8))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row8['student_name']."</td>";
                              echo "<td>".$row8['univ_roll_no']."</td>";
                              echo "<td>".$row8['project_title']."</td>";
                              echo "<td>".$row8['co_supervisor']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row8['submission_date']))."</td>";
                              
                              echo "<td>".$row8['session_from']."</td>";
                              echo "<td>".$row8['session_to']."</td>";
                              
                              echo "</tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  </div> <br id="completed"><br id="completed">

          <h3 class="mb-0" id="ongoing">ongoing</h3><br> 
          <div class="row" id="ongoing">                        
                            <div class="col-sm-12" style="overflow-x: auto;">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                             
                              <th>candidate name</th>
                              <th>Roll no.</th>
                              <th>project Title</th>
                              <th>co-supervisor</th>
                              <th colspan="2">session</th>
                             
                            </tr>
                            <tr class="text-uppercase">
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                             
                              <th>from</th>
                              <th>to</th>
                            
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            $a=0;
                            while($row9=mysqli_fetch_array($data9))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              
                              echo "<td>".$row9['student_name']."</td>";
                              echo "<td>".$row9['univ_roll_no']."</td>";
                              echo "<td>".$row9['project_title']."</td>";
                              echo "<td>".$row9['co_supervisor']."</td>";
                              echo "<td>".$row9['session_from']."</td>";
                              echo "<td>".$row9['session_to']."</td>";
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