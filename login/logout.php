<?
 if(!isset($_SESSION))
	{
		session_start();
	} //세션 생성
	unset($_SESSION['userid']);
	 
	session_destroy();
	
	echo "<a href='login_a.php'> 로그인 </a>";
	
?>