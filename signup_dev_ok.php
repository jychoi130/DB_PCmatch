<?php

 $host = 'localhost';
 $user = 'root';
 $pw = 'jychoi130';
 $dbName = 'dbproject';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $Did=$_POST['Did'];
 $Dpw=$_POST['Dpw'];
 $Dname=$_POST['Dname'];
 $Daddress=$_POST['Daddress'];
 $Dtype=$_POST['Dtype'];
 $Dphone=$_POST['Dphone'];
 
 $sql = "insert into developer (Did, Dpw, Dname, Daddress, Dtype, Dphone)";
 $sql = $sql. "values('$Did','$Dpw','$Dname','$Daddress', '$Dtype','$Dphone')";
 if($mysqli->query($sql)){
	echo "<script>location.href='index.php'</script>";
 }else{
  echo 'fail to insert sql';
 }
?>