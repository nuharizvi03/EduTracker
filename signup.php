<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Signup - EduTracker</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<section class="auth-section">
    <div class="auth-container">
        <h2>Create Your Account</h2>
        <p>Join EduTracker and take control of your learning.</p>
        <form action="signup_process.php" method="POST" enctype="multipart/form-data" class="auth-form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required />
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required />
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required />
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" required />
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" required />
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="parent">Parent</option>
                </select>
            </div>
            <div class="form-group">
                <label for="class_school">Class/School (optional for students)</label>
                <input type="text" name="class_school" id="class_school" />
            </div>
            <div class="form-group">
                <label for="profile_pic">Profile Picture</label>
                <input type="file" name="profile_pic" id="profile_pic" accept="image/*" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required />
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required />
            </div>
            <button type="submit" class="btn login-submit-btn">Sign Up</button>
            <p class="switch-link">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
