<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    @include('main.partials.navbarMain')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/banner.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/banner2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/banner3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Us Section -->
    <section id="about-us" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Kakaku Coffee</h2>
                    <p>Welcome to Kakaku Coffee, a Japanese-themed café that brings the beauty and warmth of Japanese culture to the heart of the city. 
                        At Kakaku Coffee, we blend traditional Japanese aesthetics with modern touches to create a serene and comfortable atmosphere for every visitor..</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/Chicken Katsu.png') }}" class="img-fluid" alt="About Us Image">
                    <img src="{{ asset('image/Flower3.png') }}" class="img-fluid position-absolute" style="top: -50px; right: -389px; width: 700px; " alt="New About Us Image">
                    <img src="{{ asset('image/Flower2.png') }}" class="img-fluid position-absolute" style="top: -80px; right: 330px;" alt="New About Us Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Additional About Us Section -->
    <section id="about-us-2" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <h2>Menu</h2>
                    <p>Our menu at Kakaku Coffee is a perfect fusion of premium coffee flavors and Japanese cuisine. 
                        We offer a variety of specialty coffees brewed using traditional Japanese methods, such as siphon and pour-over, using high-quality coffee beans. 
                        In addition, we serve a range of Japanese drinks like matcha latte, hojicha, and sakura tea.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <img src="{{ asset('image/Hot late.png') }}" class="img-fluid" alt="About Us Image 2">
                </div>
            </div>
        </div>
    </section>

    <!-- New About Us Section -->
    <section id="about-us-3" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Location and Ambiance</h2>
                <p>Located in the Jakarta city, Kakaku Coffee is the ideal place to take a break from the hustle and bustle of everyday life. 
                    With its tranquil and cozy atmosphere, the café is perfect for meeting friends, working on your laptop, or simply enjoying some time alone with a quality cup of coffee.</p>
            </div>
            <div class="col-md-6">
                <div class="position-relative">
                    <img src="{{ asset('image/Lemongrass Jelly.png') }}" class="img-fluid" alt="About Us Image 3">
                    <img src="{{ asset('image/Flower1.png') }}" class="img-fluid position-absolute" style="top: -48px; right: -400px;" alt="New About Us Image">
                    <img src="{{ asset('image/Flower1.png') }}" class="img-fluid position-absolute" style="top: -48px; right: 1200px;" alt="New About Us Image">
                    <img src="{{ asset('image/Flower2.png') }}" class="img-fluid position-absolute" style="top: -80px; right: 330px;" alt="New About Us Image">
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="footer-links">
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Japan Menu</a></li>
                        <li><a href="#">COUPON</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <p style="color: white;">-_-レストランに近い場合のみ注文できます-_-(You can only order when you are close to the restaurant)</p>
                    <a href="https://gofood.co.id/jakarta/restaurant/kakaku-coffee-roasters-dr-sumarno-49f174b4-1113-46cd-a087-225a7e3fc524"><img src="{{ asset('image/Gofood.png') }}" alt="gofood"
                            class="app-badge"></a>
                </div>
                <div class="col-md-4 text-right">
                    <ul class="social-links">
                        <li><a href="https://www.instagram.com/kakakucoffee/"><img src="{{ asset('image/ig.png'   ) }}" alt="Instagram">
                                Instagram</a></li>
                        <li><a href="https://wa.me/6285770395446"><img src="{{ asset('image/wa.png') }}" alt="WhatsApp"> WhatsApp</a>
                        </li>
                        <li><a href="https://www.tiktok.com/@kakakucoffee"><img src="{{ asset('image/Tiktok.png') }}" alt="Tiktok"> Tiktok</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="content">
        <!-- Rest of your content -->
    </div>
</body>

</html>
