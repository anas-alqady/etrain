<?php

if (!empty($_SESSION['user']))
    header("location: http://localhost/project-forms/profile.php");

?>


<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="theme/css/bootstrab/bootstrap.css">
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
<section class="nav sticky-top " style="margin-bottom: -4rem">
    <div class="container">
        <nav class="navbar navbar-light bg-light col-lg-12 ">
            <a href="login.php" class="col-lg-2 col-sm-4 "><button class=" btn btn-outline-success pl-3 pr-3" type="submit"> Login </button></a>
            <button class=" col-lg-2 col-md-6 btn btn-info my-2 my-sm-6" type="submit">أهل الهمة  </button>
            <div class="col-lg-3 text-right "></div>
        </nav>
    </div>
</section>

<section class="register-body">
    <div class="container">
        <div class="row " style="place-items: center;">
           <div class="col-lg-6 col-sm-6" >
                    <img   src="img-slider/sh-2.jpg" alt="">

            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-card form border text-center p-4">
                    <form action="handle/register.php" method="post">
                        <div class="form-group">
                            <div class="logo">
                                <img src="image/logo.png"  alt="">
                            </div>
                        </div>
                        <div class="form-group">
                            <h3 class="slogan">
أهلاُ بك في <br> #C.V_الهمة
                            </h3>
                        </div>
                        <div class="form-group">
                            <div class="custom-line">
                                <div class="insta-line"></div>
                                <div class="word">or</div>
                                <div class="insta-line"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control custom-input"   placeholder=" Email" required>
                        </div>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control custom-input"   placeholder="username" required>
                        </div>

                        <div class="form-group">
                            <input name="password" type="password" class="form-control custom-input"   placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input name="major" type="text" class="form-control custom-input"   placeholder="التخصص" required>
                        </div>
                        <h4>القطاع </h4>
                        <div class="form-group form-control mt-2 row flex-row justify-content-between" style="width:32.4rem">
                            <input name="sector" type="radio" value="العلمية " class="" required  > العلمية
                            <input name="sector" type="radio" value="هندسة وفنون " class="" required>الهندسة والفنون
                            <input name="sector" type="radio"  value="الطبية" class="" required>الطبية
                            <input name="sector" type="radio" value="الانسانية" class="" required> الانسانية
                        </div>
                        <div class="form-group">
                            <input name="phone" type="number" class="form-control custom-input"   placeholder="phone number" required>
                        </div>
                        <div class="btn btn-danger"> الدفعة </div>
                        <div class="form-group mt-2 form-control">
                            013  <input name="dofaa" type="radio" class="m-1" value="013" required>
                            014 <input name="dofaa" type="radio"  class="m-1" value="014" required>
                            015 <input name="dofaa" type="radio" class="m-1" value="015" required>
                           016 <input name="dofaa" type="radio"  class="m-1" value="016" required>
                           017 <input name="dofaa" type="radio" class="m-1" value="017" required>
                           018 <input name="dofaa" type="radio" class="m-1" value="018" required>
                            019 <input name="dofaa" type="radio" class="m-1" value="019" required >
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="custom-button btn" type="submit">sign up </button>
                        </div>
                        <div class="form-group">
                            <p class="warn-p">
                                By signing up, you agree to <a href="/terms">Our Terms</a> , Data Policy and Cookies Policy .
                            </p>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
</body>

<!--<script src="theme/js/bootstrap.js"></script>-->
<script src="theme/js/app.js"></script>
<script>
    var element = document.getElementById("slider-img");
    var images = ['sh.jpg','sh.jpg','img1.jpg'];
    var counter= 0;
    setInterval(function () {
        if (counter >= images.length) counter =0;
        element.src = "img-slider/" + images[counter];
        counter++;
    },2000);
</script>
</html>