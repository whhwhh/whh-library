<?php
session_start();
if($_SESSION==NULL){
	echo "<script>alert('�Բ������¼!');window.location.href='login.php';</script>";
}
?>
