<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php";
 $check="";
 if( isset($_SESSION['check'])) $check= $_SESSION['check'];
 if($check==1){
  $id="";
  if( isset($_SESSION['Cid'])) $id= $_SESSION['Cid'];
}
else {
  $id="";
  if( isset($_SESSION['Did'])) $id= $_SESSION['Did']; 
}
 ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>프로젝트</title>
<link rel="stylesheet" type="text/css" href="all.css" />
<style>
* {
	margin: 0 auto;
	padding: 0;
	font-family: 'Malgun gothic','Sans-Serif','Arial';
}
a {
	text-decoration: none;
	color:#333;
}
ul li {
	list-style:none;
}

/* 공통 */
.fl {
	float:left;
}
.tc {
	text-align:center;
}

/* 게시판 목록 */
#board_area {
	width: 900px;
	position: relative;
}
.list-table {
	margin-top: 40px;
}
.list-table thead th{
	height:40px;
	border-top:2px solid #09C;
	border-bottom:1px solid #CCC;
	font-weight: bold;
	font-size: 17px;
}
.list-table tbody td{
	text-align:center;
	padding:10px 0;
	border-bottom:1px solid #CCC; height:20px;
	font-size: 14px 
}
#write_btn {
	position: absolute;
	margin-top:20px;
	right: 0;
}
h1{
  text-align:center;
}
p{
  text-align:right;
}
</style>
</head>
<body>
<div id="board_area"> 
    <table class="list-table">
      <thead>
          <tr> 
            <?php if($check==0){ ?>
                <th>check</th>
                <?php }?>
                <th>프로젝트 id</th>
                <th>프로젝트명</th>
                <th>프로젝트 시작</th>
                <th>프로젝트 마감</th>
                <th>금액</th>
                <th>고객 담당자</th>
                <th>개발 담당자</th>
            </tr>
        </thead>
        <?php
          $sql = mq("select * from project"); 
          $manager=mq("select register.Cid from register inner join project on register.Pid=project.pid");
          $Dmanager=mq("select register.Did from register inner join project on register.Pid=project.pid");
          $n=1;
          echo "<tbody>";
          while($project=$sql->fetch_array()){
            echo "<tr>"; 
            if($check==0){
            $id=$project['pid'];
            ?>
            <form method="post" action="projectd.php" name="memform">
            <?php echo "<td width='300'>"?><input type="checkbox" name="id" value="<?php echo $id;?>"></td>
            <?php }?>
            <?php echo "<td width='300'>"?><a href='project.php?name=<?php echo $project['pid'];?>'><?php echo $project['pid'];?></a></td>
            <?php 
            echo " <td width='400'>" .$project["pname"]. "</td>";
            echo " <td width='300'>" .$project["start"]. "</td>";
            echo " <td width='300'>" .$project["end"]. "</td>";
            echo " <td width='100'>" .$project["wage"]. "</td>";
            $register=$manager->fetch_array();
            echo " <td width='300'>" .$register["Cid"]. "</td>";
            $register=$Dmanager->fetch_array();
            echo " <td width='300'>" .$register["Did"]. "</td>";
            echo "</tr>";
            $n++;
          }
          echo "</tbody>";
          ?>
    </table>
    <br>
    <?php if($check==0){ ?>
    <input type="submit" value="등록하기" />
          </form>
          <?php }?>
  </div>
</body>
</html>