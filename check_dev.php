<?php
	include "db.php";
	$Did = $_GET["Did"];
	$sql = mq("select * from developer where Did='".$Did."'" );
	$customer = $sql->fetch_array();
	if($customer==0)
	{
?>
	<div style='font-family:"malgun gothic"';><?php echo $Did; ?>는 사용가능한 아이디입니다.</div>
<?php 
	}else{
?>
	<div style='font-family:"malgun gothic"; color:red;'><?php echo $Did; ?>중복된아이디입니다.<div>
<?php
	}
?>
<button value="닫기" onclick="window.close()">닫기</button>
<script>
</script>