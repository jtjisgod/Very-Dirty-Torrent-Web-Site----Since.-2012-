<?
 session_start();
 ///// Member 관련 /////
 $member['id']=$_SESSION['tocu_users_id'];
 $member['level']=$_SESSION['tocu_users_level'];
 $date=date("Ymd");
 $time=time("His");
 $ip=$_SERVER['REMOTE_ADDR'];
 ///// mysql 관련 /////
 include("sql.php");
?>