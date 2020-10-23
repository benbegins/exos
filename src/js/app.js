import { gsap } from "gsap";
import Swiper, { Navigation } from 'swiper';
Swiper.use([Navigation]);

import 'swiper/swiper-bundle.css';

gsap.defaults({
    ease: "power3.inOut",
    duration: 1
});

// Menu mobile
function header() {
    const burger = document.querySelector('.site-header__burger');
    const siteHeader = document.querySelector('.site-header');
    const menuItems = document.querySelectorAll('.site-header__nav li');

    burger.addEventListener('click', function () {
        siteHeader.classList.toggle('active');
        if (siteHeader.classList.contains('active')) {
            gsap.from(menuItems, {
                opacity: 0,
                y: -100,
                stagger: -0.1,
                delay: 0.5,
                duration: 0.75,
                ease: "power3.out",
            });
        }
    });
}
header();

//Min height Hero
function minHeightHero() {
    const hero = document.querySelector('.hero-full');
    let heroContent;
    let contentHeight;

    function minHeight() {
        if (window.innerWidth > 1023 && hero) {
            const heroContent = hero.querySelector('.hero-full__content');
            contentHeight = heroContent.offsetHeight;
            hero.style.minHeight = (contentHeight + 150) + 'px';
        }
    }
    minHeight();
    window.addEventListener('resize', minHeight);

}
minHeightHero();


let swiperTemoignages = new Swiper('.swiper-temoignages', {
    //autoHeight: true,
    navigation: {
        nextEl: '.pagination-right',
        prevEl: '.pagination-left',
    },
    slidesPerView: 'auto',
    // breakpoints: {
    //     320: {
    //         slidesPerView: 1,
    //         spaceBetween: 20,
    //     },
    //     680: {
    //         slidesPerView: 2,
    //         spaceBetween: 30,
    //     },
    //     1024: {
    //         slidesPerView: 3,
    //         spaceBetween: 40,
    //     }
    // }
})
let swiperArticles = new Swiper('.swiper-articles', {
    navigation: {
        nextEl: '.pagination-right-articles',
        prevEl: '.pagination-left-articles',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 15,
        },
        680: {
            slidesPerView: 2,
            spaceBetween: 32,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        }
    }
})