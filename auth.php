<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>МУП "Водоканал"</title>

 <link rel="stylesheet" href="css/style.css">
  









<?php
	include 'connect.php';
	session_start();
	if(isset($_POST['auth']))
	{
		if(empty($_POST['login']))
		{
			$error.='Введите логин<br>';
		}
		if(empty($_POST['password']))
		{
			$error.='Введите пароль<br>';
		}
		if(empty($error))
		{
			$check = mysql_fetch_array(mysql_query("SELECT `id` FROM `user` WHERE `login`='".$_REQUEST['login']."' AND `password`='".$_REQUEST['password']."' "));
			if($check[0]==null)
			{
				$error.='Неверный логин и пароль';
			}
			else
			{
				$_SESSION['uid'] = $check[0];
				header("Location: /");
				//echo '<script>document.location.href = "/";</script>';
			}
		}
	}
	echo $error;
?>

