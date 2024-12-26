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
