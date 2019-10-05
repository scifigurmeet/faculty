<?php
$sql12 = "SELECT * FROM additional_duties where fac_id ='".$_GET["q"]."' ORDER BY start_date DESC, end_date DESC";
$data12 = mysqli_query($con, $sql12);
$a=0;
$nows = mysqli_num_rows($data12); //no. of rows
if($nows==0)
echo "<style>
#additional_duties {
  display:none !important;
}
#menu_additional_duties {
  display:none !important;
}
</style>";
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="additional_duties">
        <div class="my-auto">
          <h2 class="mb-5">additional duties</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
               <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              <th>duty details</th>
                              <th>associated organisation</th>
                              <th>start date</th>
                              <th>end date</th>
                              <th>duration of duty</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            
                            while($row12=mysqli_fetch_array($data12))
                            {
                              $a++;
                              $date1=date("Y-m-d",strtotime($row12['start_date']));
                              $date2=date("Y-m-d",strtotime($row12['end_date']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row12['duty_details']."</td>";
                              echo "<td>".$row12['organization']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row12['start_date']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row12['end_date']))."</td>";
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
