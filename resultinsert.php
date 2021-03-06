<!doctype html>
<html lang="ko">
  <head>
		<title>심부전 바로알기</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
<?php
   
    $db_host        =   "localhost:3307";
    $db_user        =   "root";
    $db_password    =   "!Ab2810034";
    $db_name        =   "test";
    $name_data      =   $_POST['data'];
    $goal3_data      =   $_POST['goal3'];
    $goal4_data      =   $_POST['goal4'];
    $salt2      =   $_POST['salt2'];

    $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (mysqli_connect_error($con) )
    {
        $errormsg = mysqli_connect_error();
        echo ("<SCRIPT LANGUAGE='javascript'> alert('에러 : $errormsg');</SCRIPT>");
        exit();
    }
    

    $sqlInsert = "INSERT INTO restman( name_data, CreateTime, goal1_data, goal2_data, goal3_data, goal4_data, salt1, salt2, ID ) VALUES ('$name_data', now(), 0, 0, $goal3_data, $goal4_data, 0, $salt2, UNHEX(REPLACE(UUID(),'-','')));";

    mysqli_query($con, $sqlInsert);
    $string = '입력이 완료되었습니다. 건강한 한 주 보내신것에 대해 감사드립니다.';
echo ("<SCRIPT LANGUAGE='javascript'> alert('$string');</SCRIPT>");
//    echo '<h1>입력이 완료되었습니다.</h1>';
?>
<body class="is-preload">

<!-- Wrapper -->
    <div id="wrapper">
        

        <!-- Main -->
            <div id="main">
                <div class="inner" >
                    <header id="header">
                        <span class="align-right"><strong>심부전 리빙랩 제공</strong></Align>
                    <p><span class="align-right"><img src="images/pic02.jpg" alt="" />	
                </header>
            
                

                    <!-- Banner -->
                        <section id="banner">
                            <div class="content">
                                <header>
                                    <p></p>
                                </header>
                                
                                <ul class="actions stacked">
                                    <li><a href="content[age.html" class="button primary1 fit">심부전 길라잡이</a></li>
                                    <li><a href="shsgmenu.html" class="button primary1 fit">생활 속 요인관리</a></li>
                                    <li><a href="cha1.html" class="button primary1 fit">목표 조회하기</a></li>
                                    <li><a href="game.html" class="button primary1 fit">증상 찾기 게임</a></li>
                                    </ul>
                                    <p>본 홈페이지는 심부전 자가관리를 위해 제작되었습니다. 모든 페이지는 모바일 환경에 최적화 되었습니다.</p>
                                    <a href="http://pf.kakao.com/_WeSub/chat"><center><img src="images/kaklogo.png" style="max-width: 10%; height: auto;"></center></a>	<br><br>
                                    <center><img src="images/sclogo.jpg" style="max-width: 70%; height: auto;"></center>
                            </div>
                            

                                <img src="images/newtitle.jpg" style="max-width: 100%; height: auto;"/><br>
                            
                        </section>

                    
                    

                </div>
            </div>

        <!-- Sidebar -->
            <div id="sidebar">
                <div class="inner">

                
                    <!-- Menu -->
                    <nav id="menu">
                        <header class="major">
                            <h2>심부전 길라잡이</h2>
                        </header>
                        <ul>
                            <li><a href="index.html">처음으로 돌아가기</a></li>
                            <!--<li><a href="content[age.html">심부전 바로알기</a></li>-->
                            <li>
                                <span class="opener">심부전 바로알기</span>
                                <ul>
                                    <li><a href="hfknow.html">심부전이란 무엇인가?</a></li>
                                    <li><a href="hfsym.html">심부전의 증상은?</a></li>
                                    <li><a href="hfcause.html">심부전의 원인은?</a></li>
                                    <li><a href="hftrp.html">심부전의 치료는?</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="">메뉴 작업중</a></li>-->
                            <!--<H3><li><a href="shsgmenu.html">생활습관</a></li></H3>-->
                            <li>
                            <span class="opener">신체활동</span>
                            <ul>
                                <li><a href="shsg1.html">신체활동이란?</a></li>
                                <li><a href="shsg2.html">신체활동의 장점</a></li>
                                <li><a href="shsg3.html">권장지침</a></li>
                                <li><a href="shsg4.html">강도 확인방법</a></li>
                                <li><a href="shsg5.html">계획하기</a></li>
                                <li><a href="shsg6.html">시작하기</a></li>
                                <li><a href="shsg7.html">부상방지</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">식사습관</span>
                            <ul>
                                <li><a href="shsgfood1.html">균형잡힌 식단</a></li>
                                <li><a href="shsgfood2.html">1회 제공량과 1회 섭취량</a></li>
                                <li><a href="shsgfood3.html">영양 성분표 읽기</a></li>
                                <li><a href="shsgfood4.html">예방식단</a></li>
                        
                            </ul>
                            <li>
                                <span class="opener">흡연</span>
                                <ul>
                                    <li><a href="shsgsmoke.html">흡연과의 연관성</a></li>
                                    <li><a href="shsgsmoke_1.html">금연의 방법</a></li>
                                                                        </ul>
                            </li>
                            <!--<li><a href="shsgsmoke.html">흡연</a></li>-->
                            <li>
                            <span class="opener">음주</span>
                            <ul>
                                <li><a href="shsgalco1.html">음주와의 연관성</a></li>
                                <li><a href="shsgalco2.html">술 한잔의 양</a></li>
                                                                    </ul>
                        </li>
                        
                        </ul>
                    </nav>

                    <section>
                        <header class="major">
                            <h2>주요 문의사항</h2>
                        </header>
                        <p>카카오톡 대화방이나 이메일을 통해 주요 정보에 대해 문의하실 수 있습니다.</p>
                        <ul class="contact">
                            <li class="icon solid fa-envelope"><a href="#">lordkupa@hanmail.net</a></li>
                            <li class="icon solid fa-home"><a href="http://pf.kakao.com/_WeSub">카카오톡 채널 바로가기</a></li>
                        </ul>
                    </section>
                        
                </div>
            </div>

    </div>

<!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>