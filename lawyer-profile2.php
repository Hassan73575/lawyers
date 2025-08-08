
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Profile Card</title>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 90px;
        }

        .lawyer-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .lawyer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        .lawyer-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
            margin-bottom: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .lawyer-name {
            color: white;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .lawyer-title {
            color: #ecf0f1;
            font-size: 16px;
            opacity: 0.9;
        }

        .card-body {
            padding: 30px 25px;
        }

        .contact-info {
            margin-bottom: 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            padding: 8px 0;
        }

        .contact-icon {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            color: #3498db;
        }

        .contact-text {
            color: #2c3e50;
            font-size: 14px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            color: #2c3e50;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 4px;
        }

        .section-content {
            color: #555;
            font-size: 14px;
            line-height: 1.5;
        }

        .specialties {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .specialty-tag {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .experience-bar {
            background: #ecf0f1;
            height: 8px;
            border-radius: 4px;
            margin-top: 8px;
            overflow: hidden;
        }

        .experience-fill {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            height: 100%;
            width: 85%;
            border-radius: 4px;
            animation: fillBar 2s ease-in-out;
        }

        @keyframes fillBar {
            from { width: 0%; }
            to { width: 85%; }
        }

        .rating {
            display: flex;
            align-items: center;
            margin-top: 8px;
        }

        .stars {
            color: #f39c12;
            margin-right: 8px;
        }

        .rating-text {
            color: #555;
            font-size: 14px;
        }
        .hire-button {
            width: 100%;
            background: linear-gradient(135deg, #1a426bff);
            color: white;
            border: none;
            padding: 15px 20px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 25px;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);
            position: relative;
            overflow: hidden;
        }
        button a {
            color: white;
            text-decoration:none;
        }
        .hire-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(231, 76, 60, 0.4);
        }

        .hire-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 10px rgba(231, 76, 60, 0.3);
        }

        .hire-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: left 0.5s;
        }

        .hire-button:hover::before {
            left: 100%;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'?>
    <div class="container">
    <div class="lawyer-card">
        <div class="card-header">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Sarah Johnson" class="lawyer-image">
            <h2 class="lawyer-name">Sarah Johnson</h2>
            <p class="lawyer-title">Senior Partner & Criminal Defense Attorney</p>
        </div>
        
        <div class="card-body">
            <div class="contact-info">
                <div class="contact-item">
                    <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                    <span class="contact-text">sarah.johnson@lawfirm.com</span>
                </div>
                <div class="contact-item">
                    <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    <span class="contact-text">+92 313-12345678</span>
                </div>
                <div class="contact-item">
                    <svg class="contact-icon" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="contact-text">Karachi</span>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">Experience</h3>
                <div class="section-content">
                    <strong>15+ Years</strong> in Criminal Defense Law
                    <div class="experience-bar">
                        <div class="experience-fill"></div>
                    </div>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">Specialties</h3>
                <div class="specialties">
                    <span class="specialty-tag">Criminal Defense</span>
                    <span class="specialty-tag">Cooporative</span>
                    <span class="specialty-tag">Appeals</span>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">Education</h3>
                <div class="section-content">
                    <strong>J.D. Harvard Law School</strong> (2008)<br>
                    <strong>B.A. Political Science</strong> - Columbia University (2005)
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">Bar Admissions</h3>
                <div class="section-content">
                    New York State Bar (2008)<br>
                    U.S. District Court, Southern District of NY
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">Client Rating</h3>
                <div class="rating">
                    <div class="stars">★★★★★</div>
                    <span class="rating-text">4.9/5.0 (127 reviews)</span>
                </div>
            </div>

            <div class="section">
                <h3 class="section-title">About</h3>
                <div class="section-content">
                    Sarah Johnson is a highly experienced criminal defense attorney with over 15 years of practice. She has successfully defended clients in high-profile cases and maintains an exceptional track record in criminal defense, particularly in white-collar crimes and DUI cases. Known for her meticulous preparation and aggressive advocacy.
                </div>
            </div>
             <button class="hire-button" onclick="hireLawyer()">
                <a href="hirelawyer.php">📞 Hire Sarah Johnson</a>
            </button>
        </div>
    </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>