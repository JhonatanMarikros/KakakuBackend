<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/minuman.css') }}">
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

            <div class="search-bar mb-4">
                <input type="text" id="search-input" class="form-control" placeholder="Search for menu items..."
                    onkeyup="searchMenu()">
            </div>

            <nav class="menu-wrapper">
                <ul id="menu-tabs" class="nav nav-pills justify-content-center">
                    <li class="menu-tab selected" data-tab="signature-coffee" onclick="showMenu('signature-coffee')">
                        Signature Coffee</li>
                    <li class="menu-tab" data-tab="coffee-based" onclick="showMenu('coffee-based')">Coffee Based</li>
                    <li class="menu-tab" data-tab="hand-drip-coffee" onclick="showMenu('hand-drip-coffee')">Hand Drip
                        Coffee</li>
                    <li class="menu-tab" data-tab="signature-mocktail" onclick="showMenu('signature-mocktail')">
                        Signature Mocktail</li>
                    <li class="menu-tab" data-tab="treat-yourself" onclick="showMenu('treat-yourself')">Treat Yourself
                    </li>
                    <li class="menu-tab" data-tab="non-coffee-based" onclick="showMenu('non-coffee-based')">Non Coffee
                        Based</li>
                    <li class="menu-tab" data-tab="tea-based" onclick="showMenu('tea-based')">Tea Based</li>
                </ul>
            </nav>

            @foreach ($minumans as $category => $items)
                <div class="category-tab" id="{{ str_replace(' ', '-', strtolower($category)) }}"
                    style="{{ $category == 'signature-coffee' ? 'display: block;' : 'display: none;' }}">
                    <div class="category-title">
                        <h2><strong>{{ ucfirst($category) }}</strong></h2>
                        <p class="cat-description">
                            <i>
                                <span> - </span>
                                "Menu for {{ $category }}"
                            </i>
                        </p>
                    </div>
                    @foreach ($items as $minuman)
                        <div class="menu-item type-menu">
                            <div class="menu-item-image">
                                <img src="{{ Storage::url($minuman->gambar) }}">
                            </div>
                            <div class="menu-item-description">
                                <h3>{{ $minuman->nama }}</h3>
                                <p>{{ $minuman->deskripsi }}</p>
                                <h4>Price: {{ $minuman->harga }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </section>
    <script src="{{ asset('js/minuman.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
