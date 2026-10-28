
(function () {
    const items = document.querySelectorAll(
        'h2, .links li, .stamp, .band'
    );

    document.querySelectorAll('.links').forEach(function (ul) {
        ul.querySelectorAll('li').forEach(function (li, i) {
            li.style.setProperty('--d', (i * 0.09) + 's');
        });
    });

    if (!('IntersectionObserver' in window)) {
        items.forEach(function (element) {
            element.classList.add('in');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
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

    items.forEach(function (element) {
        observer.observe(element);
    });
})();
