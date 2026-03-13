<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel Project</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    <nav>
        <h2 class="logo">Laravel</h2>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
            <a href="/about">About</a>
            <a href="/produk">Produk</a>
        </div>
    </nav>

    @yield('content')

    <footer>
        <p>© 2026 Toko Sewa Baju</p>
    </footer>

</body>

</html>