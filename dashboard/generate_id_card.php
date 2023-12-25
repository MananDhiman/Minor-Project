<?php

  require_once('./controller/config.php');

  global $conn;

  if(isset($_GET['admission_no'])) {
    $admission_no = $_GET['admission_no'];
    $sql = "SELECT * FROM students WHERE admission_no = '$admission_no' LIMIT 1 ;";  
  } else {
    $sql = "SELECT * FROM students LIMIT 50;";
  }
  $result = $conn->query($sql);

  $table = "<link rel='stylesheet' href='./id-card-style.css'/><table><tbody><tr>";
  $i = 0;
  foreach($result as $student_data) {
    if($i % 5 == 0 && $i != 0) $table .= "</tr><tr>";

    $table .= 
      "<td>
        <div class='second-section'>
        <img id='child-image' src='./media/student.webp' ><br>
          <div class='child-name'>{$student_data['name']}</div>
          <div class='child-class'>Class: {$student_data['class']} {$student_data['section']}</div>
          <div class='child-details'>
            <span class='red-details space-right'>F.Name</span>: {$student_data['father_name']}<br>
            <span class='red-details'>M.Name</span>: {$student_data['mother_name']}<br>
            <span class='red-details'>Mob. No</span>: {$student_data['phone']}<br>
            <span class='red-details'>Adm. No</span> : {$student_data['admission_no']}
            <span class='red-details space-left'>D.O.B</span> : {$student_data['dob']}<br>
            <span class='red-details'>Address</span>: {$student_data['address']}<br>
          </div>
        </div>
      </td>";
    $i++;
  } 

  $table .= "</tr></tbody></table>";

  // require_once 'dompdf/autoload.inc.php';
  require 'vendor/autoload.php';
  // reference the Dompdf namespace
  use Dompdf\Dompdf;
  // instantiate and use the dompdf class
  $dompdf = new Dompdf();

  $html_content = $table;
  // echo $html_content;

  $dompdf->set_option("dpi", 300);
  $dompdf->getOptions()->setChroot($_SERVER["DOCUMENT_ROOT"]); 
  $dompdf->loadHtml($html_content);
  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'landscape');
  // Render the HTML as PDF
  $dompdf->render();
  // Output the generated PDF to Browser
  $dompdf->stream();
?>
