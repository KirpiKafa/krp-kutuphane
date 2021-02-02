
<!DOCTYPE html>
<html>
<head>
	<title>iletisim.html
	</title>
</head>
<body>
<center>

<form name="frm" action="form.php" method="post" >
	<table bgcolor="d4b2b6" border="2">
		<h1><tr><td colspan="2"><b><h1>İletişim Sayfası</h1></b></td></tr><br>
		<tr><td>Adınız Soyadınız:</td><td><input name="ad soyad" size="40" placeholder="Doldurunuz"></td></tr>
<tr><td>E-posta Adresiniz:</td><td><input name="eposta" size="40" placeholder="örnek@hotmail.com"></td></tr>



<tr><td>Öncelik Durumu:</td><td>
	<select name="öncelik durumu">
<option value="1"> Düşük </option>
<option value="2"> Orta </option>
<option value="3"> Yüksek </option>
</select>

<tr><td>Konu:</td><td><input name="konu" size="40" placeholder="Lütfen Konuyu Buraya Yazınız..."></td></tr>





<tr><td></td><td><textarea rows="10" cols="40">Lütfen Mesajınızı Buraya Yazınız...</textarea></td></tr>



<tr><td colspan="2" align="center"><br><input type="submit" value="Gönder"> <input type="reset"
value="Temizle"><br>&nbsp;</td></tr>

</table>


</form>

</center>
</body>
</html>
?>
