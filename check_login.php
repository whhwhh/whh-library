<?php
session_start();
if($_SESSION==NULL){
	echo "<script>alert('¶Ô²»Æð£¬ÇëµÇÂ¼!');window.location.href='login.php';</script>";
}
?>
