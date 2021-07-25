<?
	if(!isset($_SESSION))
	{
		session_start();
	}
	
	$id_get= $_GET['id'];
	$pw_get= $_GET['pw'];
	
	
	if(!$id_get)
	{
?>		
		<script>
			alert("아이디를 입력하세요");
			history.go(-1);
			exit;
		</script>
<?		
	}
	if(!$pw_get)
	{
?>		
		<script>
			alert("비밀번호를 입력하세요");
			history.go(-1);
			exit;
		</script>
<?		
	}
	
	$connect = mysqli_connect("localhost", "root", "autoset", "log");
	if(mysqli_connect_errno())
	{
		echo "접속 실패";
	}else{
		
	}
	$sql = "select * from login where id='$id_get' and '$pw_get'";
	$result = mysqli_query($connect, $sql);
	$row_count = mysqli_num_rows($result);
	
	
	if($row_count)
	{
		$_SESSION['userid'] = $id_get;
		$userid_b = $_SESSION['userid'];
		echo $userid_b . "님 환영합니다.<br>";
		echo "<a href = 'login_c.php'>다음 페이지로 이동 </a>";
	}
	else
	{
?>

		<script>
			alert("아이디 또는 비밀번호가 틀렸습니다.");
			history.go(-1);
			exit;
		</script>
<?
	}
	
	mysqli_close($connect);
?>