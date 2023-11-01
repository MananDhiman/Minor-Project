<?php

  // if(isset($_POST['submit'])) {

  //   require_once('./controller/config.php');

  //   global $conn;

  //   $name = $_POST["name"];
  //   $father_name = $_POST["father_name"];
  //   $admission_no = $_POST["admission_no"];
  //   $dob = $_POST["dob"];
  //   $class = $_POST["class"];
  //   $section = $_POST["section"];
    
  //   $sql = "INSERT INTO `students`
  //   (`id`, `admission_no`, `name`, `father_name`, `class`, `section`, `dob`) VALUES
  //   (NULL, '$admission_no', '$name', '$father_name', '$class', '$section', '$dob');";

  //   $username = "$name$admission_no";
  //   $password = $username;
  //   $sql2 = "INSERT INTO `users`
  //   (`id`, `username`, `password`, `name`, `is_admin`) VALUES
  //   (NULL, '$username', '$password', '$name', '0');";

  //   if ($conn->query($sql) === TRUE
  //   && $conn->query($sql2)) {
  //     echo "New record created successfully";
  //   } else {
  //     echo "Error: " . $sql . "<br>" . $conn->error;
  //   }
  // }
  
?>

<html>
<head>
  <title>Nankana Public School Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">

    <!-- NAVBAR -->
    <?php require_once('./components/navbar.php') ?>
    <br>

    <h1>Add New Admin</h1>
    <br>

    <form action="" method="POST">
      <div class="row">
        <div class="col">
          Name<br>
          <input type="text" class="form-control" placeholder="Aman Kumar" name="name" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Username<br>
          <input type="text" class="form-control" placeholder="aman-kumar" name="username" required>
        </div>
        <div class="col">
          Password<br>
          <input type="password" class="form-control" placeholder="********" name="password" required>
        </div>
      </div>
        
      
      <br>
      <button type="submit" class="btn btn-success" name="submit">Add New Admin</button>
    </form>
    <a href="index.php"><button type="submit" class="btn btn-danger">Cancel</button></a>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>