<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker Planner</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/planner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Base Styles */
        
    </style>
</head>
<body class="body-planner">

    <div class="container-planner">
        <!-- Desktop Sidebar Navigation -->
        <nav class="sidebar-planner">
            <div class="logo-planner">EduTracker</div>
            <a href="performance-tracker.php" class="nav-item-planner">
                <svg class="nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                Dashboard
            </a>
            <a href="planner-section.php" class="nav-item-planner active-planner">
                <svg class="nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                Planner
            </a>
            <!-- <a href="#" class="nav-item-planner">
                <svg class="nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
                Feedback
            </a> -->
            <!-- <a href="#" class="nav-item-planner">
                <svg class="nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Settings
            </a> -->
        </nav>

        <!-- Main Content Area -->
        <main class="main-content-planner">
            <header class="header-planner">
                <h1 class="title-planner">Study Planner</h1>
                <div class="user-profile-planner">
                    <span>Alex Johnson</span>
                    <div class="avatar-planner">AJ</div>
                </div>
            </header>

            <!-- Planner Grid -->
            <div class="planner-grid-planner">
                <!-- Calendar Section -->
                <section class="calendar-section-planner">
                    <div class="calendar-header-planner">
                        <h3 class="calendar-title-planner">May 2023</h3>
                        <div class="calendar-nav-planner">
                            <button class="calendar-nav-btn-planner">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="calendar-nav-btn-planner">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="calendar-weekdays-planner">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>

                    <div class="calendar-days-planner">
                        <!-- Previous Month -->
                        <div class="calendar-day-planner day-other-month-planner">30</div>
                        <!-- Week 1 -->
                        <div class="calendar-day-planner">1</div>
                        <div class="calendar-day-planner">2</div>
                        <div class="calendar-day-planner">3</div>
                        <div class="calendar-day-planner">4</div>
                        <div class="calendar-day-planner">5</div>
                        <div class="calendar-day-planner">6</div>
                        <div class="calendar-day-planner">7</div>
                        <!-- Week 2 -->
                        <div class="calendar-day-planner">8</div>
                        <div class="calendar-day-planner">9</div>
                        <div class="calendar-day-planner">10</div>
                        <div class="calendar-day-planner">11</div>
                        <div class="calendar-day-planner day-current-planner">12</div>
                        <div class="calendar-day-planner day-has-events-planner">13</div>
                        <div class="calendar-day-planner">14</div>
                        <!-- Week 3 -->
                        <div class="calendar-day-planner day-has-events-planner">15</div>
                        <div class="calendar-day-planner">16</div>
                        <div class="calendar-day-planner day-has-events-planner">17</div>
                        <div class="calendar-day-planner">18</div>
                        <div class="calendar-day-planner">19</div>
                        <div class="calendar-day-planner">20</div>
                        <div class="calendar-day-planner">21</div>
                        <!-- Week 4 -->
                        <div class="calendar-day-planner">22</div>
                        <div class="calendar-day-planner">23</div>
                        <div class="calendar-day-planner">24</div>
                        <div class="calendar-day-planner">25</div>
                        <div class="calendar-day-planner">26</div>
                        <div class="calendar-day-planner day-has-events-planner">27</div>
                        <div class="calendar-day-planner">28</div>
                        <!-- Week 5 -->
                        <div class="calendar-day-planner">29</div>
                        <div class="calendar-day-planner">30</div>
                        <div class="calendar-day-planner">31</div>
                        <!-- Next Month -->
                        <div class="calendar-day-planner day-other-month-planner">1</div>
                        <div class="calendar-day-planner day-other-month-planner">2</div>
                        <div class="calendar-day-planner day-other-month-planner">3</div>
                    </div>
                </section>

                <!-- Tasks Section -->
                <section class="tasks-section-planner">
                    <div class="tasks-header-planner">
                        <h2 class="tasks-title-planner">My Tasks</h2>
                        <button class="add-task-btn-planner" id="addTaskBtn-planner">
                            <i class="fas fa-plus"></i>
                            Add Task
                        </button>
                    </div>

                    <div class="task-categories-planner">
                        <button class="category-btn-planner active-planner">All</button>
                        <button class="category-btn-planner">School</button>
                        <button class="category-btn-planner">Personal</button>
                        <button class="category-btn-planner">Completed</button>
                    </div>

                    <div class="task-list-planner">
                        <!-- Task 1 -->
                        <div class="task-card-planner">
                            <div class="task-header-planner">
                                <div class="task-title-planner">
                                    <input type="checkbox" class="task-checkbox-planner">
                                    <span>Complete Calculus Assignment</span>
                                </div>
                                <div class="task-due-planner">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Due: May 15</span>
                                </div>
                            </div>
                            <p class="task-description-planner">
                                Chapter 5 exercises (1-15 odd) and proof problems
                            </p>
                            <div class="task-footer-planner">
                                <div class="task-tags-planner">
                                    <span class="task-tag-planner">Math</span>
                                    <span class="task-tag-planner">Homework</span>
                                </div>
                                <div class="task-actions-planner">
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Task 2 -->
                        <div class="task-card-planner">
                            <div class="task-header-planner">
                                <div class="task-title-planner">
                                    <input type="checkbox" class="task-checkbox-planner">
                                    <span>Literature Essay Draft</span>
                                </div>
                                <div class="task-due-planner">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Due: May 18</span>
                                    <div class="task-priority-planner priority-medium-planner"></div>
                                </div>
                            </div>
                            <p class="task-description-planner">
                                1500-word analysis of symbolism in "The Great Gatsby"
                            </p>
                            <div class="task-footer-planner">
                                <div class="task-tags-planner">
                                    <span class="task-tag-planner">English</span>
                                </div>
                                <div class="task-actions-planner">
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Task 3 -->
                        <div class="task-card-planner task-completed-planner">
                            <div class="task-header-planner">
                                <div class="task-title-planner">
                                    <input type="checkbox" class="task-checkbox-planner" checked>
                                    <span>Chemistry Lab Report</span>
                                </div>
                                <div class="task-due-planner">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Due: May 10</span>
                                    <div class="task-priority-planner priority-low-planner"></div>
                                </div>
                            </div>
                            <p class="task-description-planner">
                                Acid-base titration experiment results and analysis
                            </p>
                            <div class="task-footer-planner">
                                <div class="task-tags-planner">
                                    <span class="task-tag-planner">Science</span>
                                    <span class="task-tag-planner">Lab</span>
                                </div>
                                <div class="task-actions-planner">
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Task 4 -->
                        <div class="task-card-planner">
                            <div class="task-header-planner">
                                <div class="task-title-planner">
                                    <input type="checkbox" class="task-checkbox-planner">
                                    <span>History Research Outline</span>
                                </div>
                                <div class="task-due-planner">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Due: May 20</span>
                                    <div class="task-priority-planner priority-high-planner"></div>
                                </div>
                            </div>
                            <p class="task-description-planner">
                                Outline for World War II causes research paper (3 pages)
                            </p>
                            <div class="task-footer-planner">
                                <div class="task-tags-planner">
                                    <span class="task-tag-planner">History</span>
                                    <span class="task-tag-planner">Research</span>
                                </div>
                                <div class="task-actions-planner">
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="task-action-btn-planner">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- Add Task Modal -->
    <div class="modal-overlay-planner" id="modalOverlay-planner">
        <div class="modal-planner">
            <div class="modal-header-planner">
                <h3 class="modal-title-planner">Add New Task</h3>
                <button class="modal-close-btn-planner" id="modalCloseBtn-planner">&times;</button>
            </div>
            <form>
                <div class="form-group-planner">
                    <label class="form-label-planner">Task Title</label>
                    <input type="text" class="form-input-planner" placeholder="Enter task title">
                </div>
                <div class="form-group-planner">
                    <label class="form-label-planner">Description</label>
                    <textarea class="form-input-planner form-textarea-planner" placeholder="Enter task description"></textarea>
                </div>
                <div class="form-group-planner">
                    <label class="form-label-planner">Due Date</label>
                    <input type="date" class="form-input-planner">
                </div>
                <div class="form-group-planner">
                    <label class="form-label-planner">Priority</label>
                    <div class="priority-selector-planner">
                        <div class="priority-option-planner selected-planner">
                            <div class="priority-dot-planner" style="background-color: var(--error-planner);"></div>
                            High
                        </div>
                        <div class="priority-option-planner">
                            <div class="priority-dot-planner" style="background-color: var(--warning-planner);"></div>
                            Medium
                        </div>
                        <div class="priority-option-planner">
                            <div class="priority-dot-planner" style="background-color: var(--success-planner);"></div>
                            Low
                        </div>
                    </div>
                </div>
                <div class="form-group-planner">
                    <label class="form-label-planner">Category</label>
                    <select class="form-input-planner form-select-planner">
                        <option>School</option>
                        <option>Personal</option>
                        <option>Extracurricular</option>
                    </select>
                </div>
                <div class="form-group-planner">
                    <label class="form-label-planner">Tags</label>
                    <input type="text" class="form-input-planner" placeholder="Add tags separated by commas">
                </div>
                <div class="form-actions-planner">
                    <button type="button" class="btn-secondary-planner" id="cancelTaskBtn-planner">Cancel</button>
                    <button type="submit" class="btn-primary-planner">Save Task</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav-planner">
        <div class="mobile-nav-container-planner">
            <a href="#" class="mobile-nav-item-planner">
                <svg class="mobile-nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span>Dashboard</span>
            </a>
            <a href="#" class="mobile-nav-item-planner active-planner">
                <svg class="mobile-nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <span>Planner</span>
                <div class="mobile-active-indicator-planner"></div>
            </a>
            <a href="#" class="mobile-nav-item-planner">
                <svg class="mobile-nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
                <span>Feedback</span>
            </a>
            <a href="#" class="mobile-nav-item-planner">
                <svg class="mobile-nav-icon-planner" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Settings</span>
            </a>
        </div>
    </nav>

    <script>
        // Modal functionality
        const addTaskBtn = document.getElementById('addTaskBtn-planner');
        const modalOverlay = document.getElementById('modalOverlay-planner');
        const modalCloseBtn = document.getElementById('modalCloseBtn-planner');
        const cancelTaskBtn = document.getElementById('cancelTaskBtn-planner');

        // Show modal
        addTaskBtn.addEventListener('click', () => {
            modalOverlay.classList.add('active-planner');
        });

        // Hide modal
        function closeModal() {
            modalOverlay.classList.remove('active-planner');
        }

        modalCloseBtn.addEventListener('click', closeModal);
        cancelTaskBtn.addEventListener('click', closeModal);

        // Close modal when clicking outside
        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                closeModal();
            }
        });

        // Priority selection
        const priorityOptions = document.querySelectorAll('.priority-option-planner');
        priorityOptions.forEach(option => {
            option.addEventListener('click', () => {
                priorityOptions.forEach(opt => opt.classList.remove('selected-planner'));
                option.classList.add('selected-planner');
            });
        });

        // Task completion toggle
        const checkboxes = document.querySelectorAll('.task-checkbox-planner');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const taskCard = this.closest('.task-card-planner');
                taskCard.classList.toggle('task-completed-planner', this.checked);
            });
        });

        // Category filter
        const categoryBtns = document.querySelectorAll('.category-btn-planner');
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                categoryBtns.forEach(b => b.classList.remove('active-planner'));
                this.classList.add('active-planner');
                
                // In a real app, you would filter tasks here
            });
        });
    </script>
</body>
</html>