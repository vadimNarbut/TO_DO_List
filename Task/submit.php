<?php

error_reporting(E_ALL^E_NOTICE);

require_once "includes/config.php";
include "comment.class.php";

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	
	mysqli_query($connection, "INSERT INTO comments(name,url,email,body,task_id)
					VALUES (
						'".$arr['name']."',
						'".$arr['url']."',
						'".$arr['email']."',
						'".$arr['body']."',
						'".$arr['task_id']."'
					)");
	
	$arr['dt'] = date('r',time());
	$arr['id'] = mysqli_insert_id($connection);

	$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr);

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

?>