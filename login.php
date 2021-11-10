<?php
require 'layout/header.php'
?>

<link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<div id="login-page" class="row">
    <div class="col s12 card-panel z-depth-5">
        <form class="login-form" role="form" method="post" action="userlogin.php">
            <div class="row">
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix" style="color: white">mail_outline</i>
                    <input class="form-control" name="user_email" type="email" required>
                    <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix" style="color: white">lock_outline</i>
                    <input class="form-control" name="user_password" type="password" required>
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="waves-effect light-blue darken-3 waves-light btn-small" name="user_login">Login</button>
                </div>
            </div>
            <div class="row">
                <div class="col s6 m6 l6">
                    <p class="margin medium-small"><a href="userregister.php">Register Now</a></p>
                </div>
            </div>

        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</body>
</html>
