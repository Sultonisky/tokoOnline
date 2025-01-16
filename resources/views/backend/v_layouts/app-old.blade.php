<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <a href="{{ route('backend.beranda') }}" class="btn btn-info">Beranda</a>
        <a href="#" class="btn btn-info">User</a>
        <a href="" class="btn btn-danger"
            onclick="event.preventDefault(); document.getElementById('keluar-app').submit();">Keluar</a>
        <p></p>

        {{-- yield awal --}}
        @yield('content')
        {{-- yield akhir --}}

        {{-- keluar App --}}
        <form id="keluar-app" action="{{ route('backend.logout') }}" method="POST" class="d-none">
            @csrf

        </form>
        {{-- keluar App End --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
