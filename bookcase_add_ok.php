<?php
include("Conn/conn.php");
$casename=$_POST['name'];
$query_ins=mysqli_query($conn,"insert into tb_bookcase(name) values('$casename')");
if($query_ins){
	echo "<script language='javascript'>alert('�ɹ����������ƣ�');window.opener.location.reload();window.close();</script>";
}else{
	echo "<script language='javascript'>alert('���������Ӳ���ʧ�ܣ�');window.opener.location.reload();window.close();</script>";
}
?>