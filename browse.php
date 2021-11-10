<?php
include 'layout/header.php';
?>
<link href="css/newReleases.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<div class="container">
    <div class="row">
        <h3 style="font-family: sans-serif; font-weight: 100">All Items</h3>
    </div>
	<div class="release-list">
    <div class="release-list">
<?php 
$username = "root"; 
$password = ""; 
$database = "nutri"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM items";
 
 if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
	    $item_id = $row["item_id"];
		$item_sname = $row["item_sname"];
        $item_name = $row["item_name"];
		$item_category = $row["item_category"];
		$item_image = $row["item_image"];
		$item_price = $row["item_price"];

echo '
            <div class="card small" style="width: 300px; height: 350px; margin: 5px">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="uploads/'.$item_image.'">
                </div>
               <div class="card-content">
				   <span class="card-title activator grey-text text-darken-4">'.$item_sname.'</br>Price : '.$item_price.'LKR<i class="material-icons right">more_vert</i></span>
                    <a class="btn btn-block orange btn-danger" href="login.php"><i class="material-icons left">shopping_cart</i> Add to cart</a>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">'.$item_sname.'<i class="material-icons right">close</i></span>
                    <p>Name : '.$item_name.'</p>
                    <p>Category : '.$item_category.'</p>
                    <p>Price : '.$item_price.' LKR</p>
                </div>
            </div>
            
              
   ';
 
    }
    $result->free();
} 
?>
 </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>