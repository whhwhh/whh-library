<?php
include ("check_login.php"); 
include("conn/conn.php");
$backTime=date("Y-m-d");        //�黹ͼ������
$borrid=$_GET['borrid'];
$barcode=$_GET['barcode'];
$name=$_SESSION["admin_name"];
mysqli_query($conn,"update tb_borrow set backTime='$backTime',ifback=1,operator='$name' where id=$borrid");
echo "<script language='javascript'>alert('ͼ��黹�����ɹ���');window.location.href='bookBack.php?barcode=$barcode';</script>";
?>