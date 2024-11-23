<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Kanit:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Veloce</title>
    @vite(['resources/scss/main.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NBBDKGW5MP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-NBBDKGW5MP');
    </script>
</head>
<body>

    {{-- header --}}
    @include('partials.header')

   
    @include('partials.footer')
</body>
</html>