# Kendi Proxy Sitenizi Oluşturun
Yazılımcıların bot yazmalarına yardımcı olacak bir şekilde ayarlanmışdır. Gerek bot için gerekse farklı ip den başka web sitesine giriş kontrolü sağlamak amaçlı yazılmıştır.

# Hızlı Kurulum için
[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

# Kurulum
1. Yukarıdaki Heroku butonuna basınız
2. Heroku sayfasındaki yönlendirmeleri takip ederek kurulumu yapınız
3. Oluşturduğunu Heroku domainiz ile artık sistemi kullanabilirsiniz

# Kullanım
Sorgulayacağınız linkte GET parametreleri var ise oluşturduğunuz heroku domainine sorguyu POST ile yollayın. Aksi taktirde sorgu yapacağınız linke ait GET parametreleri heroku domainine ait olarak varsayılır ve işlem görmez. 

Oluşturduğunuz heroku domainine "domain" parametresini kullanarak post atın.

![alt text](https://image.prntscr.com/image/U1raJnLLRquWfyNIuhFXHw.png)

# Hatalar
Çıktılardaki hata kodlarının açıklamaları.

* 503 - POST veya GET methodu ile gelen "domain" parametresi bulunamadı.
* 502 - "domain" parametresi ile gelen url veya link geçerli değil. 
* 501 - Siteye girerken 500 veya 404 gibi siteye ulaştıramayan hatalar tespit edildi.
* 500 - Siteye mevcut değil veya hiç bağlanamıyor.
