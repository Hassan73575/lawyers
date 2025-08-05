<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lawyer Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

            <div class="input-group">
                <i class="fas fa-location-dot"></i>
                <input type="text" placeholder="City" name="city" required>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required name="pass">
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="experience" required name="experience">
            </div>
            <div class="input-group">
                <input type="file" class="form-control" placeholder="Password" required name="image">
            </div>

           <div class="mb-3">
                <label for="lawyer" class="form-label">Gender</label>
                <select class="form-select" id="lawyer" name="gender" required>
                    <option value="">Choose a Gender...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Rather not to">Other</option>
                </select>
            </div>
           <div class="mb-3">
                <label for="lawyer" class="form-label">salect Spaciality</label>
                <select class="form-select" id="lawyer" name="Spaciality" required>
                    <option value="">Choose a spaciality...</option>
                    <option value="Criminal Lawyer">Criminal Lawyer</option>
                    <option value="Civil Lawyer">Civil Lawyer</option>
                    <option value="Corporate Lawyer">Corporate Lawyer</option>
                    <option value="Real Estate Lawyer">Real Estate Lawyer</option>
                    <option value="Family Lawyer">Family Lawyer</option>
                    <option value="Cyberbullying Lawyer">Cyberbullying Lawyer</option>
                    <option value="Cyber Law Lawyer">Cyber Law Lawyer</option>
                    <option value="Sexual Harassment Lawyer">Sexual Harassment Lawyer</option>
                    <option value="Child Protection Lawyer">Child Protection Lawyer</option>
                    <option value="Personal Protection Lawyer">Personal Protection Lawyer</option>
                    <option value="Bullying Lawyer">Bullying Lawyer</option>
                </select>
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

    <!-- <script>
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
    </script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>



<?php
include 'dbconnect.php';

if (isset($_POST["submit"])) {

    $name = $_POST['fullname'];    
    $email = $_POST['email'];    
    $password = $_POST['pass'];    
    $city = $_POST['city'];    
    $experience = $_POST['experience'];    
    $gender = $_POST['gender'];    
    $Spaciality = $_POST['Spaciality'];  
    
            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $img_temp = $_FILES['image']['tmp_name'];
            $img_size = $_FILES['image']['size'];
            $path = 'img/'.$img_name;

            if($img_type == "image/jpeg" || $img_type == "image/png" || $img_type == "image/jpg"){
                if($img_size < 15000000){
                    $query = "INSERT INTO `lawyers`(`name`, `email`, `gender`, `city`, `password`, `specialty`, `experience`, `photo`) VALUES ('$name','$email','$gender','$city','$password','$Spaciality','$experience','$path');";
                    $exe = mysqli_query($conn, $query);
                    if($exe){
                        move_uploaded_file($img_temp, $path);
                        echo "<script> alert('data inserted buddy 😘😎') </script>";
                    }else{
                        echo "<script> alert('data not inserted 😭🤬') </script>";
                    }
                }else{
                    echo "<script> alert('file must be less than 15mb')</script>";
                }
                
            }else{
                echo "<script> alert('file type is not supported 😭😭')</script>";
            }
}
?>