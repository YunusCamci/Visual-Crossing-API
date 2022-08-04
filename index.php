<?php 
//Yunus Çamcı
//04.08.2022
//Güncel Hava Durumu API
//https://yunuscamci.github.io/

//Visual Crossing API
$api = ""; //Visual Crossing sitesinden aldıgınız API Key alanı
$sehir = "Istanbul"; //Hava verisini istediğiniz şehir
$havaJSON = json_decode(file_get_contents('https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/'. $sehir .'?unitGroup=metric&include=current&key='. $api .'&contentType=json'), true);

//echo "<pre>"; //pre tagı ile gelen verileri okunaklı hale getirebilirsiniz

//print_r($havaJSON); 
//Üste bulunan yorum satırını açarak API da bulunan tüm özellikleri gorebilirsiniz

//print_r($havaJSON["currentConditions"]);
//Üste bulununa yorum satırını açarak anlık verileri tüm özelliklerini görebilirsiniz.

//echo "</pre>";

echo "Şehir/Ülke: ".$havaJSON["resolvedAddress"]."<br>";

echo "Sıcaklık: ". explode('.' ,$havaJSON["currentConditions"]["temp"])[0]."°C <br>";
echo "Hissedilen Sıcaklık: ". explode('.' ,$havaJSON["currentConditions"]["feelslike"])[0]."°C <br>";
echo "Olay: ".$havaJSON["currentConditions"]["conditions"]."<br>";

echo "Nem: ". explode('.' ,$havaJSON["currentConditions"]["humidity"])[0]."% <br>";

echo "Basınç: ". explode('.' ,$havaJSON["currentConditions"]["pressure"])[0]."hPa <br>";

echo "Gündoğumu: ".$havaJSON["currentConditions"]["sunrise"]."<br>";
echo "Günbatımı: ".$havaJSON["currentConditions"]["sunset"]."<br>";

echo "UV: ". explode('.' ,$havaJSON["currentConditions"]["solarenergy"])[0]."<br>";

echo "Rüzgar Hızı: ". explode('.' ,$havaJSON["currentConditions"]["windspeed"])[0]."Km/h <br>";
echo "Rüzgar Yönü: ". $havaJSON["currentConditions"]["winddir"]."<br>";

echo "Bulutluluk: ". $havaJSON["currentConditions"]["cloudcover"]."% <br>";
?>