<?php  
try{
  $user="co89177_1";
  $password="diana";
  $host="localhost";
  $db="co89177_1";
  $conn=new PDO ("mysql:host=localhost;dbname=co89177_1",'co89177_1','diana');

	if (empty ($_POST ['name'])) exit ("Поле не заполнено");
	if (empty ($_POST ['content'])) exit ("Поле не заполнено");
  
	$query = "INSERT INTO message VALUES (NULL, :name, NOW())";
	$msg = $conn->prepare ($query);
	$msg->execute(['name'=> $_POST ['name']]);

	$msg_id = $conn->lastInsertId();

	$query = "INSERT INTO message_content VAlUES (NULL, :content, :message_id)";
	$msg = $conn->prepare ($query);
	$msg-> execute ( ['content' => $_POST ['content'], 'message_id' => $msg_id]);

	header("Location: index.php");
}	
catch (PDOException $e)
{
	echo "error----"  .$e->getMessage();
}
?>