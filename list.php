<?include("head.php")?>
<div style="width:100%;height:20px;background:#00a2ff;font-weight:bold;color:#ffffff;font-size:15px;" align="Center" class="border">인기 게시물</div>
<div style="width:100%;height:100px;background:#f8f8f8;" class="border">
 <table style="width:100%;">
  <td style="width:50%;">
   <table>
    <tr><td>12312312</td></tr><tr><td>12312312</td></tr><tr><td>12312123</td></tr><tr><td>123123</td></tr><tr><td>123123</td></tr>
   </table>
  </td>
  <td style="width:50%;">
   <table>
    <tr><td>12312312</td></tr><tr><td>12312312</td></tr><tr><td>12312123</td></tr><tr><td>123123</td></tr><tr><td>123123</td></tr>
   </table>
  </td>
 </table>
</div>
</br>
<table style="width:100%;border:1px solid;">
 <tr align="CENTER"><td style="width:100px;">번호</td><td style="width:380px;">제목</td><td style="width:100px">글쓴이</td><td style="width:80px;">날짜</td><td style="width:50px;">조회</td></tr>
 <?
 if($_GET['line']) $line=intval($_GET['line']);
 else $line=1;
 include("include/function.php");
 $categori=tocu_list_type2($_GET['id']);
 $sql="Select * from tocu_list where categori='$categori' order by no desc";
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
<?if($member['id']){?><a href="write.php"><input type="submit" value="글쓰기"></a><?}?>
   <table valign="CENTER" align="CENTER">
    <td><a onMouseover="this.style.textDecoration='underline';" onMouseout="this.style.textDecoration='none';"  style="font-size:15;"  href="list.php?line=<?=$line-1?>&id=<?=$_GET['id']?>"><b>◀</b></a>&nbsp</td>
    <td><a onMouseover="this.style.textDecoration='underline';" onMouseout="this.style.textDecoration='none';"  href="list.php?line=<?=$line?>id=<?=$_GET['id']?>"><b><?=$line?></b></a>&nbsp</td>
    <td><a  onMouseover="this.style.textDecoration='underline';" onMouseout="this.style.textDecoration='none';" style="font-size:15;"  href="list.php?line=<?=$line+1?>&id=<?=$_GET['id']?>"><b>▶</b></a></td>
  </table>
<?include("tail.php")?>