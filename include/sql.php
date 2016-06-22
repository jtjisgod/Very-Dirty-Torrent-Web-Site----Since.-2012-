<?
 $connect=mysql_connect("localhost","sql아이디","sql비번");
 mysql_select_db("데이타베이스");
 mysql_query('set names euckr');
 mysql_query('set session character_set_connonection=euckr;');
 mysql_query('set session character_set_results=euckr;');
 mysql_query('set session character_set_client=euckr;');
?>