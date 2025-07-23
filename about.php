<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About EduTracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <style>
        :root {
            --primary: #5e8374;  /* Vibrant purple */
            --secondary: #4D8BFF;  /* Bright blue */
            --accent: #f4a261;  /* Pink accent */
            --success: #00C9A7;  /* Teal */
            --light: #F8F9FF;  /* Very light purple-white */
            --dark: #4a665b;  /* Dark blue-gray */
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(108, 99, 255, 0.1) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 5rem 0;
            border-bottom: 1px solid rgba(108, 99, 255, 0.1);
        }
        
        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        .section-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
            height: 100%;
            border-top: 4px solid var(--primary);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(108, 99, 255, 0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }
        
        .team-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(108, 99, 255, 0.1);
        }
        
        .team-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary);
            margin: 0 auto 1.5rem;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 0.6rem 1.5rem;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: #5a52e0;
            border-color: #5a52e0;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
        <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="hero-title">About EduTracker</h1>
            <p class="hero-subtitle">Your ultimate companion for academic success. We're revolutionizing how students learn, organize, and achieve their goals.</p>
            <a href="#our-mission" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </section>

    <!-- Our Mission Section -->
    <section id="our-mission" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Our Mission</h2>
                    <p>At EduTracker, we believe every student deserves the tools to succeed without unnecessary stress. Our mission is to empower students with smart, intuitive tools that make learning more effective and less overwhelming.</p>
                    <p>Founded in 2023 by a team of educators and tech enthusiasts, EduTracker combines pedagogical expertise with cutting-edge technology to create solutions that actually work for students.</p>
                    <div class="d-flex align-items-center mt-4">
                        <i class="fas fa-check-circle text-success me-2" style="font-size: 1.5rem;"></i>
                        <span>Used by over 50,000 students worldwide</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Students learning" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- What Makes Us Different Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="section-title text-center mb-5">What Makes Us Different</h2>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Student-First Design</h3>
                        <p>Every feature is built with actual student input and tested in real classroom environments.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Data-Driven Insights</h3>
                        <p>Our smart algorithms identify your weak areas and suggest targeted improvements.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Stress Reduction</h3>
                        <p>We don't just help you learn better - we help reduce the anxiety that comes with school.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Meet The Team</h2>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Team member" class="team-img">
                        <h3>Dr. Sarah Johnson</h3>
                        <p class="text-muted">Chief Education Officer</p>
                        <p>Former high school principal with 15 years of educational experience.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="team-card">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Team member" class="team-img">
                        <h3>Michael Chen</h3>
                        <p class="text-muted">Lead Developer</p>
                        <p>Tech entrepreneur passionate about making education more accessible.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="team-card">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Team member" class="team-img">
                        <h3>Emma Rodriguez</h3>
                        <p class="text-muted">UX Designer</p>
                        <p>Specializes in creating intuitive interfaces for young learners.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <!-- CTA Section -->
    <!-- <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Transform Your Learning Experience?</h2>
            <p class="mb-4">Join thousands of students who are achieving more with less stress.</p>
            <a href="signup.php" class="btn btn-light btn-lg px-4">Get Started for Free</a>
        </div>
    </section> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>