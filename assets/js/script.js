let menu = document.querySelector("#menu-btn");
let header = document.querySelector(".header");

menu.addEventListener("click", () => {
  menu.classList.toggle("fa-times");
  header.classList.toggle("active");
  header.style.transition = ".4s linear";
});
window.addEventListener("scroll", () => {
  menu.classList.remove("fa-times");
  header.classList.remove("active");
});

/* ======= AOS ======= */

window.addEventListener("load", () => {
  AOS.init({
    duration: 1000,
    offest: 50,
    easing: "ease-in-out",
    once: true,
    mirror: false,
  });
});
