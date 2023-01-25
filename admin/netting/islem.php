
<?php  
ob_start();
session_start();

include 'baglan.php';


if (isset($_POST['admingiris'])) {

	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password=md5($_POST['kullanici_password']);

	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password ");
	$kullanicisor->execute(array(
		'mail' => $kullanici_mail,
		'password' => $kullanici_password
		
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../pages/index.php");
		exit;



	} else {

		header("Location:../pages/login.php?durum=no");
		exit;
	}
	

}


if (isset($_POST['kullaniciduzenle'])) {
	
	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_mail=:kullanici_mail,
		
		kullanici_password=:kullanici_password	
		
		WHERE kullanici_id =1");

	$update=$ayarkaydet->execute(array(
		'kullanici_mail' => $_POST['kullanici_mail'],

		'kullanici_password' =>md5( $_POST['kullanici_password'])
		
		));


	if ($update) {

		header("Location:../pages/kullaniciduzenle.php?durum=ok");

	} else {

		header("Location:../pages/kullaniciduzenle.php?durum=no");
	}

	
	
	
}


 if (isset($_POST['connectguncel'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET
		ayar_tel=:ayar_tel,
		ayar_maps=:ayar_maps,
		ayar_facebook=:ayar_facebook,
		ayar_instagram=:ayar_instagram,
		ayar_twitter=:ayar_twitter,
		ayar_linkedin=:ayar_linkedin,
		ayar_mail=:ayar_mail	
		
		WHERE ayar_id=1");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_instagram' => $_POST['ayar_instagram'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_linkedin' => $_POST['ayar_linkedin'],
		'ayar_mail' => $_POST['ayar_mail']
		
		));


	if ($update) {

		header("Location:../pages/connect.php?durum=ok");

	} else {

		header("Location:../pages/connect.php?durum=no");
	}

	
	
	
}

if (isset($_POST['sualcreat'])) {


		$sualekle=$db->prepare("INSERT INTO sual SET
			sual_sual=:sual_sual,
			sual_cavab=:sual_cavab
			");

		$insert=$sualekle->execute(array(
			'sual_sual' => $_POST['sual_sual'],
			'sual_cavab' => $_POST['sual_cavab']
			));


		if ($insert) {

			Header("Location:../pages/suallar.php?durum=ok");

		} else {

			Header("Location:../pages/suallar.php?durum=no");
		}

		//echo "men burdayam ";

	}

if  ($_GET['sualsil']=="ok") {

	$sil=$db->prepare("DELETE from sual where sual_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['sual_id']
		));


	if ($kontrol) {


		header("location:../pages/suallar.php?sil=ok");


	} else {

		header("location:../pages/suallar.php?sil=no");

	}


}

if (isset($_POST['partcreat'])) {

	$uploads_dir = '../../dimg/partnyor';
	@$tmp_name = $_FILES['part_file']["tmp_name"];
	@$name = $_FILES['part_file']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	




		$partekle=$db->prepare("INSERT INTO partnyorlar SET
			part_file=:part_file,
			part_title=:part_title,
			part_link=:part_link
			");

		$insert=$partekle->execute(array(
			'part_file' => $refimgyol,
			'part_title' => $_POST['part_title'],
			'part_link' => $_POST['part_link']
			));


		if ($insert) {

			Header("Location:../pages/partnyorlar.php?durum=ok");

		} else {

			Header("Location:../pages/partnyorlar.php?durum=no");
		}

		//echo "men burdayam ";

	}

	if  ($_GET['partsil']=="ok") {

	$sil=$db->prepare("DELETE from partnyorlar where part_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['part_id']
		));


	if ($kontrol) {

			Header("Location:../pages/partnyorlar.php?durum=ok");

		} else {

			Header("Location:../pages/partnyorlar.php?durum=no");
		}


}

if (isset($_POST['postcreat'])) {

	$uploads_dir = '../../dimg/post';
	@$tmp_name = $_FILES['post_sekil']["tmp_name"];
	@$name = $_FILES['post_sekil']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	

		$postekle=$db->prepare("INSERT INTO post SET
			post_sekil=:post_sekil,
			post_title=:post_title,
			post_metin=:post_metin,
            post_status=:post_status
			");

		$insert=$postekle->execute(array(
			'post_sekil' => $refimgyol,
			'post_title' => $_POST['post_title'],
			'post_metin' => $_POST['post_metin'],
			'post_status' => $_POST['post_status']
			));


		if ($insert) {

			Header("Location:../pages/post.php?durum=ok");

		} else {

			Header("Location:../pages/post.php?durum=no");
		}

		//echo "men burdayam ";

	}

	if  ($_GET['postsil']=="ok") {

	$sil=$db->prepare("DELETE from post where post_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['post_id']
		));


	if ($kontrol) {

			Header("Location:../pages/post.php?durum=ok");

		} else {

			Header("Location:../pages/post.php?durum=no");
		}


}

if  ($_GET['mektubsil']=="ok") {

	$sil=$db->prepare("DELETE from mektub where mektub_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['mektub_id']
		));


	if ($kontrol) {

			Header("Location:../pages/mektublar.php?durum=ok");

		} else {

			Header("Location:../pages/mektublar.php?durum=no");
		}


}


if (isset($_POST['logoduzenle'])) {

	

	$uploads_dir = '../../dimg/haqqimizda';
	@$tmp_name = $_FILES['haqqimizda_logo']["tmp_name"];
	@$name = $_FILES['haqqimizda_logo']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	

	
	$duzenle=$db->prepare("UPDATE haqqimizda SET
		haqqimizda_logo=:logo
		WHERE haqqimizda_id=2");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
		));



	if ($update) {

		 $resimsilunlink=$_POST['eski_yol'];
		 unlink("../../$resimsilunlink"); 

		Header("Location:../pages/haqqimizda.php?durum=ok");

	} else {

		Header("Location:../pages/haqqimizda.php?durum=no");
	}

}


if (isset($_POST['haqqimizdaguncelle'])) {
	
	
	$haqqimizdakaydet=$db->prepare("UPDATE haqqimizda SET
		
		haqqimizda_muvzu=:haqqimizda_muvzu	
		
		WHERE haqqimizda_id =2");

	$update=$haqqimizdakaydet->execute(array(
		'haqqimizda_muvzu' => $_POST['haqqimizda_muvzu']
		
		));


	if ($update) {

		header("Location:../pages/haqqimizda.php?durum=ok");

	} else {

		header("Location:../pages/haqqimizda.php?durum=no");
	}

	
	
	
}


if (isset($_POST['yorumcreat'])) {

	$uploads_dir = '../../dimg/yorumlar';
	@$tmp_name = $_FILES['yorum_foto']["tmp_name"];
	@$name = $_FILES['yorum_foto']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	




		$yorumekle=$db->prepare("INSERT INTO yorum SET
			yorum_foto=:yorum_foto,
			yorum_comment=:yorum_comment,
			yorum_name=:yorum_name
			");

		$insert=$yorumekle->execute(array(
			'yorum_foto' => $refimgyol,
			'yorum_comment' => $_POST['yorum_comment'],
			'yorum_name' => $_POST['yorum_name']
			));


		if ($insert) {

			Header("Location:../pages/yorumlar.php?durum=ok");

		} else {

			Header("Location:../pages/yorumlar.php?durum=no");
		}

		//echo "men burdayam ";

	}

	if  ($_GET['yorumsil']=="ok") {

	$sil=$db->prepare("DELETE from yorum where yorum_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['yorum_id']
		));


	if ($kontrol) {

			Header("Location:../pages/yorumlar.php?durum=ok");

		} else {

			Header("Location:../pages/yorumlar.php?durum=no");
		}


}


if (isset($_POST['sendmessage'])) {


		$mektubekle=$db->prepare("INSERT INTO mektub SET
			mektub_ad=:mektub_ad,
			mektub_email=:mektub_email,
			mektub_movzu=:mektub_movzu,
			mektub_mesaj=:mektub_mesaj
			");

		$insert=$mektubekle->execute(array(
			'mektub_ad' => $_POST['mektub_ad'],
			'mektub_email' => $_POST['mektub_email'],
			'mektub_movzu' => $_POST['mektub_movzu'],
			'mektub_mesaj' => $_POST['mektub_mesaj']
			));


		if ($insert) {

			Header("Location:../../#contact?durum=ok");

		} else {

			Header("Location:../../#contact?durum=no");
		} 

		

	}


?>