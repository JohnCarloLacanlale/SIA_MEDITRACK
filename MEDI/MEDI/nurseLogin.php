<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic System - Home</title>
    <link rel="stylesheet" href="dbclinic.css">

    <style>
    body {
        background-image: url('../medi/lipa.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .bg-container {
        /* Add some padding or styling for better visibility */
        background-color: rgba(255, 255, 255, 0.6);
        width: 100%;
        height: 100%;
    }
    </style>
</head>
<?php include "includes/header.php";
include "includes/db.php";
?>
<div class="bg-container">
    <div class="container">
    <body>
        <h1 class="text-center pt-3">Nurse Login</h1>
        <div class="admin-login">
            <form>
            <div class="input-group mb-3 mt-5 ps-5 pe-5 w-50 m-auto">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Admin ID" aria-describedby="basic-addon1" id="adminCode" required name="user">
            </div>
            <div class="input-group mb-3 mt-5 ps-5 pe-5 w-50 m-auto">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="text" class="form-control" placeholder="Password" aria-label="Admin ID" id="adminPassword" required aria-describedby="basic-addon1" id="adminCode" required name="user">
            </div>
            <div class="d-grid">
            <button class="btn btn-primary mt-5" type="button" onclick="loginAdmin()">Login</button>
            </div>
                
            </form>
        </div>

    <script>
        function loginAdmin() {
            var adminCode = document.getElementById('adminCode').value;
            var adminPassword = document.getElementById('adminPassword').value;

            if (adminCode === "admin" && adminPassword === "admin") {
                
              
                window.location.href = "Nurse.php";
            } else {
                alert("Invalid SR-Code or Password. Please try again.");
            }
        }
    </script>
            </body>
    </div>
    </div>
