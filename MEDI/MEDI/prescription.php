<?php
session_start();
$con = mysqli_connect("localhost","root","","db_nt3101");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$firstname = "";
$birthdate = "";
$gender = "";
$address = "";
$lastname = "";

if(isset($_POST['show'])){
$srcode = $_POST['srcode'];

    $sql = "SELECT * FROM stud_table WHERE student_ID = '$srcode'";
    if($query = mysqli_query($con,$sql)){
        while($row = mysqli_fetch_assoc($query)){
        $firstname = $row['first_name'];
        $lastname = $row['last_name'];
        $birthdate = $row['birth_date'];
        $gender= $row['gender'];
        $address = $row['address'];

        }
    }
    }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic System</title>
    <link rel="stylesheet" href="studentinfo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style = "display:flex;justify-content:center;">
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                <img src="bsulogo1.png" alt="bsulogo" class="logo" style = "width:100px;height:auto;">

                </div>
                <div class="code"></div>
            <br>
            <form action="" method="post" style ="display:flex; flex-direction:column;">
                <div style = "display:flex;justify-content:center;align-items:center;flex-direction:column;">
                    <div class = "my-2">
                    <input type="text" class = "form-control" placeholder="srcode" name="srcode" value ="">
                    </div>
                    <div class = "my-2">
                    <input type="text" class = "form-control"placeholder="first name" value = "<?=$firstname ?>">
                    </div>
                    <div class = "my-2">
                    <input type="text"class = "form-control"placeholder="last name" value = "<?=$lastname?>">
                    </div>
                    <div class = "my-2">
                    <input type="text" class = "form-control"placeholder="birthday"value = "<?=$birthdate?>">
                    </div>
                    <div class = "my-2">
                    <input type="text" class = "form-control"placeholder="gender"value = "<?=$gender?>">
                    </div>
                    <div class = "my-2 mb-3">
                    <input type="text"class = "form-control"placeholder="address" value = "<?=$address?>">

                    </div>

                    <div class="button-container" style = "display:flex; flex-direction:row; justify-content:space-around;align-items:center;">
                        <button type="submit" name = "show" class = "m-2">Show tudent</button>
                        <div class="medical-history-button" class = "m-2">
                        <button onclick="openMedicalHistory()" class = "m-2">Medical Record</button>
                        <a href="Nurse.php" class = "p-3" style = "color:white;text-decoration:none;">back</a>
                    </div>
                </div>
            </form>
<?php 
session_unset();
?>
            <br>
       
    </div>
    <script src="dbclinic.js"></script>
    <!-- javascript cdn for bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
