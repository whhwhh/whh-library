<?php
include ("check_login.php"); 
$newpwd=$_POST['pwd'];
include("conn/conn.php");
$sql=mysqli_query($conn,"update tb_manager set pwd='$newpwd' where name='$_SESSION[admin_name]'");
?>
<script language="javascript">alert("������ĳɹ�!");window.location.href="pwd_modify.php";</script>		
