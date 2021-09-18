<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="AddUser.php" class='text-white' style='text-decoration: none'> Add Data </a>
            
       </button>

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No </th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "Select * from `dataset`";
                    $result = mysqli_query($con,$sql);
                    if ($result==true) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $blood = $row['blood'];

                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$blood.'</td>
                            <td>
                            <button class="btn btn-warning"><a href="update.php? Updateid='.$id.'" class="text-dark fw-bold" style="text-decoration: none">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-white fw-bold" style="text-decoration: none">Delete</a></button>
                            </td>
                            </tr>';
                        }
                        
                    }

                    ?>
                   

                </tbody>
            </table>
    </div>







<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>