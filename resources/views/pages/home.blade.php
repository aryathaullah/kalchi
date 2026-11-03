@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

    <header class="hero" id="home">
        <span class="photo">
            <img src="{{ asset('image/logo/logo.kalchi.jpeg') }}"
                alt="Ilustrasi logo Kal-Chi dengan tagline Taste of Korean Flavour">
            <span class="circle">WATERMELON<br>RIND<br>REIMAGINED</span>
        </span>

        <p class="kick">Made for your cravings<br>Watermelon-inspired products</p>

        <h1>
            <span class="cut r1">More than</span><br>
            <span class="cut alt r2">Watermelon</span><br>
            <span class="cut r3">Cravings.</span>
        </h1>

        <p class="lead">
            Kenalan dengan Kal-Chi, brand kreatif yang mengolah semangka menjadi produk seru untuk dinikmati. Mulai dari
            kimchi kulit semangka, slushy yang menyegarkan, sampai potongan semangka fresh.
        </p>

        <a class="pill" href="#story">Discover Kal-Chi ↓</a>
    </header>

    {{-- Our Story --}}
    <section id="story" aria-labelledby="st">
        <h2 id="st"><span class="cut alt r1">Watermelon, reimagined.</span></h2>

        <p class="mt">Meet Kal-Chi.</p>

        <p class="lead">
            A fresh take on a familiar Korean favourite. Kal-Chi mengeksplorasi semangka lewat beragam produk. Kulit
            semangka kami olah menjadi kimchi dengan sentuhan rasa Korea, sementara daging buahnya bisa dinikmati sebagai
            slushy atau potongan semangka segar. Kami ingin menghadirkan pilihan yang menarik sekaligus memaksimalkan
            pemanfaatan bahan pangan.
        </p>

        <ul class="links">
            <li>
                <div class="feat">
                    <span class="name">01 / Upcycled</span>
                    <span class="sub">Menggunakan kulit semangka sebagai bahan utama.</span>
                </div>
            </li>
            <li>
                <div class="feat">
                    <span class="name">02 / Korean-inspired</span>
                    <span class="sub">Terinspirasi dari cita rasa kimchi Korea.</span>
                </div>
            </li>
            <li>
                <div class="feat">
                    <span class="name">03 / Made to enjoy</span>
                    <span class="sub">Cocok jadi pelengkap makanan atau teman makanmu.</span>
                </div>
            </li>
        </ul>
    </section>

    {{-- Social Media --}}
    <section id="social" aria-labelledby="sm">
        <h2 id="sm"><span class="cut r3">Social Media</span></h2>

        <ul class="links">
            <li>
                <a href="https://www.instagram.com/kalchi.id?igsh=Nng2dzFuazBjcGtm&utm_source=qr" target="_blank"
                    rel="noopener">
                    <span>
                        <span class="name">Instagram</span>
                        <span class="sub">@kalchi.id</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
            <li>
                <a href="https://id.shp.ee/NqLQqcjm" target="_blank" rel="noopener">
                    <span>
                        <span class="name">Shopee</span>
                        <span class="sub">Belanja Kal-Chi di Shopee</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
            <li>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSebyyPf33pv3hcqoSRx39vusKGOZL0yAmyy7YRTXvzPpl40bg/viewform?usp=header"
                    target="_blank" rel="noopener">
                    <span>
                        <span class="name">Order Form (Surabaya)</span>
                        <span class="sub">Isi form untuk pesan</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
            <li>
                <a href="https://forms.gle/ZqPfribrasofYmJ46" target="_blank" rel="noopener">
                    <span>
                        <span class="name">Feedback</span>
                        <span class="sub">Ceritakan pengalamanmu</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
        </ul>
    </section>

    {{-- Banner CTA --}}
    <div class="band">
        <p class="bt">Your next favourite side dish might be here.</p>
        <p>Ready for a jar? Temukan Kal-Chi melalui kanal pemesanan kami.</p>
        <div class="btns">
            <a href="https://id.shp.ee/NqLQqcjm" target="_blank" rel="noopener">
                <span>Shop on Shopee</span>
                <span aria-hidden="true">↗</span>
            </a>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSebyyPf33pv3hcqoSRx39vusKGOZL0yAmyy7YRTXvzPpl40bg/viewform?usp=header"
                target="_blank" rel="noopener">
                <span>Order in Surabaya</span>
                <span aria-hidden="true">↗</span>
            </a>
        </div>
    </div>

    {{-- Contact --}}
    <section id="contact" aria-labelledby="cu">
        <h2 id="cu"><span class="cut alt r1">Contact Us</span></h2>

        <p class="lead">
            Say annyeong! Ada pertanyaan, mau order, atau punya masukan? Hubungi kami lewat email atau WhatsApp.
        </p>

        <ul class="links">
            <li>
                <a href="mailto:support.kalchi@gmail.com">
                    <span>
                        <span class="name">Email</span>
                        <span class="sub">support.kalchi@gmail.com</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
            <li>
                <a href="https://wa.me/6285864152007?text=Annyeong!%20Aku%20mau%20order!" target="_blank" rel="noopener">
                    <span>
                        <span class="name">WhatsApp, Regine</span>
                        <span class="sub">+62 858-36415-2007 · Order via WhatsApp</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/kalchi.id?igsh=Nng2dzFuazBjcGtm&utm_source=qr" target="_blank"
                    rel="noopener">
                    <span>
                        <span class="name">Instagram</span>
                        <span class="sub">@kalchi.id</span>
                    </span>
                    <span class="go" aria-hidden="true">↗</span>
                </a>
            </li>
        </ul>
    </section>

    {{-- FAQ --}}
    <section id="faq" aria-labelledby="faq-title">
        <h2 id="faq-title"><span class="cut r2">FAQ</span></h2>

        <p class="lead">Pertanyaan yang sering ditanyakan seputar Kal-Chi.</p>

        <div class="faq-list">
            @forelse ($faqs as $faq)
                <details class="faq-item">
                    <summary>
                        <span class="faq-q">
                            <span class="faq-cat">{{ $faq->category }}</span>
                            {{ $faq->question }}
                        </span>
                    </summary>
                    <p>{{ $faq->answer }}</p>
                </details>
            @empty
                <p class="lead">Belum ada pertanyaan tersedia.</p>
            @endforelse
        </div>
    </section>

@endsection