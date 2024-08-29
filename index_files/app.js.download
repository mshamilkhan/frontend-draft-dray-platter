// Initialize Wow
AOS.init();

// sticky nav on scroll start

var navBar = document.getElementById('navBar');

window.onscroll = function () {

   if (window.scrollY > 60) {

      navBar.classList.add('scrolled');

   } else {

      navBar.classList.remove('scrolled');

   }

}
// sticky nav on scroll end

// modern nav start

const openNAvMenu = document.querySelector(".open-nav"),

   closeNAvMenu = document.querySelector(".close-nav"),

   NavMenu = document.querySelector(".nav-menu"),

   menuOverlay = document.querySelector(".menu-overlay"),

   mediaSize = 1024;



openNAvMenu.addEventListener("click", toggleNav);

closeNAvMenu.addEventListener("click", toggleNav);

menuOverlay.addEventListener("click", toggleNav);

function toggleNav() {

   NavMenu.classList.toggle("open");

   menuOverlay.classList.toggle("active");

   document.body.classList.toggle("hidden-scrolling");

}

NavMenu.addEventListener("click", (event) => {

   if (event.target.hasAttribute("data-toggle") &&

      window.innerWidth <= mediaSize) {

      const menuitemhaschildren = event.target.parentElement;

      if (menuitemhaschildren.classList.contains("active")) {

         collapseSubMenu();

      } else {

         if (NavMenu.querySelector(".menu-item-has-children.active")) {

            collapseSubMenu();

         }

         menuitemhaschildren.classList.add("active");

         const subMenu = menuitemhaschildren.querySelector(".sub-menu");

         subMenu.style.maxHeight = subMenu.scrollHeight + "px";

      }

   }



});

function collapseSubMenu() {

   NavMenu.querySelector(".menu-item-has-children.active .sub-menu")

      .removeAttribute("style");

   NavMenu.querySelector(".menu-item-has-children.active")

      .classList.remove("active");

}

// modern nav end






// Auto animated form start



const loginpopup = document.querySelector(".login-popup");

const close = document.querySelector(".close");



window.addEventListener("load", function () {

   showpopup();

});



function showpopup() {

   const timelimit = 1; //seconds

   let i = 0;

   const timer = setInterval(function () {

       i++;

       if (i == timelimit) {

           clearInterval(timer);

           loginpopup.classList.add("show");

       }

      //  console.log(i);

   }, 650);

}



close.addEventListener("click", function () {

   loginpopup.classList.remove("show");

});


//  Auto animated form end





// Lazy Loader start
$(function () {
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy",
  });
});

// Lazy Loader end





// slick-slider

$('.partner-logo').slick({
   dots: false,
   slidesToShow: 1,
   slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  dots: false,
  arrows: false,
   // responsive: [
   //   {
   //     breakpoint: 1024,
   //     settings: {
   //       slidesToShow: 3,
   //       slidesToScroll: 3,
   //       infinite: true,
   //       dots: true
   //     }
   //   },
   //   {
   //     breakpoint: 600,
   //     settings: {
   //       slidesToShow: 2,
   //       slidesToScroll: 2
   //     }
   //   },
   //   {
   //     breakpoint: 480,
   //     settings: {
   //       slidesToShow: 1,
   //       slidesToScroll: 1
   //     }
   //   }
   //   // You can unslick at a given breakpoint now by adding:
   //   // settings: "unslick"
   //   // instead of a settings object
   // ]
 });





//  product im,g(function ($) {const inner = document.querySelector(".inner");
const inner = document.querySelector(".inner");
const left = document.querySelector(".left");
left.addEventListener("mousemove", handleMousemove, false);
function handleMousemove(event) {
  let { width, height } = this.getBoundingClientRect();
  let xAxis = event.offsetX / width * 100;
  let yAxis = event.offsetY / height * 100;
  inner.style.transform = `translate(-${xAxis}%, -${yAxis}%)`;
}
