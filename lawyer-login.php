<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Lawyer Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="signup.css">
    </head>
    
<body>

    <?php include('navbar.php') ?>
    
    <div class="form-wrapper">
        
        <form class="signup-form" action="" method="POST">
            <h2>Lawyer Log-in</h2>
            
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            
            <button type="submit" name="submit" class="submit-btn">Login</button>

            <p style="text-align: center; margin-top: 20px; font-size: 14px;">
            Don't have an account?
            <a href="lawyer-signup.php" style="color: #27548A; text-decoration: none; font-weight: 500;">
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

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `lawyers` WHERE email = '$email' AND password = '$password';";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION['lawyer_logged_in'] = true;
        $_SESSION['lawyer_email'] = $email;
        $_SESSION['lawyer_id'] = $data['id'];
        $_SESSION['lawyer_name'] = $data['name'];
        $_SESSION['lawyer_image'] = $data['photo'];
        echo "<script>alert('Login Successful');
        window.location.href = 'lawyer-dashboard.php';
        </script>";
    }else{
        echo "<script>alert('Invalid Email or Password');</script>";
    }

}



?>