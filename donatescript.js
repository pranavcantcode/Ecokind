document.addEventListener("DOMContentLoaded", () => {
    // Open the donation form modal
    function openForm() {
        const modal = document.getElementById("donationForm");
        modal.style.display = "flex"; // Use flex to center the modal
    }

    // Close the donation form modal
    function closeForm() {
        const modal = document.getElementById("donationForm");
        modal.style.display = "none";
    }

    // Close the modal when clicking outside of it
    window.onclick = function(e) {
        const modal = document.getElementById("donationForm");
        if (e.target === modal) {
            modal.style.display = "none";
        }
    };

    // Attach open and close functions to the global scope
    window.openForm = openForm;
    window.closeForm = closeForm;

    // Impact Counter trigger on visibility
    const counter = document.getElementById("impactCounter");
    let started = false;

    function animateCounter() {
        let current = 0;
        const target = 5000;
        const speed = 25;

        const interval = setInterval(() => {
            current += Math.ceil((target - current) / 10);
            counter.textContent = current.toLocaleString();
            if (current >= target) {
                counter.textContent = target.toLocaleString();
                clearInterval(interval);
            }
        }, speed);
    }

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting && !started) {
                        started = true;
                        animateCounter();
                    }
                });
            }, { threshold: 0.4 }
        );

        observer.observe(counter);
    }

    // Geolocation functionality
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    const locationField = document.getElementById("address");
                    locationField.value = `Lat: ${latitude}, Long: ${longitude}`;
                },
                (error) => {
                    alert("Unable to retrieve your location. Please type your address manually.");
                }
            );
        } else {
            alert("Geolocation is not supported by your browser.");
        }
    }

    // Attach geolocation function to the global scope
    window.getLocation = getLocation;

    // Form submission validation
    function submitDonationForm(event) {
        event.preventDefault(); // Prevent default form submission

        const addressField = document.getElementById("address");
        if (!addressField.value.trim()) {
            alert("Please provide your address or use the current location option.");
            return;
        }

        // Proceed with form submission logic
        alert("Form submitted successfully!");
        closeForm();
    }

    // Attach the form submission function to the global scope
    window.submitDonationForm = submitDonationForm;
});
document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector(".testimonial-track");
    const testimonials = document.querySelectorAll(".testimonial-box");
    const testimonialWidth = testimonials[0].offsetWidth + 20; // Include gap
    let currentIndex = 0;

    function slideTestimonials() {
        currentIndex++;
        if (currentIndex >= testimonials.length) {
            currentIndex = 0; // Reset to the first testimonial
        }
        track.style.transform = `translateX(-${currentIndex * testimonialWidth}px)`;
    }

    setInterval(slideTestimonials, 3000); // Slide every 3 seconds
});