//     js for login popup
document.querySelector("#show-login").addEventListener("click", function () {
  document.querySelector(".popup").classList.add("active");
});
document
  .querySelector(".popup .close-btn")
  .addEventListener("click", function () {
    document.querySelector(".popup").classList.remove("active");
  });

//     js for register popup
document.querySelector("#reg").addEventListener("click", function () {
  document.querySelector(".popup-reg").classList.add("active");
  document.querySelector(".popup").classList.remove("active");
});
document
  .querySelector(".popup-reg .close-btn")
  .addEventListener("click", function () {
    document.querySelector(".popup-reg").classList.remove("active");
  });

document.querySelector("#to-login").addEventListener("click", function () {
  document.querySelector(".popup-reg").classList.remove("active");
  document.querySelector(".popup").classList.add("active");
});

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
