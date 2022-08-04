### Visual Crossing API ile Hava Durumu Verilerini Kullanma

API kullanılarak anlık olarak gelen verilerin gerekli olanları çekilmişitir. API içersinde birkaç günlük tahmini veriler de bulunmakta.

##### Çekilen veriler;

- Şehir/Ülke
- Sıcaklık
- Hissedilen Sıcaklık
- Olay
- Nem
- Basınç
- Gündoğumu
- Günbatımı
- UV
- Rüzgar Hızı
- Rüzgar Yönü
- Bulutluluk

##### Veri Yazma İşlemi
#
```php
echo "Sıcaklık: ". explode('.' ,$havaJSON["currentConditions"]["temp"])[0]."°C <br>";
```
Yukarıdaki örnekte sıcaklık verisi alınmıştır, Explode kullanım amacı noktalı gelen sayıyın noktadan öncesini almaktır.

##### Anlık Gelen Verilerin Tümü;
#
```php
Array
(
    [datetime] => 13:50:00
    [datetimeEpoch] => 1659610200
    [temp] => 29.7
    [feelslike] => 31.3
    [humidity] => 54
    [dew] => 19.4
    [precip] => 0
    [precipprob] => 
    [snow] => 0
    [snowdepth] => 0
    [preciptype] => 
    [windgust] => 
    [windspeed] => 33.8
    [winddir] => 43
    [pressure] => 1013.8
    [visibility] => 10
    [cloudcover] => 50
    [solarradiation] => 847
    [solarenergy] => 3
    [uvindex] => 8
    [conditions] => Partially cloudy
    [icon] => partly-cloudy-day
    [stations] => Array
        (
            [0] => LTBA
            [1] => LTBU
            [2] => LTFJ
        )

    [sunrise] => 06:02:33
    [sunriseEpoch] => 1659582153
    [sunset] => 20:17:13
    [sunsetEpoch] => 1659633433
    [moonphase] => 0.2
)
```
##### [Visual Crossing API Detaylı İçerik](https://www.visualcrossing.com/resources/documentation/weather-api/timeline-weather-api/)
