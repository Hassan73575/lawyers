<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lawyer Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="form-wrapper">

        <form class="signup-form" action="lawyer-signup.php" method="POST" enctype="multipart/form-data">
            <h2>Lawyer Sign-Up</h2>

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
                <input type="text" placeholder="City" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required name="pass">
            </div>

            <div class="custom-dropdown">
                <div class="dropdown-header" onclick="toggleDropdown(this)">
                    <span>Select Speciality</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <ul class="dropdown-list">
                    <li onclick="selectOption(this)">Criminal Law</li>
                    <li onclick="selectOption(this)">cyber Law</li>
                    <li onclick="selectOption(this)">Family Law</li>
                    <li onclick="selectOption(this)">Corporate Law</li>
                    <li onclick="selectOption(this)">real-state Law</li>
                    <li onclick="selectOption(this)">sexual harassment Law</li>
                    <li onclick="selectOption(this)">child protection Law</li>
                    <li onclick="selectOption(this)">Personal Protection Law</li>
                    <li onclick="selectOption(this)">bullying</li>
                    <li onclick="selectOption(this)">cyber bullying</li>
                </ul>
                <input type="hidden" name="speciality" required>
            </div>

            <button type="submit" class="submit-btn" name="submit">Sign Up</button>

            <p style="text-align: center; margin-top: 20px; font-size: 14px;">
                Already have an account?
                <a href="lawyer-login.php" style="color: #27548A; text-decoration: none; font-weight: 500;">
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
include 'dbconnect.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $isadmin = true;

    $query = "SELECT * FROM `admin` WHERE a_username = '$username' AND a_password = '$password' AND isadmin = $isadmin";
    $execute = mysqli_query($conn, $query);

    $row = mysqli_num_rows($execute);

    if ($row == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['isadmin'] = true;

        echo "<script>
        alert ('Login Successfully')
        window.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "<script> alert ('Username or Password is incorrect')</script>";
    }
}
?>