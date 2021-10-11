<?php 
session_start();
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
 
<!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->
        <div id="top">
            <!-- 1. 로고영역 -->
            <!-- include되면 삽입된 문서의 위치를 기준으로 -->
            <h3><a href="../index.php">PC-match</a></h3> 
 
            <!-- 2. 회원가입/로그인 버튼 표시 영역 -->
            <ul id="top_menu">
                <!-- 로그인 안되었을 때 -->
                <?php if(!$id){  ?>
                    <li><a href="signup_all.php">사용자 회원가입</a></li>
                    <li> | </li>
                    <li><a href="signup_dev.php">개발자 회원가입</a></li>
                    <li> | </li>
                    <li><a href="login_all.php">로그인</a></li>
                <?php }else{ ?>
                    <li><a href="logout.php">로그아웃</a></li>
                    <li><?php $check?></li>
                    <?php if($check==1){  ?>
                        <li> | </li>
                        <li><a href="project_add.php">프로젝트 등록</a></li>
                        <li> | </li>
                        <li><a href="customer.php">등록 프로젝트 확인</a></li>
                        <?php } ?>
                    <?php if($check==0){ ?>
                        <li> | </li>
                        <li><a href="developer.php">등록 프로젝트 확인</a></li>
                <?php } } ?>
            </ul>
        </div>
 
        <!-- 헤더 영역의 네비게이션 메뉴 영역 -->
        <div id="menu_bar">
    
        </div>
