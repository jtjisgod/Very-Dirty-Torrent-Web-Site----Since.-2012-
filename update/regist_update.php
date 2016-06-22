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
          msgbox("가입완료 ^^");
          movepage("../index.php");
         }
         else
         {
          msgbox("주민번호가 옳바르지 않습니다.");
          history(-1);
         }
        }
        else
        {
         msgbox("파트너 아이디 에서 에러가 있습니다.");
         history(-1);
        }
       }
       else
       {
         msgbox("네이트온이메일형식이 옳바르지 않습니다.");
         history(-1);
       }
       }
       else
       {
        msgbox("이메일형식이 옳바르지 않습니다");
        history(-1);
       }
      }
      else
      {
       msgbox("핸드폰번호가 옳바르지않습니다");
       history(-1);
      }
     }
    else
    {
     msgbox("이름에 특수문자가 들어갈수 없습니다.");
     history(-1);
    }
   }
   else
   {
    msgbox("두 비밀번호가 일치하지 않습니다.");
    history(-1);
   }
  }
  else
  {
   msgbox("아이디에 특수문자가 들어갈수없습니다");
   history(-1);
  }
 }
 else
 {
  msgbox("빈칸이 존재합니다.");
  history(-1);
 }
 }
 else
 {
  msgbox("존재하는 아이디입니다.");
  history(-1);
 }
 }
 else
 {
  msgbox("이미 본 아이피로 가입되었습니다.");
  history(-1);
 }
?>