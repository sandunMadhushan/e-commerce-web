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
