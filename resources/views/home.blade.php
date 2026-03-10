<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toko Sewa Baju</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    <nav>
        <h2 class="logo">Laravel</h2>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>


    <section class="hero">

        <h1>BELAJAR LARAVEL SIRRR</h1>

        <p>
            Halo {{$nama}} <br>
            Anda adalah seorang <b>{{$pekerjaan}}</b>
        </p>

    </section>

    <footer>
        <p>© 2026 belajar laravel</p>
    </footer>

</body>

</html>