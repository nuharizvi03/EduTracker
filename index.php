<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>EduTracker - For School Students</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    /* Global Student-Friendly Styles */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .hero {
      text-align: center;
      padding: 80px 20px;
      /* background: #fdf4e3 url('images/student-pattern.png') center/cover; */
      position: relative;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 8px;
      background: linear-gradient(90deg, #f4a261, #5e8374, #f4a261);
    }
    .hero h1 {
      font-size: 38px;
      color: #333;
      margin-bottom: 20px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
    }
    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
      color: #555;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }
    .hero-buttons {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }
    .hero .student-btn {
      padding: 14px 28px;
      background: #f4a261;
      color: #fff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      display: inline-block;
      transition: all 0.3s;
      box-shadow: 0 4px 0 rgba(224, 123, 60, 0.8);
    }
    .hero .student-btn:hover {
      background: #e07b3c;
      transform: translateY(2px);
      box-shadow: 0 2px 0 rgba(224, 123, 60, 0.8);
    }
    .hero .secondary-btn {
      padding: 14px 28px;
      background: #5e8374;
      color: #fff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      display: inline-block;
      transition: all 0.3s;
      box-shadow: 0 4px 0 rgba(74, 102, 91, 0.8);
    }
    .hero .secondary-btn:hover {
      background: #4a665b;
      transform: translateY(2px);
      box-shadow: 0 2px 0 rgba(74, 102, 91, 0.8);
    }

    /* Features Section - Student Focused */
    .features-section {
      padding: 60px 20px;
      background: #fff;
    }
    .section-title {
      text-align: center;
      font-size: 32px;
      color: #333;
      margin-bottom: 15px;
      position: relative;
    }
    .section-title::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: #f4a261;
      border-radius: 2px;
    }
    .section-subtitle {
      text-align: center;
      font-size: 18px;
      color: #666;
      max-width: 700px;
      margin: 0 auto 40px;
    }
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      max-width: 1100px;
      margin: 0 auto;
    }
    .feature-card {
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      transition: all 0.3s;
      border-top: 5px solid #f4a261;
    }
    .feature-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .feature-icon {
      width: 80px;
      height: 80px;
      background: #fdf4e3;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      border: 3px solid #f4a261;
    }
    .feature-icon img {
      width: 40px;
    }
    .feature-card h3 {
      font-size: 22px;
      margin-bottom: 15px;
      color: #333;
    }
    .feature-card p {
      font-size: 16px;
      color: #666;
      line-height: 1.6;
    }

    /* Student Testimonials */
    .testimonials-section {
      padding: 60px 20px;
      background: #f9f9f9;
    }
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
      max-width: 1100px;
      margin: 40px auto 0;
    }
    .testimonial-card {
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      position: relative;
    }
    .testimonial-card::before {
      content: """;
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 60px;
      color: #f4a261;
      opacity: 0.2;
      font-family: serif;
      line-height: 1;
    }
    .testimonial-text {
      font-size: 16px;
      color: #555;
      line-height: 1.7;
      margin-bottom: 20px;
      padding-top: 10px;
    }
    .student-info {
      display: flex;
      align-items: center;
    }
    .student-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #f4a261;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      margin-right: 15px;
    }
    .student-details h4 {
      margin: 0;
      color: #333;
    }
    .student-details p {
      margin: 5px 0 0;
      color: #666;
      font-size: 14px;
    }

    /* Subject Highlights */
    .subjects-section {
      padding: 60px 20px;
      background: #5e8374;
      color: white;
    }
    .subjects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      max-width: 900px;
      margin: 40px auto 0;
    }
    .subject-card {
      background: rgba(255,255,255,0.1);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      transition: all 0.3s;
      backdrop-filter: blur(5px);
    }
    .subject-card:hover {
      background: rgba(255,255,255,0.2);
      transform: scale(1.05);
    }
    .subject-icon {
      font-size: 40px;
      margin-bottom: 15px;
    }
    .subject-card h3 {
      margin: 0;
      font-size: 18px;
    }

    /* Final CTA */
    .student-cta {
      padding: 80px 20px;
      text-align: center;
      background: linear-gradient(135deg, #fdf4e3 0%, #f8e8cb 100%);
    }
    .student-cta h2 {
      font-size: 32px;
      color: #333;
      margin-bottom: 20px;
    }
    .student-cta p {
      font-size: 18px;
      color: #555;
      max-width: 700px;
      margin: 0 auto 30px;
    }
    .cta-btn-large {
      padding: 16px 40px;
      background: #f4a261;
      color: #fff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      display: inline-block;
      transition: all 0.3s;
      font-size: 18px;
      box-shadow: 0 5px 0 rgba(224, 123, 60, 0.8);
    }
    .cta-btn-large:hover {
      background: #e07b3c;
      transform: translateY(3px);
      box-shadow: 0 2px 0 rgba(224, 123, 60, 0.8);
    }
  </style>
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<section class="hero">
  <h1>Your Superpower for School Success!</h1>
  <p>EduTracker helps school students stay organized, learn smarter, and get better grades with less stress. Join thousands of students who are acing their classes!</p>
  <div class="hero-buttons">
    <a href="getstarted.php" class="student-btn">I Want Better Grades!</a>
    <a href="tour.php" class="secondary-btn">How It Works</a>
  </div>
</section>

<section class="features-section">
  <h2 class="section-title">Everything You Need to Succeed</h2>
  <p class="section-subtitle">We've packed EduTracker with features that make school life easier</p>
  
  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon">
        <img src="images/icon-homework.png" alt="Homework">
      </div>
      <h3>Homework Tracker</h3>
      <p>Never forget an assignment again with our simple homework organizer and reminder system.</p>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <img src="images/icon-test.png" alt="Tests">
      </div>
      <h3>Test Prep Tools</h3>
      <p>Smart flashcards and practice quizzes tailored to your upcoming tests and weak areas.</p>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <img src="images/icon-grades.png" alt="Grades">
      </div>
      <h3>Grade Calculator</h3>
      <p>See exactly what you need on upcoming assignments to reach your target grades.</p>
    </div>
    <div class="feature-card">
      <div class="feature-icon">
        <img src="images/icon-time.png" alt="Time">
      </div>
      <h3>Study Timer</h3>
      <p>Pomodoro-style timer with breaks to help you focus and study more effectively.</p>
    </div>
  </div>
</section>

<section class="testimonials-section">
  <h2 class="section-title">What Students Are Saying</h2>
  <p class="section-subtitle">Real students, real results</p>
  
  <div class="testimonials-grid">
    <div class="testimonial-card">
      <p class="testimonial-text">"I went from C's to A's in math after using EduTracker's practice quizzes for just 3 weeks. It showed me exactly what I didn't understand!"</p>
      <div class="student-info">
        <div class="student-avatar">TJ</div>
        <div class="student-details">
          <h4>Taylor Johnson</h4>
          <p>10th Grade Student</p>
        </div>
      </div>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"The homework tracker saved me so many times! I used to forget assignments all the time, but now I'm always prepared."</p>
      <div class="student-info">
        <div class="student-avatar">MS</div>
        <div class="student-details">
          <h4>Miguel Sanchez</h4>
          <p>8th Grade Student</p>
        </div>
      </div>
    </div>
    <div class="testimonial-card">
      <p class="testimonial-text">"My parents love seeing my progress reports. They stopped nagging me about grades because they can see I'm improving!"</p>
      <div class="student-info">
        <div class="student-avatar">AK</div>
        <div class="student-details">
          <h4>Aisha Khan</h4>
          <p>11th Grade Student</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="subjects-section">
  <h2 class="section-title" style="color: white;">Works For All Your Classes</h2>
  <p class="section-subtitle" style="color: rgba(255,255,255,0.9);">Math, science, history, languages and more</p>
  
  <div class="subjects-grid">
    <div class="subject-card">
      <div class="subject-icon">🧮</div>
      <h3>Mathematics</h3>
    </div>
    <div class="subject-card">
      <div class="subject-icon">🧪</div>
      <h3>Science</h3>
    </div>
    <div class="subject-card">
      <div class="subject-icon">📜</div>
      <h3>History</h3>
    </div>
    <div class="subject-card">
      <div class="subject-icon">🔠</div>
      <h3>English</h3>
    </div>
    <div class="subject-card">
      <div class="subject-icon">🗣️</div>
      <h3>Languages</h3>
    </div>
  </div>
</section>

<section class="student-cta">
  <h2>Ready to Take Control of Your Grades?</h2>
  <p>Join thousands of students who are learning smarter, not harder. EduTracker works on all your devices so you can study anywhere.</p>
  <a href="signup.php" class="cta-btn-large">Start Free Trial</a>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>