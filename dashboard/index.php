<?php
  if(isset($_POST['submit'])) {
    require_once('./controller/config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE
      username='$username' AND 
      password='$password';";

    $result = $conn->query($sql); 
    
    if($result->num_rows == 1) {
      $is_admin = 0;
      foreach($result as $row) $is_admin = $row['is_admin'];
      
      if($is_admin == 1) header('Location: dash_admin.php');
      elseif($is_admin == 0) header('Location: dash_student.php');

    } else {
      echo "invalid cred";
    }
  
  }
?>

<html>
<head>
  <title>Nankana Public School Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
  </style> 
</head>
<body>

  <h1 class="text-center">Nankanka Public School Dashboard</h1>
  <br>
  <div class="container col-4">
  
    <!-- LOGIN FORM -->
    <form action="" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" placeholder="admin" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="*********" id="password" name="password">
      </div>
      
      <button type="submit" class="btn btn-primary" name="submit">Login</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery-3.7.1.min.js"></script>
  <script>

  </script>
</body>
</html>