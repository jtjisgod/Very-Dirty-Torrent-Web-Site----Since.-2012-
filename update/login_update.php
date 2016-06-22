<?include("../include/common.php")?>
<?include("../include/function.php")?>
<?
 if(specialchars_match($_POST['id']))
 {
  $id=$_POST['id'];
  $pw=md5($_POST['pw']);
  $sql="select * from account where id='$id' and pw='$pw'";
  $result=mysql_query($sql,$connect);
  $row=mysql_fetch_array($result);
  if($row)
  {
   $_SESSION['tocu_users_id']=$row['id'];
   $_SESSION['tocu_users_level']=$row['level'];
   msgbox("오늘도 찾아줘서 감사합니다.");
  }
  else
  {
   msgbox("아이디 혹은 비밀번호가 올바르지 않습니다.");
  }
 }
 else
 {
  msgbox("특수문자가 있어요");
 }
 history(-1);
?>