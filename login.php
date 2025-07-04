<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - EduTracker</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php include 'includes/navbar.php'; ?>

<section class="auth-section">
    <div class="auth-container">
        <h2>Welcome Back!</h2>
        <p>Please login to continue your learning journey.</p>

        <form action="login_process.php" method="POST" class="auth-form">

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" required />
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" required />
            </div>

            <div class="form-group">
                <label for="username">Email / Username</label>
                <input type="text" name="username" id="username" required />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required />
            </div>

            <div class="form-group">
                <label for="role">Login As</label>
                <select name="role" id="role" required>
                    <option value="">-- Select Role --</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="form-group forgot-password">
                <a href="forgot_password.php">Forgot Password?</a>
            </div>

            <button type="submit" class="btn login-submit-btn">Login</button>

            <p class="switch-link">Don't have an account? <a href="signup.php">Sign up here</a></p>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

</body>
</html>
