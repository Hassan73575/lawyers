<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Law Firm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        .container{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 90%;
        }
        .btn-login {
            background: #3498db;
            color: white;
            width: 100%;
            padding: 0.8rem;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="login-card">
            <h2 class="text-center mb-4">Admin Login</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-login">Login</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
<?php
include 'dbconnect.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE name = '$username' AND pass = '$password';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = $username;
        
        echo "<script>alert('Login Successful');
        window.location.href = 'admin-panel.php';
        </script>";
    }else{
        echo "<script>alert('Invalid Username or Password');</script>";
    }

}



?>