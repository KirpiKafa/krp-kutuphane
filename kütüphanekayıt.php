<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>KÜTÜPHANE KAYIT SİSTEMİ</title>
  </head>
  <body>
		<?php
		include("baglan.php");
			if(isset($_POST["Kaydet"]))
			{
			$sql = "INSERT INTO `kayit_sistemi`(`id`, `kitap_adi`, `kitap_turu`, `yazar_adi`, `basim_yili`, `yayin_evi`)
			VALUES 
			(NULL, '".$_POST['kitap_adi']."', '".$_POST['kitap_turu']."', '".$_POST['yazar_adi']."', '".$_POST['basim_yili']."', '".$_POST['yayin_evi']."')";
			$baglanti->query($sql);
			}
			else if(isset($_POST["guncelle"]))
			{
			$sql = "UPDATE `kayit_sistemi` SET `kitap_adi` = '".$_POST['kitap_adi']."', `kitap_turu` = '".$_POST['kitap_turu']."', `yazar_adi` = '".$_POST['yazar_adi']."', `basim_yili` = '".$_POST['basim_yili']."', `yayin_evi` = '".$_POST['yayin_evi']."' WHERE `kayit_sistemi`.`id` = ".$_POST["kayit_no"];
			$baglanti->query($sql);
			}
			else if (isset($_POST["sil"]))
			{
				$sorgu = "DELETE FROM `kayit_sistemi` WHERE `kayit_sistemi`.`id` = ".$_POST['kayit_no'];
				$baglanti->query($sorgu);
			}
			else if (isset($_POST["duzenle"]))
			{
				$sorgu = "SELECT * FROM `kayit_sistemi` WHERE `kayit_sistemi`.`id` = ".$_POST['kayit_no'];
				$sonuc = $baglanti->query($sorgu);
				$kayit=$sonuc->fetch_assoc();
			}
		?>
<center><h1><font color="white"</font> KÜTÜPHANE KAYIT SİSTEMİ</h1></center>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if (!isset($_POST["duzenle"]))
				{
                ?>
                
				<form action="" method="post">
				  <div class="form-group row">
					<label for="kitap_adi" class="col-sm-2 col-form-label">Kitap Adı</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="kitap_adi" name="kitap_adi">
					</div>
				  </div>
				  
				   <div class="form-group row">
					<label for="kitap_turu" class="col-sm-2 col-form-label">Kitap Türü</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="kitap_turu" name="kitap_turu">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="yazar_adi" class="col-sm-2 col-form-label">Yazar Adı</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="yazar_adi" name="yazar_adi">
					</div>
				  </div>
				  
				   <div class="form-group row">
					<label for="basim_yili" class="col-sm-2 col-form-label">Basım Yılı</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control" id="basim_yili" name="basim_yili">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="yayin_evi" class="col-sm-2 col-form-label">Yayın Evi</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="yayin_evi" name="yayin_evi">
						<br>
						<button type="submit" class="btn btn-primary" name="Kaydet" value="kaydet">Kaydet</button>
						<button type="reset" class="btn btn-danger" name="Reset" value="Reset">Temizle</button>
						</br>
						<marquee>Designed By Kirpi.</marquee> 
 
					</div>
				  </div>
				 
				  </form>
				<?php
				}
				else
				{
				?>
				<font color="white"
                <form action="" method="post">
				  <div class="form-group row">
					<label for="kitap_adi" class="col-sm-2 col-form-label">Kitap Adı</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="kitap_adi" name="kitap_adi" value="<?=$kayit["kitap_adi"]?>">
					</div>
				  </div>
				  
				   <div class="form-group row">
					<label for="kitap_turu" class="col-sm-2 col-form-label">Kitap Türü</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="kitap_turu" name="kitap_turu" value="<?=$kayit["kitap_turu"]?>">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="yazar_adi" class="col-sm-2 col-form-label">Yazar Adı</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="yazar_adi" name="yazar_adi" value="<?=$kayit["yazar_adi"]?>">
					</div>
				  </div>
				  
				   <div class="form-group row">
					<label for="basim_yili" class="col-sm-2 col-form-label">Basım Yılı</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control" id="basim_yili" name="basim_yili">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="yayin_evi" class="col-sm-2 col-form-label">Yayın Evi</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="yayin_evi" name="yayin_evi" value="<?=$kayit["yayin_evi"]?>">
						<br>
                        <input type="hidden" name="kayit_no" value="<?=$kayit["id"]?>">
						<button type="submit" class="btn btn-warning" name="guncelle" value="guncelle">Güncelle</button>
						<button type="reset" class="btn btn-danger" name="Reset" value="Reset">Temizle</button>
						</br> 
					</div>
				  </div>
				  	<marquee>Designed By Kirpi.</marquee> 

				  </form>
                </font>
                <?php
				}
                ?>
			</div>
		</div>
        <div class="row">
        <div class="col-md-12">
        <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col"><font color="white"</font>Kitap Adi</th>
        <th scope="col"><font color="white"</font>Kitap Turu</th>
        <th scope="col"><font color="white"</font>Yazar Adı</th>
        <th scope="col"><font color="white"</font>Basım Yılı</th>
        <th scope="col"><font color="white"</font>Yayın Evi</th>
        <th scope="col"><font color="white"</font>İşlem</th>
        </tr>
        </thead>
        <tbody>
        <?php
		$sorgu="SELECT * FROM kayit_sistemi";
		$sonuc= $baglanti->query($sorgu);
		$i=0;
		while($kayit = $sonuc->fetch_assoc())
		{
			$i++;
		?>
        <tr>
        <th scope="row"><?=$i?></th>
        <td><?=$kayit["kitap_adi"]?></td>
        <td><?=$kayit["kitap_turu"]?></td>
        <td><?=$kayit["yazar_adi"]?></td>
        <td><?=$kayit["basim_yili"]?></td>
        <td><?=$kayit["yayin_evi"]?></td>
        <td>
        <form action="" method="post">
        <input type="hidden" name="kayit_no" value="<?=$kayit["id"]?>">
        <button type="submit" class="btn btn-success" name="duzenle" value="duzenle">Düzenle</button> 
        <button type="submit" class="btn btn-danger" name="sil" value="sil">Sil</button> 
        </form>
        </td>
        </tr>
        <?php
		}
        ?>
        </tbody>
        </table>
        </div>
        </div>
	</div>



    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
   	<body background="IMG_1362.jpg">

  </body>
</html>