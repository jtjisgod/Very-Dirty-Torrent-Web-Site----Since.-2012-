<?include("include/common.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<form name=f1 action='http://adcamp.co.kr/expopup.php?id=qw7226' method=post></form>
<script>
function exit(){
if(event.clientY < 0) {
var Win= window.open('','REFERER','menubar=yes, resizable=yes, scrollbars=yes,width=800,height=600');
f1.target='REFERER'
f1.submit();
}
}
</script>
 <title>Torrent Cookie~</title>
 <style type="text/css">
  * { font-size:12px;color:#000000; }
  .border { border:1px solid #004cb3; }
  a { text-decoration:none;color:#000000; }
 </style>
</head>
<body align="CENTER" onbeforeunload="exit()">
 <center>
 <div style="width:1000px;" align="LEFT"><div style="width:200px;height:100px;" width="100"><a href="index.php"><img src="image/head/logo/1.gif" border="0"/></a></div></div>
 </br>
 <div style="width:1000px;">
 <table align="left">
  <tr style="font-size:15px;font-weight:bold;"><td><a href="index.php">����</a></td><td><font style="color:#f2f2f2;">|</font></td><td>���񽺼Ұ�</td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=MOV">��ȭ</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=DRA">���</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=VED">������</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=GAM">����</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=ANI">�ִ�</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=MUS">����</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=UTI">��ƿ��Ƽ</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=DOC">����</a></td><td><font style="color:#f2f2f2;">|</font><td><a href="list.php?id=IMG">�̹���</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=ADU">����</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=ADU">����</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=MOB">�޴���</a></td><td><font style="color:#f2f2f2;">|</font></td><td><a href="list.php?id=ECT">��Ÿ</a></td></tr>
 </table>
 </div>
 <hr style="width:1000px;background:#0084ff;height:2px;">
 </br>
 <table cellpadding="0" cellspacing="0">
  <td style="width:250px;" align="CENTER" valign="TOP">
   <div style="width:100%;height:80px;" class="border">
    <?if($member['id']){?>
     </br>
     <?=$member['id']?> �� �ȳ��ϼ���!</br>
     <b>����</b> : <?=$member['level']?></br>
     <a><b>�����ø� �䷻Ʈ</b></a> |
     <b><a href="update/logout.php">�α׾ƿ�</a></b>
    <?}else{?>
    <table>
    <td>
    <form method="POST" action="update/login_update.php">
    <table>
     <tr><td>ID</td><td><input type="text" name="id" style="width:150px;"></td></tr>
     <tr><td>PW</td><td><input type="password" name="pw" style="width:150px;"></td></tr>
    </table>
    </td>
    <td>
     <input type="submit" value="Login" style="width:60px;height:48px;">
    </td>
    </table>
    ID/PWã�� <a href="regist.php">ȸ������</a>
    </form>
    <?}?>
   </div>
   </br>
    <iframe  src="http://adcamp.co.kr/extext.php?id=qw7226&ch=ch1"  width="250" height="250" frameBorder="0" scrolling="No"></iframe>
   </br>
   </br>
   <div style="width:100%;" class="border">
    </br>
    <b style="color:#fe0000;font-size:14px;">�ǽð� ���ε� �䷻Ʈ</b>
    </br>
    <table>
     <?
      $sql="Select * from tocu_list where 1 order by no desc";
      $result=mysql_query($sql,$connect);
      while($row=mysql_fetch_array($result))
      {
      $title=substr($row['title'],0,20);
     ?>
      <tr><td style="color:#2d2d2d;font-weight:bold;"><?=$row['writer']?></td><td><?=$title?></td></tr>
     <?
       if($i==10) break;
       $i++;
      }
     ?>
    </table>
    </br>
   </div>
   </br>
   <div style="width:100%;" class="border">
    </br>
     <b style="color:#fe0000;font-size:14px;">Total&Today</b>
     <?
      $sql="Select * from tocu_today where ip='$ip' and date='$date'";
      $result=mysql_query($sql,$connect);
      $row=mysql_fetch_array($result);
      if(!$row)
      {
       $sql="Insert into tocu_today(date,ip,time)values('$date','$ip','$time')";
       mysql_query($sql,$connect);
       ?><form name=f1 action='http://adcamp.co.kr/expopup.php?id=qw7226' method=post></form><script>var Win= window.open('','REFERER','menubar=yes, resizable=yes, scrollbars=yes,width=800,height=600');</script><script>f1.target='REFERER'</script><script> f1.submit();</script><?
      }
      $sql="Select * from tocu_today where 1";
      $result=mysql_query($sql,$connect);
      while($row=mysql_fetch_array($result))
      {
       $total++;
       if($row['date']==$date) $today++;
      }
     ?>
     <table>
      <tr><td style="font-weight:bold;">����</td><td>:</td><td><?=$today?></td></tr>
      <tr><td style="font-weight:bold;">��ü</td><td>:</td><td><?=$total?></td></tr>
     </table>
    </br>
   </div>
  </td>
  <td>&nbsp</td>
  <td style="width:747px;" valign="TOP">