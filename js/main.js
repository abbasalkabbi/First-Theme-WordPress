const iconMenu = document.querySelector(".icon-menu"), //button icon menu show
  navbar = document.querySelector(".head nav"), // navbar in header(menu)
  hide_button = navbar.querySelector(".hide");

/* 
this is function run just moblie
fucntion show navbar and hide
*/
iconMenu.onclick = () => {
  navbar.style.display = "block"; // show the menu
};

hide_button.onclick = () => {
  navbar.style.display = "none";
};

/* in header 
function go back page
where: header div(go back button)
*/
function go_back() {
  window.history.back();
}
