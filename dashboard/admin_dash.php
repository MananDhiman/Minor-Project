<?php
  require_once('./controller/config.php');

  global $conn;

  $sql = "SELECT * FROM students;";
  $result = $conn->query($sql);
  
  function displayTable() {
    global $result;

    if($result->num_rows > 0){
      echo "
        <table class='table table-striped table-hover'>
          <thead>
            <tr>
              <th scope='col'>Admission Number</th>
              <th scope='col'>Name</th>
              <th scope='col'>Father's Name</th>
              <th scope='col'>Class</th>
              <th scope='col'>Section</th>
              <th scope='col'>Date of Birth</th>
            </tr>
          </thead>
          <tbody> ";
          foreach($result as $row){
            echo "
              <tr>
                <td scope='row'>{$row['admission_no']}</td>
                <td>{$row['name']}</td>
                <td>{$row['father_name']}</td>
                <td>{$row['class']}</td>
                <td>{$row['section']}</td>
                <td>{$row['dob']}</td>
              </tr>
            ";
          }
      echo "
          </tbody>
        </table>";

    } else {
      echo "<h1>No Students To Show</h1>";
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
    <?php require_once('./components/navbar.php'); ?>
    <br>

    <!-- ADD NEW STUDENT BUTTON -->
    <a href="./student_add_new.php"><button type="button" class="btn btn-warning">Add New Student</button></a>
    <br>

    <!-- STUDENTS TABLE -->
    <?php displayTable(); ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>