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
   msgbox("���õ� ã���༭ �����մϴ�.");
  }
  else
  {
   msgbox("���̵� Ȥ�� ��й�ȣ�� �ùٸ��� �ʽ��ϴ�.");
  }
 }
 else
 {
  msgbox("Ư�����ڰ� �־��");
 }
 history(-1);
?>