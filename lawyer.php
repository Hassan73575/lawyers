<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<style>
    .lawyer-card {
        background: #ffffff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(39, 84, 138, 0.15);
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        width: 280px;
        margin: 20px;
        border: 1px solid #e0e0e0;
    }

    .lawyer-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(39, 84, 138, 0.25);
    }

    .lawyer-img img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        display: block;
    }

    .lawyer-info {
        padding: 18px 16px;
        background-color: #F6F6F6;
        text-align: center;
    }

    .lawyer-info h3 {
        color: #27548A;
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: 600;
    }

    .lawyer-info p {
        color: #444;
        font-size: 15px;
        margin: 6px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .lawyer-info i {
        color: #27548A;
        margin-right: 8px;
        font-size: 16px;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 40px 20px;
    }
</style>

<body>

    <div class="card-container">

        <div class="lawyer-card">
            <div class="lawyer-img">
                <img src="images/lawyer1.jpg" alt="Lawyer Picture">
            </div>
            <div class="lawyer-info">
                <h3>John Doe</h3>
                <p><i class="fas fa-user-tie"></i> Civil Law</p>
                <p><i class="fas fa-map-marker-alt"></i> New York</p>
            </div>
        </div>
    </div>

</body>

</html>