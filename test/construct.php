<?php 
	require_once __DIR__ . "/../lib/SDK-Php-Chatfuel-Socola.php";
	$bot = new Chatfuel(TRUE);

	/*default*/
	$gender    = 'bạn';
	$beautiful = '';
	$me        = 'Mình';
	if(!empty($_GET['gender']))
	{
		$gender = $_GET['gender'];
		if($gender === 'male'){
			$gender = 'anh';
			$beautiful = 'đẹp trai';
			$me = 'Em';
		}
		elseif ($gender === 'female') {
			$gender = 'chị';
			$beautiful = 'xinh đẹp';
			$me = 'Em';
		}
	}


?>
