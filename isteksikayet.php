<!DOCTYPE html>
<html>
<head>
	<title>İstek Şikayet Formu</title>
</head>
<body>
<center> 
	<form name="frm" action="form.php" method="post" >
	<table bgcolor="d4b2b6" border="2">
		<tr><td colspan="2"><b>İstek ve Şikayetleriniz İçin Formu Doldurunuz...</b></td></tr><br>
		<tr><td>Adınız Soyadınız:</td><td><input name="ad soyad" size="40" placeholder="Doldurunuz..."></td></tr>
<tr><td>E-posta Adresiniz:</td><td><input name="eposta" size="40" placeholder="ornek@hotmail.com"></td></tr>

<tr><td>İstek/Şikayet:</td><td><input type="radio" name="kullanim" value="1" checked> İstek
	<input type="radio" name="kullanim" value="2"> Şikayet</td></tr>
<tr><td>Konu:</td><td><input name="konu" size="40" placeholder="Doldurunuz..."></td></tr>



<tr><td>İstek/Şikayet</td><td><textarea rows="5" cols="40">İstek/Şikayetlerinizi Belirtiniz..."</textarea></td></tr>



<tr><td colspan="2" align="center"><br><input type="submit" value="Gönder"> <input type="reset"
value="Temizle"><br>&nbsp;</td></tr>

</table>


</form>

</center>

</body>
</html>