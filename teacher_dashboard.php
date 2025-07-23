<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker - Teacher Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #5e8374;
            --secondary: #4CC9F0;
            --accent: #f4a261;
            --success: #5e8374;
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
            background-color: rgba(244, 150, 30, 0.1);
            color: var(--accent);
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
        
        .teacher-bg-primary {
            background-color: var(--accent);
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
                        <i class="fas fa-chalkboard-teacher fa-2x mb-2" style="color: var(--accent);"></i>
                        <h5>EduTracker</h5>
                        <p class="text-muted small">Teacher Dashboard</p>
                    </div>
                    
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users me-2"></i> My Classes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-tasks me-2"></i> Assignments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar me-2"></i> Reports
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
                    <h1 class="h2">Teacher Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Print</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <i class="fas fa-calendar me-1"></i> Current Term
                        </button>
                    </div>
                </div>

                <!-- Class Overview -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Total Students</h5>
                                <h2 class="display-4" style="color: var(--accent);">42</h2>
                                <p class="text-muted">3 classes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Average Grade</h5>
                                <h2 class="display-4" style="color: var(--secondary);">82%</h2>
                                <p class="text-success"><i class="fas fa-arrow-up"></i> 5% from last term</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-muted">Assignments Due</h5>
                                <h2 class="display-4" style="color: var(--primary);">7</h2>
                                <p class="text-danger"><i class="fas fa-exclamation-circle"></i> 3 to grade</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student List -->
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center teacher-bg-primary" style="color: white;">
                        <h5 class="mb-0">Class Roster</h5>
                        <div>
                            <select class="form-select form-select-sm" style="width: auto; display: inline-block;">
                                <option>All Classes</option>
                                <option>Algebra II - Period 3</option>
                                <option>Geometry - Period 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student</th>
                                        <th>Class</th>
                                        <th>Current Grade</th>
                                        <th>Last Assignment</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Alex Johnson</td>
                                        <td>Algebra II</td>
                                        <td>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 88%">88%</div>
                                            </div>
                                        </td>
                                        <td>92%</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                            <button class="btn btn-sm btn-outline-secondary">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maria Garcia</td>
                                        <td>Algebra II</td>
                                        <td>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 82%">82%</div>
                                            </div>
                                        </td>
                                        <td>78%</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">View</button>
                                            <button class="btn btn-sm btn-outline-secondary">Message</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Class Performance -->
                    <div class="col-lg-8 mb-4">
                        <div class="card h-100">
                            <div class="card-header" style="background-color: #5e8374; color: white;">
                            <!-- <div class="card-header" style="background-color: var(--secondary); color: white;"> -->
                                <h5 class="mb-0">Class Performance Overview</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="classPerformanceChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Feedback Module -->
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header teacher-bg-primary" style="color: white;">
                                <h5 class="mb-0">Quick Feedback</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Student</label>
                                        <select class="form-select">
                                            <option>Select student</option>
                                            <option>Alex Johnson</option>
                                            <option>Maria Garcia</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Feedback Type</label>
                                        <select class="form-select">
                                            <option>Positive</option>
                                            <option>Needs Improvement</option>
                                            <option>Concern</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn w-100" style="background-color: var(--success); color: white;">Send Feedback</button>
                                </form>
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
        // Class Performance Chart
        const classCtx = document.getElementById('classPerformanceChart').getContext('2d');
        const classPerformanceChart = new Chart(classCtx, {
            type: 'bar',
            data: {
                labels: ['A (90-100)', 'B (80-89)', 'C (70-79)', 'D (60-69)', 'F (<60)'],
                datasets: [{
                    label: 'Algebra II - Period 3',
                    data: [8, 12, 5, 2, 1],
                    backgroundColor: 'rgba(67, 97, 238, 0.7)',
                }, {
                    label: 'Geometry - Period 5',
                    data: [10, 14, 6, 1, 0],
                    backgroundColor: 'rgba(76, 201, 240, 0.7)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Grade Distribution by Class'
                    }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Students'
                    }
                }
            }
        }
    });
</script>
</body>
</html>