<?php
include ("check_login.php"); 
$name=$_POST['name'];          //���ձ��ύ���û���
$pwd=$_POST['pwd'];            //���ձ��ύ������
class chkinput{                //������
   var $name; 
   var $pwd;
   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }
   function checkinput(){
     include("conn/conn.php");   		  //��������Դ    
     $sql=mysqli_query($conn,"select * from tb_manager where name='".$this->name."' and pwd='".$this->pwd."'");
     $info=mysqli_fetch_array($sql);       //�����û����ƺ������Ƿ���ȷ
     if($info==false){                    //����û����ƻ����벻��ȷ���򵯳������ʾ��Ϣ
          echo "<script language='javascript'>alert('��������û���Ϣ�������������룡');location='login.php';</script>";
          exit;
       }
      else{                              //����û����ƻ�������ȷ���򵯳������ʾ��Ϣ
          echo "<script>alert('�û���¼�ɹ�!');window.location='index.php';</script>";
		 $_SESSION['admin_name']=$info['name'];
		 $_SESSION['pwd']=$info['pwd'];
      }
   }
}
    $obj=new chkinput(trim($name),trim($pwd));      //��������
    $obj->checkinput();          				    //������
?>
