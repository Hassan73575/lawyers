<?php 
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    echo "<script>alert('Login required'); window.location.href='admin-login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Admin Panel - Law Firm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #15406cff;
            --secondary-color: #1a426bff;
            --accent-color: #3498db;
            --text-light: #ecf0f1;
            
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        .admin-sidebar {
            width: 280px;
            background: var(--primary-color);
            padding: 2rem;
            color: var(--text-light);
        }

        .admin-content {
            flex: 1;
            padding: 2rem;
            margin-top: 80px;
            background: #f5f6fa;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .active{
            background: #f5f6fa33;
        }
        .stat-card {
            background: white;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .vip-table {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 1.5rem;
        }

        .admin-header {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .nav-link {
            color: var(--text-light);
            padding: 0.8rem 1rem;
            margin: 0.5rem 0;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: var(--accent-color);
            color: white;
        }

        .btn-vip {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .admin-sidebar {
                width: 70px;
                padding: 1rem;
            }
            .admin-sidebar span {
                display: none;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="admin-container">
        <!-- Sidebar -->
        <div class="admin-sidebar">
            <h3 class="mb-4">VIP Admin</h3>
            <nav>
                <a href="admin-panel.php" class="nav-link active">
                    <i class="fas fa-tachometer-alt me-2"></i>
                    <span>Dashboard</span>
                </a>
                <a href="lawyer-dashboard.php" class="nav-link">
                    <i class="fas fa-users me-2"></i>
                    <span>Lawyers Panel</span>
                </a>
                <a href="admin-lawyers.php" class="nav-link">
                    <i class="fas fa-user-tie me-2"></i>
                    <span>All-Lawyers</span>
                </a>
                <a href="appointments.php" class="nav-link">
                    <i class="fas fa-calendar me-2"></i>
                    <span>Appointments</span>
                </a>
                <a href="admin-logout.php" class="nav-link">
                    <i class="fas fa-cog me-2"></i>
                    <span>Logout</span>
                </a>
            </nav>
        </div>
        <div class="admin-content">
        <h2>Our total Appointments</h2>
        <div class="vip-table">
               <h3 class="mb-4">Recent Cases</h3>
               
               <table class="table table-striped table-bordered table-hover table-responsive table-sm">
                   <thead class="table-dark text-center align-middle ">
                       <tr>
                           <th>Case ID</th>
                           <th>Client</th>
                           <th>Case-Type</th>
                           <th>Description</th>
                           <th>Status</th>
                           <th>Actions</th>
                       </tr>
                   </thead>
                   <tbody class="text-center">
                       <?php
                       include 'dbconnect.php';

                       $query = "SELECT * FROM appointments";
                       $result = mysqli_query($conn, $query);
                       while ($row = mysqli_fetch_assoc($result)) {
                       ?>
                       <tr>
                           <td><?php echo $row['id']; ?></td>
                           <td><?php echo $row['name']; ?></td>
                           <td><?php echo $row['lawyer_type']; ?></td>
                           <td><?php echo $row['details']; ?></td>
                           <td><a href=""<?php echo $row['id']; ?> class="btn btn-sm btn-primary">Active</a></td>
                           <td>
                               <a href="delete-case.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this data?');">
                                   Delete
                               </a>
                           </td>
                       </tr>
                       <?php
                   }
                   ?>
               </tbody>
               </table>
           </div>
        </div>


    </div>
    
    



    <?php include 'footer.php' ?>

</body>
</html>