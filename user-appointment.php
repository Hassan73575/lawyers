<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        
        .vip-table {
            background: white;
            border-radius: 10px;
            border:2px solid #1a426bff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 1.5rem;
        }
        .container{
            padding: 100px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <h2>Note:</h2>
        <p>When the status is marked as <strong style="color: green;">"Accept"</strong>, it means that your appointment has been accepted by the lawyer or admin and is officially confirmed. However, if the status shows <strong style="color: red;">"Pending"</strong>, it means your appointment request is still pending and has not yet been approved.</p>
        <div class="vip-table">
                <h3 class="mb-4">Recent Cases</h3>
                
                <table class="table table-striped table-bordered table-hover table-responsive table-sm">
                    <thead class="table-dark text-center align-middle ">
                        <tr>
                            <th>Case ID</th>
                            <th>Client</th>
                            <th>Email</th>
                            <th>Case-Type</th>
                            <th>Description</th>
                            <th>Status</th>
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
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['lawyer_type']; ?></td>
                            <td><?php echo $row['details']; ?></td>
                                <td><?php    
                                $id = $row['id'];
                                    if($row['status'] == 1 ){

                                        echo "<a href='' class='badge bg-success p-2 text-decoration-none'>Accept</a>";
                                        
                                    }else{
                                        
                                        echo "<a href='' class='badge bg-danger p-2 text-decoration-none' >Pending</a>";
                                    }
                                    
                                    ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
                </table>
            </div> 
           </div>
    
    <?php include 'footer.php' ?>
</body>
</html>