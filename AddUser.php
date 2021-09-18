<?php
include 'connect.php';

if (ISSET($_POST['submit'])) {
    $name=$_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $blood = $_POST['blood'];


    $sql = "insert into `dataset`(name,email,mobile,blood) values('$name','$email','$mobile','$blood')";
    $result = mysqli_query($con,$sql);
    if($result==false) {
        die(mysqli_error($con));
       

    }
    else{
        header("Location:displayUser.php");
    }
}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Operation</title>
  </head>
  <body>
    <h1 class='text-center'>JU CSE-27 Student Data</h1>
    <div class='container'>
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder='Enter Your Name'  autocomplete="off" name='name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder='Enter Your Email Address'  autocomplete="off"  name='email'>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile No </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder='Enter Your Mobile Number'  autocomplete="off"  name='mobile'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Blood Group</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder='Enter Your Blood Group' autocomplete="off"    name='blood'>
                </div>
               
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>







    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
