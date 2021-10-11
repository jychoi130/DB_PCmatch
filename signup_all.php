<?php include "db.php";?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>회원가입</title>
<script>
function checkid(){
	var Cid = document.getElementById("Cid").value;
	if(Cid)
	{
		url = "check_all.php?Cid="+Cid;
			window.open(url,"chkid","width=300,height=100");
		}else{
			alert("아이디를 입력하세요");
		}
	}
</script>
</head>
<body>
	<form method="post" action="signup_ok_all.php" name="memform">
		<h1>사용자 회원가입</h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>아이디</td>
							<td><input type="text" size="35" name="Cid" id="Cid" placeholder="아이디" required>
								<input type="button" value="중복검사" onclick="checkid();" />
								<input type="hidden" value="0" name="chs" />
							</td>
						</tr>
						<tr>
							<td>비밀번호</td>
							<td><input type="password" size="35" name="Cpw" placeholder="비밀번호" required></td>
						</tr>
						<tr>
							<td>이름</td>
							<td><input type="text" size="35" name="Cname" placeholder="이름" required></td>
						</tr>
						<tr>
							<td>주소</td>
							<td><input type="text" size="35" name="Caddress" placeholder="주소" required></td>
						</tr>
						<tr>
							<td>번호</td>
							<td><input type="text" size="35" name="Cphone" placeholder="번호" required></td>
						</tr>
					</table>
				<input type="submit" value="가입하기" /><input type="reset" value="다시쓰기" />
		</fieldset>
	</form>
</body>
</html>