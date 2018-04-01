<?php
include 'datalogin.php';
session_start();
if(isset($_SESSION["pid"])==true)
{
?>
<html>
<head>
<title>Time table Generator</title>

</title>
<body background="bg.jpg">
<center><h1>Time Table Generator<h1></center>
<form method="post" action="insert.php">
<center> <table border=5 cellspacing=15 cellpadding=15>
<tr>
<td></td>
 <td>10:00-10:50</td>
 <td>10:50-11:40</td>
 <td>11:40-12:30</td>
 <td>12:30-01:20</td>
 <td>01:20-02:00</td>
 <td>02:00-2:50</td>
 <td>02:50-03:40</td>
 <td>03:40-04:30</td>
</tr>

<tr>
 <td>MON</td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=201 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?>
 </td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=202 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=203 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=204 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><center>L</center></td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=205 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=206 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."<center>";
 }
 ?></td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=207 and l.wid=301";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
</tr>
<tr>
<td>TUE</td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=201 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td>
 <?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=202 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=203 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=204 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><center>U</center></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=205 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=206 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=207 and l.wid=302";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
</tr>
<tr>
<td>WED</td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=201 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=202 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=203 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=204 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><center>N</center></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=205 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=206 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=207 and l.wid=303";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
</tr>
<tr>
<td>THU</td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=201 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=202 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=203 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=204 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><center>C</center></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=205 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=206 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=207 and l.wid=304";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
</tr>
<tr>
<td>FRI</td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=201 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=202 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=203 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=204 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><center>H</center></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=205 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=206 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=207 and l.wid=305";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
</tr>
<tr>
<td>SAT</td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=201 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?> </td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=202 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=203 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=204 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><center><img src="images.jpg"></image></center></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=205 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=206 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
 <td><?php
 $q1="SELECT s.subname from subject s,link l where s.subid=l.subid and l.tid=207 and l.wid=306";
 $l1=mysql_query($q1);
 while($r1 = mysql_fetch_array($l1))
 {
  echo "<center>".$r1['subname']."</center>";
 }
 ?></td>
</tr>
</table>
</center>
<br>
<br>

<?php
    $idperson = mysql_real_escape_string($_SESSION['id']);
    $run=mysql_query("select * from user where pid='$idperson'");
    while($row = mysql_fetch_array($run))
    {
     echo "<br>"."Hello: ".$row['pname']."<br>";
    }
    $subquery="SELECT * FROM subject";
    $runsubquery=mysql_query($subquery);
    $timequery="SELECT * FROM timing";
    $runtimequery=mysql_query($timequery);
    $weekquery="select * from week";
    $runweekquery=mysql_query($weekquery);
    echo "<select name=subj>";
    echo "<option>--</option>";
    while($row1=mysql_fetch_array($runsubquery))
    {
      echo "<option value=".$row1['subid'].">".$row1['subname']."</option>";
    }
    echo "</select>";
    echo "<select name=tim>";
    echo "<option>--</option>";
    while($row2=mysql_fetch_array($runtimequery))
    {
     echo "<option value=".$row2['tid'].">".$row2['ttime']."</option>";
    }
    echo "</select>";
    echo "<select name=wee>";
    echo "<option>--</option>";
    while($row3=mysql_fetch_array($runweekquery))
    {
     echo "<option value=".$row3['wid'].">".$row3['wday']."</option>";
     echo $row3['wid'];
    }
    echo "</select>";

    echo "<input type=submit name=sub value=Allot>";
    echo "<input type=submit name=del value=delete>";
    echo "<input type=submit name=mysc value=MySchedule>";
    echo "</form>";
    echo "<a href=logout.php>"."Logout"."</a>";

}
else
{
  session_destroy();
  header('Location: index.php');
}
?>
</body>
</html>