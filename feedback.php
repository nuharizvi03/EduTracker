<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTracker - Feedback & Messaging</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

    </style>
</head>
<body class="body-feedback">
    <?php include __DIR__ . '/includes/navbar.php'; ?>
    <div class="container-feedback">
        <!-- Desktop Sidebar Navigation -->
        <nav class="sidebar-feedback">
            <!-- <div class="logo-feedback">EduConnect</div> -->
            <div class="user-profile-feedback">
                <!-- <div class="avatar-feedback">AJ</div> -->
                <!-- <div class="user-info-feedback">
                    <div class="user-name-feedback">Alex Johnson</div>
                    <div class="user-role-feedback">Student</div>
                </div> -->
            </div>

            <div class="nav-menu-feedback">
                <a href="#" class="nav-item-feedback active-feedback">
                    <svg class="nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    <span>Inbox</span>
                    <span class="badge-feedback">3</span>
                </a>
                <a href="#" class="nav-item-feedback">
                    <svg class="nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                    <span>Sent</span>
                </a>
                <a href="#" class="nav-item-feedback">
                    <svg class="nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    <span>Starred</span>
                </a>
                <a href="#" class="nav-item-feedback">
                    <svg class="nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <span>Feedback</span>
                    <span class="badge-feedback">2</span>
                </a>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="main-content-feedback">
            <!-- Chat Container -->
            <div class="chat-container-feedback">
                <div class="chat-header-feedback">
                    <div class="chat-avatar-feedback">MR</div>
                    <div class="chat-info-feedback">
                        <div class="chat-title-feedback">Mr. Rodriguez (Math Teacher)</div>
                        <div class="chat-subtitle-feedback">Last seen today at 2:45 PM</div>
                    </div>
                    <div class="chat-actions-feedback">
                        <button class="chat-action-btn-feedback">
                            <i class="fas fa-phone"></i>
                        </button>
                        <button class="chat-action-btn-feedback" id="feedbackPanelToggle-feedback">
                            <i class="fas fa-comment-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="messages-container-feedback">
                    <div class="message-date-feedback">Today</div>

                    <!-- Teacher Message -->
                    <div class="message-feedback message-teacher-feedback">
                        <div class="message-content-feedback">
                            Hi Alex, I wanted to follow up on your progress with the calculus assignment. How's it coming along?
                        </div>
                        <div class="message-meta-feedback">
                            <span class="message-time-feedback">2:30 PM</span>
                            <svg class="message-status-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Student Message -->
                    <div class="message-feedback message-student-feedback">
                        <div class="message-content-feedback">
                            Hi Mr. Rodriguez, I've completed most of it but I'm stuck on problem #12 about derivatives. Could we go over it tomorrow?
                        </div>
                        <div class="message-meta-feedback">
                            <span class="message-time-feedback">2:35 PM</span>
                            <svg class="message-status-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Teacher Message -->
                    <div class="message-feedback message-teacher-feedback">
                        <div class="message-content-feedback">
                            Absolutely! Let's schedule a time during office hours. Also, I've left some feedback on your last quiz - please review it before our session.
                        </div>
                        <div class="message-meta-feedback">
                            <span class="message-time-feedback">2:40 PM</span>
                            <svg class="message-status-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Feedback Message -->
                    <div class="message-feedback message-teacher-feedback">
                        <div class="message-content-feedback">
                            <strong>Feedback on Calculus Quiz #3</strong><br>
                            Overall good work (87%), but pay attention to chain rule applications. See detailed notes in your feedback section.
                        </div>
                        <div class="message-meta-feedback">
                            <span class="message-time-feedback">2:42 PM</span>
                            <svg class="message-status-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="message-input-container-feedback">
                    <div class="message-input-wrapper-feedback">
                        <textarea class="message-input-feedback" placeholder="Type your message here..."></textarea>
                        <button class="send-btn-feedback">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Feedback Panel -->
            <div class="feedback-panel-feedback" id="feedbackPanel-feedback">
                <div class="feedback-header-feedback">
                    <h3 class="feedback-title-feedback">Feedback History</h3>
                    <button class="feedback-filter-feedback">
                        <i class="fas fa-filter"></i>
                    </button>
                </div>

                <div class="feedback-categories-feedback">
                    <!-- Math Category -->
                    <div class="feedback-category-feedback feedback-category open-feedback">
                        <div class="feedback-category-header-feedback">
                            <span class="feedback-category-name-feedback">Mathematics</span>
                            <span class="feedback-category-count-feedback">5</span>
                            <svg class="feedback-category-icon-feedback" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="feedback-items-feedback">
                            <div class="feedback-item-feedback feedback-item-unread-feedback">
                                <div class="feedback-item-header-feedback">
                                    <span class="feedback-item-title-feedback">Calculus Quiz #3</span>
                                    <span class="feedback-item-date-feedback">May 10</span>
                                </div>
                                <div class="feedback-item-preview-feedback">
                                    Good work overall (87%), but need to focus on chain rule applications. See detailed notes on problem #5 and #7...
                                </div>
                            </div>
                            <div class="feedback-item-feedback">
                                <div class="feedback-item-header-feedback">
                                    <span class="feedback-item-title-feedback">Derivatives Assignment</span>
                                    <span class="feedback-item-date-feedback">Apr 28</span>
                                </div>
                                <div class="feedback-item-preview-feedback">
                                    Excellent work on this assignment! Your understanding of basic derivatives is solid. Next we'll move to more complex...
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Science Category -->
                    <div class="feedback-category-feedback feedback-category">
                        <div class="feedback-category-header-feedback">
                            <span class="feedback-category-name-feedback">Science</span>
                            <span class="feedback-category-count-feedback">3</span>
                            <svg class="feedback-category-icon-feedback" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="feedback-items-feedback">
                            <div class="feedback-item-feedback feedback-item-unread-feedback">
                                <div class="feedback-item-header-feedback">
                                    <span class="feedback-item-title-feedback">Chemistry Lab Report</span>
                                    <span class="feedback-item-date-feedback">May 5</span>
                                </div>
                                <div class="feedback-item-preview-feedback">
                                    Your lab methodology was excellent, but the conclusion needs more analysis of potential errors in the experiment...
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- English Category -->
                    <div class="feedback-category-feedback feedback-category">
                        <div class="feedback-category-header-feedback">
                            <span class="feedback-category-name-feedback">English</span>
                            <span class="feedback-category-count-feedback">2</span>
                            <svg class="feedback-category-icon-feedback" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <div class="feedback-items-feedback">
                            <div class="feedback-item-feedback">
                                <div class="feedback-item-header-feedback">
                                    <span class="feedback-item-title-feedback">Literary Analysis Essay</span>
                                    <span class="feedback-item-date-feedback">Apr 15</span>
                                </div>
                                <div class="feedback-item-preview-feedback">
                                    Your thesis statement was strong, but the supporting arguments need more textual evidence. Let's work on integrating quotes...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback Panel Overlay (Mobile) -->
            <div class="feedback-overlay-feedback" id="feedbackOverlay-feedback"></div>
        </main>
    </div>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav-feedback">
        <div class="mobile-nav-container-feedback">
            <a href="#" class="mobile-nav-item-feedback">
                <svg class="mobile-nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <span>Dashboard</span>
            </a>
            <a href="#" class="mobile-nav-item-feedback">
                <svg class="mobile-nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <span>Planner</span>
            </a>
            <a href="#" class="mobile-nav-item-feedback active-feedback">
                <svg class="mobile-nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                </svg>
                <span>Messages</span>
                <div class="mobile-active-indicator-feedback"></div>
            </a>
            <a href="#" class="mobile-nav-item-feedback">
                <svg class="mobile-nav-icon-feedback" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Settings</span>
            </a>
        </div>
    </nav>

    <script>
        // Feedback panel toggle
        const feedbackPanelToggle = document.getElementById('feedbackPanelToggle-feedback');
        const feedbackPanel = document.getElementById('feedbackPanel-feedback');
        const feedbackOverlay = document.getElementById('feedbackOverlay-feedback');

        feedbackPanelToggle.addEventListener('click', () => {
            feedbackPanel.classList.toggle('open-feedback');
            feedbackOverlay.classList.toggle('open-feedback');
        });

        feedbackOverlay.addEventListener('click', () => {
            feedbackPanel.classList.remove('open-feedback');
            feedbackOverlay.classList.remove('open-feedback');
        });

        // Feedback category toggle
        const feedbackCategories = document.querySelectorAll('.feedback-category-feedback');
        feedbackCategories.forEach(category => {
            const header = category.querySelector('.feedback-category-header-feedback');
            header.addEventListener('click', () => {
                category.classList.toggle('open-feedback');
            });
        });

        // Message input auto-resize
        const messageInput = document.querySelector('.message-input-feedback');
        messageInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });

        // Send button toggle
        messageInput.addEventListener('input', function() {
            const sendBtn = document.querySelector('.send-btn-feedback');
            sendBtn.disabled = this.value.trim() === '';
        });
    </script>
</body>
</html>