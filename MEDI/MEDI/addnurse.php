<head>
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
<?php
include "includes/header.php";
include "includes/db.php";


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $nurseID = $_POST['nurseID'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];

    // Perform validation if needed

    // Insert data into the database
    $insert_query = "INSERT INTO employee_table (employee_ID, address) VALUES ('$nurseID', '$address')";
    $result = mysqli_query($conn, $insert_query);
    if($result){
        $insertinfo = "INSERT INTO tbempinfo (lastname, firstname,department) VALUES('$lastname','$lastname','$department')";
        $resultinfo = mysqli_query($conn, $insertinfo);
        if ($insertinfo);
        {
            header("Location: Nurse.php");
        }       
    }
     else {
        // Handle the case where the insert query fails
        echo "Error adding nurse: " . mysqli_error($conn);
    }
}
?>
<div class="bg-container">
    <div class="container">
        <nav class="nav nav-pills nav-justified p-3 bg-light">
            <a class="nav-link" aria-current="page" href="nurse.php">Home</a>
            <a class="nav-link active" href="addnurse.php">Add Nurse</a>
        </nav>

        <body>
            <div class="container p-3 pt-5 pb-5 mt-5 border border-dark">
                <form action="" method="post">

                    <div class="input-group  mb-3 w-50 m-auto">
                        <span class="input-group-text fw-bold">Nurse ID</span>
                        <input type="text" class="form-control" name="nurseID" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group mb-3 w-50 m-auto">
                        <span class="input-group-text fw-bold">Firstname</span>
                        <input type="text" class="form-control" name="firstname" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3 w-50 m-auto">
                        <span class="input-group-text fw-bold">Lastname</span>
                        <input type="text" class="form-control" name="lastname" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group w-50 m-auto mb-3">
                        <span class="input-group-text fw-bold">Address</span>
                        <input type="text" class="form-control" name="address" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg">
                    </div>

                    <div class="input-group mb-3 w-50 m-auto">
                        <span class="input-group-text fw-bold">Department</span>
                        <input type="text" class="form-control" name="department" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>




                    <div class="d-grid w-50 m-auto mt-5">
                        <button type="submit" class="btn btn-success text-center">Add Nurse</button>
                    </div>
                </form>
            </div>
        </body>
    </div>
</div>

<?php
// Close the database connection
mysqli_close($conn);
?>