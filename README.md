## Develop Laravel Application Without Reading Route

# Installation :
```bash
git clone https://github.com/aligurbuz/laraapp.git folderName
cd folderName
composer install
cp .env.example .env
php artisan key:generate
```

# Go Directly Controller Directory:

You will see testApp Directory as an example, you can build up as many apps as you want with the App Prefix.


In the TestApp directory, each endpoint represents a directory, and each endpoint has an endpoint controller that starts with get and post in the endpoint directory. 
GetRequests requests endpoints that begin with get, and PostRequests requests endpoints that begin with post. You can duplicate your start http processes.

# How are requests made?

```bash
Http|Https://networkIp/folderName/public/[app]/[endpoint]/[method]
```

> [app] => The name of the application that starts with the App prefix in the Controller directory (App Prefix is not written on the Url)

> [endpoint]=> The endpoint directory name in your application

> [method] => method name to be requested in get or post (Like indexAction -- App Prefix is not written on the Url)

# Example Request

By default, get request to the getExampleController in testApp application the incoming controllers directory

```bash
Http|Https://networkIp/folderName/public/test/example/index
```

This request will have run indexAction in the GetExampleController inside the example array in the testApp array.
The index name at the end of the url is itself. For example: if you have a method called fooAction;

```bash
Http|Https://networkIp/folderName/public/test/example/foo
```

The request will be sent like this.

The request file for the post request will be the postExampleController. The process is the same.
Only x-csrf-token via header are sent.


