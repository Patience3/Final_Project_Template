<?php
// Start the session
session_start();

include("../../settings/connection.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/admin_dashboard.css"></head>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />
  
<body>
    <style>
        
    </style>
<div class="container">
    <aside>
            <div class="sidebar">
                <a href="#" class="logo">Chore MS</a>
                <a class = '' href="admin_home_view.php">
                    <span class="material-icons-sharp">home</span>
                    <h3>Home</h3>
                </a>
                <a class = '' href="job_listing_view.php">
                    <span class="material-icons-sharp">format_list_bulleted</span>
                    <h3>Job Listings</h3>
                </a>
                <a class = 'active' href="create_jobs_view.php">
                    <span class="material-icons-sharp">add_circle</span>
                    <h3>Create Jobs</h3>
                </a>
                <a class = '' href="admin_profile_view.php">                                                                                                                                  
                    <span class="material-icons-sharp">manage_accounts</span>
                    <h3>Profile</h3>         
                </a>
                <a href="../login/logout_view.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
       
       

        <main>
        <div class="content">
        <h1>Welcome, Admin!</h1>
        <div id="createJob" class="tabContent">
            <h2>Create New Job</h2>
            <form action="admin_dashboard.php" method="post">
                <input type="hidden" name="create_job" value="1">
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required><br>

                <label for="jobLocation">Job Location:</label>
                <input type="text" id="jobLocation" name="jobLocation" required><br>

                <label for="jobTime">Job Time:</label>
                <input type="number" id="jobTime" name="jobTime" required><br>

                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" required></textarea><br>

                <button type="submit">Create Job</button>
            </form>
    
        <div id="Joba" class="tabContent">
            <h2>Completed Jobs</h2>
            <ul>
                
            </ul>
        </div>
    </div>
        </main>
    </div>

    </div>
</body>

</html>