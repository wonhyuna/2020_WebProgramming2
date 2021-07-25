<?
    if(!isset($_SESSION))
	{
		session_start();
	} //세션 생성

	$userid_c = $_SESSION['userid'];
	echo $userid_c . "님 환영합니다<br>";
	
	echo "<a href='logout.php'> 로그아웃 </a>";
?>