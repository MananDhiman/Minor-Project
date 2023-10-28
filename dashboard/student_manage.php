<?php

  require_once('./controller/config.php');
  global $conn;

  $admission_no = $_GET['id'];

  $sql = "SELECT * FROM students WHERE admission_no='$admission_no'";

  $result = $conn ->query($sql);

  $name = "";
  $father_name = "";
  $class = "";
  $section = "";

  foreach($result as $row) {
    $name = $row['name'];
    $father_name = $row['father_name'];
    $class = $row['class'];
    $section = $row['section'];
  }

  if(isset($_POST['submit'])) {
    $sub_1 = $_POST['sub_1'];
    $sub_2 = $_POST['sub_2'];
    $sub_3 = $_POST['sub_3'];
    $sub_4 = $_POST['sub_4'];
    $sub_5 = $_POST['sub_5'];

    $avg = ($sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5) / 5;

    $sql = "INSERT INTO students_marks VALUES 
    ('$admission_no', '$sub_1', '$sub_2', '$sub_3', '$sub_4', '$sub_5', '$avg');";

    $result = $conn -> query($sql);
    if($result === true) {
      echo "Marks of $name updated";
    } else {
      echo $sql;
      echo "Some error occured";
      print_r($result);
    }

    
  }

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

    <h1>Manage Student</h1>
    <h3><?php echo "Set marks of $name, admission no $admission_no in class $class $section"; ?></h3>
    <br>

    <div class="col-6">
      
      <form action="" method="POST">

        <div class="row">
          <div class="col">
            Subject 1
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="75" name="sub_1" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col">
            Subject 2
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="75" name="sub_2" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col">
            Subject 3
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="75" name="sub_3" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col">
            Subject 4
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="75" name="sub_4" required>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col">
            Subject 5
          </div>
          <div class="col">
            <input type="number" class="form-control" placeholder="75" name="sub_5" required>
          </div>
        </div>
        <br>
        
  
        <button type="submit" class="btn btn-success" name="submit">Save Changes</button>
      </form>
    </div>
    <a href="dash_admin.php"><button type="submit" class="btn btn-danger">Cancel</button></a>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>