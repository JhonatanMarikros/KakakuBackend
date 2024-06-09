<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC&display=swap" rel="stylesheet">
</head>
<body>
    @include('main.partials.navbarMain')

    <section class="menu-kakaku">
        <div class="wrapper">
            <h1 class="heading">MENU KAKAKU COFFEE</h1>
            <div class="caption">
                <ul>
                    <li>
                        <img src="{{ asset('image/favorite.png') }}" class="fav-img">
                        <span> = Kakaku Coffee Favorite</span>
                    </li>
                    <li>
                        <img src="{{ asset('image/spicy.png') }}" class="fav-img">
                        <span> = Kakaku Coffee Spicy</span>
                    </li>
                </ul>
            </div>

            <nav class="menu-wrapper">
                <ul id="menu-tabs">
                    <li class="menu-tab selected" data-tab="udon" onclick="showMenu('udon')">Udon</li>
                    <li class="menu-tab" data-tab="rice-bowls" onclick="showMenu('rice-bowls')">RICE BOWLS</li>
                    <li class="menu-tab" data-tab="tempura" onclick="showMenu('tempura')">TEMPURA</li>
                    <li class="menu-tab" data-tab="sides" onclick="showMenu('sides')">SIDES</li>
                    <li class="menu-tab" data-tab="drinks" onclick="showMenu('drinks')">DRINKS</li>
                </ul>
            </nav>

            <div class="category-tab" id="udon" style="display: block;">
                <div class="category-title">
                    <h2><strong>Udon</strong></h2>
                    <p class="cat-description">
                        <i>
                            <span> - </span>
                            "Our classic dishes with made to order Sanuki style Udon noodles"
                        </i>
                    </p>
                </div>
                <div class="menu-item type-menu">
                    <div class="menu-item-image">
                        <img src="{{ asset('image/Chicken Katsu.png') }}">
                    </div>
                    <div class="menu-item-description">
                        <h3>Chicken Katsu</h3>
                        <p>Our Sanuki-Style Udon served in our spicy Japanese-style sesame chili broth with ground spicy soy meat and bok choy</p>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak item Udon di sini -->
            </div>

            <div class="category-tab" id="rice-bowls" style="display: none;">
                <div class="category-title">
                    <h2><strong>Rice Bowls</strong></h2>
                    <p class="cat-description">
                        <i>
                            <span> - </span>
                            "Delicious rice bowls with various toppings"
                        </i>
                    </p>
                </div>
                <div class="menu-item type-menu">
                    <div class="menu-item-image">
                        <img src="{{ asset('image/Carbonara.png') }}">
                    </div>
                    <div class="menu-item-description">
                        <h3>Beef Rice Bowl</h3>
                        <p>Our special beef rice bowl with flavorful spices and fresh vegetables</p>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak item Rice Bowls di sini -->
            </div>

            <!-- Tambahkan kategori lain di sini -->

        </div>
    </section>
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
