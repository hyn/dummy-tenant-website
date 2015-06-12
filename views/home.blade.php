
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel - The PHP Framework For Web Artisans</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://laravel.com/build/assets/css/laravel-910df0f0.css">
    <link rel="apple-touch-icon" href="/favicon.png">
</head>
<body class="home">



<section class="panel statement light">
    <div class="content">
        <h1><a href="//hyn.me">Hyn multi tenancy</a> for Laravel 5.1+ LTS</h1>
        <p>
            You are visiting the hostname {{ $_tenant['hostname']->hostname }} of website #{{ $_tenant['hostname']->website_id }}: {{ $_tenant['hostname']->website->identifier }}.
        </p>
        <p>
            This tenant website is part of an <a href="https://github.com/hyn-me/dummy-tenant-website">example tenant website</a>.
        </p>

    </div>

</section>

</body>
</html>
