// Load current points from localStorage
document.addEventListener("DOMContentLoaded", () => {
    const pointsDisplay = document.getElementById("points");
    let currentPoints = localStorage.getItem("points");
    if (!currentPoints) {
        localStorage.setItem("points", "0");
        currentPoints = "0";
    }
    pointsDisplay.textContent = currentPoints;
});

// Function to redeem item
function redeem(cost, itemName) {
    let points = parseInt(localStorage.getItem("points") || "0");

    if (points >= cost) {
        points -= cost;
        localStorage.setItem("points", points);
        document.getElementById("points").textContent = points;
        alert(`✅ You successfully redeemed: ${itemName}`);
    } else {
        alert("❌ Not enough points to redeem this item.");
    }
}