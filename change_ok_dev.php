<?php
        $Did="";
        if( isset($_SESSION['Did'])) $id= $_SESSION['Did']; 
include "db.php";
include "password.php";

        $Dpw = password_hash($_POST['Dpw'], PASSWORD_DEFAULT);
        $Dname = $_POST['Dname'];
        $Daddress = $_POST['Daddress'];
        $Dphone = $_POST['Dphone'];
        $sql = mq("update developer set Dpw='".$Dpw."', Dname='".$Dname."', Daddress='".$Daddress."',Dphone='".$Dphone."' where Did='".$Did."'");

echo "<script>alert('정보변경이 완료되었습니다 	'); history.back();</script>";

?>