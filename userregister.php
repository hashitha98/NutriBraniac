<?php
include 'layout/header.php';
?>

<link href="css/register.css" type="text/css" rel="stylesheet" media="screen,projection"/>


<div class="container-box">
    <div class="row main-row">
        <form class="col s12 m4 l8" role="form" method="post" action="register.php">
            <div class="row">
                <div class="input-field col s6">
                    <input style=" color: white" class="form-control" name="ruser_firstname" type="text" required>
                    <label for="firstName">First Name</label>
                </div>

                <div class="input-field col s6">
                    <input style=" color: white" class="form-control" name="ruser_lastname" type="text" required>
                    <label for="lastName">Last Name</label>
                </div>

            </div>
			
            <div class="row">
				  <div class="input-field col s6">
                    <input style=" color: white" class="form-control" name="ruser_address" type="text" required>
                    <label for="Address">Address</label>
                </div>
            </div>
			
			<div class="row">
                <div class="input-field col s6">
                    <input style=" color: white" class="form-control" name="ruser_email" type="email" required>
                    <label for="Email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input style=" color: white" class="form-control" name="ruser_password" type="password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="waves-effect light-blue darken-3 waves-light btn" name="register" style="width: 100%">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="js/register.js"></script>

</body>
</html>
