<?php  
	include "db.php";
	include "header.php" 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="all.css" />
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
	<div class="find">
		<form method="post" action="change_ok.php">
			<?php
				$sql = mq("select * from customer where Cid='{$_SESSION['Cid']}'");
				while($customer = $sql->fetch_array()){
					?>
			<h1>내 정보</h1>
			<p><a href="index.php">홈으로</a></p>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
						<form action="change_ok.php?id=<?=$Cid?>" method="post" name="Cid">
							<tr>
								<td>아이디</td>
								<td><input type="text" size="35" name="Cid" value="<?php echo $_SESSION['Cid'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="Cpw" placeholder="비밀번호"></td>
							</tr>
							<tr>
								<td>이름</td>
								<td><input type="text" size="35" name="Cname" placeholder="이름" value="<?php echo $customer['Cname']; ?>"></td>
							</tr>
							<tr>
								<td>주소</td>
								<td><input type="text" size="35" name="Caddress" placeholder="주소" value="<?php echo $customer['Caddress']; ?>"></td>
							</tr>
                            <tr>
								<td>번호</td>
								<td><input type="text" size="35" name="Cphone" placeholder="번호" value="<?php echo $customer['Cphone']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="정보변경" />
			</fieldset>
			<?php } ?>
		</form>
	</div>
</body>
</html>
