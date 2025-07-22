<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker - Student Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #4361EE;
            --accent-orange: #F8961E;
            --success-green: #38B000;
            --alert-red: #F94144;
            --light-blue: #4CC9F0;
            --light-gray: #F8F9FA;
            --medium-gray: #6C757D;
            --dark-gray: #212529;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
        }
        
        /* Header Styles */
        .dashboard-header {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #3a56d4 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        /* Card Styles */
        .feature-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-top: 4px solid var(--primary-blue);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .feature-card .card-header {
            background-color: var(--primary-blue);
            color: white;
            border-radius: 10px 10px 0 0 !important;
        }
        
        /* Progress Bars */
        .progress {
            height: 10px;
            border-radius: 5px;
        }
        
        /* Buttons */
        .btn-primary {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        
        .btn-accent {
            background-color: var(--accent-orange);
            border-color: var(--accent-orange);
            color: white;
        }
        
        /* Notification Badges */
        .badge-primary {
            background-color: var(--primary-blue);
        }
        
        .badge-accent {
            background-color: var(--accent-orange);
        }
        
        /* Sidebar */
        .sidebar {
            background-color: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
        }
        
        .sidebar .nav-link {
            color: var(--medium-gray);
            border-radius: 5px;
            margin: 2px 0;
        }
        
        .sidebar .nav-link.active, 
        .sidebar .nav-link:hover {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-blue);
        }
        
        .sidebar .nav-link.active i {
            color: var(--primary-blue);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="dashboard-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1><i class="fas fa-graduation-cap me-2"></i> EduTracker</h1>
                    <p class="mb-0">Student Dashboard</p>
                </div>
                <div>
                    <span class="badge bg-light text-dark me-2"><i class="fas fa-user me-1"></i> Sarah Johnson</span>
                    <button class="btn btn-sm btn-light"><i class="fas fa-sign-out-alt"></i></button>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar py-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks me-2"></i> Assignments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-chart-line me-2"></i> Progress
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-book me-2"></i> Subjects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-bell me-2"></i> Notifications
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Stats Row -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="feature-card card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Current GPA</h5>
                                <h2 class="display-4" style="color: var(--primary-blue);">3.75</h2>
                                <p class="text-success"><i class="fas fa-arrow-up"></i> 0.15 from last term</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="feature-card card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Attendance</h5>
                                <h2 class="display-4" style="color: var(--light-blue);">96%</h2>
                                <p class="text-success"><i class="fas fa-check-circle"></i> Good standing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="feature-card card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Upcoming</h5>
                                <h2 class="display-4" style="color: var(--accent-orange);">3</h2>
                                <p class="text-danger"><i class="fas fa-exclamation-circle"></i> 1 overdue</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Row -->
                <div class="row">
                    <!-- Homework Planner -->
                    <div class="col-lg-6 mb-4">
                        <div class="feature-card card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-tasks me-2"></i> Homework Planner</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Subject</th>
                                                <th>Assignment</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mathematics</td>
                                                <td>Algebra Problems</td>
                                                <td>Tomorrow</td>
                                                <td><span class="badge bg-warning">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td>Science</td>
                                                <td>Lab Report</td>
                                                <td>Friday</td>
                                                <td><span class="badge bg-secondary">Not Started</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button class="btn btn-sm btn-primary mt-2">
                                    <i class="fas fa-plus me-1"></i> Add Assignment
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Study Tools -->
                    <div class="col-lg-6 mb-4">
                        <div class="feature-card card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-tools me-2"></i> Study Tools</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h6>Flashcard Generator</h6>
                                    <p>Create custom flashcards for your upcoming tests</p>
                                    <button class="btn btn-sm btn-primary">
                                        <i class="fas fa-layer-group me-1"></i> Create Flashcards
                                    </button>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <h6>Practice Quiz</h6>
                                    <p>Generate a quiz based on your weak areas</p>
                                    <button class="btn btn-sm btn-accent">
                                        <i class="fas fa-question-circle me-1"></i> Generate Quiz
                                    </button>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <h6>Pomodoro Timer</h6>
                                    <p>25-minute focused study sessions</p>
                                    <button class="btn btn-sm btn-primary">
                                        <i class="fas fa-clock me-1"></i> Start Timer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row -->
                <div class="row">
                    <!-- Performance Chart -->
                    <div class="col-lg-8 mb-4">
                        <div class="feature-card card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i> Performance Trend</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="performanceChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications -->
                    <div class="col-lg-4 mb-4">
                        <div class="feature-card card h-100">
                            <div class="card-header">
                                <h5 class="mb-0"><i class="fas fa-bell me-2"></i> Notifications</h5>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Math Graded</h6>
                                            <small>2 hours ago</small>
                                        </div>
                                        <p class="mb-1">Your Algebra test: 92% (A)</p>
                                        <small>Mr. Johnson</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Parent Message</h6>
                                            <small>1 day ago</small>
                                        </div>
                                        <p class="mb-1">Don't forget your science project!</p>
                                        <small>Mom</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Performance Chart
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb'],
                datasets: [{
                    label: 'Mathematics',
                    data: [72, 75, 78, 82, 85, 88],
                    borderColor: '#4361EE',
                    backgroundColor: 'rgba(67, 97, 238, 0.1)',
                    tension: 0.3
                }, {
                    label: 'Science',
                    data: [68, 70, 75, 78, 80, 83],
                    borderColor: '#4CC9F0',
                    backgroundColor: 'rgba(76, 201, 240, 0.1)',
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 60,
                        max: 100
                    }
                }
            }
        });
    </script>
</body>
</html>