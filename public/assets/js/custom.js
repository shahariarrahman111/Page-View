/* ====== Mobile Left Side Bar ======= */
const sideBar = document.querySelector(".layout-left");
const leftSideBar = document.querySelector(".mobile-nav-toggler");
const sidebarBackdrop = document.querySelector(".sidebar-backdrop");

leftSideBar?.addEventListener("click", () => {
  sideBar.classList.toggle("show");
});
sidebarBackdrop?.addEventListener("click", () => {
  sideBar.classList.remove("show");
});

/* ====== Mobile Left Side Bar ======= */

/* ======  search ======= */
const appSearch = document.querySelector(".app-search-box");
const searchBtnMobile = document.querySelector(".search-icon");
const searchBackdrop = document.querySelector(".search-backdrop");
const hide_searchbar = document.querySelector(".hide-searchbar");

searchBtnMobile.addEventListener("click", () => {
  appSearch.classList.add("show");
});
searchBackdrop.addEventListener("click", () => {
  appSearch.classList.remove("show");
});
hide_searchbar.addEventListener("click", () => {
  appSearch.classList.remove("show");
});
/* ======  search ======= */


/* ==== Forntend js ==== */

(function ($) {
    "use strict";

    $(document).ready(function () {
        $(".side-menu").each(function () {
            var $menu = $(this);
            $menu.metisMenu();

            $menu.find("a").each(function () {
                var href = $(this).attr("href");
                var currentUrl = window.location.href.split(/[?#]/)[0];
                if (href && href === currentUrl) {
                    $(this).addClass("active");
                    $(this).parents(".mm-collapse").addClass("mm-show");
                    $(this).parents("li").addClass("mm-active");
                }
            });
        });
    });
    $(document).ready(function () {
        // Toggle between menu and close icons
        $(".menu-icon").click(function () {
            $(".menu-icon").hide();
            $(".close-icon").show();
        });

        $(".close-icon").click(function () {
            $(".close-icon").hide();
            $(".menu-icon").show();
        });
    });
})(jQuery);

let backtopbtn = document.getElementById("backtopBtn");
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        backtopbtn.style.display = "block";
    } else {
        backtopbtn.style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

