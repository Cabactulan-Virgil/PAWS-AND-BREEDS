<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Paws and Breeds | Admin Dashboard</title>
    <link rel="stylesheet" href="Admin_Home.css">
    <link rel="icon" href="img/1000001718 1.png">
</head>
<body>
    <!-- Admin Dashboard Container -->
    <div class="admin-dashboard-container">
        
        <!-- Header Section -->
        <header>
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Manage the platform and ensure smooth operation through these options.</p>
        </header>
        
        <!-- Navigation Links -->
        <nav>
            <a href="manage_profiles.php">Manage Dog Profiles</a>
            <a href="review_submissions.php">Review Dog Profile Submissions</a>
            <a href="manage_user_accounts.php">Manage User Accounts</a>
            <a href="user_reports.php"> User Review Submissions</a>
            <a href="logout.php">Logout</a>
        </nav>

        <!-- Main Content Section -->
        <main>
            <section id="dashboard-content">
                <h2>Admin Dashboard Options:</h2>
                <p>Use the navigation links above to manage user profiles, review submissions, and ensure compliance with platform guidelines.</p>
                
                <!-- Recent Activity Section -->
                <section class="recent-activity">
                    <h3>Recent Activity</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <p><strong>Profile submission</strong> from John Doe (Pending)</p>
                            <span class="activity-time">2 minutes ago</span>
                        </div>
                        <div class="activity-item">
                            <p><strong>Profile edit</strong>: Bulldog entry updated</p>
                            <span class="activity-time">1 hour ago</span>
                        </div>
                        <div class="activity-item">
                            <p><strong>Profile deletion</strong>: Labrador entry removed</p>
                            <span class="activity-time">3 hours ago</span>
                        </div>
                    </div>
                </section>

                <!-- Search Bar Section -->
                <section class="search-bar">
                    <input id="SearchAreaa" placeholder="Search profiles..." aria-label="Search">
                </section>

                <!-- Profile Categories Section -->
                <section class="profile-categories">
                    <h3>Profile Categories:</h3>
                    <ul>
                        <li><a href="dog_breeds.php">Dog Breeds</a></li>
                        <li><a href="dog_sizes.php">Dog Sizes</a></li>
                        <li><a href="dog_ages.php">Dog Ages</a></li>
                    </ul>
                </section>

                <!-- Admin Settings Section -->
                <section class="admin-settings">
                    <h3>Admin Settings:</h3>
                    <ul>
                        <li><a href="settings.php">Customize Dashboard Layout</a></li>
                        <li><a href="profile_settings.php">Profile Settings</a></li>
                        <li><a href="system_preferences.php">System Preferences</a></li>
                    </ul>
                </section>

                <!-- Explore Detailed Control Options Section -->
                <section class="explore-control">
                    <p>Explore each option below for detailed control:</p>
                    <ul>
                        <li><a href="manage_profiles.php">Manage Dog Profiles</a></li>
                        <li><a href="review_submissions.php">Review Profile Submissions</a></li>
                        <li><a href="manage_user_accounts.php">Manage User Accounts</a></li>
                        <li><a href="user_reports.php">Handle User Reports</a></li>
                    </ul>
                </section>
            </section>
        </main>
    </div>
</body>
</html>
