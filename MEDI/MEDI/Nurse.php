<?php
include "includes/header.php";
include "includes/db.php";

// Your query definition
$query = isset($_POST["searchThis"]) ?
    "SELECT * FROM stud_table
    LEFT JOIN tbstudinfo ON stud_table.studid = tbstudinfo.studid
    WHERE SRCode = '{$_POST["searchThis"]}'" :
    "SELECT * FROM stud_table
    LEFT JOIN tbstudinfo ON stud_table.studid = tbstudinfo.studid";

// Execute the query
$select = mysqli_query($conn, $query);

if ($select) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

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
                background-color: rgba(255, 255, 255, 0.6);
                width: 100%;
                height: 100%;
            }
        </style>
    </head>

    <body>
        <div class="bg-container">
            <div class="container-xl">
                <div class="row mt-5">
                    <nav class="nav nav-pills nav-justified p-3 bg-light">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="addnurse.php">Add Nurse</a>
                    </nav>
                    <h1 class="text-center mt-3">Student Information</h1>
                    <form action="" method="post">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control" name="searchThis">
                            </div>
                            <input type="submit" class="btn btn-primary" name="search" value="Search">
                        </div>
                    </form>
                    <?php
                    if (mysqli_num_rows($select) > 0) {
                        ?>
                        <table class="table table-striped table-bordered table-hover mt-5">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">SR-Code</th>
                                    <th scope="col">FirstName</th>
                                    <th scope="col">LastName</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($select)) {
                                    $id = $row['student_ID'];
                                    $srcode = $row['SRCode'];
                                    $fname = $row['firstname'];
                                    $lname = $row['lastname'];
                                    $bdate = $row['birth_date'];
                                    $gender = $row['gender'];
                                    $add = $row['address'];
                                    ?>
                                    <tr>
                                        <td><?php echo $srcode ?></td>
                                        <td><?php echo $fname ?></td>
                                        <td><?php echo $lname ?></td>
                                        <td><?php echo $gender ?></td>
                                        <td><?php echo $add ?></td>
                                        <td><a href="record.php?view=<?php echo $id; ?>" class='btn btn-primary'>View Medical Record</a></td>
                                        <td><a href="delete_student.php?delete=<?php echo $id; ?>" class='btn btn-danger'>DELETE</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php
                    } else {
                        echo "No records found.";
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>

    </html>
    <?php
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
