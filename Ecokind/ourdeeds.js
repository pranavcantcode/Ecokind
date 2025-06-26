document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter h3");
    let hasAnimated = false;

    function animateCounters() {
        if (hasAnimated) return;

        counters.forEach(counter => {
            const target = +counter.getAttribute("data-target");
            const increment = target / 100;
            let count = 0;

            const updateCount = () => {
                count += increment;
                if (count < target) {
                    counter.textContent = Math.ceil(count);
                    requestAnimationFrame(updateCount);
                } else {
                    counter.textContent = target;
                }
            };

            updateCount();
        });

        hasAnimated = true;
    }

    // Detect when section is in view
    function isInView(elem) {
        const rect = elem.getBoundingClientRect();
        return rect.top <= window.innerHeight && rect.bottom >= 0;
    }

    function checkScroll() {
        const countersSection = document.querySelector(".counters");
        if (isInView(countersSection)) {
            animateCounters();
            window.removeEventListener("scroll", checkScroll);
        }
    }

    window.addEventListener("scroll", checkScroll);
    checkScroll(); // Run on page load if already in view
});