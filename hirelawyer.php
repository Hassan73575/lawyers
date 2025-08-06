<?php
session_start();
if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
    echo "<script>
        alert('Please login to hire a lawyer');
        window.location.href = 'user-login.php';
    </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire a Lawyer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<?php include 'navbar.php' ?>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center mb-0">Hire a Lawyer</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="lawyer" class="form-label">Select Lawyer</label>
                                <select class="form-select" id="lawyer" name="lawyer" required>
                                    <option value="">Choose a lawyer...</option>
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
                            <div class="mb-3">
                                <label for="case_details" class="form-label">Case Details</label>
                                <textarea class="form-control" id="case_details" name="case_details" rows="3"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php 'footer.php'?>
</body>
</html>
<?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $lawyer = $_POST['lawyer'];
    $case_details = $_POST['case_details'];
    $status=0;

    $query = "INSERT INTO appointments (name, email, password, lawyer_type, details,status) VALUES ('$name', '$email', '$password', '$lawyer', '$case_details','$status')";
    $result = mysqli_query($conn, $query);
    if($result) {
        echo "<script>alert('Appointment request submitted successfully!');
        window.location.href = 'index.php';
        </script>";
    }else {
        echo "<script>alert('Error submitting appointment request. Please try again.');
        window.location.href = 'index.php';
        </script>";
    }
}

?>
