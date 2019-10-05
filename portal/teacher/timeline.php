<?php 
    $sql = "SELECT * FROM qualifications WHERE fac_id ='".$_SESSION['id']."' ORDER BY YEAR DESC";
    $result = mysqli_query($con, $sql);?>
<style>
#yoo * {
    box-sizing: border-box;
}

#yoo {
    background-color: #474e5d;
    font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
#yoo .timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
#yoo .timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
#yoo .containerx {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
#yoo .containerx::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
#yoo .left {
    left: 0;
}

/* Place the container to the right */
#yoo .right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
#yoo .left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
#yoo .right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
#yoo .right::after {
    left: -16px;
}

/* The actual content */
#yoo .content {
    padding: 10px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 400px) {
  /* Place the timelime to the left */
  #yoo .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  #yoo .containerx {
    width: 50%;
    padding:0px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  #yoo .containerx::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  #yoo .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  #yoo .right {
    left: 0%;
  }
}
</style>
<div id="yoo">
<div class="timeline">
<?php
    if($result) {
		$count=1;
        while($rows = mysqli_fetch_assoc($result)) {
            $qual = $rows['qual'];
            $year = $rows['year'];
			?>
  <div class="containerx <?php if($count%2==0) echo "right"; else echo "left"; ?>">
    <div class="content">
      <h4><?php echo $year;?></h4>
      <h5><?php echo $qual;?></h5>
    </div>
  </div>
  <?php
	$count++;
        }
    }
    else {
        echo "<script>alert('ERROR !!')</script>";
    }
?>
</div>
</div>
