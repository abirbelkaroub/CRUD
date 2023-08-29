<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
}

$sql = "insert into `crud` (name,email,mobile,password) values ('$name','$email','$mobile','$password')";
$result = mysqli_query($connect, $sql);
if ($result) {
    echo "Data inserted successfully!";
} else {
    die(mysqli_error($connect));
}
?>
<!doctype html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      </head>
      <body>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
            <div class="container my-5" > <!--Boostrap: This container class make a space on left and right of the input box and my-5 is to add bottom and top margin -5 -->
              <form>
                 <div class="mb-3">
                     <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
                </div>
                <div class="mb-3">
                     <label>Email address</label>
                     <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
                </div>
                <div class="mb-3">
                     <label>Phone Number</label>
                     <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="mobile" autocomplete="off">
                 </div>
                 <div class="mb-3">
                     <label>Password</label>
                     <input type="text" class="form-control" placeholder="Enter Your password" name="password" autocomplete="off">
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
      </body>
</html>
