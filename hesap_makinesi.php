<?php
$say1 = $_POST["say1"];
$say2 = $_POST["say2"];
$secim= $_POST["secim"];

if ($secim=="Topla") {
	
	$sonuc = $say1 + $say2;
}
elseif ($secim=="Çıkar") {

	$sonuc = $say1 - $say2;
}
elseif ($secim=="Çarp") {

	$sonuc = $say1 * $say2;
}
else
{
	$sonuc = $say1 / $say2;
}

echo "İşleminizin sonucu: $sonuc";
?>