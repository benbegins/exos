import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Swiper, { Navigation } from 'swiper';
// import barba from '@barba/core';

gsap.registerPlugin(ScrollTrigger);
Swiper.use([Navigation]);

import 'swiper/swiper-bundle.css';

gsap.defaults({
    ease: "power3.inOut",
    duration: 1
});


// MENU MOBILE
const header = () => {
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



//HERO MIN HEIGHT
const minHeightHero = () => {
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



// SWIPER
let swiperTemoignages = new Swiper('.swiper-temoignages', {
    navigation: {
        nextEl: '.pagination-right',
        prevEl: '.pagination-left',
    },
    slidesPerView: 'auto',
});
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
});


// CURSOR OVER
const cursorOver = () => {
    const links = document.querySelectorAll('.cursor-over');
    const cursor = document.querySelector('.cursor');

    if (links) {
        links.forEach(link => {
            link.addEventListener("mouseout", function () {
                cursor.style.opacity = 0;
            });
            link.addEventListener("mouseenter", function () {
                cursor.style.opacity = 1;
                this.addEventListener("mousemove", function (e) {
                    cursor.style.top = this.getBoundingClientRect().y + "px";
                    cursor.style.left = this.getBoundingClientRect().x + "px";
                    cursor.style.transform = "translate(" + e.offsetX + "px, " + e.offsetY + "px)";
                });
            });
        });
    }
}


// PARALLAX BACKGROUND EFFECT
const imgParallax = () => {
    const parallaxContainers = document.querySelectorAll('.section-split');
    if (parallaxContainers && window.innerWidth >= 1024) {
        parallaxContainers.forEach(container => {
            let img = container.querySelector('.section-split__image');
            gsap.to(img, {
                backgroundPositionY: `${-innerHeight / 2}px`,
                ease: "none",
                scrollTrigger: {
                    trigger: container,
                    scrub: true,
                }
            })
        });
    }
}

// ANIMATION REVEAL
const animation = () => {

    // Reveal Hero Full Width
    const heroFull = document.querySelector('.hero-full');
    if (heroFull) {
        const reveal = heroFull.querySelector('.reveal');
        let tl = gsap.timeline({ defaults: { duration: 0.8 } });

        tl.to(reveal, { scaleY: 0 });
        tl.from('.hero-title', { y: "5vh", opacity: "0", ease: "power3.out" }, "-=0.4");
        tl.from('.hero-text', { y: "10vh", opacity: "0", ease: "power3.out" }, "-=0.7");
    }

    // Reveal Hero Split
    const heroSplit = document.querySelector('.hero-split');
    if (heroSplit) {
        const revealImg = heroSplit.querySelector('.reveal');
        let tl = gsap.timeline({ defaults: { duration: 0.8 } });

        tl.to(revealImg, { scaleX: 0 });
        tl.fromTo('.hero-title', { y: "5vh", opacity: "0" }, { y: 0, opacity: 1, ease: "power3.out", }, "-=0.4");
        tl.fromTo('.hero-text', { y: "10vh", opacity: "0" }, { y: 0, opacity: 1, ease: "power3.out" }, "-=0.7");
    }

    //Reveal Standard (volet vertical)
    const revealStd = document.querySelectorAll('.reveal-std');
    revealStd.forEach(reveal => {
        gsap.to(reveal, {
            scaleY: 0,
        })
    });
}



// PAGE INIT
const pageInit = () => {
    cursorOver();
    header();
    minHeightHero();
    //imgParallax();
    animation();
}
//pageInit();

window.addEventListener('load', pageInit);





// BARBA
// barba.init({
//     transitions: [{
//         leave(data) {
//             return gsap.to(data.current.container, {
//                 opacity: 0,
//                 duration: 0.4,
//                 ease: "none",
//             });
//         },
//         enter(data) {
//             window.scrollTo(0, 0);
//         },
//         after(data) {
//             return gsap.from(data.next.container, {
//                 opacity: 0,
//                 duration: 0.4,
//                 ease: "none",
//             });
//         }
//     }]
// });