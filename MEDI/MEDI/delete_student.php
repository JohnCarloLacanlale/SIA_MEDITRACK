<?php
include "includes/db.php";

if (isset($_GET['delete'])) {
    $id_to_delete = $_GET['delete'];

    // Create a delete query
    $delete_query = "DELETE FROM stud_table WHERE student_ID = $id_to_delete";

    // Perform the delete query
    $result = mysqli_query($conn, $delete_query);

    if ($result) {
        // Redirect to the page where you display the student information after deletion
        header("Location: Nurse.php");
        exit();
    } else {
        // Handle the case where the delete query fails
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
