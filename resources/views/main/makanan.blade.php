<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/makanan.css') }}">
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
            
            <div class="search-bar mb-4">
                <input type="text" id="search-input" class="form-control" placeholder="Search for menu items..."
                    onkeyup="searchMenu()">
            </div>

            <nav class="menu-wrapper">
                <ul id="menu-tabs" class="nav nav-pills justify-content-center">
                    <li class="menu-tab selected" data-tab="maincourse" onclick="showMenu('maincourse')">Maincourse</li>
                    <li class="menu-tab" data-tab="pasta" onclick="showMenu('pasta')">Pasta</li>
                    <li class="menu-tab" data-tab="bowl-series" onclick="showMenu('bowl-series')">Bowl Series</li>
                    <li class="menu-tab" data-tab="french-fries-series" onclick="showMenu('french-fries-series')">French
                        Fries Series</li>
                    <li class="menu-tab" data-tab="finger-food" onclick="showMenu('finger-food')">Finger Food</li>
                    <li class="menu-tab" data-tab="sweet" onclick="showMenu('sweet')">Sweet</li>
                </ul>
            </nav>

            @foreach ($makanans as $category => $items)
                <div class="category-tab" id="{{ str_replace(' ', '-', strtolower($category)) }}"
                    style="{{ $category == 'maincourse' ? 'display: block;' : 'display: none;' }}">
                    <div class="category-title">
                        <h2>
                            <strong>{{ ucfirst($category) }}</strong>
                            <i class="cat-description">
                                <span> - </span>
                                "Menu for {{ $category }}"
                            </i>
                        </h2>
                        <div class="sort-buttons">
                            <select onchange="sortMenu('{{ str_replace(' ', '-', strtolower($category)) }}', this.value)">
                                <option value="" disabled selected>Sort By</option>
                                <option value="asc">Name: A-Z</option>
                                <option value="desc">Name: Z-A</option>
                            </select>
                        </div>
                    </div>
                    <div class="menu-items-container">
                        @foreach ($items as $makanan)
                            <div class="menu-item type-menu">
                                <div class="menu-item-image">
                                    <img src="{{ Storage::url($makanan->gambar) }}">
                                </div>
                                <div class="menu-item-description">
                                    <h3>{{ $makanan->nama }}</h3>
                                    <p>{{ $makanan->deskripsi }}</p>
                                    <h4>Price: {{ $makanan->harga }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <script src="{{ asset('js/makanan.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
