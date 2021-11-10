<?php
include 'layout/header.php';
?>
<div class="container" style="margin: 20px auto">
    <div class="row">
        <h3 style="font-family: sans-serif; font-weight: 100">Nutritional Counseling</h3>
    </div>																																															
    <div class="row">
        <div class="col s4">
            <div class="card">
<?php 
$username = "root"; 
$password = ""; 
$database = "nutri"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM book";
 
 if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $img = $row["img"];
		$descri = $row["descri"];
        $times = $row["times"];
        $price = $row["price"];
 
echo '
                <div class="card-image">
                    <img src="uploads/'.$img.'">
                </div>
            </div>
        </div>
        <div class="col s8">
            <ul class="card-content">
                <li class="card-panel">
                    <?php 
					while($rows=mysql_fetch_assoc($result))
					{
						?>
                    <h3 style="font-size: 20">'.$descri.'</h3>
                    <hr>
  
                      <p style="font-size:20px; font-style:bold;">'.$times.'</p>
                      <p style="font-size:20px; font-style:bold;">'.$price.'</p>
                    <?php
					}
					?>
                </li>
            </ul>
			<a href="login.php" class="waves-effect amber darken-3 waves-light btn"><i class="material-icons right">playlist_add</i>Order Now</a>

                  ';
 
    }
    $result->free();
} 
?>
 </div>
    </div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/itemDetails.js"></script>
</body>
</html>