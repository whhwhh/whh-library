<?php
include ("check_login.php"); 
include("conn/conn.php");
$barcode=$_GET['barcode'];
$new=$_GET['backTime'];
$newbackTime=date("Y-m-d",(mktime(0, 0, 0, substr($new,5,2), substr($new,8,2), substr($new,0,4))+3600*24*30));   //���������ڣ�����̬��ȡ�Ļ�������ת��Ϊʱ��أ�Ȼ������������Ļ�������
$borrid=$_GET['borrid'];
$name=$_SESSION["admin_name"];
mysqli_query($conn,"update tb_borrow set backTime='$newbackTime',ifback=0,operator='$name' where id=$borrid");
echo "<script language='javascript'>alert('ͼ����������ɹ���');window.location.href='bookRenew.php?barcode=$barcode';</script>";
?>