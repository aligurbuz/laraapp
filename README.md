## Rota Okumadan Laravel Applicationu Geliştirme

#Kurulum :
```bash
git clone https://github.com/aligurbuz/laraapp.git folderName
cd folderName
composer install
cp .env.example .env
php artisan key:generate
```

# Direkt Controller Dizine Gidin:

Örnek olarak karşınıza TestApp dizini gelecek,App Prefixi olmak şartıyla istediğiniz kadar uygulama 
oluşturabilirsiniz.

TestApp Dizini icinde her endpointiniz bir dizini ifade eder ve her endpoint dizini icinde
get ve post ile başlayan endpoint controlleriniz vardır.Http olarak get requestler get ile başlayan endpointleri karşılar
post ile başlayanlar post endpointler de karşılanır.Başlangıç http processlerinizi çoğaltabilirsiniz.

# İstekler Nasıl Yapılır?

```bash
Http|Https://networkIp/folderName/public/[app]/[endpoint]/[method]
```

> [app] => Controller dizini icindeki App prefixiyle başlayan application isminiz

> [endpoint]=> Applicationunuzun icindeki endpoint dizin ismi

> [method] => GetEndPointController yada PostEndpointController icinde istenecek olan method ismi (Action prefixi yazılmaz)


#Önemli

Post isteklerde her zaman header yolu ile X-CSRF-TOKEN keyi ve csrf_token() gondermek zorundasınız.

