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
	
    // Validate Username
        $('#usercheck').hide();
        let usernameError = true;
        $('#usernames').keyup(function () {
            validateUsername();
        });
        
        function validateUsername() {
        let usernameValue = $('#usernames').val();
        if (usernameValue.length == '') {
        $('#usercheck').show();
            usernameError = false;
            return false;
        }
        else if((usernameValue.length < 3)||
                (usernameValue.length > 50)) {
            $('#usercheck').show();
            $('#usercheck').html
    ("*length of username must be between 3 and 50*");
            usernameError = false;
            return false;
        }
        else {
            $('#usercheck').hide();
        }
        }
    
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
            validateUsername();
            validatePassword();
            validateEmail();
            if ((usernameError == true) &&
                (passwordError == true) &&
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
                                <h2>Register</h2>
                                <form method="POST" action="" class="lynessa-form lynessa-form-register register">
                                    <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                        <b>Username</b>
                                      </label>
                                      <input type="text"
                                           id="usernames"
                                          class="form-control" placeholder="Enter your username" required>
                                      <h5 id="usercheck" style="color: red;">
                                          *Username is missing*
                                      </h5>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                          <b>Email Address</b>
                                      </label>
                                      <input type="email"
                                        id="email"
                                        class="form-control" placeholder="Enter your email" required>
                                      <small id="emailvalid" class="form-text
                                        text-muted invalid-feedback">
                                          *Your email must be a valid email*
                                      </small>
                                    </div>

                                    <div class="form-group">
                                      <label style="float:left; font-size: 15px;">
                                          <b>Password</b>
                                      </label>
                                      <input type="password"
                                        id="password" class="form-control" placeholder="Enter your password" required>
                                      <h5 id="passcheck" style="color: red;">
                                        *Please Fill the password*
                                      </h5>
                                    </div>
                                        <!-- <label for="reg_email">Email address&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="email" class="lynessa-Input lynessa-Input--text input-text"
                                               name="email" id="reg_email" autocomplete="email" value=""></p> -->

                                    <div class="lynessa-privacy-policy-text"><p>Your personal data will be used to
                                        support your experience throughout this website, to manage access to your
                                        account, and for other purposes described in our <a
                                        href="#" class="lynessa-privacy-policy-link"
                                        target="_blank">privacy policy</a>.</p>
                                    </div>
                                    
                                      <input type="submit" value="Register" id="submitbtn" class="lynessa-Button button">
                                    </p>
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
