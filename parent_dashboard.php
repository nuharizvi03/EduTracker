<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker - Parent Dashboard</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
        }
        
        .sidebar {
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            color: var(--dark);
            border-radius: 5px;
            margin-bottom: 5px;
        }
        
        .nav-link.active, .nav-link:hover {
            background-color: rgba(56, 176, 0, 0.1);
            color: var(--success);
        }
        
        .card {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .card-header {
            font-weight: 600;
        }
        
        .parent-bg-primary {
            background-color: var(--success);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <i class="fas fa-user-friends fa-2x mb-2" style="color: var(--success);"></i>
                        <h5>EduTracker</h5>
                        <p class="text-muted small">Parent Dashboard</p>
                    </div>
                    
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-child me-2"></i> My Children
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-school me-2"></i> School Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-comments me-2"></i> Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog me-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Parent Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <select class="form-select form-select-sm me-2">
                            <option>All Children</option>
                            <option selected>Sarah Johnson (Grade 10)</option>
                            <option>Michael Johnson (Grade 7)</option>
                        </select>
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-download me-1"></i> Export Report
                        </button>
                    </div>
                </div>

                <!-- Student Summary -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Current GPA</h5>
                                <h2 class="display-4" style="color: var(--success);">3.68</h2>
                                <p class="text-success"><i class="fas fa-arrow-up"></i> 0.12 from last term</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Attendance</h5>
                                <h2 class="display-4" style="color: var(--secondary);">94%</h2>
                                <p class="text-warning"><i class="fas fa-exclamation-circle"></i> 2 absences this term</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Upcoming Tests</h5>
                                <h2 class="display-4" style="color: var(--accent);">4</h2>
                                <p class="text-danger"><i class="fas fa-calendar-check"></i> Next: Math on Friday</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Summary Table -->
                <div class="card mb-4">
                    <div class="card-header parent-bg-primary" style="color: white;">
                        <h5 class="mb-0">Sarah's Academic Summary</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Current Grade</th>
                                        <th>Teacher</th>
                                        <th>Last Assignment</th>
                                        <th>Trend</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mathematics</td>
                                        <td>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 88%">88% (A)</div>
                                            </div>
                                        </td>
                                        <td>Mr. Johnson</td>
                                        <td>92% (Algebra Test)</td>
                                        <td><i class="fas fa-arrow-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Science</td>
                                        <td>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 82%">82% (B)</div>
                                            </div>
                                        </td>
                                        <td>Dr. Smith</td>
                                        <td>78% (Chemistry Lab)</td>
                                        <td><i class="fas fa-arrow-down text-danger"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Attendance Summary -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header" style="background-color: var(--secondary); color: white;">
                                <h5 class="mb-0">Attendance Summary</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="attendanceChart" height="200"></canvas>
                                <div class="mt-3">
                                    <h6>Absences This Term: 2</h6>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Oct 12 - Mathematics
                                            <span class="badge bg-warning rounded-pill">Excused</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Nov 3 - Science
                                            <span class="badge bg-danger rounded-pill">Unexcused</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications and Feedback -->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: var(--accent); color: white;">
                                <h5 class="mb-0">Notifications</h5>
                                <button class="btn btn-sm" style="background-color: rgba(255,255,255,0.2);">View All</button>
                            </div>
                            <div class="card-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Progress Report Available</h6>
                                            <small>1 day ago</small>
                                        </div>
                                        <p class="mb-1">Term 2 progress report is now available</p>
                                        <small>From: School Administration</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Teacher Feedback</h6>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Sarah is doing well but needs to participate more in class discussions</p>
                                        <small>From: Mr. Johnson (Mathematics)</small>
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
        // Attendance Chart
        const attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(attendanceCtx, {
            type: 'doughnut',
            data: {
                labels: ['Present', 'Absent (Excused)', 'Absent (Unexcused)'],
                datasets: [{
                    data: [94, 4, 2],
                    backgroundColor: [
                        '#38B000',
                        '#F8961E',
                        '#F94144'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Attendance Breakdown'
                    }
                }
            }
        });
    </script>
</body>
</html>