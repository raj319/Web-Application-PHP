<?php
// Start the session
session_start();
?>
<?php
include 'datalogin.php';

if(isset($_POST['sub']) && $_POST['subj']!='--' && $_POST['tim']!='--' && $_POST['wee']!='--')
{
 $gsub=$_POST['subj'];
 $gtime=$_POST['tim'];
 $gwee=$_POST['wee'];
$result22 = mysql_query("SELECT subid FROM link WHERE tid='$gtime' and wid='$gwee'");
$idperson = mysql_real_escape_string($_SESSION['id']);
if(mysql_num_rows($result22)==0)
{
 $insertq="insert into link(pid,subid,tid,wid) values('$idperson','$gsub','$gtime','$gwee')";
 $runinsertq=mysql_query($insertq);
 if($runinsertq)
 {
   header('Location: main.php');
 }
 else
 {
   echo "error in insertion";
 }
}
else
{
  echo "duplication";
  header('Location: main.php');
}
 mysql_close();
}
else if(isset($_POST['del'])  && $_POST['subj']!='--' && $_POST['tim']!='--' && $_POST['wee']!='--')
{
 $gsub=$_POST['subj'];
 $gtime=$_POST['tim'];
 $gwee=$_POST['wee'];
 $idperson = mysql_real_escape_string($_SESSION['id']);
 $result22 = mysql_query("delete from link where pid='$idperson' and tid='$gtime' and wid='$gwee'");
 if($result22)
 {
   header('Location: main.php');

 }
 else
 {
   echo "problem in deletion";
 }
}
else if(isset($_POST['mysc']))
{
  header('Location: main1.php');
}

else
{
header('Location: main.php');
mysql_close();
}
?>