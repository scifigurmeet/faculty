<?php
$sql10 = "SELECT * FROM achievements where achievement_type='award' and fac_id ='".$_GET["q"]."' ORDER BY year DESC";
$data10= mysqli_query($con, $sql10);
$nows1 = mysqli_num_rows($data10);
if($nows1==0)
{
  echo "<style>
  #awards{
  display:none !important;
  </style>";
}   
 
 $sql11 = "SELECT * FROM achievements where achievement_type='achievement' and fac_id ='".$_GET["q"]."' ORDER BY year DESC";
 $data11= mysqli_query($con, $sql11);
 $nows2 = mysqli_num_rows($data11);
if($nows2==0)
{
  echo "<style>
  #achievements{
  display:none !important;
  </style>";
}  


$sql12 = "SELECT * FROM achievements where achievement_type='recognition' and fac_id ='".$_GET["q"]."' ORDER BY year DESC";
$data12= mysqli_query($con, $sql12);
$nows3 = mysqli_num_rows($data12);
if($nows3==0)
{
  echo "<style>
  #recognition{
  display:none !important;
  </style>";
}  

if($nows1==0 && $nows2==0 && $nows3==0)
{
  echo "<style>
#achievements1 {
display:none !important;
}
#menu_achievements {
display:none !important;
}
</style>"; 
}
?>
  
  <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="achievements1">
        <div class="my-auto">
          <h2 class="mb-5">Awards, ACHIEVEMENTS &amp; RECOGNITION</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              
              <h3 class="mb-0" id="awards">awards</h3><br>
              <div class="subheading mb-3" id="awards">
              <ul class="text-capitalize fa-ul mb-0">
                <?php
                while($row10 = mysqli_fetch_array($data10))
                {
                  echo "<li>";
                  echo "<i class='fa-li fa fa-trophy text-warning'></i>";
                  echo $row10['achievement'];
                  echo "</li>";
                  echo "<div class='text-md-right'>";
                  echo "<span class='text-primary'>";
                  echo $row10['year'];
                  echo "</span>";
                  echo "</div>";
                }
                ?>
              
            </ul>
          </div><br id="awards">
         
          <h3 class="mb-0" id="achievements">achievements</h3><br>
          <div class="subheading mb-3" id="achievements">
              <ul class="text-capitalize fa-ul mb-0">
                <?php
                while($row11 = mysqli_fetch_array($data11))
                {
                  echo "<li>";
                  echo "<i class='fa-li fa fa-trophy text-warning'></i>";
                  echo $row11['achievement'];
                  echo "</li>";
                  echo "<div class='text-md-right'>";
                  echo "<span class='text-primary'>";
                  echo $row11['year'];
                  echo "</span>";
                  echo "</div>";
                }
                ?>
              </ul>
            
          </div><BR id="achievements">
            
           <h3 class="mb-0" id="recognition">RECOGNITION</h3><br>
           <div class="subheading mb-3" id="recognition">
              <ul class="text-capitalize fa-ul mb-0">
                <?php
                while($row12 = mysqli_fetch_array($data12))
                {
                  echo "<li>";
                  echo "<i class='fa-li fa fa-trophy text-warning'></i>";
                  echo $row12['achievement'];
                  echo "</li>";
                  echo "<div class='text-md-right'>";
                  echo "<span class='text-primary'>";
                  echo $row12['year'];
                  echo "</span>";
                  echo "</div>";
                }
                ?>
              </ul>
            
          </div>
            </div>
          </div>
        </div>
 </section>