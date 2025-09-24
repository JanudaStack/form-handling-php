<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Information Form</title>

   <style>
      * {
         font-family: Verdana, Geneva, Tahoma, sans-serif;
      }

      h1 {
         text-align: center;
      }

      form {
         display: flex;
         flex-direction: column;
         align-items: center;
      }
   </style>
</head>

<body>
   <h1>Student Information Register Form</h1>
   <form action="./student_info_validation.php" method="post">
      <div class="form-field">
         <div>
            <label for="student-name">Student Name:</label>
            <input type="text" name="student-name" placeholder="Enter your Name" required>
            <br>
            <br>
         </div>
         <div>
            <label for="student-id">Student ID:</label>
            <input type="text" name="student-id" placeholder="Enter your Student ID" pattern=".{6,6}" title="Student ID must be 6 characters" required>
            <br>
            <br>
         </div>
         <div>
            <label for="student-mail">Student Mail:</label>
            <input type="email" name="student-mail" placeholder="Enter your Student Mail" required>
            <br>
            <br>
         </div>
         <div>
            <label for="course">Courses:</label>
            <select name="course" id="course">
               <option value="" selected disabled hidden>Select a course</option>
               <option value="PHP">PHP</option>
               <option value="JavaScript">JavaScript</option>
               <option value="Python">Python</option>
            </select>
         </div>
         <div>
            <p>Academic Year:</p>
            <input type="radio" name="year" value="1st Year" checked>
            <label for="year1">1st year</label><br>
            <input type="radio" name="year" value="2nd Year">
            <label for="year2">2nd year</label><br>
            <input type="radio" name="year" value="3rd Year">
            <label for="year3">3rd year</label><br>
            <input type="radio" name="year" value="4th Year">
            <label for="year4">4th year</label><br>
         </div>
         <div>
            <p><label for="comment">Comment (optional):</label></p>
            <textarea name="comment" id="comment" rows="4" cols="40"></textarea>
         </div>
      </div>

      <button type="submit">Submit</button>
   </form>
</body>

</html>