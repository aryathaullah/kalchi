(function () {
    document.documentElement.classList.add('js');

    /* ===== Hamburger menu ===== */
    var burger = document.getElementById('burger');
    var menu = document.getElementById('menu');

    if (burger && menu) {
        burger.addEventListener('click', function () {
            var isOpen = burger.getAttribute('aria-expanded') === 'true';

            burger.setAttribute('aria-expanded', String(!isOpen));
            burger.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
            menu.classList.toggle('open', !isOpen);
        });

        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                burger.setAttribute('aria-expanded', 'false');
                burger.setAttribute('aria-label', 'Buka menu');
                menu.classList.remove('open');
            });
        });
    }

    /* ===== Animasi muncul saat di-scroll ===== */
    document.querySelectorAll('.links, .card-grid').forEach(function (group) {
        group.querySelectorAll(':scope > *').forEach(function (item, i) {
            item.style.setProperty('--d', (i * 0.09) + 's');
        });
    });

    var items = document.querySelectorAll(
        'h2, .links li, .card-grid > *, .stamp, .band, .faq-item'
    );

    if (!('IntersectionObserver' in window)) {
        items.forEach(function (el) {
            el.classList.add('in');
        });
        return;
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('in');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -5% 0px'
    });

    items.forEach(function (el) {
        observer.observe(el);
    });
})();