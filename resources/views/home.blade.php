
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Kal-Chi | Watermelon, Reimagined</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@400;700&family=Playfair+Display:ital,wght@0,500;0,700;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/kalchi.css') }}">

</head>
<body>

    {{-- Navbar --}}
    @include('template.navbar')

    <main>
        {{-- Hero --}}
        <header class="hero" id="home">
            <!-- Pindahkan konten Hero dari HTML asli -->
        </header>

        {{-- Our Story --}}
        <section id="story">
            <!-- Pindahkan konten Our Story -->
        </section>

        {{-- Products --}}  
        <section class="products" id="products">
            <p class="product-eyebrow">MADE FOR YOUR CRAVINGS</p>

            <h2 class="product-heading">The Kal-Chi lineup</h2>

            <p class="product-intro">
                Find your kind of craving. Choose your favourite.
            </p>

            <div class="product-grid">
                @forelse ($products as $product)
                    <article class="product-card">
                        <div class="product-art">
                            <span class="product-number">
                                {{ sprintf('%02d', $loop->iteration) }}
                            </span>

                            <span class="product-symbol">
                                @if ($loop->index === 0)
                                    ▰
                                @elseif ($loop->index === 1)
                                    ✳
                                @else
                                    ◒
                                @endif
                            </span>

                            <span class="product-note">
                                {{ $product->note_text }}
                            </span>
                        </div>

                        <div class="product-info">
                            <p class="product-type">
                                {{ sprintf('%02d', $loop->iteration) }}
                                / {{ strtoupper($product->type) }}
                            </p>

                            <h3>{{ $product->name }}</h3>

                            <p class="product-description">
                                {{ $product->description }}
                            </p>
                        </div>
                    </article>
                @empty
                    <p>Belum ada produk tersedia.</p>
                @endforelse
            </div>
        </section>

        
        {{-- Social Media --}}
        <section id="social">
            <!-- Pindahkan konten Social Media -->
        </section>

        {{-- Contact --}}
        <section id="contact">
            <!-- Pindahkan konten Contact -->
        </section>
    </main>

    <script src="{{ asset('js/kalchi.js') }}" defer></script>
</body>
</html>
