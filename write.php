<?include("head.php")?>
<div style="font-size:15;">
<form enctype="multipart/form-data" method="POST" action="update/write_update.php">
����:<input type="text" name="title" style="width:715px;"></br>
����:<input type="file" name="asd" style="width:96%;"></br>
Ÿ��:<select name="categori" style="width:96%;">
      <option value="0">Ÿ�� ����</option>
      <option value="MOV">��ȭ</option>
      <option value="DRA">���</option>
      <option value="VED">����</option>
      <option value="GAM">����</option>
      <option value="ANI">�ִϸ��̼�</option>
      <option value="MUS">����</option>
      <option value="UTI">��ƿ��Ƽ</option>
      <option value="DOC">����</option>
      <option value="IMG">�̹���</option>
      <option value="EDU">����</option>
      <option value="ADU">����</option>
      <option value="MOB">�޴���</option>
      <option value="ECT">��Ÿ</option>
     </select>
</br>
����:
<textarea style="width:100%;height:400px;" name="body"></textarea>
<input type="submit" value="�۾���">
</form>
</div>
<?include("tail.php")?>