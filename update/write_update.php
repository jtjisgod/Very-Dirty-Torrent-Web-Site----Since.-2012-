<?
include("../include/common.php");
include("../include/function.php");
if($_FILES['asd']['name'])
{
$f=fopen($_FILES['asd']['tmp_name'],"r");
$k=fread($f,11);
ECHO $categori=$_POST['categori'];

if($categori=="0")
{
 msgbox("타입을 선택해주세요!");
 history(-1);
}
else
{
if($k=="d8:announce")
{
$file_num=time(100,10);
mkdir("../upload/".$file_num,0777);
$filename=trim($_FILES['asd']['name']);
if(move_uploaded_file($_FILES['asd']['tmp_name'],"../upload/".$file_num."/".$file_num.".torrent")) {
   $title=xss_protect(addslashes($_POST['title']));
   $body=xss_protect(addslashes($_POST['body']));
   $id=specialchars_replace($member['id']);
   $filename=$file_num;
   $url="upload/".$file_num."/".$file_num.".torrent";
   $categori=intval(tocu_list_type2($_POST['categori']));
   $date=date("Ymd");
   if($categori>0||$categori<14)
   {
    $sql="Insert into tocu_list(title,body,url,download,categori,writer,date,filename)values('$title','$body','$url','0','$categori','$id','$date','$filename')";
    mysql_query($sql,$connect) or die(mysql_error());
   }
   else
   {
   }
} else {
   msgbox("파일 업로드 실패");
   history(-1);
}
}
else
{
 msgbox("토렌트파일이 아닙니다.");
 history(-1);
}
}
}
else
{
 msgbox("파일을 올려주셔야죠!");
 history(-1);
}
$categori=tocu_list_type1($categori);
movepage("../list.php?id=$categori");
?>