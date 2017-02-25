<?php
 include('header.php'); 
 include('open_db_connection.php'); ?>
 <br/>

&nbsp;&nbsp;&nbsp;&nbsp;  <form action="show_user_entry.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;Email: <input type="text" name="Email"><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"/ >
</form>
<br/><br/>
<?php   include('footer.php'); ?>