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
        <h3>{{ $judul }}</h3>
        {{-- error --}}
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session('error') }} </strong>
            </div>
        @endif
        {{-- error end --}}

        <form action="{{ route('backend.login') }}" method="post">
            @csrf
            @method('POST')
            <label>User</label><br>
            <input type="text" name="email" id="" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email...">
            @error('email')
                <span class="invalid-feedback alert-danger" role="alert">
                    {{ $message }}
                </span>
            @enderror
            <p></p>

            <label>Password</label><br>
            <input type="password" name="password" id="" value="{{ old('password') }}"
                class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password...">
            @error('password')
                <span class="invalid-feedback alert-danger" role="alert">
                    {{ $message }}
                </span>
            @enderror
            <p></p>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
