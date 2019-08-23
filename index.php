<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Webpack template CDMX</title>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Agencia Digital de Innovación Pública">
    <meta name="description" content="">
    <meta name="title" content="Webpack template CDMX">

    <link href="dist/app.css" rel="stylesheet">

    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Webpack template CDMX">
    <meta property="og:description" content=".">
    <meta property="og:image" content="">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="Webpack template CDMX">
    <meta property="twitter:description" content=".">
    <meta property="twitter:image" content="">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b140">

    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#ffffff">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" href="apple-touch-icon-57x57.png">
</head>
<body class="main-wrapper">
    <nav class="header d-flex pr-1 py-1 px-3">
        <a href="#">
            <img src="src/images/cdmx-logo.svg" alt="Logo del Gobierno de la Ciudad de México" class="header__logo">
        </a>
    </nav>
    <section></section>
    <footer class="bg-dark p-3 text-gray-1 text-xxs d-flex flex-column flex-sm-row align-items-sm-center">
        <div class="order-sm-1 ml-sm-3 ml-md-6">
            <h3 class="text-xxs font-weight-bold mb-0">Webpack starter</h3>
            <p class="m-sm-0">Diseñado y operado por la Agencia Digital de Innovación Pública</p>
        </div>
        <a href="#" class="align-self-center">
            <img src="src/images/cdmx-adip-logo.svg" alt="Logo Gobierno de la Ciudad de México | Agencia Digital de Innovación Pública" class="img-fluid">
        </a>
    </footer>
    <script src="dist/app.js"></script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                .then((reg) => {
                    console.log('Service worker registered.', reg);
                });
            });
        }
    </script>
</body>
</html>
