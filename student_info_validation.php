<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Results</title>
</head>

<body>
   <h2>Form Submission Results</h2>

   <?php
   if ($_POST) {
      $studName = $_POST['student-name'];
      $studId = $_POST['student-id'];
      $studMail = $_POST['student-mail'];
      $course = $_POST['course'];
      $year = $_POST['year'];
      $comment = $_POST['comment'];

      echo "<h2>Form submitted successfully!</h2>";
      echo "<p><strong>Student Name: </strong> $studName </p>";
      echo "<p><strong>Student ID: </strong> $studId </p>";
      echo "<p><strong>Student Mail: </strong> $studMail </p>";
      echo "<p><strong>Course: </strong> $course </p>";
      echo "<p><strong>Academic Year: </strong> $year </p>";

      if ($comment) {
         echo "<p><strong>Comment: </strong> $comment </p>";
      }
   } else {
      echo "<p>No form data recieved.</p>";
   }

   ?>
   <a href="./student_info_form.php">Go Back</a>
</body>

</html>