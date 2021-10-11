<?php 
   session_start();
    $Did="";
    if( isset($_SESSION['Did'])) $Did = $_SESSION['Did']; 


 $host = 'localhost';
 $user = 'root';
 $pw = 'jychoi130';
 $dbName = 'dbproject';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 if ($mysqli->connect_error){
    echo "connection failed." . $mysqli->connect_error;
 }
 else{
    echo "<script>console.log('connection succeeded')</script>";
 }

 $pid=$_POST['id'];

 # $mysqli -> query("INSERT INTO register (Rid, Cid, Pid, Did) VALUES (91,'92',93,'94')");

 $sql = "UPDATE register SET Did='" . $Did . "' WHERE pid=" . $pid;
 echo $sql;

 $mysqli -> query($sql);


// Commit transaction
if (!$mysqli -> commit()) {
  echo "Commit transaction failed";
  exit();
}
else {
   echo "<script>location.href='index.php'</script>";

   $mysqli -> close();
}


?>