<?include("head.php")?>
<div style="font-size:15;">
<form enctype="multipart/form-data" method="POST" action="update/write_update.php">
제목:<input type="text" name="title" style="width:715px;"></br>
파일:<input type="file" name="asd" style="width:96%;"></br>
타입:<select name="categori" style="width:96%;">
      <option value="0">타입 설정</option>
      <option value="MOV">영화</option>
      <option value="DRA">드라마</option>
      <option value="VED">비디오</option>
      <option value="GAM">게임</option>
      <option value="ANI">애니메이션</option>
      <option value="MUS">음악</option>
      <option value="UTI">유틸리티</option>
      <option value="DOC">문서</option>
      <option value="IMG">이미지</option>
      <option value="EDU">교육</option>
      <option value="ADU">성인</option>
      <option value="MOB">휴대기기</option>
      <option value="ECT">기타</option>
     </select>
</br>
내용:
<textarea style="width:100%;height:400px;" name="body"></textarea>
<input type="submit" value="글쓰기">
</form>
</div>
<?include("tail.php")?>