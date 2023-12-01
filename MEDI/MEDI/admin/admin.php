<?php include "../includes/header.php";
include "../includes/db.php";?>

<div class="container bg-light p-5">
<form action="../admin/adminlogin.php" method="post">
    <h3 class="text-center fw-bold">Admin Login</h3>
            <div class="input-group mb-3 mt-5 ps-5 pe-5 w-50 m-auto">
            <span class="input-group-text" id="basic-addon1">Username</span>
            <input type="text" class="form-control" placeholder="Admin ID" aria-label="Admin ID" aria-describedby="basic-addon1" name="user">
            </div>
        <div class="input-group mb-3 ps-5 pe-5 w-50 m-auto">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="pass">
            </div>
        <div class="container d-flex">
            <div class="container text-center mt-3 mb-3">
                <input type="submit" class="btn btn-primary me-3" value="Login">
            </div>
        </div>
        </form>
</div>