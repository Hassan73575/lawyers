<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
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
             <select class="form-select" aria-label="Default select example">
               <li><a href="user-signup.php">User</a></li>
                    <li><a href="lawyer-signup.php">Lawyer</a></li>
                    <li><a href="admin-login.php">Admin</a></li>
                </select>

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

    $query = "SELECT * FROM `user` WHERE user_email = '$email' AND user_pass = '$password'";
    $execute = mysqli_query($conn , $query);
    $data = mysqli_fetch_assoc($execute);

    $row = mysqli_num_rows($execute);

    if($row == 1){
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['useremail'] = $email;
        $_SESSION['userpassword'] = $password;

        echo "<script>
        alert ('Login Successfully');
        window.location.href = 'hirelawyer.php';
        </script>";

    }else{
        echo "<script> alert ('Username or Password is incorrect')</script>";
    }
}



?>