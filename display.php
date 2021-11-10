<?php
session_start();
  $count = 0;
  // connecto database
  
  require_once "config/database_functions.php";
  $conn = db_connect();
  $row = select4LatestProduct($conn);
?>
<link type="text/css" rel="stylesheet" href="css/new.min.css"  rel="stylesheet"/>
<div class="container" id="main">
      <div class="center row">
        <?php foreach($row as $items) { ?>
      	<div class="col-md-3" >
      		<a target="_blank" href="login.php">
           <img style="width: 200px; height: 200px; margin: 5px" src="uploads/<?php echo $items['item_image']; ?>">
		   <p><?php echo $items['item_sname']; ?></p>
          </a>
      	</div>
        <?php } ?>
      </div>