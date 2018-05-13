<?php
include "../config.php";

$hal=$_GET['hal'];
$ubah=$_GET['ubah'];
// HAPUS
if($hal=='user' AND $ubah=='hapus' ){
$mySql = "DELETE FROM user_tbl WHERE id='".$_GET['id']."'"; 
$myQry = mysqli_query($conn, $mySql);
header('location:../?hal='.$hal);
}

// EDIT
else if($hal=='user' AND $ubah=='edit' ){
	$id = $_POST['id'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
$query = mysqli_query($conn, "UPDATE user_tbl SET
				  username = '$username', name = '$name', email = '$email' WHERE id = '$id'");
header('location:../?hal='.$hal);
}
?>
