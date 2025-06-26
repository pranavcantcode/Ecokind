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

window.addEventListener("DOMContentLoaded", () => {
    // Check login status
    const loggedIn = localStorage.getItem("loggedIn");
    const userRole = localStorage.getItem("userRole");

    if (!loggedIn) {
        // Show login modal if not logged in
        const modal = document.getElementById("loginModal");
        modal.style.display = "flex";
    } else {
        // Already logged in, redirect accordingly
        if (userRole === "admin" && window.location.pathname !== "/admin.html") {
            window.location.href = "admin.html";
        } else if (userRole === "user" && window.location.pathname !== "/index.html") {
            window.location.href = "index.html";
        }
    }
});

function handleLogin(e) {
    e.preventDefault();

    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    // Hardcoded login validation (replace with real backend later)
    if (email === "admin@ecokind.com" && password === "admin123") {
        localStorage.setItem("loggedIn", "true");
        localStorage.setItem("userRole", "admin");
        window.location.href = "admin.html";
    } else if (email && password) {
        // Treat as regular user
        localStorage.setItem("loggedIn", "true");
        localStorage.setItem("userRole", "user");
        window.location.href = "index.html";
    } else {
        alert("Please enter valid credentials");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const loggedIn = localStorage.getItem("loggedIn");
    const userRole = localStorage.getItem("userRole");

    if (loggedIn === "true" && userRole === "admin") {
        // Redirect admin to admin.html if on index.html
        if (window.location.pathname.endsWith("index.html") || window.location.pathname === "/") {
            window.location.href = "admin.html";
        }
    } else if (loggedIn === "true" && userRole === "user") {
        // Hide login popup for logged-in user
        const loginModal = document.getElementById("loginModal");
        if (loginModal) loginModal.style.display = "none";
    } else {
        // Show login popup if not logged in
        const loginModal = document.getElementById("loginModal");
        if (loginModal) loginModal.style.display = "flex";
    }
});

document.getElementById("logoutBtn").addEventListener("click", () => {
    localStorage.removeItem("loggedIn");
    localStorage.removeItem("userRole");
    window.location.href = "index.html"; // redirect after logout
});