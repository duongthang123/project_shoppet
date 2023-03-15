

// toggle menu
const menu__mobile = document.getElementById("menu__mobile");
const list = document.getElementById("header__nav-list");


let isToggleOn = false;

menu__mobile.addEventListener("click", function() {
    list.classList.toggle("show__mobile");
    isToggleOn = !isToggleOn;
})


//hiển thị submenu
const menuParent = document.querySelector(".header__nav-parent");

menuParent.addEventListener("click", function(){
    list.classList.add("block");
});


// active category
const categorys = document.querySelectorAll(".category__list .category__item_link");



for(let i=0; i<categorys.length; i++) {
    categorys[i].addEventListener("click", function(e){
        e.preventDefault();
        categorys.forEach((other) => {
            other.classList.remove("category__item_link--active");
        });
        categorys[i].classList.add("category__item_link--active");
    });
}

// active menu

// const menus = document.querySelectorAll(".header__nav-item .header__nav-link");
// console.log(menus);

// for(let i = 0; i< menus.length; i++) {
//     menus[i].addEventListener("mousedown", function(e) {
//         // e.preventDefault();
//         menus.forEach((other) => {
//             other.classList.remove("header__nav-link--active");
//         });
//         menus[i].classList.add("header__nav-link--active");
//     })
// }
