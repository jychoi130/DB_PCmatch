<?php  
	include "db.php";
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
<header>
            <?php include "header.php" ?>
        </header>
	<div class="find">
		<form method="post" action="change_ok_dev.php">
			<?php
				$sql = mq("select * from developer where Did='{$_SESSION['Did']}'");
				while($developer = $sql->fetch_array()){
					?>
			<h1>내 정보</h1>
			<p><a href="index.php">홈으로</a></p>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
						<form action="change_ok.php?id=<?=$Did?>" method="post" name="Did">
							<tr>
								<td>아이디</td>
								<td><input type="text" size="35" name="Did" value="<?php echo $_SESSION['Did'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="Dpw" placeholder="비밀번호"></td>
							</tr>
							<tr>
								<td>이름</td>
								<td><input type="text" size="35" name="Dname" placeholder="이름" value="<?php echo $developer['Dname']; ?>"></td>
							</tr>
							<tr>
								<td>주소</td>
								<td><input type="text" size="35" name="Daddress" placeholder="주소" value="<?php echo $developer['Daddress']; ?>"></td>
							</tr>
                            <tr>
								<td>번호</td>
								<td><input type="text" size="35" name="Dphone" placeholder="번호" value="<?php echo $developer['Dphone']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="정보변경" />
			</fieldset>
			<?php } ?>
		</form>
	</div>
</body>
</html>
