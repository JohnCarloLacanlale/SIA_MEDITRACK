
<?php
include '../includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedCategory = $_POST['category'];

    $sql = "SELECT * FROM records";
    if ($selectedCategory !== 'all') {
        $sql .= " WHERE studtable = '$SRCode'";
    }

    // Execute the query and fetch records
    // Implement your database connection and query execution here
    // ...

    // Display the records in the table
    // Replace the following with your database fetching code
    echo "<tr><td>1</td><td>Record 1</td><td>studtable 1</td></tr>";
    echo "<tr><td>2</td><td>Record 2</td><td>studtable 2</td></tr>";
    // ...
}
?>
