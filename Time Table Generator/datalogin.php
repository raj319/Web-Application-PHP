<?php
$host="localhost";
$hostuser="raj";
$hostpass="";
$database="raj2";
$con=mysql_connect($host,$hostuser,$hostpass);
$db_handler=mysql_select_db($database,$con);
if($con )
{
  if(mysql_select_db("raj2",$con))
  {
   $createtable1="create table user(pid INT(15) primary key NOT NULL,pname VARCHAR(10) NOT NULL,pdes VARCHAR(10) NOT NULL,ppass VARCHAR(10) NOT NULL)";
    $run1=mysql_query($createtable1);
    if($run1)
    {
      $insert="insert into user values('12345','admin','admin','admin')";
      $row=mysql_query($insert);
    }
     $createtable2="create table subject(subid INT(3) primary key NOT NULL,subname VARCHAR(20) NOT NULL)";
     $run2=mysql_query($createtable2);
     if($run2)
     {
       $insert1="insert into subject values('101','TOA')";
       $row1=mysql_query($insert1);
       $insert2="insert into subject values('102','MEA')";
       $row2=mysql_query($insert2);
       $insert3="insert into subject values('103','DBMS')";
       $row3=mysql_query($insert3);
       $insert4="insert into subject values('104','SE')";
       $row4=mysql_query($insert4);
       $insert5="insert into subject values('105','OS')";
       $row5=mysql_query($insert5);
       $insert6="insert into subject values('106','SE')";
       $row6=mysql_query($insert6);
       $insert7="insert into subject values('107','DBMS(LAB)')";
       $row7=mysql_query($insert7);
       $insert8="insert into subject values('108','OS(LAB)')";
       $row8=mysql_query($insert8);
       $insert9="insert into subject values('109','Mini Project')";
       $row9=mysql_query($insert9);
       $insert10="insert into subject values('110','Finishing School')";
       $row10=mysql_query($insert10);
     }
   
     $createtable3="create table timing(tid INT(3) primary key NOT NULL,ttime VARCHAR(12) NOT NULL)";
     $run3=mysql_query($createtable3);
     if($run3)
     {
       $insert11="insert into timing values('201','10-10:50')";
       $row11=mysql_query($insert11);
       $insert12="insert into timing values('202','10:50-11:40')";
       $row12=mysql_query($insert12);
       $insert13="insert into timing values('203','11:40-12:30')";
       $row13=mysql_query($insert13);
       $insert14="insert into timing values('204','12:30-1:20')";
       $row14=mysql_query($insert14);
       $insert15="insert into timing values('205','2:00-2:50')";
       $row15=mysql_query($insert15);
       $insert16="insert into timing values('206','2:50-3:40')";
       $row16=mysql_query($insert16);
       $insert17="insert into timing values('207','3:40-4:30')";
       $row17=mysql_query($insert17);
     }
    
    $createtable4="create table week(wid INT(3) primary key NOT NULL,wday VARCHAR(3) NOT NULL)";
    $run4=mysql_query($createtable4);
    if($run4)
    {
      $insert18="insert into week values('301','MON')";
      $row18=mysql_query($insert18);
      $insert19="insert into week values('302','TUE')";
      $row19=mysql_query($insert19);
      $insert20="insert into week values('303','WED')";
      $row20=mysql_query($insert20);
      $insert21="insert into week values('304','THU')";
      $row21=mysql_query($insert21);
      $insert22="insert into week values('305','FRI')";
      $row22=mysql_query($insert22);
      $insert23="insert into week values('306','SAT')";
      $row23=mysql_query($insert23);
    }
   
    $createtable5="create table link(pid INT(15) NOT NULL,subid INT(3) NOT NULL,tid INT(3) NOT NULL,wid INT(3) NOT NULL)";
    $run5=mysql_query($createtable5);
    if($run5)
    {

    }

   }

}
else
{
  die('Could not connect: ' . mysql_error());
}
?>