<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="bsulogo.png">
    <link rel="stylesheet" type="text/css" href="viewdeletecandidatestyle.css">
    <title>MEDITRACK Portal</title>
</head>
<body>
    <div class="container">
        <h1>PATIENT RECORDS</h1>
        <br>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_nt3101";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['delete_id']) && is_string($_GET['delete_id'])) {
            $candidateId = $_GET['delete_id'];
        
            $sqlDelete = "DELETE FROM `med_rec` WHERE SRCode = ?";
            $stmtDelete = $conn->prepare($sqlDelete);
            $stmtDelete->bind_param("s", $candidateId);
        
            if ($stmtDelete->execute()) {
                echo "Candidate deleted successfully.";
            } else {
                echo "Error deleting candidate: " . $stmtDelete->error;
            }
        
            $stmtDelete->close();
        }
        

        $sqlSelect = "SELECT SRCode, Name, Age, Gender, Year, Address FROM `med_rec`";
        $result = $conn->query($sqlSelect);

        if ($result->num_rows > 0) {
            echo "<div style='max-width: 85%; margin: 0 auto; overflow-x: auto;'>";
            echo "<table border='2' style='width: 50%;'>
                    <tr>
                        <th>Action</th>
                        <th>SRCode</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Year</th>
                        <th>Address</th>
                        
                        
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td><a href='deleterecord.php?delete_id={$row['SRCode']}' onclick='return confirmDelete()'>Delete</a></td>
                        <td>{$row['SRCode']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Age']}</td>
                        <td>{$row['Gender']}</td>
                        <td>{$row['Year']}</td>
                        <td>{$row['Address']}</td>
                        
                        
                    </tr>";
            }

            echo "</table>";
            echo "</div>";
        } else {
            echo "No patient record found.";
        }

        $conn->close();
        ?>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete?");
        }
    </script>

            
            <br><br><br>
            <a href="admin.php">Back</a>
 
    
</body>
</html>
