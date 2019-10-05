<?php
$sql12 = "SELECT * FROM expert_talks where fac_id ='".$_GET["q"]."'";
$data12 = mysqli_query($con, $sql12);
?> 

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="expert_talks">
        <div class="my-auto">
          <h2 class="mb-5">expert talks delivered</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
               <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              <th>title of the talk</th>
                              <th>event name</th>
                              <th>organised by</th>
                              <th>date</th>
                              <th>level</th>
                            </tr>
                            
                          </thead>
                          <tbody>
                            <?php
                            $sql12 = "SELECT * FROM expert_talks where fac_id ='".$_GET["q"]."' ORDER BY date DESC";
                            $data12 = mysqli_query($con, $sql12);
                            $a=0;
                            $nows = mysqli_num_rows($data12); //no. of rows
                            if($nows==0)
                            echo "<style>
                            #expert_talks {
                              display:none !important;
                            }
                            #menu_expert_talks {
                              display:none !important;
                            }
                            </style>";
                            while($row12=mysqli_fetch_array($data12))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row12['talk_title']."</td>";
                              echo "<td>".$row12['event_name']."</td>";
                              echo "<td>".$row12['organised_by']."</td>";
                              echo "<td>".date("d/m/Y", strtotime($row12['date']))."</td>";
                              echo "<td>".$row12['level']."</td>";
                              
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
         