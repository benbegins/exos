import { gsap } from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import Swiper, { Navigation } from "swiper"

gsap.registerPlugin(ScrollTrigger)
Swiper.use([Navigation])

import "swiper/swiper-bundle.css"

gsap.defaults({
	ease: "power3.inOut",
	duration: 1,
})

// MENU MOBILE
const header = () => {
	const burger = document.querySelector(".site-header__burger")
	const siteHeader = document.querySelector(".site-header")
	const menuItems = document.querySelectorAll(".site-header__nav li")

	if (burger) {
		burger.addEventListener("click", function() {
			siteHeader.classList.toggle("active")
			if (siteHeader.classList.contains("active")) {
				gsap.from(menuItems, {
					opacity: 0,
					y: -100,
					stagger: -0.1,
					delay: 0.5,
					duration: 0.75,
					ease: "power3.out",
				})
			}
		})
	}
}

//HERO MIN HEIGHT
const minHeightHero = () => {
	const hero = document.querySelector(".hero-full")
	let heroContent
	let contentHeight

	function minHeight() {
		if (window.innerWidth > 1023 && hero) {
			const heroContent = hero.querySelector(".hero-full__content")
			contentHeight = heroContent.offsetHeight
			hero.style.minHeight = contentHeight + 150 + "px"
		}
	}
	minHeight()
	window.addEventListener("resize", minHeight)
}

// SWIPER
let swiperTemoignages = new Swiper(".swiper-temoignages", {
	navigation: {
		nextEl: ".pagination-right",
		prevEl: ".pagination-left",
	},
	slidesPerView: "auto",
})
let swiperArticles = new Swiper(".swiper-articles", {
	navigation: {
		nextEl: ".pagination-right-articles",
		prevEl: ".pagination-left-articles",
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
			spaceBetween: 32,
		},
	},
})

// CURSOR OVER
const cursorOver = () => {
	const links = document.querySelectorAll(".cursor-over")
	const cursor = document.querySelector(".cursor")

	if (links) {
		links.forEach((link) => {
			link.addEventListener("mouseout", function() {
				cursor.style.opacity = 0
			})
			link.addEventListener("mouseenter", function() {
				cursor.style.opacity = 1
				this.addEventListener("mousemove", function(e) {
					cursor.style.top = this.getBoundingClientRect().y + "px"
					cursor.style.left = this.getBoundingClientRect().x + "px"
					cursor.style.transform =
						"translate(" + e.offsetX + "px, " + e.offsetY + "px)"
				})
			})
		})
	}
}

// PARALLAX ELEMENTS
const imgParallax = () => {
	const imgParallax = document.querySelectorAll(".img-parallax")
	if (imgParallax && window.innerWidth >= 1024) {
		imgParallax.forEach((img) => {
			parallax(img)
		})
	}
}
// PARALLAX BACKGROUND EFFECT
const parallax = (element) => {
	gsap.fromTo(
		element,
		{
			yPercent: -15,
			scale: 1.15,
		},
		{
			yPercent: 15,
			scale: 1.15,
			ease: "none",
			scrollTrigger: {
				trigger: element,
				scrub: true,
			},
		}
	)
}

// ANIMATION REVEAL
const animation = () => {
	// Page transition
	const pageTransition = document.querySelector(".page-transition")
	if (pageTransition) {
		// Fade intro
		pageTransition.classList.add("fade-out")
		// Fade outro
		const links = document.querySelectorAll("a")
		links.forEach((link) => {
			link.addEventListener("click", (e) => {
				if (!link.classList.contains("no-transition")) {
					const href = link.href
					e.preventDefault()
					pageTransition.classList.remove("fade-out")
					// Change page after transition
					setTimeout(() => {
						window.location.assign(href)
					}, 200)
				}
			})
		})
	}

	// Reveal Hero Full Width
	const heroFull = document.querySelector(".hero-full")
	if (heroFull) {
		const reveal = heroFull.querySelector(".reveal")
		let tl = gsap.timeline({ defaults: { duration: 0.8 } })

		tl.to(reveal, { scaleY: 0 })
		tl.from(
			".hero-title",
			{ y: "5vh", opacity: "0", ease: "power3.out" },
			"-=0.4"
		)
		tl.from(
			".hero-text",
			{ y: "10vh", opacity: "0", ease: "power3.out" },
			"-=0.7"
		)
	}

	// Reveal Hero Split
	const heroSplit = document.querySelector(".hero-split")
	if (heroSplit) {
		// Ajoute une div .reveal-std dans .hero-split
		const reveal = document.createElement("div")
		reveal.classList.add("reveal-std")
		heroSplit.appendChild(reveal)

		// Reveal devient noir dans le club RH
		if (heroSplit.classList.contains("hero-split-club-rh")) {
			reveal.classList.add("bg-dark")
		} else {
			reveal.classList.add("bg-light")
		}

		// Animation
		let tl = gsap.timeline({ defaults: { duration: 0.8 } })
		tl.to(reveal, { scaleY: 0 })
		tl.fromTo(
			".hero-title",
			{ y: "5vh", opacity: "0" },
			{ y: 0, opacity: 1, ease: "power3.out" },
			"-=0.4"
		)
		tl.fromTo(
			".hero-text",
			{ y: "10vh", opacity: "0" },
			{ y: 0, opacity: 1, ease: "power3.out" },
			"-=0.7"
		)
	}

	// Reveal Section split
	const sectionSplit = document.querySelectorAll(".section-split")
	if (sectionSplit) {
		sectionSplit.forEach((section) => {
			// Ajoute une div .reveal-std dans .section-split
			const reveal = document.createElement("div")
			reveal.classList.add("reveal-std", "bg-dark")
			section.appendChild(reveal)
			//Animation
			gsap.to(reveal, {
				scaleY: 0,
				ease: "power3.out",
				duration: 1,
				scrollTrigger: {
					trigger: section,
					start: "top 90%",
				},
			})
		})
	}

	// Title reveal
	const titles = document.querySelectorAll(".h1-title, .h2-title")
	titles.forEach((title) => {
		gsap.from(title, {
			y: "5vh",
			opacity: "0",
			ease: "power3.out",
			scrollTrigger: {
				trigger: title,
				start: "top 90%",
			},
		})
	})
}

// BTN POSTULER
const btnPostuler = document.querySelector("#btn-postuler")
const sectionPostuler = document.querySelector("#postuler")
if (btnPostuler && sectionPostuler) {
	btnPostuler.addEventListener("click", () => {
		window.scrollTo(0, sectionPostuler.offsetTop)
	})
}

// PAGE INIT
const pageInit = () => {
	cursorOver()
	header()
	minHeightHero()
	imgParallax()
	animation()
}

window.addEventListener("popstate", animation, false)
window.addEventListener("pageshow", pageInit)
