//Profile Dropdown Menu
const profile = document.querySelector("#profile");
function profileMenu(){
    const subMenu = document.querySelector(".menu-wrap");
    subMenu.classList.toggle("open-menu");
}
profile.addEventListener('click', profileMenu);
//Clothes & Accessories Navigation
const navClothes = document.querySelector(".clothes");
const navAccess = document.querySelector(".accessories");
function linkPage(page){
    window.location.href=page;
    return false;
}
navClothes.addEventListener('click',function(){linkPage("clothes.php")});
navAccess.addEventListener('click',function(){linkPage("accessories.php")});