document.addEventListener("DOMContentLoaded", () => {
    // Lazy loading for images
    const lazyImages = document.querySelectorAll("img.lazyload");
    lazyImages.forEach((img) => {
        img.src = img.dataset.src;
        img.onload = () => img.classList.add("loaded");
    });

    // Smooth scroll navigation
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
            });
        });
    });
});
