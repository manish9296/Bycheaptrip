<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>
</head>


<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>BuyCheaptrip Travels!</p>
                <input type="submit" name="" value="Login" /><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Now</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Register</h3>
                        <form action="" id="registrationForm" method="post">
                            <div class="row register-form">
                                <div class="col-md-9 offset-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name *" id="name" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" />
                                        <div class="error-message text-danger" id="name-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked'; ?>>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked'; ?>>
                                                <span>Female </span>
                                            </label>
                                            <div class="error-message text-danger" id="gender-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" />
                                        <div class="error-message text-danger" id="email-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="13" class="form-control" placeholder="Your Phone *" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" />
                                        <div class="error-message text-danger" id="phone-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password *" name="password" />
                                        <div class="error-message text-danger" id="password-error"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirm Password *" id="cpassword" name="cpassword" />
                                        <div class="error-message text-danger" id="cpassword-error"></div>
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $("#registrationForm").submit(function(event) {
            $(".error-message").text(""); // Clear previous error messages

            var name = $("input[name='name']").val();
            var gender = $("input[name='gender']:checked").val();
            var email = $("input[name='email']").val();
            var phone = $("input[name='phone']").val();
            var password = $("input[name='password']").val();
            var confirmPassword = $("input[name='cpassword']").val();
            if (name.trim() === "") {
                $("#name-error").text("Please enter your name.");
                event.preventDefault();
            }
            if (gender === undefined) {
                $("#gender-error").text("Please select your gender.");
                event.preventDefault();
            }
            if (email.trim() === "") {
                $("#email-error").text("Please enter your email.");
                event.preventDefault();
            } else if (!isValidEmail(email.trim())) {
                $("#email-error").text("Please enter a valid email address.");
                event.preventDefault();
            }
            if (phone.trim() === "") {
                $("#phone-error").text("Please enter your phone number.");
                event.preventDefault();
            } else if (phone.trim().length < 10 || phone.trim().length > 13) {
                $("#phone-error").text("Please enter a phone number between 10 and 13 characters.");
                event.preventDefault();
            }

            if (password === "") {
                $("#password-error").text("Please enter a password.");
                event.preventDefault();
            } else if (password.length < 6) {
                $("#password-error").text("Password must be at least 6 characters long.");
                event.preventDefault();
            }

            if (confirmPassword === "") {
                $("#cpassword-error").text("Please confirm your password.");
                event.preventDefault();
            }

            if (password !== confirmPassword) {
                $("#cpassword-error").text("Passwords do not match.");
                event.preventDefault();
            }
        });

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
</script>