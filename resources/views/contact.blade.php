<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Contact</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    <nav>
        <h2 class="logo">SewaBaju</h2>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    <div class="contact">

        <h1>Hubungi Saya</h1>

        <p>Silakan menghubungi saya melalui :</p>

        <ul>
            <li>WhatsApp : {{$whatsApp}}</li>
            <li>Email : {{$email}}</li>
            <li>Alamat : Batam</li>
        </ul>

        <a href="/">← Kembali ke Home</a>

    </div>

</body>

</html>