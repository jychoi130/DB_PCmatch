<?php 
   include "db.php";
?>
<?php
 $host = 'localhost';
 $user = 'root';
 $pw = 'jychoi130';
 $dbName = 'dbproject';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $mysqli -> autocommit(FALSE);

 $Cid=$_POST['Cid'];
 $pid=$_POST['pid'];
 $pname=$_POST['pname'];
 $start=$_POST['start'];
 $end= $_POST['end'];
 $wage= $_POST['wage'];
 $Rid=$pid;
 $Did="default";

 $mysqli -> query("INSERT INTO project (pid, pname, start, end, wage)
VALUES ('$pid','$pname','$start','$end','$wage')");
$mysqli -> query("INSERT INTO register (Rid, Cid, Pid, Did)
VALUES ('$Rid','$Cid','$pid','$Did')");

// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}
else {
   echo "<script>location.href='index.php'</script>";
}

$mysqli -> close();

?>