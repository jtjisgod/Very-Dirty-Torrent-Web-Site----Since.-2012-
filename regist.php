<?include("head.php");?>
<div style="width:690;" align="CENTER">
<div style="width:690;height:650;" class="border" align="LEFT">
<form method="POST" action="update/regist_update.php">
</br>
<font style="color:#0000FF;font-size:12;font-weight:bold;">필수입력</font>
<hr style="width:%100;height:3;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">아이디</td><td><input type="text" style="width:150;" name="id"/> <font style="font-size:12;color:red;">최소 3자이상 입력하세요.</font></br><font style="font-size:12;">※ 영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.</font></td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">비밀번호</td><td><input type="password" style="width:150;" name="pw"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">비밀번호확인</td><td><input type="password" style="width:150;" name="pw2"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">이름</td><td><input type="text" style="width:150;" name="name"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">생일</td><td><input type="text" style="width:150;" name="birthday"/> <font style="font-size:12;color:red;">12120101 식으로 입력해주세요.</font></td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">핸드폰번호</td><td><input type="text" style="width:150;" name="phone"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">이메일</td><td><input type="text" style="width:150;" name="email"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">네이트온</td><td><input type="text" style="width:150;" name="nateon"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">추천인아이디</td><td><input type="text" style="width:150;" name="partnerid"/> </td></tr></table>
<hr style="width:%100;height:1;border:2 #a3a3a3;background:#a3a3a3;"/>
<table><tr><td style="font-size:13;width:100;">주민번호</td><td><input type="text" style="width:150;" name="jumin1"/> </td><td>-</td><td> <input type="password" style="width:150;" name="jumin2"/> </td></tr></table>
<hr style="width:%100;height:3;border:2 #a3a3a3;background:#a3a3a3;"/>
</br>
이 사이트를 이용하여 생긴 이익 혹은 불이익은 Whhp 운영자에게는 없으며 Whhp 사용자 에게 있습니다.</br>
동의하시면 확인을 눌러서 마져 회원가입을해주세요.
</br>
입력된개인정보는 암호화되어 저장되며 관리자도 볼수없으며 오직 개인확인용 혹은 회원간에 분쟁 으로 신고되었을때만 쓰입니다.
</br>
동의하신다면 가입을 계속해주세요.
</br>
</br>
<div align="center"><span><input type="image" src="image/regist/yes.gif"/>&nbsp<a href="index.php"><img src="image/regist/no.gif" border=0 /></a></span></div>
</form>
</div>
</div>
<?include("tail.php");?>