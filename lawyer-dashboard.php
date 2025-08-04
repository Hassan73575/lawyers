<?php
session_start();

if (!isset($_SESSION['lawyer_logged_in']) || $_SESSION['lawyer_logged_in'] !== true) {
    echo "<script>alert('Login required'); window.location.href='lawyer-login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawyer Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #27548A;
      --light-color: #ffffff;
    }

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

.dashboard-container {
    display: flex;
    min-height: 100vh;
}


/* Sidebar Styles */
.sidebar {
    width: 210px;
    height: 100vh;
    /* margin-top: 90px;  */
    background: #15406cff;
    color: white;
    padding: 20px 0;
}

.logo {
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.sidebar-nav ul {
    list-style: none;
    padding: 20px 0;
}

.sidebar-nav li {
    padding: 10px 20px;
    margin: 5px 0;
    cursor: pointer;
    transition: all 0.3s ease;
}

.sidebar-nav li.active,
.sidebar-nav li:hover {
    background: rgba(52, 152, 219, 0.3);
}

.sidebar-nav a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
}

/* Main Content Styles */
.main-content {
    flex: 1;
    background: #f5f6fa;
    /* margin-top: 120px; */
}

.top-bar {
    background: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.search-bar {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #f5f6fa;
    padding: 8px 15px;
    border-radius: 5px;
}

.search-bar input {
    border: none;
    background: none;
    outline: none;
    width: 200px;
}

.user-profile {
    display: flex;
    align-items: center;
    gap: 15px;
}

.notification {
    position: relative;
}

.badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #e74c3c;
    color: white;
    border-radius: 50%;
    padding: 2px 5px;
    font-size: 0.7rem;
}

/* Dashboard Content Styles */
.dashboard-content {
    padding: 30px;
}

.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.stat-card {
    background: white;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.stat-icon {
    font-size: 2rem;
    color: #3498db;
}

.stat-info h3 {
    color: #7f8c8d;
    font-size: 0.9rem;
    margin-bottom: 5px;
}

.stat-info p {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2c3e50;
}

/* Appointments Section */
.appointments-section {
    background: white;
    padding: 10px;
    width: 95%;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.appointments-section h2 {
    margin-bottom: 10px;
    color: #2c3e50;
}

.appointment-card {
    display: flex;
    align-items: center;
    padding: 10px;
    border-bottom: 1px solid #eee;
}

.time {
    width: 100px;
    color: #7f8c8d;
}

.details {
    flex: 1;
}

.details h3 {
    color: #2c3e50;
    margin-bottom: 5px;
}

.details p {
    color: #7f8c8d;
    font-size: 0.9rem;
}

.actions {
    display: flex;
    gap: 10px;
}

.actions button {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.accept {
    background: #2ecc71;
    color: white;
}

.reschedule {
    background: #f1c40f;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 70px;
    }
    
    .sidebar .logo span,
    .sidebar-nav span {
        display: none;
    }
    
    .stats-container {
        grid-template-columns: 1fr;
    }
}


</style>
<!-- <h4 class="mb-3">Welcome, <?php echo $_SESSION['lawyer_name'] ?? 'name'; ?></h4> -->
</head>
<body>
    <div class="d-flex flex-column flex-md-row">
        <?php include("sidebar.php"); ?>
        <div class="main-content">

            <!-- Top Bar -->
            <div class="top-bar">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="user-profile">
                    <a href="lawyer-logout.php"><button class="btn btn-sm btn-danger">logout</button></a>
                    <span class="notification">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </span>
                    <img src="https://placehold.co/40x40" alt="Profile">
                    <span>John Doe</span>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Today's Appointments</h3>
                            <p><?php 
                            include 'dbconnect.php';
                            $query = "SELECT * FROM appointments";
                            $exe = mysqli_query($conn,$query);
                            $row = mysqli_num_rows($exe);
                            echo "$row"
                            ?></p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Active Cases</h3>
                            <p>24</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Total Clients</h3>
                            <p><?php 
                    include 'dbconnect.php';
                    $query = "SELECT * FROM appointments";
                    $exe = mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($exe);
                    echo "$row[id]"
                    
                    ?></p>
                        </div>
                    </div>
                </div>
 
                <!-- Appointments Section -->
                <div class="appointments-section">
                    <table class="table table-striped table-bordered table-hover table-responsive table-sm">
                        <thead class="table-dark text-center align-middle text-nowrap">
                            <tr>
                                <th>id</th>
                                <th>Client Name</th>
                                <th>Client email</th>
                                <th>Lawyer type</th>
                                <th>Case Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody class="text-center align-middle">
                            <?php
                            include 'dbconnect.php';
                            $query= "SELECT * FROM appointments";
                            $result = mysqli_query($conn, $query);
                           ?> 
                           <?php
                           while($row = mysqli_fetch_assoc($result)){
                               echo "<tr>";
                               echo "<td>".$row['id']."</td>";
                               echo "<td>".$row['name']."</td>";
                               echo "<td>".$row['email']."</td>";
                               echo "<td>".$row['lawyer_type']."</td>";
                               echo "<td>".$row['details']."</td>";
                               echo "<td>
                                       <button class='btn btn-primary'>View</button>
                                       <button class='btn btn-danger'>Delete</button>
                                     </td>";
                               echo "</tr>";
                           }
                           ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="navbar.js"></script>
</body>
</html>
