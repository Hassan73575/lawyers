<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="login.php" method="post" autocomplete="off">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>

<?php

include 'dbconnect.php';

if (isset($_POST["submit"])){
    $username = $_POST ["username"];
    $password = $_POST ["password"];
    $isadmin = true;

    $query = "SELECT * FROM `admin` WHERE a_username = '$username' AND a_password = '$password' AND isadmin = $isadmin";
    $execute = mysqli_query($conn , $query);

    $row = mysqli_num_rows($execute);

    if($row == 1){
        $_SESSION['username'] = $username;
        $_SESSION['isadmin'] = true;

        echo "<script>
        alert ('Login Successfully')
        window.location.href = 'dashboard.php';
        </script>";

    }else{
        echo "<script> alert ('Username or Password is incorrect')</script>";
    }
}



?>
