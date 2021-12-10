<!doctype html>
<html lang="ko">
  <head>
		<title>심부전 바로알기</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
  <body>
<?php
   
    $db_host        =   "localhost:3307";
    $db_user        =   "root";
    $db_password    =   "!Ab2810034";
    $db_name        =   "test";
    $name_data      =   $_POST['data'];
    $goal1_data      =   $_POST['goal1'];
    $goal2_data      =   $_POST['goal2'];
    
    $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if (mysqli_connect_error($con) )
    {
        $errormsg = mysqli_connect_error();
        echo ("<SCRIPT LANGUAGE='javascript'> alert('에러 : $errormsg');</SCRIPT>");
        exit();
    }


    $sql = "SELECT * from restman where name_data = '$name_data';";

    김태훈 님의 이번주 데이터입니다. 
    mysqli_query($con, $sql);
    echo 
    mysqli_close($con);
    echo '<h1>조회가 완료되었습니다.</h1>';
?>
      <ul class="actions stacked">
        <li><a href="index.html" class="button primary1 fit">첫 페이지로 돌아가기</a></li>
      </ul>
  </body>
</html>