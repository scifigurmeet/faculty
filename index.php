<?php
include_once('portal/teacher/conn.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
    body
    {
      font-family: 'Roboto', sans-serif !important;
    }
    thead
    {
       
       background-image:url(img/bg7.jpg);
       text-align: center;
       color:white;
    }
    table, .card
    {
      box-shadow: 0 4px 30px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) ;
    }
    li
    {
      text-align: left;
    }
    td, input
    {
      text-transform: capitalize;

    }
    .btn
    {
      background-color: #DE6B01;
      color:white;
    }
    

    
    </style>
    <?php

      if(!isset($_GET["q"])) header("Location: list.php");

        $id=$_GET["q"];
       // $id=stripcslashes($id);
        $sql = "SELECT * FROM personal_details where fac_id ='".$id."'";
        $data = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($data);
    ?>
                                                                                  
    <title><?php echo $row['name']." : ".$row['department'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="img/logo1.png">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" style="background:url(img/bg7.jpg);background-size:300%;">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        
        <span class="d-block d-lg-none text-capitalize"><?php echo $row['name'];?></span>
        <?php
        $sql1 = "SELECT * FROM images where fac_id ='".$_GET["q"]."'";
        $data1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_array($data1);

        

        echo "<span class='d-none d-lg-block'>";
        echo "<img class='img-fluid img-profile rounded-circle mx-auto mb-2' src='portal/teacher/fac-images/".$row1['path']."' alt='' style='border-radius:100%'>";
        echo "</span>";
        ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav">
          
          <li class="nav-item">

          <a class="nav-link js-scroll-trigger" href="#about"><i class="fa fa-user"></i> About</a>
          </li>
          <li class="nav-item" id="menu_experience">

              <a class="nav-link js-scroll-trigger" href="#experience"><i class="fa fa-star"></i> experience</a>
          </li>
          
          <li class="nav-item"  id="menu_instructional_work">
            <a class="nav-link js-scroll-trigger" href="#instructional_work"><i class="fa fa-tasks"></i> instructional work
            </a>
          </li>

          <li class="nav-item" id="menu_activities">
            <a class="nav-link js-scroll-trigger" href="#activities"><i class="fa fa-edit"></i> activities</a>
          </li>

          <li class="nav-item" id="menu_additional_work">
            <a class="nav-link js-scroll-trigger" href="#additional_work"><i class="fa fa-user-plus"></i> Additional work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#research"><i class="fa fa-chalkboard-teacher"></i> research &amp; development</a>
          </li>
          <li class="nav-item" id="menu_additional_duties">
            <a class="nav-link js-scroll-trigger" href="#additional_duties"><i class="fa fa-bookmark"></i> Additional duties
          </a>
          </li>
          <li class="nav-item" id="menu_grants_details">
            <a class="nav-link js-scroll-trigger" href="#grants_details"><i class="fa fa-tag"></i> grants details</a>
          </li>
          
          <li class="nav-item" id="menu_expert_talks">
            <a class="nav-link js-scroll-trigger" href="#expert_talks"><i class="fa fa-comment-alt"></i> expert talks</a>
          </li>
          
          
          <li class="nav-item" id="menu_btech_project">
            <a class="nav-link js-scroll-trigger" href="#btech_project"><i class="fa fa-project-diagram"></i> PROJECT work</a>
          </li>
          <li class='nav-item' id='menu_membership'>
            <a class='nav-link js-scroll-trigger' href='#membership'><i class='fa fa-address-card'></i> memberships</a>
          </li>
          
           <li class="nav-item" id="menu_achievements">
            <a class="nav-link js-scroll-trigger" href="#achievements1"><i class="fa fa-trophy"></i> achievements</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      
      <?php
      include_once('about.php');
      ?>

      <hr class="m-0">
      <?php
      include_once('experience.php');
      ?>


      <hr class="m-0">

      <?php
      include_once('instruction.php');
      ?>


      <hr class="m-0">

       <?php
      include_once('activities.php');
      ?>



      <hr class="m-0">


       <?php
      include_once('additional.php');
      ?>

       <hr class="m-0">
      <?php
      include_once('research.php');
      ?>

      <hr class="m-0">
      <?php
      include_once('additional_duties.php');
      ?>

      

      <hr class="m-0">

      <?php
      include_once('grants.php');
      ?>

      <hr class="m-0">

     
      <?php
      include_once('talks.php');
      ?>


     
      <hr class="m-0">
       <?php
      include_once('btech.php');
      ?>
      

      <hr class="m-0">

       <?php
      include_once('memberships.php');
      ?>

      
      <hr class="m-0">

       <?php
      include_once('achievements.php');
      ?>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
