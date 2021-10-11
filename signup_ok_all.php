<?php

 $host = 'localhost';
 $user = 'root';
 $pw = 'jychoi130';
 $dbName = 'dbproject';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $Cid=$_POST['Cid'];
 $Cpw=$_POST['Cpw'];
 $Cname=$_POST['Cname'];
 $Caddress=$_POST['Caddress'];
 $Cphone=$_POST['Cphone']; 

 $sql = "insert into customer (Cid, Cpw, Cname, Caddress, Cphone)";
 $sql = $sql. "values('$Cid','$Cpw','$Cname','$Caddress','$Cphone')";
 if($mysqli->query($sql)){
    echo "<script>location.href='index.php'</script>";
 }else{
  echo 'fail to insert sql';
 }
?>
