<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker Performance Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        
    </style>
</head>
<body class="body-performance">
    <?php include __DIR__ . '/includes/navbar.php'; ?>

    <div class="container-performance">
        <!-- Desktop Sidebar Navigation -->
        <nav class="sidebar-performance">
            <!-- <div class="logo-performance">EduTracker</div> -->
            <a href="#" class="nav-item-performance active-performance">
                <svg class="nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                Dashboard
            </a>
            <a href="planner-section.php" class="nav-item-performance">
                <svg class="nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                Planner
            </a>
            <!-- <a href="#" class="nav-item-performance">
                <svg class="nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
                Feedback
            </a> -->
            <!-- <a href="#" class="nav-item-performance">
                <svg class="nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Settings
            </a> -->
        </nav>

        <!-- Main Content Area -->
        <main class="main-content-performance">
            <header class="header-performance">
                <h1 class="title-performance">Student Performance Dashboard</h1>
                <!-- <div class="user-profile-performance">
                    <span>Alex Johnson</span>
                    <div class="avatar-performance">AJ</div>
                </div> -->
            </header>

            <!-- Metrics Grid -->
            <div class="metrics-grid-performance">
                <div class="metric-card-performance">
                    <div class="metric-header-performance">
                        <span class="metric-label-performance">Average Score</span>
                        <svg class="metric-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <div class="metric-value-performance">87%</div>
                    <div class="metric-trend-performance trend-up-performance">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                        5% increase
                    </div>
                </div>

                <div class="metric-card-performance">
                    <div class="metric-header-performance">
                        <span class="metric-label-performance">Attendance Rate</span>
                        <svg class="metric-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="metric-value-performance">94%</div>
                    <div class="metric-trend-performance trend-up-performance">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                        </svg>
                        2% increase
                    </div>
                </div>

                <div class="metric-card-performance">
                    <div class="metric-header-performance">
                        <span class="metric-label-performance">Progress Rate</span>
                        <svg class="metric-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="metric-value-performance">78%</div>
                    <div class="metric-trend-performance trend-down-performance">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                        3% decrease
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-section-performance">
                <div class="chart-card-performance">
                    <h3 class="chart-title-performance">Performance Trends</h3>
                    <div class="chart-container-performance">
                        <canvas id="performanceChart-performance"></canvas>
                    </div>
                </div>

                <div class="chart-card-performance">
                    <h3 class="chart-title-performance">Subject Performance</h3>
                    <div class="chart-container-performance">
                        <canvas id="subjectChart-performance"></canvas>
                    </div>
                </div>
            </div>

            <!-- AI Recommendations -->
            <section class="recommendations-performance">
                <h2 class="section-title-performance">AI-Powered Recommendations</h2>
                <ul class="recommendation-list-performance">
                    <li class="recommendation-item-performance">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <strong>Focus on Calculus:</strong> Your quiz scores show a 15% drop compared to other math topics.
                            <div class="progress-bar-performance">
                                <div class="progress-fill-performance" style="width: 65%;"></div>
                            </div>
                        </div>
                        <span class="recommendation-badge-performance badge-high-performance">High Priority</span>
                    </li>
                    <li class="recommendation-item-performance">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <strong>Improve writing structure:</strong> Your essays lose points primarily on organization.
                            <div class="progress-bar-performance">
                                <div class="progress-fill-performance" style="width: 45%;"></div>
                            </div>
                        </div>
                        <span class="recommendation-badge-performance badge-medium-performance">Medium Priority</span>
                    </li>
                    <li class="recommendation-item-performance">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <strong>Review Chemistry formulas:</strong> You're doing well, but periodic review will help retention.
                            <div class="progress-bar-performance">
                                <div class="progress-fill-performance" style="width: 85%;"></div>
                            </div>
                        </div>
                        <span class="recommendation-badge-performance badge-low-performance">Low Priority</span>
                    </li>
                </ul>
                <button class="btn-performance">View Detailed Study Plan</button>
            </section>

            <!-- Upcoming Assignments -->
            <section class="assignments-performance">
                <h2 class="section-title-performance">Upcoming Assignments</h2>
                <div class="assignment-item-performance">
                    <div class="assignment-info-performance">
                        <div class="assignment-priority-performance priority-high-performance"></div>
                        <div>
                            <div>Calculus Midterm Exam</div>
                            <div class="assignment-due-performance">Due: May 15</div>
                        </div>
                    </div>
                    <div class="progress-bar-performance" style="width: 120px;">
                        <div class="progress-fill-performance" style="width: 30%;"></div>
                    </div>
                </div>
                <div class="assignment-item-performance">
                    <div class="assignment-info-performance">
                        <div class="assignment-priority-performance priority-medium-performance"></div>
                        <div>
                            <div>Literature Essay</div>
                            <div class="assignment-due-performance">Due: May 18</div>
                        </div>
                    </div>
                    <div class="progress-bar-performance" style="width: 120px;">
                        <div class="progress-fill-performance" style="width: 65%;"></div>
                    </div>
                </div>
                <div class="assignment-item-performance">
                    <div class="assignment-info-performance">
                        <div class="assignment-priority-performance priority-low-performance"></div>
                        <div>
                            <div>Chemistry Lab Report</div>
                            <div class="assignment-due-performance">Due: May 20</div>
                        </div>
                    </div>
                    <div class="progress-bar-performance" style="width: 120px;">
                        <div class="progress-fill-performance" style="width: 80%;"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav-performance">
        <div class="mobile-nav-container-performance">
            <a href="#" class="mobile-nav-item-performance active-performance">
                <svg class="mobile-nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span>Dashboard</span>
                <div class="mobile-active-indicator-performance"></div>
            </a>
            <a href="#" class="mobile-nav-item-performance">
                <svg class="mobile-nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <span>Planner</span>
            </a>
            <a href="#" class="mobile-nav-item-performance">
                <svg class="mobile-nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
                <span>Feedback</span>
            </a>
            <a href="#" class="mobile-nav-item-performance">
                <svg class="mobile-nav-icon-performance" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Settings</span>
            </a>
        </div>
    </nav>

    <script>
        // Initialize Performance Trend Chart
        const performanceCtx = document.getElementById('performanceChart-performance').getContext('2d');
        const performanceChart = new Chart(performanceCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Your Performance',
                    data: [75, 78, 82, 80, 85, 87],
                    borderColor: '#5e8374',
                    backgroundColor: 'rgba(94, 131, 116, 0.1)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                }, {
                    label: 'Class Average',
                    data: [78, 77, 79, 81, 82, 83],
                    borderColor: '#7a9e8e',
                    backgroundColor: 'rgba(122, 158, 142, 0.1)',
                    borderWidth: 2,
                    tension: 0.3,
                    borderDash: [5, 5],
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 70,
                        max: 100
                    }
                }
            }
        });

        // Initialize Subject Performance Chart
        const subjectCtx = document.getElementById('subjectChart-performance').getContext('2d');
        const subjectChart = new Chart(subjectCtx, {
            type: 'bar',
            data: {
                labels: ['Math', 'Science', 'Literature', 'History', 'Language'],
                datasets: [{
                    label: 'Your Scores',
                    data: [85, 92, 78, 88, 90],
                    backgroundColor: [
                        'rgba(94, 131, 116, 0.7)',
                        'rgba(94, 131, 116, 0.7)',
                        'rgba(94, 131, 116, 0.7)',
                        'rgba(94, 131, 116, 0.7)',
                        'rgba(94, 131, 116, 0.7)'
                    ],
                    borderColor: [
                        '#5e8374',
                        '#5e8374',
                        '#5e8374',
                        '#5e8374',
                        '#5e8374'
                    ],
                    borderWidth: 1
                }, {
                    label: 'Class Avg',
                    data: [82, 85, 83, 80, 87],
                    backgroundColor: 'rgba(122, 158, 142, 0.5)',
                    borderColor: '#7a9e8e',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 70,
                        max: 100
                    }
                }
            }
        });
    </script>
</body>
</html>