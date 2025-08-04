<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="form-wrapper">

        <form class="signup-form" action="user-login.php" method="POST">
            <h2>User Log-in</h2>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" required name="email">
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required name="password">
            </div>

            <button type="submit" class="submit-btn" name="submit">Login</button>

            <p style="text-align: center; margin-top: 20px; font-size: 14px;">
                Don't have an account?
                <a href="user-signup.php" style="color: #27548A; text-decoration: none; font-weight: 500;">
                    Sign Up
                </a>
            </p>
        </form>
    </div>


    <?php include('footer.php') ?>
</body>

</html>

<?php

include 'dbconnect.php';

if (isset($_POST["submit"])){
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    $isadmin = true;

    $query = "SELECT * FROM `user` WHERE user_email = '$email' AND user_password = '$password'";
    $execute = mysqli_query($conn , $query);

    $row = mysqli_num_rows($execute);

    if($row == 1){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        echo "<script>
        alert ('Login Successfully')
        window.location.href = 'lawyer.php';
        </script>";

    }else{
        echo "<script> alert ('Username or Password is incorrect')</script>";
    }
}



?>