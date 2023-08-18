// untuk scroll dan blur
window.addEventListener("scroll", () => {
   const nav = document.querySelector("nav");
   const navOff = nav.offsetTop;
   window.scrollY > navOff
      ? nav.classList.add("blur")
      : nav.classList.remove("blur");
});

// Toggle class active untuk hamburger menu
const navbarNav = document.querySelector(".link");
// ketika hamburger menu di klik
const btn = document.getElementById("hamburger-menu");

btn.addEventListener("click", () => {
   navbarNav.classList.toggle("active");
});
