<!DOCTYPE html>
<html>

<head lang="en">
   <meta charset="utf-8">
   <title>Student app</title>
   <link rel="stylesheet" href="reset.css" />
   <link rel="stylesheet" href="student.css" />
</head>

<body>

<header>
  <hgroup>
     <h1>Welcome!<h1>
  </hgroup>

</header>

<article>
  <p><a href="show_all_students.php">Show all students</a></p><br>    
  <p><a href="new_student_entry.php">Add a student</a></p><br>    
  <p><a href="update_student_entry.php">Update a student</a></p><br>      
  <p><a href="delete_student_entry.php">Delete a student</a></p><br>      
</article>

<?php require 'student-footer.php';?> 

</body>
</html>