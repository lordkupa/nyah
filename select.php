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

    $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    
    if (mysqli_connect_error($con) )
    {
        $errormsg = mysqli_connect_error();
        echo ("<SCRIPT LANGUAGE='javascript'> alert('에러 : $errormsg');</SCRIPT>");
        exit();
    }

    $sqlSelect = "SELECT name_data, goal1_data, goal2_data FROM restman WHERE name_data = '$name_data' ORDER BY CreateTime desc LIMIT 1;";

    $result = mysqli_query($con, $sqlSelect);
    $row    = mysqli_fetch_array($result);

    mysqli_close($con);
    
    echo '<h1>조회가 완료되었습니다.</h1>';

    echo'<h2> 결과 : ';
    if ($row == null) 
    {
        echo '없습니다.';
	}
    else 
    {
        echo $row['name_data'];
        echo $row['goal1_data'];
        echo $row['goal2_data'];
    }
    
    echo'</h2>';
?>

    
      <ul class="actions stacked">
        <li><a href="index.html" class="button primary1 fit">첫 페이지로 돌아가기</a></li>
      </ul>
  </body>
</html>