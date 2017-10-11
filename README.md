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

> [app] => Controller dizini icindeki App prefixiyle başlayan application isminiz.(App prefixi yazılmaz)

> [endpoint]=> Applicationunuzun icindeki endpoint dizin ismi

> [method] => GetEndPointController yada PostEndpointController icinde istenecek olan method ismi (Action prefixi yazılmaz)

# Örnek İstek

default olarak gelen controllers dizini icindeki testApp uygulamasına get request yapalım

```bash
Http|Https://networkIp/folderName/public/test/example/index
```

Bu istek testApp dizini icinde bulunan example dizini icindeki GetExampleController icindeki indexAction ı çalıştırmış olacaktır.
Url'in sonundaki index methodun kendisidir.Ornegin :fooAction diye bir methodunuz varsa;

```bash
Http|Https://networkIp/folderName/public/test/example/foo
```

İstek böyle yollanacaktır.

Post request icin request dosyası postExampleController olacaktır.Yöntem aynıdır.Sadece post işlemlerde
header ile x-csrf-token yollanır.

# Önemli

Post isteklerde her zaman header yolu ile X-CSRF-TOKEN keyi ve csrf_token() gondermek zorundasınız.

