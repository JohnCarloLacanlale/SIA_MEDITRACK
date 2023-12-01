<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic System - Home</title>
    <link rel="stylesheet" href="dbclinic.css">
</head>
<body>
    <div class="container">
        <h1>Student Login</h1>
        <div class="admin-login">
            <form>
                <label for="adminCode">SR-Code:</label>
                <input type="text" id="adminCode" placeholder="Enter Admin Code" required> <br>
                <label for="adminPassword">Password:</label> 
                <input type="password" id="adminPassword" placeholder="Enter Password" required> <br>
                <button type="button" onclick="loginAdmin()">Login</button>
            </form>
        </div>
    </div>
    <script>
        function loginAdmin() {
            var adminCode = document.getElementById('adminCode').value;
            var adminPassword = document.getElementById('adminPassword').value;

            if (adminCode === "admin" && adminPassword === "admin") {
                
              
                window.location.href = "studentdashboard.php";
            } else {
                alert("Invalid SR-Code or Password. Please try again.");
            }
        }
    </script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link href="path/to/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            /* Set background image */
            background-image: url('path/to/your/image.jpg');

            /* Set background image size */
            background-size: cover;

            /* Set background image position */
            background-position: center;

            /* Set background color as a fallback */
            background-color: #f8f9fa; /* You can set any color you want */

            /* Add more styles as needed */
        }
    </style>
</head>
<body>

    <!-- Your content goes here -->

    <!-- Bootstrap JS and other scripts -->
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Add more scripts as needed -->
</body>
</html>
</body>
</html>
