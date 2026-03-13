@extends('layouts.app')

@section('content')

<section class="produk">

    <h1>Daftar Produk</h1>

    <div class="produk-container">

        @foreach($produk as $item)

        <div class="produk-card">
            <h3>{{ $item }}</h3>
            <p>Sewa {{ $item }} dengan kualitas terbaik.</p>
        </div>

        @endforeach

    </div>

</section>

@endsection