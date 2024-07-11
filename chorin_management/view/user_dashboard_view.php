<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="admin_base.css">
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="profile">
                <img src="default-profile.png" alt="Profile Image" id="profileImage">
                <label for="imageUpload" class="uploadLabel">Change Image</label>
                <input type="file" id="imageUpload" accept="image/*">
                <li><a href="../login/logout_view.php">Logout</a></li>
            </div>
            <ul class="nav">
                <li><a href="#joblistings">Job listings</a></li>
                <li><a href="#todo">To do</a></li>
                <li><a href="#executedJobs">Executed jobs</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome, !</h1>
            <div id="joblistings" class="tabContent">
                <h2>Job listings</h2>
                <!-- Unpaired jobs content will go here -->
                <form>
                    <label for="jobTitle">Job Title:</label>
                    <input type="text" id="jobTitle" name="jobTitle" required><br>

                    <label for="jobLocation">Job Location:</label>
                    <input type="text" id="jobLocation" name="jobLocation" required><br>

                    <label for="jobTime">Job Time:</label>
                    <input type="time" id="jobTime" name="jobTime" required><br>

                    <label for="jobDescription">Job Description:</label>
                    <textarea id="jobDescription" name="jobDescription" required></textarea><br>

                    <button type="submit">Create Job</button>
                </form>
                <h3>Unpaired Job Listings</h3>
                <ul>
                    <li>Job 1 <span class="delete-icon">🗑️</span></li>
                    <li>Job 2 <span class="delete-icon">🗑️</span></li>
                    <li>Job 3 <span class="delete-icon">🗑️</span></li>
                </ul>
            </div>
            <div id="pairedJobs" class="tabContent">
                <h2>Paired Jobs</h2>
                <!-- Paired jobs content will go here -->
                <h3>Paired Job Listings</h3>
                <ul>
                    <li>Job 1 paired with User A <span class="delete-icon">🗑️</span></li>
                    <li>Job 2 paired with User B <span class="delete-icon">🗑️</span></li>
                </ul>
            </div>
            <div id="completedJobs" class="tabContent">
                <h2>Completed Jobs</h2>
                <!-- Completed jobs content will go here -->
                <h3>Completed Job Listings</h3>
                <ul>
                    <li onclick="showJobDetails('Job 1', 'User A', '2023-06-01')">Job 1 completed by User A <span class="delete-icon">🗑️</span></li>
                    <li onclick="showJobDetails('Job 2', 'User B', '2023-06-02')">Job 2 completed by User B <span class="delete-icon">🗑️</span></li>
                </ul>
                <div id="jobDetails" class="jobDetails">
                    <h4>Job Details</h4>
                    <p id="jobDetailTitle"></p>
                    <p id="jobDetailUser"></p>
                    <p id="jobDetailDate"></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('imageUpload').onchange = function (event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('profileImage').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };

        function showJobDetails(title, user, date) {
            document.getElementById('jobDetails').style.display = 'block';
            document.getElementById('jobDetailTitle').textContent = 'Job: ' + title;
            document.getElementById('jobDetailUser').textContent = 'Completed by: ' + user;
            document.getElementById('jobDetailDate').textContent = 'Completion Date: ' + date;
        }
    </script>
</body>
</html>



<div class="logo">
    <img src="../assets/images/chorIn_logo.png" alt="Logo">
</div>









