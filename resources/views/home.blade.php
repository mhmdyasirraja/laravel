@extends('layouts.app')

@section('content')

<section class="hero">

    <h1>BELAJAR LARAVEL SIRRR</h1>

    <p>
        Halo {{$nama}} <br>
        Anda adalah seorang <b>{{$pekerjaan}}</b>
    </p>

</section>

@endsection