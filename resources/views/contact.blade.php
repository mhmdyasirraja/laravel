@extends('layouts.app')

@section('content')

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

@endsection