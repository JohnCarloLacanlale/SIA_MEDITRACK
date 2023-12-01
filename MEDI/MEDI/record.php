<?php
include "includes/header.php";
include "includes/db.php";

// Check if a specific record_ID is provided in the URL
            if (isset($_GET['view'])) {
                $selectedRecordID = $_GET['view'];

                $query = "SELECT
                viewrecord_table.record_ID,
                tbstudinfo.firstname AS first_name,
                tbstudinfo.lastname AS last_name,
                viewrecord_table.doctor,
                viewrecord_table.prescription,
                viewrecord_table.symptoms,
                viewrecord_table.body_temperature,
                viewrecord_table.pulse_rate,
                viewrecord_table.rate_of_breathing,
                viewrecord_table.blood_pressure
            FROM
                viewrecord_table
            INNER JOIN
                stud_table ON viewrecord_table.student_ID = stud_table.student_ID
            INNER JOIN
                tbstudinfo ON stud_table.student_ID = tbstudinfo.studid
            WHERE
                viewrecord_table.student_ID = ?";




$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $selectedRecordID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    $recordID = $row['record_ID'];
    $studentName = $row['first_name'] . ' ' . $row['last_name']; // Updated column names
    $doctor = $row['doctor'];
    $prescription = $row['prescription'];
    $symptoms = $row['symptoms'];
    $bodyTemperature = $row['body_temperature'];
    $pulseRate = $row['pulse_rate'];
    $rateOfBreathing = $row['rate_of_breathing'];
    $bloodPressure = $row['blood_pressure'];

        
        
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="record.css" rel="stylesheet">

    <!-- Include any head elements here -->
    <title>Record Details</title>
        </head>


        <body>
            <div class="container">
                <div class="row-mt-5">
                    <!-- Include any navigation elements here -->

                    <h1 class="text-center mt-3" style="font-family: 'Your Desired Font', sans-serif;">Record Details</h1> 
                    <div class="container"><button class="btn btn-primary" id="add">Add Record</button></div>
                    <table class="table table-striped table-bordered table-hover mt-5">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Record ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Prescription</th>
                                <th scope="col">Symptoms</th>
                                <th scope="col">Body Temperature</th>
                                <th scope="col">Pulse Rate</th>
                                <th scope="col">Rate of Breathing</th>
                                <th scope="col">Blood Pressure</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $recordID ?></td>
                                <td><?php echo $studentName ?></td>
                                <td><?php echo $doctor ?></td>
                                <td><?php echo $prescription ?></td>
                                <td><?php echo $symptoms ?></td>
                                <td><?php echo $bodyTemperature ?></td>
                                <td><?php echo $pulseRate ?></td>
                                <td><?php echo $rateOfBreathing ?></td>
                                <td><?php echo $bloodPressure ?></td>
                                <td><a href="Nurse.php" class='btn btn-danger'>Back</a></td>
                                <td><button id="showEditFormBtn" class='btn btn-warning' data-toggle="modal" data-target="#editRecordModal">Edit  </button></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Add/Edit Record Modal -->
<div class="modal" id="editRecordModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body custom-modal-body">
            <form action="" method="post"> 
             <!-- Add/Edit Record Form -->
             <br> <label for="recordID">Record ID:</label> <br>
                <input type="text" id="recordID" name="recordID" value="<?php echo $recordID; ?>" readonly>
                   
                <br> <label for="studentName">Student Name:</label><br>
                <input type="text" id="studentName" name="studentName" value="<?php echo $studentName; ?>" readonly>

                <br> <label for="doctor">Doctor:</label> <br>
                <input type="text" id="doctor" name="doctor" value="<?php echo $doctor; ?>">

                <br> <label for="prescription">Prescription:</label> <br>
                <input type="text" id="prescription" name="prescription" value="<?php echo $prescription; ?>">

                <br> <label for="symptoms">Symptoms:</label> <br>
                <input type="text" id="symptoms" name="symptoms" value="<?php echo $symptoms; ?>">
    
                <br>  <label for="bodytermperature">Body temperature:</label> <br>
                <input type="text" id="bodytermperature" name="body_temperature" value="<?php echo $bodyTemperature; ?>">
       
                <br>  <label for="pulse rate">Pulse Rate:</label> <br>
                <input type="text" id="pulserate" name="pulse_rate" value="<?php echo $pulseRate ; ?>">

                <br>  <label for="rateOfBreathing">Rate of Breathing:</label> <br>
                <input type="text" id="rateOfBreathing" name="rate_of_breathing" value="<?php echo $rateOfBreathing; ?>">
    
                <br> <label for="bloodPressure">bloodpressure:</label> <br>
                <input type="text" id="bloodPressure" name="blood_pressure" value="<?php echo $bloodPressure; ?>">

                <input type="submit" name="addRecord" value="Update">
            </form>


            <?php
   

               if (isset($_POST["addRecord"])) {        
                $doctor = $_POST['doctor'];
                $prescription = $_POST['prescription'];
                $symptoms = $_POST['symptoms'];
                $body_temperature = $_POST['body_temperature'];
                $pulse_rate = $_POST['pulse_rate'];
                $rate_of_breathing = $_POST['rate_of_breathing'];
                $blood_pressure = $_POST['blood_pressure'];
                $query = "INSERT INTO viewrecord_table (doctor, prescription, symptoms, body_temperature, pulse_rate, rate_of_breathing , blood_pressure) VALUES ('{$doctor}','{$prescription}','{$symptoms}','{$body_temperature}','{$pulse_rate}', '{$rate_of_breathing}', '{$blood_pressure}')";
                $insert_query = mysqli_query($conn,$query);
            }       
            
            ?>

                </div>
            </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

         <!-- Include Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript code -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Get references to the form and the button
        var editForm = document.getElementById("editRecordForm");
        var showEditFormBtn = document.getElementById("showEditFormBtn");

        // Add a click event listener to the button
        showEditFormBtn.addEventListener("click", function () {
            // Toggle the display property of the form
            if (editForm.style.display === "none" || editForm.style.display === "") {
                editForm.style.display = "block";
            } else {
                editForm.style.display = "none";
            }
        });
    });
</script>

        </body>

        </html>
<?php
    } else {
        // Handle the case where the specified record_ID is not found
        echo "Record not found.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // Handle the case where no record_ID is specified
    echo "No record_ID specified.";
}
?>
