<?php
$sql1 = "SELECT * FROM membership where fac_id ='".$_GET["q"]."' order by m_from DESC, m_to DESC";
$data1 = mysqli_query($con, $sql1);

$nows = mysqli_num_rows($data1);
if($nows==0)
{
  echo "<style>
#membership {
display:none !important;
}
#menu_membership {
display:none !important;
}
</style>"; 
}
?>
  



<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="membership">
        <div class="my-auto">
          <h2 class="mb-5">professional memberships</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">


             
                <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                                          <tr class="text-uppercase">
                                            <th>S.no.</th>
                                            <th>society name</th>
                                            <th>membership type</th>
                                            <th>membership no.</th>
                                            
                                            <th colspan="2">joined</th>
                                            <th>duration</th>
                                          </tr>
                                         <tr class="text-uppercase">
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th>from</th>
                                          <th>to</th>
                                          <th></th>
                                         </tr>
                                         
                            
                                         </thead>
                          <tbody>
                            <?php
                            $a=0;
                            while($row=mysqli_fetch_array($data1))
                            {
                                if($row['m_from']=="" and $row['m_to']=="")
                                {
                
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row['soceity_name']."</td>";
                              echo "<td>".$row['membership_type']."</td>";
                              echo "<td>".$row['membership_no']."</td>";
                              echo "<td>--</td>";
                              echo "<td>--</td>";
                              echo "<td>life member</td>";
                              
                              echo "</tr>";
                            }
                            elseif(strlen($row['m_from']) > 1 and $row['m_to']=="")
                            {
                              $a++;
                              $date1=date("Y-m-d",strtotime($row['m_from']));
                              $date2=date("Y-m-d",strtotime("today"));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row['soceity_name']."</td>";
                              echo "<td>".$row['membership_type']."</td>";
                              echo "<td>".$row['membership_no']."</td>";
                              
                              echo "<td>".date("d/m/Y", strtotime($row['m_from']))."</td>";
                              echo "<td>till date</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
                            else
                            {
                              $a++;
                              $date1=date("Y-m-d",strtotime($row['m_from']));
                              $date2=date("Y-m-d",strtotime($row['m_to']));
                              $date1=date_create($date1);
                              $date2=date_create($date2);
                              $diff=date_diff($date1,$date2);
                              $diff=$diff->format("%y Years %m Months");
                              
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row['soceity_name']."</td>";
                              echo "<td>".$row['membership_type']."</td>";
                              echo "<td>".$row['membership_no']."</td>";
                              
                              echo "<td>".date("d/m/Y", strtotime($row['m_from']))."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row['m_to']))."</td>";
                              echo "<td>".$diff."</td>";
                              echo "</tr>";
                            }
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
               
                 <!--  <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                                          <tr class="text-uppercase">
                                            <th>S.no.</th>
                                            <th>society name</th>
                                            <th>membership type</th>     
                                            <th>membership no.</th>
                                            
                                            <th colspan="2">joined</th>
                                            <th>duration</th>
                                          </tr>
                                         <tr class="text-uppercase">
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th>from</th>
                                          <th>to</th>
                                          <th></th>
                                         </tr>
                            
                                         </thead>
                          <tbody>
                           
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              
              
              <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                                          <tr class="text-uppercase">
                                            <th>S.no.</th>
                                            <th>society name</th>
                                            <th>membership type</th>
                                            <th>membership no.</th>
                                            
                                            <th colspan="2">joined</th>
                                            <th>duration</th>
                                          </tr>
                                         <tr class="text-uppercase">
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th></th>
                                          <th>from</th>
                                          <th>to</th>
                                          <th>
                                         </tr>
                            
                                         </thead>
                          <tbody>
                            
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div> -->
             

             

        