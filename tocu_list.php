<table style="width:100%;border:1px solid;">
 <tr align="CENTER"><td style="width:100px;">��ȣ</td><td style="width:380px;">����</td><td style="width:100px">�۾���</td><td style="width:80px;">��¥</td><td style="width:50px;">��ȸ</td></tr>
 <?
 if($_GET['line']) $line=intval($_GET['line']);
 else $line=1;
 $sql="Select * from tocu_list where 1 order by no desc";
 $result=mysql_query($sql,$connect);
 while($row=mysql_fetch_array($result))
 {
  if($i==($line*30)) break;
  if($i<($line*30-30));
  else
  {
   $row['title']=substr($row['title'],0,50)."...";
 ?>
  <tr align="CENTER"><td style="width:100px;"><?=$row['no']?></td><td style="width:380px;"><a href="view.php?no=<?=$row['no']?>"><?=$row['title']?></a></td><td style="width:100px"><?=$row['writer']?></td><td style="width:80px;"><?=$row['date']?></td><td style="width:50px;"><?=$row['download']?></td></tr>
 <?
  }
   $i++;
 }
 ?>
</table>