<?php
	include "db.php";
	$Cid = $_GET["Cid"];
	$sql = mq("select * from customer where Cid='".$Cid."'" );
	$customer = $sql->fetch_array();
	if($customer==0)
	{
?>
	<div style='font-family:"malgun gothic"';><?php echo $Cid; ?>는 사용가능한 아이디입니다.</div>
<?php 
	}else{
?>
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $Cid; ?>중복된아이디입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script>
</script>