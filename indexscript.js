document.addEventListener("DOMContentLoaded", () => {
    // Modal open/close functions
    function openForm() {
        const modal = document.getElementById("donationForm");
        if (modal) modal.style.display = "flex";
    }

    function closeForm() {
        const modal = document.getElementById("donationForm");
        if (modal) modal.style.display = "none";
    }

    // Attach modal open/close functions to window for global access
    window.openForm = openForm;
    window.closeForm = closeForm;

    // Close modal if clicking outside content
    window.onclick = function(e) {
        const modal = document.getElementById("donationForm");
        if (modal && e.target === modal) {
            modal.style.display = "none";
        }
    };

    // Banner video click play/pause
    const banner = document.getElementById("bannerVideo");
    if (banner) {
        banner.addEventListener("click", () => {
            banner.paused ? banner.play() : banner.pause();
        });
    }

    // Scroll-triggered animation for About section
    const aboutBlocks = document.querySelectorAll(".about-row");
    if ("IntersectionObserver" in window && aboutBlocks.length > 0) {
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 }
        );

        aboutBlocks.forEach((block) => observer.observe(block));
    }

    // CLEANER IMAGE SLIDER FUNCTIONALITY
    const sliderTrack = document.querySelector(".slider-track");
    const leftBtn = document.querySelector(".left-btn");
    const rightBtn = document.querySelector(".right-btn");

    if (sliderTrack && leftBtn && rightBtn) {
        const scrollAmount = 180;
        const autoScrollSpeed = 1;
        let autoScrollInterval;

        function scrollLeft() {
            sliderTrack.scrollBy({ left: -scrollAmount, behavior: "smooth" });
        }

        function scrollRight() {
            sliderTrack.scrollBy({ left: scrollAmount, behavior: "smooth" });
        }

        function startAutoScroll() {
            autoScrollInterval = setInterval(() => {
                if (sliderTrack.scrollLeft + sliderTrack.clientWidth >= sliderTrack.scrollWidth) {
                    sliderTrack.scrollTo({ left: 0, behavior: "smooth" });
                } else {
                    sliderTrack.scrollLeft += autoScrollSpeed;
                }
            }, 20);
        }

        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }

        leftBtn.addEventListener("click", () => {
            scrollLeft();
            stopAutoScroll();
            startAutoScroll();
        });

        rightBtn.addEventListener("click", () => {
            scrollRight();
            stopAutoScroll();
            startAutoScroll();
        });

        sliderTrack.addEventListener("mouseenter", stopAutoScroll);
        sliderTrack.addEventListener("mouseleave", startAutoScroll);

        startAutoScroll();
    }
});