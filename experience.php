<?php
$sql = "SELECT * FROM experience where fac_id ='".$_GET["q"]."' ORDER BY start_date DESC, end_date DESC";
$data = mysqli_query($con, $sql);

$nows = mysqli_num_rows($data);
if($nows==0)
                            echo "<style>
                            #experience {
                              display:none !important;
                            }
                            #menu_experience {
                              display:none !important;
                            }
                            </style>";
?>


<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">professional Experience</h2>
          <?php
          while($row = mysqli_fetch_array($data))
          {
           
            echo "<div class='resume-item d-flex flex-column flex-md-row mb-5'>";
            echo "<div class='resume-content mr-auto'>";
            echo "<h3 class='mb-0'>";
            echo "<i class='fa fa fa-star text-warning'></i>";
            echo $row['designation'];
            echo "</h3>";
            echo "<div class='text-uppercase' style='padding-left:40px;'>";
            echo $row['organisation_name'];
            echo "</div>";
            echo "<br>";
            echo "<p style='padding-left:40px;'>";

              $date1=date("Y-m-d",strtotime($row['start_date']));
              $date2=date("Y-m-d",strtotime($row['end_date']));
              $date1=date_create($date1);
              $date2=date_create($date2);
              $diff=date_diff($date1,$date2);
              $diff=$diff->format("%y Years %m Months");

            echo "Experience : ".$diff;
            echo "</p>";
            echo "</div>";
            echo "<div class='resume-date text-md-right'>";
            echo "<span class='text-primary'>";
            echo date("d/m/Y",strtotime($row['start_date']))." -- ".date("d/m/Y",strtotime($row['end_date'])) ;
            echo "</span>";
            echo "</div>";
            echo "</div>";

          }

          
          ?>
        </div>

  </section>