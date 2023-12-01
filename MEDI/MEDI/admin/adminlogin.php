<?php
include "../includes/db.php";?>
<?php
if(isset($_POST['user']) && isset($_POST['pass'])){

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    $user = validate($_POST['user']);
    $pass = validate($_POST['pass']);

    $query = "SELECT * FROM admindb WHERE username = '$user' AND password = '$pass'";
        $login = mysqli_query($conn, $query);
        if (mysqli_num_rows($login) === 1) {
            $row = mysqli_fetch_assoc($login);
            if ($row['username'] === $user && $row['password'] === $pass) {
                echo "<script type = 'text/javascript'>alert('Login Successfully')</script>";
                header('Location:../Nurse.php');
                exit();
            } else {
                echo "<script type = 'text/javascript'>alert('Incorrect Username or password')</script>";
                exit();
            }
        } else {
            echo "<script type = 'text/javascript'>alert('Incorrect Username or password')</script>";
            exit();
        }
}
?>