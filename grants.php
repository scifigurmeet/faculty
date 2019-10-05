<?php
$sql12 = "SELECT * FROM grants where fac_id ='".$_GET["q"]."'";
$data12 = mysqli_query($con, $sql12);
?>
 

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="grants_details">
        <div class="my-auto">
          <h2 class="mb-5">grants details</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
               <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              <th>GRANT NAME</th>
                              <th>project title</th>
                              <th>reference number</th>
                              <th>grant type</th>
                              <th>grant details</th>
                              <th>funding agency</th>
                              <th>amount ( ₹ )</th>
                            </tr>                                                             
                          </thead>
                          <tbody>
                            <?php
                            $a=0;
                            $nows = mysqli_num_rows($data12); //no. of rows
                            if($nows==0)
                            echo "<style>
                            #grants_details {
                              display:none !important;
                            }
                            #menu_grants_details {
                              display:none !important;
                            }
                            </style>";
                            while($row12=mysqli_fetch_array($data12))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row12['grant_name']."</td>";
                              echo "<td>".$row12['title']."</td>";
                              echo "<td>".$row12['reference_no']."</td>";
                              echo "<td>".$row12['grant_type']."</td>";
                              echo "<td>".$row12['grant_details']."</td>";
                              echo "<td>".$row12['funding_agency']."</td>";
                              echo "<td>".$row12['amount']."</td>";
                             
                              
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

       