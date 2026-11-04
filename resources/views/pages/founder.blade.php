@extends('layouts.app')

@section('title', 'Founder | Kal-Chi')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/founder.css') }}">
@endpush

@section('content')

    <section aria-labelledby="fd">
        <header class="page-head">
            <p class="eyebrow">THE PEOPLE BEHIND KAL-CHI</p>
            <h1 id="fd"><span class="cut alt r1">Founder</span></h1>
            <p class="lead">
                Kenalan dengan tim di balik Kal-Chi, dari ide awal mengolah kulit semangka sampai menjadi produk yang bisa
                kamu nikmati hari ini.
            </p>
        </header>

        <div class="card-grid founder-grid">
            @forelse ($founders as $founder)
            
                <article class="founder-card">
                    <div class="founder-photo">

                        <img src="{{ asset($founder->photo) }}" alt="Foto {{ $founder->name }}">
                    </div>

                    <p class="founder-position">{{ $founder->position }}</p>
                    <h3>{{ $founder->name }}</h3>
                    <p>{{ $founder->bio }}</p>
                </article>
            @empty
                <p class="lead">Informasi tim akan segera diperbarui.</p>
            @endforelse
        </div>
    </section>

@endsection