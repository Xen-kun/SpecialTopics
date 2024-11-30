<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Kanit:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Veloce</title>
    @vite(['resources/scss/main.scss', 'resources/js/app.js'])
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
    <script src="app.js" type="module"></script>

    {{-- header --}}
    @include('partials.header')

    {{-- SECTION 1 --}}
    <section class="section1">
        <div class="box-container">

            {{-- Left Side Design --}}
            <div class="left-text">
                <div class="left-text-center">

                    <div class="fast-delivery">
                        <p>Fast Delivery</p>
                        <img src="{{ asset('/public/images/client/delivery.png') }}" alt="Fast Delivery Icon">
                    </div>
                    

                    <div class="Easy-pickup">
                        <p>Fast Delivery & <br>Easy Pickup</p>
                    </div>

                    <div class="make-order">
                        <button class="order-btn">Make an Order</button>
                    </div>
                    
                    <div class="bring-pasto">
                        <p>Bring your "pasto" into different kinds of flavors from<br>
                            different Karinderias around MMSU-BATAC!
                        </p>
                    </div>

                    <div class="app-play-store">
                        <a href="https://play.google.com/store/games?hl=en">
                            <img src="{{ asset('images/client/appstore.png') }}" alt="play store" id="play-store">
                        </a>
                        <a href="https://www.apple.com/ph/app-store/">
                            <img src="{{ asset('images/client/playstore.png') }}" alt="play store" id="app-store">
                        </a>
                    </div>

                    <div class="todays-dish">
                        <a href="{{ route('under.construction') }}">
                            <p>Check for today's dish →</p>
                        </a>
                    </div>
                </div>
            </div>


            {{-- Right Side Image --}}
            <div class="right-image">
                <img src="{{ asset('images/client/hatdog.png') }}" alt="Right Side Design">
            </div>
        </div>
    </section>

    {{-- SECTION 2--}}
    <section class="section2">
        <div class="sect2-A">
            <div class="layer1-more-than">
                <h1>MORE THAN 1,000 DISHES TO ORDER!</h1>
            </div>
            
            <div class="layer2-welcome">
                <h5>Welcome to The Local Network of Food Ordering & Delivery</h5>
            </div>
        </div>
        
        <div class="sect2-B">
            <div class="B-2-Left">
                <div class="layer1">
                    <h2>Your Favorite Food Delivery Partner</h2>
                </div>
                <div class="layer2">
                    <h4>The food at your doorstep. Why starve when you have us. <br>
                        You hunger partner. Straight out of the oven to your doorstep. </h4>
                </div>
                <div class="layer3">
                    <form class="input-bar">
                        <input type="text" placeholder="Enter your delivery location" />
                        <button type="submit" class="order-btn">Order Now</button>
                    </form>
                </div>
            </div>
            <div class="B-2-Right">
                <img src="{{asset('public/images/client/broom-broom.png')}}" alt="">
            </div>
        </div>
    </section>

    <script src="{{ asset('dist/assets/app.js') }}" defer></script>
    {{-- footer --}}
    @include('partials.footer')
</body>
</html>