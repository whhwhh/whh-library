<?php
include ("check_login.php"); 
$name=$_POST['name'];          //接收表单提交的用户名
$pwd=$_POST['pwd'];            //接收表单提交的密码
class chkinput{                //定义类
   var $name; 
   var $pwd;
   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }
   function checkinput(){
     include("conn/conn.php");   		  //连接数据源    
     $sql=mysqli_query($conn,"select * from tb_manager where name='".$this->name."' and pwd='".$this->pwd."'");
     $info=mysqli_fetch_array($sql);       //检索用户名称和密码是否正确
     if($info==false){                    //如果用户名称或密码不正确，则弹出相关提示信息
          echo "<script language='javascript'>alert('您输入的用户信息错误，请重新输入！');location='login.php';</script>";
          exit;
       }
      else{                              //如果用户名称或密码正确，则弹出相关提示信息
          echo "<script>alert('用户登录成功!');window.location='index.php';</script>";
		 $_SESSION['admin_name']=$info['name'];
		 $_SESSION['pwd']=$info['pwd'];
      }
   }
}
    $obj=new chkinput(trim($name),trim($pwd));      //创建对象
    $obj->checkinput();          				    //调用类
?>
