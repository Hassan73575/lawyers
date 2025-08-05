<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include('navbar.php')?>
    
    <header class="hero">
        <div class="hero-content">
            <h1>Expert Legal Solutions</h1>
            <p>Committed to Justice, Dedicated to You</p>
            <button class="cta-button">Free Consultation</button>
        </div>
    </header>

    <main>
        <section class="services">
            <h2>Our Practice Areas</h2>
            <div class="card-container">
                <div class="card">
                    <i class="fas fa-building"></i>
                    <h3>Corporate Law</h3>
                    <p>Expert guidance in business law matters</p>
                </div>
                <div class="card">
                    <i class="fas fa-gavel"></i>
                    <h3>Criminal Law</h3>
                    <p>Professional criminal defense services</p>
                </div>
                <div class="card">
                    <i class="fas fa-home"></i>
                    <h3>Real Estate Law</h3>
                    <p>Complete property law solutions</p>
                </div>
                <!-- New Cards -->
                <div class="card">
                    <i class="fas fa-hand-paper"></i>
                    <h3>Sexual Harassment</h3>
                    <p>Supporting victims with sensitivity and strength</p>
                </div>
                <div class="card">
                    <i class="fas fa-child"></i>
                    <h3>Child Protection</h3>
                    <p>Defending children's rights and safety</p>
                </div>
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h3>Family Disputes</h3>
                    <p>Resolving family conflicts with care</p>
                </div>
                <div class="card">
                    <i class="fas fa-balance-scale"></i>
                    <h3>Civil Rights</h3>
                    <p>Fighting for equality and justice</p>
                </div>
                <div class="card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Personal Protection</h3>
                    <p>Ensuring your safety and rights</p>
                </div>
                <div class="card">
                    <i class="fas fa-fist-raised"></i>
                    <h3>Bullying Cases</h3>
                    <p>Protection against physical and emotional harassment</p>
                </div>
                <div class="card">
                    <i class="fas fa-laptop"></i>
                    <h3>Cyberbullying</h3>
                    <p>Legal defense against online harassment and threats</p>
                </div>
            </div>
        </section>
        
        <section class="lawyers">
            <h2>Our Expert Lawyers</h2>
            <div class="lawyer-container">
                <div class="lawyer-card">
                    <div class="lawyer-img">
                        <img src="lawyer6.jpg" alt="Criminal Law Expert">
                    </div>
                    <h3>Sarah Johnson</h3>
                    <p class="specialty">Criminal Law Specialist</p>
                    <p class="specialty">Corporate Law Specialist</p>
                    <p class="experience">15 Years Experience</p>
                    <div class="lawyer-contact">
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="lawyer-profile1.php"><button class="button">View Profile</button></a>
                    </div>
                </div>

                <div class="lawyer-card">
                    <div class="lawyer-img">
                        <img src="lawyer2.jpg" alt="Corporate Law Expert">
                    </div>
                    <h3>Michael Chen</h3>
                    <p class="specialty">Family Law Expert</p>
                    <p class="specialty">Cyberbullying Law Expert</p>
                    <p class="experience">12 Years Experience</p>
                    <div class="lawyer-contact">
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="lawyer-profile2.php"><button class="button">View Profile</button></a>
                    </div>
                </div>

                <div class="lawyer-card">
                    <div class="lawyer-img">
                        <img src="lawyer5.jpg" alt="Family Law Expert">
                    </div>
                    <h3>Emma Rodriguez</h3>
                    <p class="specialty">Real-state Law Specialist</p>
                    <p class="specialty">Civil-Rights Specialist</p>
                    <p class="experience">10 Years Experience</p>
                    <div class="lawyer-contact">
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="lawyer-profile3.php"><button class="button">View Profile</button></a>
                    </div>
                </div>

                <div class="lawyer-card">
                    <div class="lawyer-img">
                        <img src="lawyer1.jpg" alt="Cyber Law Expert">
                    </div>
                    <h3>David Smith</h3>
                    <p class="specialty">Sexual-harassment Law Expert</p>
                    <p class="specialty">Child-Abuse Law Expert</p>
                    <p class="experience">8 Years Experience</p>
                    <div class="lawyer-contact">
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="lawyer-profile4.php"><button class="button">View Profile</button></a>
                    </div>
                </div>
                <div class="lawyer-card">
                    <div class="lawyer-img">
                        <img src="lawyer4.jpg" alt="Cyber Law Expert">
                    </div>
                    <h3>David Smith</h3>
                    <p class="specialty">Personal-Protection Law Expert</p>
                    <p class="specialty">Bulling Cases Law Expert</p>
                    <p class="experience">8 Years Experience</p>
                    <div class="lawyer-contact">
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                        <a href="lawyer-profile5.php"><button class="button">View Profile</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="about-content">
                <h2>About Our Firm</h2>
                <p>With over 20 years of experience, we provide exceptional legal services to our clients.</p>
                <img src="courtfirm.jpg" alt="Law Firm Office">
            </div>
        </section>
    </main>

   

    <?php include('footer.php') ?>

    <!-- <script>
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const isActive = button.classList.contains('active');

                // Close all
                document.querySelectorAll('.faq-question').forEach(btn => {
                    btn.classList.remove('active');
                    const ans = btn.nextElementSibling;
                    ans.style.maxHeight = null;
                    ans.classList.remove('open');
                });

                if (!isActive) {
                    button.classList.add('active');
                    answer.classList.add('open');
                    answer.style.maxHeight = answer.scrollHeight + "px";
                }
            });
        });
    </script> -->
</body>

</html>