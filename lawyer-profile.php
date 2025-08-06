<?php
session_start();
include 'dbconnect.php';

$lawyer_id = $_SESSION['lawyer_id'];
echo        $_SESSION['lawyer_email'];
echo        $_SESSION['lawyer_id'];
echo        $_SESSION['lawyer_name'];
echo        $_SESSION['lawyer_image'];
$query = "SELECT * FROM lawyers ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lawyer Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .profile-container {
            width: 400px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #555;
            object-fit: cover;
        }
        h2 {
            margin: 15px 0 5px 0;
        }
        p {
            margin: 8px 0;
            color: #333;
        }
        .logout-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background: #c62828;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <img class="profile-img" src="<?php echo $_SESSION['lawyer_image']; ?>" alt="Lawyer Image">
    <h2><?php echo $row['name']; ?></h2>
    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
    <p><strong>Specialization:</strong> <?php echo $row['specialty']; ?></p>

    <a class="logout-btn" href="logout.php">Logout</a>
</div>

</body>
</html>
