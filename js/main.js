const iconMenu = document.querySelector(".icon-menu"), //button
  navbar = document.querySelector(".head nav"); // navbar in header
// this is function run just moblie
// fucntion show navbar and hide
iconMenu.onclick = () => {
  if (navbar.style.display == "none") {
    navbar.style.display = "block";
  } else {
    navbar.style.display = "none";
  }
};
