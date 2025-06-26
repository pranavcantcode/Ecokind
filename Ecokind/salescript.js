document.addEventListener("DOMContentLoaded", () => {
    const cartSidebar = document.getElementById("cartSidebar");
    const cartToggleBtn = document.getElementById("cartToggleBtn");
    const closeCartBtn = document.getElementById("closeCartBtn");

    let cart = [];

    // Update the cart UI
    function updateCart() {
        const cartItems = document.getElementById("cartItems");
        const totalAmount = document.getElementById("totalAmount");
        cartItems.innerHTML = "";
        let total = 0;
        cart.forEach(item => {
            const li = document.createElement("li");
            li.textContent = `${item.name} - ₹${item.price}`;
            cartItems.appendChild(li);
            total += item.price;
        });
        totalAmount.textContent = total;
    }

    // Add a product to the cart
    function addToCart(product) {
        cart.push(product);
        updateCart();
    }

    // Toggle cart visibility
    cartToggleBtn.addEventListener("click", () => {
        cartSidebar.classList.remove("hidden");
        cartSidebar.classList.add("visible");
    });

    // Close cart when the cancel button is clicked
    closeCartBtn.addEventListener("click", () => {
        cartSidebar.classList.remove("visible");
        cartSidebar.classList.add("hidden");
    });

    // Render products in the grid
    const products = [
        { id: 1, name: "Used Jacket", price: 299, img: "jacket.jpg" },
        { id: 2, name: "Novel Set", price: 199, img: "books.jpg" },
        { id: 3, name: "Reusable Bottle", price: 149, img: "bottle.jpg" },
        { id: 4, name: "Eco Bag", price: 99, img: "bag.jpg" }
    ];

    const productGrid = document.getElementById("productGrid");
    products.forEach(product => {
        const card = document.createElement("div");
        card.className = "product-card";

        const img = document.createElement("img");
        img.src = product.img;
        img.alt = product.name;

        const name = document.createElement("h3");
        name.textContent = product.name;

        const price = document.createElement("p");
        price.textContent = `₹${product.price}`;

        const button = document.createElement("button");
        button.textContent = "Add to Cart";
        button.addEventListener("click", () => addToCart(product));

        card.appendChild(img);
        card.appendChild(name);
        card.appendChild(price);
        card.appendChild(button);

        productGrid.appendChild(card);
    });

    document.querySelectorAll(".product-card button").forEach((button, index) => {
        button.addEventListener("click", () => {
            const card = button.closest(".product-card");
            const name = card.querySelector("h3").textContent;
            const price = parseInt(card.querySelector("p").textContent.replace("₹", ""));
            addToCart({ name, price });
        });
    });
});