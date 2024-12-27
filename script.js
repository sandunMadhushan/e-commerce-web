//rating products
const stars = document.querySelectorAll(".rating .star");

stars.forEach((star, index) => {
  star.addEventListener("mouseover", () => {
    stars.forEach((s, i) => {
      s.style.color = i <= index ? "#ffa500" : "#cccccc";
    });
  });

  star.addEventListener("mouseout", () => {
    stars.forEach((s) => {
      s.style.color = "#cccccc";
    });
  });

  star.addEventListener("click", () => {
    stars.forEach((s, i) => {
      s.style.color = i <= index ? "#ffa500" : "#cccccc";
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
