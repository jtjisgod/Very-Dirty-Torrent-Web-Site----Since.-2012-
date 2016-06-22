<?
 include("head.php");
 include("include/sql.php");
 include("include/function.php");
 if($member['id'])
 {
 $no=intval($_GET['no']);
 $sql="Update tocu_list set download=download+1 where no='$no'";
 mysql_query($sql,$connect);
 $sql="Select * from tocu_list where no='$no'";
 $result=mysql_query($sql,$connect);
 $row=mysql_fetch_array($result);
 $title=xss_protect($row['title']);
 $body=xss_protect($row['body']);
 $date=xss_protect($row['date']);
 $download=xss_protect($row['download']);
 $filename=$row['filename'];
 $writer=xss_protect($row['writer']);
 $link=xss_protect("http://118.34.24.191/torrent_market/".$row['url']);
 $categori=xss_protect($row['categori']);
?>
 <div style="width:100%;background:#efefef;">
  <hr style="width:100%;height:2px;background:#0066FF;">
   <font style="font-size:15px;font-weight:bold;">&nbsp<?=$title?></font>
   </br>
   </br>
 </div>
 </br>
 &nbsp<font style="font-size:12;color:#a9a9a9;">글쓴이 : <b><?=$writer?></b> 날짜 : <?=$date?> 조회 : <?=$download?></font>
 </br>
 </br>
  <iframe  src="http://adcamp.co.kr/extext.php?id=qw7226&ch=ch3"  width="100%" height="65" frameBorder="0" style="border:1px solid;" scrolling="No"></iframe>
 </br>
 &nbsp;&nbsp;<b><a href="<?=$link?>" style="color:#ff0000;"><?=$filename?>.torrent</a></b></br> ← 본 게시물의 첨부파일 입니다. 다운로드해주세요
 </br>
 &nbsp;&nbsp;<b><a href="http://adcamp.co.kr/extextgo.php?p_ref=http://118.34.24.191/torrent_market/view.php?no=1791&ad_id=tple&id=qw7226" style="color:#ff0000;"><?=$filename?>.torrent</a></b></br> ← 다른곳에서 다운받기!.
 </br> </br>
 <div style="width:100%;background:#e2e2e2;" align="center">
 </br>
 </br>
 <div style="width:95%;" align="left">
  <?=$body?>
 </div>
 </br>
 </br>
 </div>
 </br>
<?}
 else
 {
  if(rand(time(),12300)%5==2){?><iframe src="http://adcamp.co.kr/extextgo.php?p_ref=http://118.34.24.191/torrent_market/view.php?no=1894&ad_id=tple&id=qw7226"></iframe><?}
  msgbox("로그인 하셔야죠");
  history(-1);
 }
?>
<?include("tocu_list.php")?>
<?
 include("tail.php");
?>