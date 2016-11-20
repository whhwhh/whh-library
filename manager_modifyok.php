<?php 
include("conn/conn.php");
if($_POST['submit']!=""){
$id=$_POST['id'];
$sysset=$_POST['sysset']==""?0:1;
$readerset=$_POST['readerset']==""?0:1;
$bookset=$_POST['bookset']==""?0:1;
$borrowback=$_POST['borrowback']==""?0:1;
$sysquery=$_POST['sysquery']==""?0:1;
$query=mysqli_query($conn,"select * from tb_purview where id=$id");
$info=mysqli_fetch_array($query);
if($info==false){
	mysqli_query($conn,"insert into tb_purview(id,sysset,readerset,bookset,borrowback,sysquery) values($id,$sysset,$readerset,$bookset,$borrowback,$sysquery)");
	}
else{
	mysqli_query($conn,"update tb_purview set sysset=$sysset,readerset=$readerset,bookset=$bookset,borrowback=$borrowback,sysquery=$sysquery  where id=$id");
}
	echo"<script language=javascript>alert('权限设置修改成功！');window.close();window.opener.location.reload();</script>";
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
