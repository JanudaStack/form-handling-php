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

      input[type="text"],
      input[type="email"] {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         border: 1px solid #ccc;
         border-radius: 4px;
         box-sizing: border-box;
         font-size: 16px;
      }

      input[type="submit"] {
         width: 100%;
         margin-top: 1rem;
         padding: 10px;
         background-color: #007bff;
         color: white;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         transition: background-color .3s ease
      }

      input[type="submit"]:hover {
         background-color: #0056b3;
      }

      input[type="submit"]:active {
         background-color: #004494;
      }

      label {
         font-size: 14px;
         color: #333;
         margin-bottom: 10px;
      }

      form {
         display: flex;
         flex-direction: column;
         align-items: center;
      }

      .form-field {
         background-color: #d5d5d5ff;
         padding: 2rem 3rem;
         border-radius: 1rem;
      }

      select {
         width: 100%;
         border-radius: 4px;
         display: flex;
         padding: 10px;
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