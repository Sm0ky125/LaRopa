<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:47 GMT -->
<?php 
include "css.php";
?>
<script src=
	"https://ajax.googleapis.com/ajax/libs/
	jquery/3.3.1/jquery.min.js">
	</script>
	 
	<script src=
	"https://cdnjs.cloudflare.com/ajax/libs/
	popper.js/1.12.9/umd/popper.min.js">
	</script>
	
	<script src=
	"https://maxcdn.bootstrapcdn.com/bootstrap/
	4.0.0/js/bootstrap.min.js">
	</script>

<script>
$(document).ready(function () {
    
    // Validate Email
        const email =
            document.getElementById('email');
        email.addEventListener('blur', ()=>{
        let regex =
    /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
        let s = email.value;
        if(regex.test(s)){
            email.classList.remove(
                    'is-invalid');
            emailError = true;
            }
            else{
                email.classList.add(
                    'is-invalid');
                emailError = false;
            }
        })
        
    // Validate Password
        $('#passcheck').hide();
        let passwordError = true;
        $('#password').keyup(function () {
            validatePassword();
        });
        function validatePassword() {
            let passwordValue =
                $('#password').val();
            if (passwordValue.length == '') {
                $('#passcheck').show();
                passwordError = false;
                return false;
            }
            if ((passwordValue.length < 8)||
                (passwordValue.length > 15)) {
                $('#passcheck').show();
                $('#passcheck').html
    ("*length of your password must be between 8 and 15*");
                $('#passcheck').css("color", "red");
                passwordError = false;
                return false;
            } else {
                $('#passcheck').hide();
            }
        }
        
    // Submit button
        $('#submitbtn').click(function () {
            validatePassword();
            validateEmail();
            if ((passwordError == true) &&
                (emailError == true)) {
                return true;
            } else {
                return false;
            }
        });
    });
    
</script>
<body>
<!-- HEADER -->
<?php
include "header.php";
?>
<!-- HEADER -->
<div class="banner-wrapper has_background">
    <img src="../assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
    <br><br><br><br><br><br><br><h1 class="page-title">My Account</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>My Account</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<main class="site-main  main-container no-sidebar">
    <div class="container">
        <div class="row">
          <div class="col-md-3">

          </div>
            <div class="main-content col-md-6">
                <div class="page-main-content">
                    <div class="lynessa">
                        <div class="lynessa-notices-wrapper"></div>
                        <div class="u-columns" id="customer_login">
                            <div class="text-center">
                                <h2 class="text-center">Login</h2>
                                <form class="lynessa-form lynessa-form-login login" method="POST" action="">

                                <div class="form-group">
                                    <label style="float:left; font-size: 15px;">
                                        <b>Email Address</b>
                                    </label>
                                    <input type="email" name="email"
                                        id="email" placeholder="Enter your email" required
                                        class="form-control">
                                    <small id="emailvalid" class="form-text
                                        text-muted invalid-feedback">
                                            Your email must be a valid email
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label style="float:left; font-size: 15px;">
                                        <b>Password</b>
                                    </label>
                                    <input type="password" name="pass"
                                        id="password" placeholder="Enter your password" required class="form-control">
                                    <h5 id="passcheck" style="color: red;">
                                        *Please Fill the password*
                                    </h5>
                                </div>
                                    
                                    <p class="form-row">

                                    <input type="submit" value="Log in" id="submitbtn" class="lynessa-Button button">
                                        <!-- <button type="submit" class="lynessa-Button button" name="login"
                                                value="Log in">Log in
                                        </button> -->

                                        <label class="lynessa-form__label lynessa-form__label-for-checkbox inline">
                                            <input class="lynessa-form__input lynessa-form__input-checkbox"
                                                   name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            <span>Remember me</span>
                                        </label>
                                    </p>
                                    <p class="lynessa-LostPassword lost_password">
                                        <a href="register.php">Lost your
                                            password? | Register Again!</a>
                                    </p>
                                    <div class="lynessa-social-login">
                                        <h6>Connect a social network</h6>
                                        <ul>
                                            <li>
                                                <a class="login-facebook" href="#" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-google" href="#" target="_blank">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a  class="login-twitter" href="#" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

          </div>
        </div>
    </div>
</main>
<!-- FOOTER -->
<?php 
include "footer.php" 
?>
<!-- FOOTER -->
<a href="#" class="backtotop active">
    <i class="fa fa-angle-up"></i>
</a>
<?php
include "scripts.php";
?>
</body>

<!-- Mirrored from ledthanhdat.vn/html/lynessa/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 18:14:49 GMT -->
</html>                         