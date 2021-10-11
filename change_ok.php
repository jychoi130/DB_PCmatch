<?php
    $Cid="";
    if( isset($_SESSION['Cid'])) $Cid= $_SESSION['Cid']; 
include "password.php";
include "db.php";

$host = 'localhost';
$user = 'root';
$pw = 'jychoi130';
$dbName = 'dbproject';
$mysqli = new mysqli($host, $user, $pw, $dbName);


$Cpw = $_POST['Cpw'];
$Cname = $_POST['Cname'];
$Caddress = $_POST['Caddress'];
$Cphone = $_POST['Cphone'];

//echo $Cpw, $Cname, $Caddress, $Cphone;
//$sql="UPDATE customer set Cpw='0130', Cname='최지연', Caddress='광주', Cphone=85225885 WHERE Cid='bada130'";
$sql = "UPDATE customer set Cpw='".$Cpw."', Cname='".$Cname."', Caddress='".$Caddress."',Cphone=".$Cphone." WHERE Cid='".$Cid."'";
$mysqli -> query($sql);


// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}
else {
   echo "<script>alert('정보변경이 완료되었습니다 	'); history.back();</script>";

   $mysqli -> close();
}
?>