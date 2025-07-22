<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361EE;
            --secondary: #4CC9F0;
            --accent: #F8961E;
            --success: #38B000;
            --alert: #F94144;
            --light: #F8F9FA;
            --dark: #212529;
        }
        
        body {
            background-color: var(--light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .login-container {
            max-width: 400px;
            margin: 5rem auto;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background: white;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .logo i {
            font-size: 3rem;
            color: var(--primary);
        }
        
        .role-card {
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid transparent;
            margin-bottom: 1rem;
        }
        
        .role-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
        }
        
        .role-card.student {
            border-left: 5px solid var(--primary);
        }
        
        .role-card.teacher {
            border-left: 5px solid var(--accent);
        }
        
        .role-card.parent {
            border-left: 5px solid var(--success);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
                <h2>EduTracker</h2>
                <p class="text-muted">Your school success companion</p>
            </div>
            
            <div class="mb-4">
                <h4 class="text-center mb-3">Select your role to continue</h4>
                
                <div class="card role-card student" onclick="selectRole('student')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-user-graduate fa-2x" style="color: var(--primary);"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Student</h5>
                                <small class="text-muted">Track assignments and grades</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card role-card teacher" onclick="selectRole('teacher')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-chalkboard-teacher fa-2x" style="color: var(--accent);"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Teacher</h5>
                                <small class="text-muted">Monitor class progress</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card role-card parent" onclick="selectRole('parent')">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-user-friends fa-2x" style="color: var(--success);"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Parent</h5>
                                <small class="text-muted">Follow your child's progress</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-grid gap-2">
                <button id="continueBtn" class="btn btn-primary" disabled onclick="redirectToDashboard()">
                    Continue to Dashboard
                </button>
            </div>
        </div>
    </div>

    <script>
        let selectedRole = null;
        
        function selectRole(role) {
            selectedRole = role;
            document.getElementById('continueBtn').disabled = false;
            
            // Remove active class from all cards
            document.querySelectorAll('.role-card').forEach(card => {
                card.classList.remove('bg-light');
            });
            
            // Add active class to selected card
            document.querySelector(`.role-card.${role}`).classList.add('bg-light');
        }
        
        function redirectToDashboard() {
            if (selectedRole) {
                window.location.href = `${selectedRole}_dashboard.html`;
            }
        }
    </script>
</body>
</html>