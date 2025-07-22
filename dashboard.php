<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EduTracker - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #5e8374;
      --secondary: #7a9e8e;
      --accent: #ed8936;
      --success: #48bb78;
      --danger: #f56565;
      --light: #f8f9fa;
      --gray-dark: #2d3748;
      --gray-medium: #4a5568;
      --gray-border: #e2e8f0;
      --shadow: rgba(0, 0, 0, 0.08);
    }

    body {
      background-color: var(--light);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-image: linear-gradient(to bottom right, var(--light), var(--gray-border));
    }

    .login-container {
      max-width: 400px;
      margin: 5rem auto;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 5px 15px var(--shadow);
      background: #ffffff;
      border-top: 5px solid var(--primary);
    }

    .logo {
      text-align: center;
      margin-bottom: 2rem;
    }

    .logo i {
      font-size: 3rem;
      color: var(--accent);
      /* color: var(--primary); */
      background-color: rgba(94, 131, 116, 0.1);
      padding: 1rem;
      border-radius: 50%;
    }

    .logo h2 {
      color: var(--primary);
      margin-top: 1rem;
    }

    .role-card {
      cursor: pointer;
      transition: all 0.3s;
      border: 2px solid transparent;
      margin-bottom: 1rem;
      border-radius: 8px;
    }

    .role-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 10px var(--shadow);
    }

    .role-card.student {
      border-left: 5px solid var(--primary);
    }

    .role-card.teacher {
      border-left: 5px solid var(--secondary);
    }

    .role-card.parent {
      border-left: 5px solid var(--success);
    }

    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      padding: 0.5rem;
      font-weight: 500;
    }

    .btn-primary:hover {
      background-color: #4d6d63;
      border-color: #4d6d63;
    }

    .role-card.bg-light {
      background-color: rgba(237, 137, 54, 0.1) !important;
    }

    .text-muted {
      color: var(--gray-medium) !important;
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
        <h4 class="text-center mb-3" style="color: var(--primary);">Select your role to continue</h4>

        <div class="card role-card student" onclick="selectRole('student')">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="me-3">
                <i class="fas fa-user-graduate fa-2x" style="color: var(--primary);"></i>
              </div>
              <div>
                <h5 class="mb-0" style="color: var(--primary);">Student</h5>
                <small class="text-muted">Track assignments and grades</small>
              </div>
            </div>
          </div>
        </div>

        <div class="card role-card teacher" onclick="selectRole('teacher')">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="me-3">
                <i class="fas fa-chalkboard-teacher fa-2x" style="color: var(--secondary);"></i>
              </div>
              <div>
                <h5 class="mb-0" style="color: var(--secondary);">Teacher</h5>
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
                <h5 class="mb-0" style="color: var(--success);">Parent</h5>
                <small class="text-muted">Follow your child's progress</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-grid gap-2">
        <button id="continueBtn" class="btn btn-primary" disabled onclick="redirectToDashboard()">
          Continue to Dashboard <i class="fas fa-arrow-right ms-2"></i>
        </button>
      </div>
    </div>
  </div>

  <script>
    let selectedRole = null;

    function selectRole(role) {
      selectedRole = role;
      document.getElementById('continueBtn').disabled = false;

      document.querySelectorAll('.role-card').forEach(card => {
        card.classList.remove('bg-light');
      });

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
