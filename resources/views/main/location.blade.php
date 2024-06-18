<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Link ke gambar dari Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/location.css') }}">
    <title>Location</title>
</head>

<body>
    @include('main.partials.navbarMain')

    <div class="container">
        <h1 class="mt-5">{{ $title }}</h1>
        @foreach ($locations as $location)
            <div class="location-card">
                <div class="location-info">
                    <h2>{{ $location->name }}</h2>
                    <p>{{ $location->description }}</p>
                    <p><strong>Hours of Operation:</strong></p>
                    <p>Monday - Saturday: {{ $location->open ? \Carbon\Carbon::createFromFormat('H:i:s', $location->open)->format('H:i') : 'N/A' }} - {{ $location->close ? \Carbon\Carbon::createFromFormat('H:i:s', $location->close)->format('H:i') : 'N/A' }}</p>
                    <p>Sunday: {{ $location->open ? \Carbon\Carbon::createFromFormat('H:i:s', $location->open)->format('H:i') : 'N/A' }} - {{ $location->close ? \Carbon\Carbon::createFromFormat('H:i:s', $location->close)->format('H:i') : 'N/A' }}</p>
                    <button class="btn btn-danger btn-order"><a href="https://wa.me/+6288807069499">RESERVATION NOW</a></button>
                </div>
                <div class="location-map">
                    @if ($location->image)
                        <img src="{{ asset('storage/' . $location->image) }}" alt="Location Image">
                    @else
                        <img src="{{ asset('path/to/your/default/map/image.png') }}" alt="Default Map Image">
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
