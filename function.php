<?php

$say1 = $_POST["say1"];
$say2 = $_POST["say2"];
$secim = $_POST["secim"];


// echo hesap_makinesi($say1,$say2,$secim);

$islemin_sonucu=hesap_makinesi($say1, $say2, $secim);
$iki_kati=hesap_makinesi($say1, $say2, $secim) * 2 ;
echo "İşlemin sonucu: $islemin_sonucu <br> iki katı: $iki_kati";


function karsilastirma_mesaji($isim)
{
	echo "Merhaba $isim sayfamıza hoşgeldin :)";
}


function hesap_makinesi($say1,$say2,$secim)
{
     if ($secim=="Topla") 
     {
     	$sonuc = $say1+$say2;
     }
     elseif ($secim=="Çıkar")
     {
     	$sonuc = $say1-$say2;
     }
     elseif ($secim=="Çarp") 
     {
     	$sonuc = $say1*$say2;
     }
     else
     {
     	$sonuc = $say1 / $say2;

     }

     return $sonuc;
}
?>