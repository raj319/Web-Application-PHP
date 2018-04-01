<?php
// Start the session
session_start();
include 'datalogin.php';
if(isset($_SESSION["pid"])==true)
{
?>
<html>
<head>
<title>Time table generator</title>
</head>
<body background="bg.jpg">
<center>
 <br>
 <h2> Registration Form</h2>

<form action="" method="post">
<table border="3" align="center">
<br><th>User id:<br> <input type="text" name="uid" required><br>
User name:<br> <input type="text" name="in" required><br>
Designation:<br> <input type="text" name="des" required><br>
Password: <br><input type="password" name="ps" required><br>
Confirm Password:<br> <input type="password" name="cops" required></th><br>
</table><br>
<input type="submit" name="subm" value="Register">

</form>
<?php

if(isset($_POST['subm']))
{
 $uid=$_POST['uid'];
 $in=$_POST['in'];
 $des=$_POST['des'];
 $ps=$_POST['ps'];
 $cops=$_POST['cops'];
 if($ps==$cops)
 {
   $insertion="insert into user values('$uid','$in','$des','$ps')";
   $query=mysql_query($insertion);
   if($query)
   {
     header('Location: admin.php');
   }
   else
   {
     echo "failed to insert";
   }
 }
 else
 {
   echo "Error in password match";
 }

}
?>
<h2>Registered Users</h2>
<br>
 <table border=3 cellspacing=5 cellpadding=5>
    <tr>
    <td>User ID</td>
    <td>Name</td>
    <td>Desg</td>
    </tr>
 <?php
  $display="select * from user where pid<>'12345' and ppass<>'admin'";
 $run=mysql_query($display);
 while($row=mysql_fetch_array($run))
 {
  echo "<tr><td>".$row['pid']."</td><td>".$row['pname']."</td><td>".$row['pdes']."</td></tr>";
 }

 ?>
 </table>
</center>
<br>

<a href="logout.php">Logout</a>
<?php
}
else
{
  session_destroy();
  header('Location: index.php');
}
?>
</body>


</html>