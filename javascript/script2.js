var menu_icon = document.getElementById("hamburger_menu");

menu_icon.addEventListener("click", function () {
    var menu_item_wrapper = document.getElementById("media_menu");
    menu_item_wrapper.classList.toggle("display");

})

// function toggleMenu() {
//     var menu = document.getElementById("media_menu");
//     menu.style.display = (menu.style.display === "block") ? "none" : "block";
// }

// function toggleMenu(){
//     menu_icon.classList.toggle("media_menu");
// }