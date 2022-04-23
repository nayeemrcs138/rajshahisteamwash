<?php
session_start();
include('connection.php');
if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT username,password FROM users WHERE username=:uname and password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uname', $uname, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] = $_POST['username'];

        if ($uname == 'Admin') {
            echo "<script type='text/javascript'> document.location = 'admin/dashboard.php'; </script>";
        }
        if ($uname != 'Admin') {
            $_SESSION['username'] = $uname;
            echo "<script type='text/javascript'> document.location = 'user/dashboard.php'; </script>";
        }
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Rajshahi Steam Wash</title>
    <meta charset="UTF-8">

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex, follow">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/jquery-2.1.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <a href="index.php"> <img src="img/logo2.png" style="witdth: 100px; height: 50px;"> </a>
                <form method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    <span class="login100-form-title"> Login </span>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1"> Forgot </span>
                        <a href="#" class="txt2"> Password? </a>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login"> Sign in </button>
                    </div>
                    <div class="flex-col-c p-t-90 p-b-40">
                        <span class="txt1 p-b-9"> Don’t have an account? </span>
                        <a href="signup.php" class="txt3"> Sign up now </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>