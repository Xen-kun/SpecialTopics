<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Kanit:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Veloce</title>
    @vite(['resources/css/app.css', 'resources/scss/main.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- @include('partials.header') --}}

    <section class="section1">
        <div class="box-container">

            {{-- Left Side Design --}}
            <div class="left-text">
                {{-- Semi Button --}}
                <div class="fast-delivery"> 
                    <p>Fast Delivery</p>
                </div>

                <div class="Easy-pickup">
                    <p>Fast Deliver & <br>Easy Pickup</p>
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
                    <img src="{{ asset('images/client/playstore.png') }}" alt="play store" class="play-store">
                    <img src="{{ asset('images/client/appstore.png') }}" alt="play store" class="app-store">
                </div>

                <div class="todays-dish">
                    <a href="">
                        <p>Check for Today's Special Dish</p>
                    </a>
                </div>

            </div>

            {{-- Right Side Image --}}
            <div class="right-image">
                <img src="{{ asset('images/client/right-side-design.png') }}" alt="Right Side Design">
            </div>
        </div>
    </section>
    

    {{-- @include('partials.footer') --}}
</body>
</html>