<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="contact.css">
</head>

<body>
  <?php include 'navbar.php'?>
  <section class="contact">
    <div class="content">
        <?php include 'dbconnect.php'?>
      <h2>Contact Us</h2>
      <p>Have questions or need legal assistance? Our team is here to help you. Feel free to reach out to us through phone, email, or by filling out the contact form. We aim to respond to all queries promptly and professionally.</p>
    </div>
    <div class="container">
      <div class="contact_info">
        <div class="box">
          <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
          <div class="text">
            <h3>Address</h3>
            <p>North Karachi Center<br>Nazmabad,Karachi<br>213423-0</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa-solid fa-phone"></i></div>
          <div class="text">
            <h3>Phone</h3>
            <p>03196723370</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa-solid fa-envelope"></i></div>
          <div class="text">
            <h3>Email</h3>
            <p>hanjum22528@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="contactform">
        <form method="POST" action="">
          <h2>Send Message </h2>
          <div class="inputbox">
            <input type="text" required="required" name="name">
            <span>Full Name</span>
          </div>
          <div class="inputbox">
            <input type="text" required="required" name="email">
            <span>Email</span>
          </div>
          <div class="inputbox">
            <textarea required="required" name="message"></textarea>
            <span>Type your Message here...</span>
          </div>
          <div class="inputbox">
            <input type="submit" value="Send" name="btn">
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>
</html>
<?php
if(isset($_POST['btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $sql = "INSERT INTO contacts (fullname, email, message) VALUES ('$name', '$email', '$message')";
    
    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
