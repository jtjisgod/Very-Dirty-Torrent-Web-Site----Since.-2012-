<?
 function msgbox($str)
 {
  ECHO "<script>alert('$str');</script>";
 }
 function movepage($str)
 {
  ECHO "<script>location.href=('$str');</script>";
 }
 function specialchars_match($str)
 {
  if(preg_match("/[\~\!\@\#\$\%\^\&\*\(\)\_\+\|\`\-\=\\\{\}\[\]\:\;\"\'\<\,\>\.\?\/]/i",$str)) return 0;
  else return 1;
 }
 function specialchars_replace($str)
 {
  $str=preg_replace("/[\~\!\@\#\$\%\^\&\*\(\)\_\+\|\`\-\=\\\{\}\[\]\:\;\"\'\<\,\>\.\?\/]/i"," ",$str);
  return $str;
 }
 function email_specialchars_replace($str)
 {
  $str=preg_replace("/[\~\!\#\$\%\^\&\*\(\)\+\|\`\-\=\\\{\}\[\]\:\;\"\'\<\,\>\?\/]/i","",$str);
  return $str;
 }
 function history($str)
 {
  ECHO "<script>history.back('$str');</script>";
 }
 function jumin_check($jumin1,$jumin2)
 {
  $jumin1=intval($jumin1);
  $jumin2=intval($jumin2);
  $jumin=$jumin1.$jumin2;
  $a=2;
  $plus=0;
  for($i=0;$i<12;$i++)
  {
   $plus+=$jumin[$i]*$a;
   if($a==9) $a=2;
   else  $a++;
  } 
  $plus=($plus%11)%10;
  $plus=11-$plus;
  if($jumin[12]==$plus)
  {
   return 1;
  }
  else
  {
   return 2;
  }
 }
 function jumin_check2($jumin)
 {
  $jumin=$jumin;
  $a=2;
  $plus=0;
  for($i=0;$i<12;$i++)
  {
   $plus+=$jumin[$i]*$a;
   if($a==9) $a=2;
   else  $a++;
  } 
  $plus=($plus%11)%10;
  $plus=11-$plus;
  if($jumin[12]==$plus)
  {
   return 1;
  }
  else
  {
   return 2;
  }
 }
 function specialchars_input($str)
 {
  $str=preg_replace("/[\']/i","£§",$str);
  $str=preg_replace("/[\`]/i","£§",$str);
  $str=preg_replace("/[\"]/i","£¢",$str);
  $str=preg_replace("/['<']/i","&lt",$str);
  $str=preg_replace("/['>']/i","&gt",$str);
  return $str;
 }
 function admin_check($str)
 {
  include("sql.php");
  $id=$str;
  $sql="Select * from account where id='$id' and level='100'";
  $result=mysql_query($sql,$connect);
  $row=mysql_fetch_array($result);
  if($row)
  {
   return 1;
  }
  else
  {
   return 0;
  }
 }
 function xss_protect($str)
 {
  return ereg_replace(">","&gt;",ereg_replace("<","&lt",$str));
 }
 function tocu_list_type1($str)
 {
  switch($str)
  {
   case 1: { return "MOV";break;}

   case 2: { return "DRA";break;}

   case 3: { return "VED";break;}

   case 4: { return "GAM";break;}

   case 5: { return "ANI";break;}

   case 6: { return "MUS";break;}

   case 7: { return "UTI";break;}

   case 8: { return "DOC";break;}

   case 9: { return "IMG";break;}

   case 10: { return "EDU";break;}

   case 11: { return "ADU";break;}

   case 12: { return "MOB";break;}

   case 13: { return "ECT";break;}
  }
 }
 function tocu_list_type2($str)
 {
  switch($str)
  {
   case "MOV": { return "1";break;}

   case "DRA": { return "2";break;}

   case "VED": { return "3";break;}

   case "GAM": { return "4";break;}

   case "ANI": { return "5";break;}

   case "MUS": { return "6";break;}

   case "UTI": { return "7";break;}

   case "DOC": { return "8";break;}

   case "IMG": { return "9";break;}

   case "EDU": { return "10";break;}

   case "ADU": { return "11";break;}

   case "MOB": { return "12";break;}

   case "ECT": { return "13";break;}
  }
 }
?>