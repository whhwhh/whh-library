<?php
     $conn=mysqli_connect("localhost","root","") or die("���ݿ���������Ӵ���".mysqli_error());
     mysqli_select_db($conn,"db_library") or die("���ݿ���ʴ���".mysqli_error());
     mysqli_query($conn,"set names gb2312");
?>
