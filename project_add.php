<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php";
	$Cid="";
	if( isset($_SESSION['Cid'])) $Cid= $_SESSION['Cid']; 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="all.css" />
<title>프로젝트 등록</title>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
	<form method="post" action="project_ok.php" name="memform">
		<h1>프로젝트 등록 </h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>등록자 id</td>
							<td><input type="text" size="35" name="Cid" required></td>
						</tr>
						<tr>
							<td>프로젝트 id</td>
							<td><input type="text" size="35" name="pid" required></td>
						</tr>
                        <tr>
							<td>프로젝트명</td>
							<td><input type="text" size="35" name="pname" required></td>
						</tr>
						<tr>
							<td>프로젝트 시작 일자</td>
							<td><input type="text" size="35" name="start" placeholder="2021-01-01" required></td>
						</tr>
						<tr>
							<td>프로젝트 마감 일자</td>
							<td><input type="text" size="35" name="end" placeholder="2021-01-01" required></td>
						</tr>
						<tr>
							<td>금액</td>
							<td><input type="text" size="35" name="wage" placeholder="10000" required></td>
						</tr>
					</table>
				<input type="submit" value="등록하기" /><input type="reset" value="다시쓰기" />
		</fieldset>
	</form>
</body>
</html>