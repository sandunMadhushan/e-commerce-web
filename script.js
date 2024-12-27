// Select all product cards with ratings
const productCards = document.querySelectorAll(".product-card");

productCards.forEach((card) => {
  const stars = card.querySelectorAll(".rating .star");
  let selectedRating = 0; // Track the selected rating for each product

  // Add event listeners to stars
  stars.forEach((star, index) => {
    // Highlight stars on hover
    star.addEventListener("mouseover", () => {
      stars.forEach((s, i) => {
        s.textContent = i <= index ? "star" : "star_outline"; // Fill stars up to hover index
      });
    });

    // Reset stars to their current rating on mouse out
    star.addEventListener("mouseout", () => {
      stars.forEach((s, i) => {
        s.textContent = i < selectedRating ? "star" : "star_outline"; // Reflect selected rating
      });
    });

    // Set the selected rating on click
    star.addEventListener("click", () => {
      selectedRating = index + 1; // Update the selected rating
      stars.forEach((s, i) => {
        s.textContent = i < selectedRating ? "star" : "star_outline"; // Permanently fill selected stars
      });
      console.log(
        `Product: ${
          card.querySelector("h3").innerText
        }, Rating: ${selectedRating}`
      );
    });
  });
});

// checkout page
function openTab(event, tabId) {
  const tabs = document.querySelectorAll(".tab-content");
  const tabLinks = document.querySelectorAll(".tab-link");

  tabs.forEach((tab) => tab.classList.remove("active"));
  tabLinks.forEach((link) => link.classList.remove("active"));

  document.getElementById(tabId).classList.add("active");
  event.currentTarget.classList.add("active");
}

// Show or hide the "Go to Top" button on scroll
window.onscroll = function () {
  const goToTopButton = document.getElementById("goToTop");
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    goToTopButton.style.display = "flex"; // Show button
  } else {
    goToTopButton.style.display = "none"; // Hide button
  }
};

// Smoothly scroll to the top
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
