<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="form-wrapper">

        <form class="signup-form" action="user-signup.php" method="POST" enctype="multipart/form-data">
            <h2>User Sign-Up</h2>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Full Name" required name="fullname">
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" required name="email">
            </div>

            <div class="custom-dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <span>Select Gender</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="dropdown-list">
                    <li onclick="selectOption(this)">Male</li>
                    <li onclick="selectOption(this)">Female</li>
                    <li onclick="selectOption(this)">Other</li>
                </ul>
                <input type="hidden" name="gender" required>
            </div>

            <div class="input-group">
                <i class="fas fa-location-dot"></i>
                <input type="text" placeholder="City" required name="city">
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required name="password">
            </div>

             <div class="custom-dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <span>Sign up as </span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="dropdown-list">
                    <li><a href="user-signup.php">User</a></li>
                    <li><a href="lawyer-signup.php">Lawyer</a></li>
                    <li><a href="admin-login.php">Admin</a></li>
                </ul>
                <input type="hidden" name="gender" required>
            </div>


            <button type="submit" class="submit-btn" name="submit">Sign Up</button>

            <p style="text-align: center; margin-top: 20px; font-size: 14px;">
            Already have an account?
            <a href="user-login.php" style="color: #27548A; text-decoration: none; font-weight: 500;">
                Login
            </a>
        </p>
        </form>


    </div>

    <?php include('footer.php') ?>

    <script>
        function toggleDropdown(header) {
            const list = header.nextElementSibling;
            const icon = header.querySelector("i");
            list.style.display = list.style.display === "block" ? "none" : "block";
            icon.style.transform = list.style.display === "block" ? "rotate(180deg)" : "rotate(0)";
        }

        function selectOption(li) {
            const dropdown = li.closest(".custom-dropdown");
            const header = dropdown.querySelector(".dropdown-header span");
            const hiddenInput = dropdown.querySelector("input[type='hidden']");
            header.textContent = li.textContent;
            hiddenInput.value = li.textContent;
            dropdown.querySelector(".dropdown-list").style.display = "none";
            dropdown.querySelector("i").style.transform = "rotate(0)";
        }

        // Close dropdown if clicked outside
        document.addEventListener('click', function(e) {
            document.querySelectorAll('.custom-dropdown').forEach(dropdown => {
                if (!dropdown.contains(e.target)) {
                    dropdown.querySelector('.dropdown-list').style.display = 'none';
                    dropdown.querySelector('i').style.transform = 'rotate(0)';
                }
            });
        });
    </script>
</body>

</html>

<?php
include('dbconnect.php');

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $gender   = $_POST['gender'];
    $city     = $_POST['city'];
    $password = $_POST['password'];

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM user WHERE user_email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {

        // Insert new user
        $insertQuery = "INSERT INTO user (user_name, user_email, user_gender, user_city, user_pass) 
                        VALUES ('$fullname', '$email', '$gender', '$city', '$password')";

        if (mysqli_query($conn, $insertQuery)) {
            echo "<script>alert('User registered successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>
