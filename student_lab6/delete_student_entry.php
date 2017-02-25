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
    
  <form action="delete_student.php" method="post">
    <h1>Delete a student</h1>
    Student id: <input type="text" id="id" name='id' /><br/><br/>
 
    <input type="submit">
  </form>  
 
</article>

<?php require 'student-footer.php';?> 

</body>
</html>