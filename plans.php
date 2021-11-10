<?php
include 'layout/header.php';
?>
<div class="container" style="margin: 20px auto">
    <div class="row">
        <h3 style="font-family:  'Barlow', sans-serif; font-weight: 100">Consultations & Services</h3>
    </div>																																															
    <div class="row">
        <div class="col s4">
            <div class="card">
			
<?php 
$username = "root"; 
$password = ""; 
$database = "nutri"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM plans";
 
 if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $imgurl = $row["imgurl"];
		$sname = $row["sname"];
		$descri = $row["descri"];
        $price = $row["price"];



               echo ' <div class="card-image">
                    <img src="uploads/'.$imgurl.'">
                </div>
            </div>
        </div>
        <div class="col s8">
            <ul class="collection" style="font-size: 20px;">
                <li class="collection-item">
                    <div class="row">
                        <div class="col s4">Service Name  </div>
                        <div class="col s8">: '.$sname.'</div>
					</div>
                     <div class="row">

                        <div class="col s4">Description     </div>
                        <div class="col s8">: '.$descri.'</div>
					</div>
              <div class="row">
                        <div class="col s4">Price   </div>
                        <div class="col s8">: '.$price.'</div>
                    </div>
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
