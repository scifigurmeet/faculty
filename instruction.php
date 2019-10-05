<?php
$sql12 = "SELECT * FROM instructional_work where fac_id ='".$_GET["q"]."'";
$data12 = mysqli_query($con, $sql12);
?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="instructional_work">
        <div class="my-auto">
          <h2 class="mb-5">INSTRUCTIONAL WORK</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
               <div class="row">                        
                            <div class="col-lg-12">
                                <div class="table-responsive-lg table--no-card">
                                    <table class="table table-bordered table-striped table-fixed">
                                        <thead>
                            <tr class="text-uppercase">
                              <th>S.no.</th>
                              <th>SEMESTER</th>
                              <th>COURSE NO.</th>
                              <th>course Title</th>
                              <th colspan="2">session</th>
                              <th colspan="3">Hrs. engaged/week</th>
                              <th>class strength</th>
                              <th>result (pass %age)</th>
                            </tr>
                            <tr class="text-uppercase">
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th>from</th>
                              <th>to</th>
                              <th>l</th>
                              <th>t</th>
                              <th>p</th>
                              <th></th>
                              <th></th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                           
                            $a=0;
                            $nows = mysqli_num_rows($data12); //no. of rows
                            if($nows==0)
                            echo "<style>
                            #instructional_work {
                              display:none !important;
                            }
                            #menu_instructional_work {
                              display:none !important;
                            }
                            </style>";
                            while($row12=mysqli_fetch_array($data12))
                            {
                              $a++;
                              echo "<tr>";
                              echo "<td>".$a."</td>";
                              echo "<td>".$row12['semester']."</td>";
                              echo "<td>".$row12['course_no']."</td>";
                              echo "<td>".$row12['title']."</td>";
                              echo "<td>".date("F Y",strtotime($row12['session_from']))."</td>";
                              echo "<td>".date("F Y",strtotime($row12['session_to']))."</td>";
                              echo "<td>".$row12['hrs_engaged_pw_l']."</td>";
                              echo "<td>".$row12['hrs_engaged_pw_t']."</td>";
                              echo "<td>".$row12['hrs_engaged_pw_p']."</td>";
                              echo "<td>".$row12['class_strength']."</td>";
                              echo "<td>".$row12['result_pass_percent']."</td>";
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
           