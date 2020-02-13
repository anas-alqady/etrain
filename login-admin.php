<?php

include_once('include/config.php');
include_once('include/functions.php');
if (!empty($_SESSION['user'])) {
    header("location: http://localhost/hemma-1/profile.php");
}
?>
<html>
<head>
    <title>
        log in
    </title>
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/bootstrab">
    <link rel="stylesheet" href="theme/css/bootstrab/bootstrap.css">
</head>
<body>
<section class="nav " style="margin-bottom: 7rem">
    <div class="container">
        <nav class="navbar navbar-light bg-light col-lg-12 ">
            <a href="register.php" class="col-lg-2 col-sm-4 "><button class=" btn btn-outline-success pl-3 pr-3" type="submit">sign up </button></a>
            <button class=" col-lg-2 col-md-6 btn btn-info my-2 my-sm-6" type="submit">أهل الهمة  </button>
            <div class="col-lg-3 text-right "></div>
        </nav>
    </div>
</section>


<section class="login mt-5">
    <div class="container">
        <div class="card pt-1 p-1 d-flex flex-row justify-content-center col-lg-12">
            <div class="col-lg-6">
                <img src="image/logo.png" alt="" class="col-lg-8 col-sm-8">
            </div>
            <form method="post" action="handle/admen.php" class="col-lg-6 card-header card-footer d-flex flex-column card-header-tabs text-center justify-content-center ">
                <div class="form-group row ">
                    <div class="col-lg-12 ">
                        <input type="email" name="email" class="form-control" id="staticEmail" placeholder="email" required>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-lg-12 ">
                        <input type="password" name="password" style="margin-top: 1rem" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                </div>

                <input type="submit" value="login" style="margin-top: 1rem;align-self: center;height: 2.5rem;width: 12rem;border-radius: 1rem;border: 1px yellow;background: #6f42c1 ">
            </form>
        </div>
    </div>
</section>
</body>
</html>

