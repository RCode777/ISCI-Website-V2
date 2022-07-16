var nav = document.querySelector("nav ul");
var toggleMenu = document.querySelector(".burger input");

toggleMenu.addEventListener("click", function () {
  nav.classList.toggle("gerak");
});

// var toggle = document.querySelector(".fa-moon");
// var target = document.querySelector("body");
// toggle.addEventListener("click", function () {
//   target.classList.toggle("light-mode");
// });

function lightMode() {
  var target = document.querySelector("body");
  target.classList.toggle("light-mode");
}
