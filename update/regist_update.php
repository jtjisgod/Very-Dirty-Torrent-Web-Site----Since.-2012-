<?
 include("../include/common.php");
 include("../include/function.php");
 $ip=$_SERVER['REMOTE_ADDR'];
 $sql="Select * from account where ip='$ip'";
 $result=mysql_query($sql,$connect);
 $row=mysql_fetch_array($result);
 if(!$row)
 {
 $jumin=intval($_POST['jumin1']).intval($_POST['jumin2']);
 $id=specialchars_replace($_POST['id']);
 $pw=md5($_POST['pw']);
 $pw2=md5($_POST['pw2']);
 $name=specialchars_replace($_POST['name']);
 $birthday=intval(specialchars_replace($_POST['birthday']));
 $phone="0".intval(specialchars_replace($_POST['phone']));
 $email=email_specialchars_replace($_POST['email']);
 $nateon=email_specialchars_replace($_POST['nateon']);
 $partnerid=specialchars_replace($_POST['partnerid']);
 $sql="Select * from account where id='$id'";
 $result=mysql_query($sql,$connect);
 $row=mysql_fetch_array($result);
 if(!$row)
 {
 if($_POST['id']&&$_POST['pw']&&$_POST['pw2']&&$_POST['name']&&$_POST['birthday']&&$_POST['phone']&&$_POST['email']&&$_POST['nateon'])
 {
 if($id==$_POST['id'])
 {
  if($pw==$pw2)
  {
   if($name==$_POST['name'])
   {
     if(strlen($phone)>11||strlen($phone)<14)
     {
      if($email==$_POST['email'])
      {
       if($nateon==$_POST['nateon'])
       {
        if($partnerid==$_POST['partnerid'])
        {
         if(jumin_check2($jumin)==1)
         {
          $ip=$_SERVER['REMOTE_ADDR'];
          $sql="insert into account(id,pw,name,birthday,phone,email,nateon,partnerid,ip,jumin)values('$id','$pw','$name','$birthday','$phone','$email','$nateon','$partnerid','$ip','$jumin')";
          mysql_query($sql,$connect);
          msgbox("���ԿϷ� ^^");
          movepage("../index.php");
         }
         else
         {
          msgbox("�ֹι�ȣ�� �ǹٸ��� �ʽ��ϴ�.");
          history(-1);
         }
        }
        else
        {
         msgbox("��Ʈ�� ���̵� ���� ������ �ֽ��ϴ�.");
         history(-1);
        }
       }
       else
       {
         msgbox("����Ʈ���̸��������� �ǹٸ��� �ʽ��ϴ�.");
         history(-1);
       }
       }
       else
       {
        msgbox("�̸��������� �ǹٸ��� �ʽ��ϴ�");
        history(-1);
       }
      }
      else
      {
       msgbox("�ڵ�����ȣ�� �ǹٸ����ʽ��ϴ�");
       history(-1);
      }
     }
    else
    {
     msgbox("�̸��� Ư�����ڰ� ���� �����ϴ�.");
     history(-1);
    }
   }
   else
   {
    msgbox("�� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.");
    history(-1);
   }
  }
  else
  {
   msgbox("���̵� Ư�����ڰ� ���������ϴ�");
   history(-1);
  }
 }
 else
 {
  msgbox("��ĭ�� �����մϴ�.");
  history(-1);
 }
 }
 else
 {
  msgbox("�����ϴ� ���̵��Դϴ�.");
  history(-1);
 }
 }
 else
 {
  msgbox("�̹� �� �����Ƿ� ���ԵǾ����ϴ�.");
  history(-1);
 }
?>