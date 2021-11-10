<?php
session_start();
  $count = 0;
  // connecto database
  
  require_once "config/database_functions.php";
  $conn = db_connect();
  $row = select4LatestProduct($conn);
?>

<?php require 'layout/header.php' ?>
<link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection"/>

<div class="slider">
    <ul class="slides">
        <li>
            <img src="assets/fit6.png">
            <div class="caption center-align">
                <h3>SAVE MONEY and still be healthy!</h3>
                <h5 class="light grey-text text-lighten-3">YES, You heard us right!</h5>
            </div>
        </li>
        <li>
            <img src="assets/fit4.jpg">
            <div class="caption left-align">
                <h3>Wanna know HOW?</h3>
                <h5 class="light grey-text text-lighten-3">Get Fit, DON'T QUIT </h5>
            </div>
        </li>
        <li>
            <img src="assets/fit3.jpg">
            <div class="caption right-align">
                <h3>Don’t be a Brat burn that Fat!</h3>
                <h5 class="light grey-text text-lighten-3">Commit to be Fit!</h5>
            </div>
        </li>
        <li>
            <img src="assets/fit5.jpg">
            <div class="caption center-align">
                <h3>Those who do not find time for exercise will have to find time for illness!</h3>
                <h5 class="light grey-text text-lighten-3">Train, Eat, Sleep, Repeat</h5>
            </div>
        </li>
    </ul>
</div>
<div class="center">
<h5 class="center lead text-center text-muted">Latest Products</h5>
</div>
<iframe width="100%" height="250" frameborder="0" src="display.php"></iframe>

	  
	  
	  <div class="section" style="margin-left:5%;margin-right: 5%">
	  <h5 class="center">About the Gym</h5>
	  <p style="font-size:20px; text-align:center;">At NutriBraniac, our approach is what makes us the best value in Sri Lanka and we have proudly continued that and We asked ourselves what is vitally important to our clients, and we arrived at a method that is efficient and effective. It doesn’t matter if you have never worked out before or are just ready to take it to the next level. At NutriBraniac, we will help you get where you want to go.</p>
	  <div class="center"><a class="waves-effect  grey darken-3 waves-light btn-small" href="contact.php">Contact Us</a>
	  </div>
	  </div>
	  
<div class="section" style="margin-left:5%;margin-right: 5%">
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="large material-icons">fitness_center</i></h2>
                    <h5 class="center">Who are we?</h5>

                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="large material-icons">wb_sunny</i></h2>
                    <h5 class="center">Our Vision</h5>

                    <p class="light">
                       Provide the best online coaching service, absolutely free for a healthier tomorrow!
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="large material-icons">insert_emoticon</i></h2>
                    <h5 class="center">How this work</h5>

                    <p class="light">
                        All You have to do is register free and tell us your health attributes and fitness goals! SIMPLE AS THAT..
                    </p>
                </div>
            </div>
        </div>

    </div>


<?php require 'layout/footer.php' ?>
<script type="text/javascript" src="js/index.js"></script>

</body>
</html>