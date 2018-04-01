<?php
// Start the session
session_start();
include 'datalogin.php';
?>

<html>
<head>

<title>Time table Generator</title>
</head>
<body background="bg.jpg">
<br>
<br>
<br>
<center>
 <br>
 <br>
 <br>
 <br>
<center><h2>Login Credentials</h2></center>
<form action="" method="POST">
<table border="5" align="center">
<br>
<br>
<th>User ID<br> <input type="text" name="pid" required>     <br>
Password<br> <input type="password" name="ppass" required ></th>
</table><br>
<center>
<input type="submit" name="logsub" value="Log In"></center>
<?php 
if(isset($_POST['logsub']))
{
  $pid=$_POST["pid"];
  $ppass=$_POST["ppass"];
  $_SESSION["id"] =$pid;
  $query2="select * from user where pid='$pid' and ppass='$ppass'";
  $run2=mysql_query($query2);
  $id=mysql_real_escape_string($pid);
  $pass=mysql_real_escape_string($ppass);
  while($row=mysql_fetch_array($run2))
  {
    if($row['pid']=='12345' && $row['ppass']=='admin')
    {
     $_SESSION["pid"]=true;
     header('Location: admin.php');
    }
    else if($row['pid']==$id && $row['ppass']==$pass)
    {
     $_SESSION["pid"]=true;
     header('Location: main.php');
    }
  }
  echo "<h4> Invalid User id or Password</h4>";
}
?>
</form>
</center>
</body>
</html>



