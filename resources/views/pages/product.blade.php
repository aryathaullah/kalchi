@extends('layouts.app')

@section('title', 'Product | Kal-Chi')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endpush

@section('content')

    <section aria-labelledby="pr">
        <header class="page-head">
            <p class="eyebrow">MADE FOR YOUR CRAVINGS</p>
            <h1 id="pr"><span class="cut r2">The Kal-Chi Lineup</span></h1>
            <p class="lead">
                Find your kind of craving. Dari rasa Korea yang bold sampai semangka yang fresh, pilih favoritmu.
            </p>
        </header>

        <div class="card-grid">
            @forelse ($products as $product)
                <article class="product-card">
                    <div class="art">
                        @if ($product->image && file_exists(public_path($product->image)))
                            <img class="product-img" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                        @else
                            <span class="pstamp">{{ $product->name }}</span>
                            <span class="glyph" aria-hidden="true">{{ $symbols[$loop->index % 3] }}</span>
                        @endif

                        <span class="note">{{ $product->tagline }}</span>
                    </div>

                    <div class="meta">
                        <span>{{ sprintf('%02d', $loop->iteration) }} / {{ strtoupper($product->category) }}</span>
                        <span aria-hidden="true">♡</span>
                    </div>

                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                </article>
            @empty
                <p class="lead">Belum ada produk tersedia.</p>
            @endforelse
        </div>

        <p class="foot">
            Pilihan produk dan ketersediaan dapat berubah. Hubungi kami untuk informasi stok terbaru.
        </p>
    </section>

@endsection