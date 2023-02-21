<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FOOTER-STYLING-START -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s ease;

            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */

        }

        *::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }

        .container {
            padding-top: 70px;
            max-width: 100%;
            margin: auto;
        }

        .row {

            display: flex;

            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            color: white;




        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {

            width: fit-content;


            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50%;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {

            text-transform: capitalize;

            text-decoration: none;
            font-weight: 300;



            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {



            padding-left: 8px;
        }

        .footer-col .social-links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            list-style: none;

        }

        .footer-col .social-links li {
            margin: 0 10px 0px 0px;
        }

        .footer-col .social-links .social {
            display: flex;
            flex-direction: row;
            height: 36px;
            width: 36px;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            margin: 0 10px 0px 0;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            transition: 0.5s ease;
            font-size: 30px;
            text-decoration: none;
            position: relative;
        }

        .footer-col .social-links .social:hover {
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-size: 40px;
        }

        .footer-col .social-icons .social::before {
            content: '';
            position: absolute;
            z-index: -1;
            height: 78px;
            width: 78px;

            border-radius: 50%;
            background: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            transform: scale(1);
            transition: 0.5s ease-in-out;
        }

        .footer-col .social-icons li .social:hover::before {
            transform: scale(8);

        }

        .fab {
            font-size: 20px
        }

        /*responsive*/
        @media(max-width:767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
                padding-left: 40px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 50%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        @media (max-width: 420px) {
            .footer-col {
                width: 100%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        *:focus {
            outline: none;
        }

        /*  body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            
        }*/
    </style>
    <!-- //FOOTER STYLING -->
    <style>
        .swiper-pagination-bullet-active {
            opacity: var(--swiper-pagination-bullet-opacity, 1);
            background: var(--swiper-pagination-color, #8a5bf5);
        }
    </style>
</head>


<body class="h-[100vh] w-[100vw] bg-white overflow-hidden ">
    <section class="dark  w-full h-full relative  overflow-y-scroll">
        <header>
            <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5  dark:bg-violet-900">
                <div class="flex flex-row   justify-between items-center mx-auto max-w-screen-xl">
                    <a href="home" class="flex items-center">
                        <img src="login-images/dynamic_solution_logo.svg" class="mr-3  h-9 rounded" alt="Dynamic solution Logo" />
<div class="flex flex-col">
    <span class="sm:text-xl  font-semibold text-white ">Dynamic</span>
    <span class="sm:text-sm text-xs  text-white -mt-1.5 ">solution</span>
</div>
                    </a>
                    <div class="flex items-center  lg:order-2">
                        <a href="login" class="text-gray-800 dark:text-white hover:bg-gray-50 f  font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-violet-700 focus:outline-none ">Log in</a>
                        
                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-violet-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="home" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white" aria-current="page">
                            <li class="cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">Home</li></a>
                            </li>
                            <li>
                                <a href="services" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            <li class="cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">Services</li></a>
                            </li>
                            <li>
                                <a href="#" class="block  text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            <li class=" cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">About Us</li></a>
                            </li>
                            <li>
                                <a href="contact" class="block  text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">
                            <li class=" cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">Contact Us</li></a>
                            </li>

                            <!-- <li>
                                <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer id="footer_desk" class="footer  dark:bg-violet-900 relative w-full pt-2">
            <input type="checkbox" name="" id="" class="absolute right-0 peer/foot w-full opacity-0 z-30 h-10 cursor-pointer">
            <span class="text-black absolute right-[35%] peer-checked/foot:rotate-90 font-semibold dark:text-white">></span>
            <h1 class="text-black w-fit  m-auto dark:text-white">more info </h1>
            <div style="margin-top: -50px;" class="container md:pl-6 lg:pl-12    bg-opacity-10 dark:bg-opacity-10 peer-checked/foot:h-fit h-0 overflow-hidden">
                <div class="row">
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">company</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">about us</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">our services</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">privacy policy</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">get help</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">FAQ</a></li>
                            <li><a href="#" class="text-xs sm:text-sm  md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black ">shipping</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">returns</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">order status</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">online shop</h4>
                        <ul>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">watch</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">bag</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">shoes</a></li>
                            <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">dress</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">follow us</h4>

                        <div class="social-links">
                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class=" social text-xs sm:text-sm md:text-base"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Facebook</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Tweeter</a>
                                </div>
                            </li>

                            <li>
                                <div class="flex flex-row group my-1  items-center">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Instagram</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex flex-row group my-1  items-center ">

                                    <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Linkedin</a>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- <footer>
            <div class="footer-2 bg-violet-800 pt-6 md:pt-12">
                <div class="container px-4 mx-auto">

                    <div class="md:flex md:flex-wrap md:-mx-4 py-6 md:pb-12">

                        <div class="footer-info lg:w-1/3 md:px-4">
                            <h4 class="text-white text-2xl mb-4 tracking-tighter">At Dynamic Solution, we are committed to providing high-quality, reliable, and affordable repair services to our customers. Here are some quick links to help you navigate our website:</p>
                                <div class="mt-4">
                                    <button class="bg-facebook py-2 px-4 text-white rounded mt-2 transition-colors duration-300">
                                        <span class="fa fa-facebook-f mr-2"></span> Follow
                                    </button>
                                    <button class="bg-twitter py-2 px-4 text-white rounded ml-2 mt-2 transition-colors duration-300">
                                        <span class="fab fa-twitter mr-2"></span> Follow @freeweb19
                                    </button>
                                </div>
                        </div>

                        <div class="md:w-2/3 lg:w-1/3 md:px-4 xl:pl-16 mt-12 lg:mt-0">
                            <div class="sm:flex">
                                <div class="sm:flex-1">
                                    <h6 class="text-base font-medium text-white uppercase mb-2">About</h6>
                                    <div>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Company</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Culture</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Team</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Careers</a>
                                    </div>
                                </div>
                                <div class="sm:flex-1 mt-4 sm:mt-0">
                                    <h6 class="text-base font-medium text-white uppercase mb-2">What we offer</h6>
                                    <div>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Blocks</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Resources</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Tools</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Tutorials</a>
                                        <a href="#" class="text-gray-400 py-1 block hover:underline">Freebies</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:w-1/3 md:px-4 md:text-center mt-12 lg:mt-0">
                            <h5 class="text-lg text-white font-medium mb-4">Explore our site</h5>
                            <button class="bg-indigo-600 text-white hover:bg-indigo-700 rounded py-2 px-6 md:px-12 transition-colors duration-300">Explore</button>
                        </div>

                    </div>

                </div>

                <div class="border-t border-solid border-gray-900 mt-4 py-4">
                    <div class="container px-4 mx-auto">

                        <div class="md:flex md:-mx-4 md:items-center">
                            <div class="md:flex-1 md:px-4 text-center md:text-left">
                                <p class="text-white">&copy; <strong>FWR</strong></p>
                            </div>
                            <div class="md:flex-1 md:px-4 text-center md:text-right">
                                <a href="#" class="py-2 px-4 text-white inline-block hover:underline">Terms of Service</a>
                                <a href="#" class="py-2 px-4 text-white inline-block hover:underline">Privacy Policy</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </footer> -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 30,
            autoplay: {
                delay: 5000
            },
            pagination: {
                el: ".swiper-pagination"
            }
        })
    </script>
    <!-- TILT-JS -->
    <script>
        var VanillaTilt = (function() {
            'use strict';

            /**
             * Created by Sergiu Șandor (micku7zu) on 1/27/2017.
             * Original idea: https://github.com/gijsroge/tilt.js
             * MIT License.
             * Version 1.8.0
             */

            class VanillaTilt {
                constructor(element, settings = {}) {
                    if (!(element instanceof Node)) {
                        throw ("Can't initialize VanillaTilt because " + element + " is not a Node.");
                    }

                    this.width = null;
                    this.height = null;
                    this.clientWidth = null;
                    this.clientHeight = null;
                    this.left = null;
                    this.top = null;

                    // for Gyroscope sampling
                    this.gammazero = null;
                    this.betazero = null;
                    this.lastgammazero = null;
                    this.lastbetazero = null;

                    this.transitionTimeout = null;
                    this.updateCall = null;
                    this.event = null;

                    this.updateBind = this.update.bind(this);
                    this.resetBind = this.reset.bind(this);

                    this.element = element;
                    this.settings = this.extendSettings(settings);

                    this.reverse = this.settings.reverse ? -1 : 1;
                    this.resetToStart = VanillaTilt.isSettingTrue(this.settings["reset-to-start"]);
                    this.glare = VanillaTilt.isSettingTrue(this.settings.glare);
                    this.glarePrerender = VanillaTilt.isSettingTrue(this.settings["glare-prerender"]);
                    this.fullPageListening = VanillaTilt.isSettingTrue(this.settings["full-page-listening"]);
                    this.gyroscope = VanillaTilt.isSettingTrue(this.settings.gyroscope);
                    this.gyroscopeSamples = this.settings.gyroscopeSamples;

                    this.elementListener = this.getElementListener();

                    if (this.glare) {
                        this.prepareGlare();
                    }

                    if (this.fullPageListening) {
                        this.updateClientSize();
                    }

                    this.addEventListeners();
                    this.reset();

                    if (this.resetToStart === false) {
                        this.settings.startX = 0;
                        this.settings.startY = 0;
                    }
                }

                static isSettingTrue(setting) {
                    return setting === "" || setting === true || setting === 1;
                }

                /**
                 * Method returns element what will be listen mouse events
                 * @return {Node}
                 */
                getElementListener() {
                    if (this.fullPageListening) {
                        return window.document;
                    }

                    if (typeof this.settings["mouse-event-element"] === "string") {
                        const mouseEventElement = document.querySelector(this.settings["mouse-event-element"]);

                        if (mouseEventElement) {
                            return mouseEventElement;
                        }
                    }

                    if (this.settings["mouse-event-element"] instanceof Node) {
                        return this.settings["mouse-event-element"];
                    }

                    return this.element;
                }

                /**
                 * Method set listen methods for this.elementListener
                 * @return {Node}
                 */
                addEventListeners() {
                    this.onMouseEnterBind = this.onMouseEnter.bind(this);
                    this.onMouseMoveBind = this.onMouseMove.bind(this);
                    this.onMouseLeaveBind = this.onMouseLeave.bind(this);
                    this.onWindowResizeBind = this.onWindowResize.bind(this);
                    this.onDeviceOrientationBind = this.onDeviceOrientation.bind(this);

                    this.elementListener.addEventListener("mouseenter", this.onMouseEnterBind);
                    this.elementListener.addEventListener("mouseleave", this.onMouseLeaveBind);
                    this.elementListener.addEventListener("mousemove", this.onMouseMoveBind);

                    if (this.glare || this.fullPageListening) {
                        window.addEventListener("resize", this.onWindowResizeBind);
                    }

                    if (this.gyroscope) {
                        window.addEventListener("deviceorientation", this.onDeviceOrientationBind);
                    }
                }

                /**
                 * Method remove event listeners from current this.elementListener
                 */
                removeEventListeners() {
                    this.elementListener.removeEventListener("mouseenter", this.onMouseEnterBind);
                    this.elementListener.removeEventListener("mouseleave", this.onMouseLeaveBind);
                    this.elementListener.removeEventListener("mousemove", this.onMouseMoveBind);

                    if (this.gyroscope) {
                        window.removeEventListener("deviceorientation", this.onDeviceOrientationBind);
                    }

                    if (this.glare || this.fullPageListening) {
                        window.removeEventListener("resize", this.onWindowResizeBind);
                    }
                }

                destroy() {
                    clearTimeout(this.transitionTimeout);
                    if (this.updateCall !== null) {
                        cancelAnimationFrame(this.updateCall);
                    }

                    this.reset();

                    this.removeEventListeners();
                    this.element.vanillaTilt = null;
                    delete this.element.vanillaTilt;

                    this.element = null;
                }

                onDeviceOrientation(event) {
                    if (event.gamma === null || event.beta === null) {
                        return;
                    }

                    this.updateElementPosition();

                    if (this.gyroscopeSamples > 0) {
                        this.lastgammazero = this.gammazero;
                        this.lastbetazero = this.betazero;

                        if (this.gammazero === null) {
                            this.gammazero = event.gamma;
                            this.betazero = event.beta;
                        } else {
                            this.gammazero = (event.gamma + this.lastgammazero) / 2;
                            this.betazero = (event.beta + this.lastbetazero) / 2;
                        }

                        this.gyroscopeSamples -= 1;
                    }

                    const totalAngleX = this.settings.gyroscopeMaxAngleX - this.settings.gyroscopeMinAngleX;
                    const totalAngleY = this.settings.gyroscopeMaxAngleY - this.settings.gyroscopeMinAngleY;

                    const degreesPerPixelX = totalAngleX / this.width;
                    const degreesPerPixelY = totalAngleY / this.height;

                    const angleX = event.gamma - (this.settings.gyroscopeMinAngleX + this.gammazero);
                    const angleY = event.beta - (this.settings.gyroscopeMinAngleY + this.betazero);

                    const posX = angleX / degreesPerPixelX;
                    const posY = angleY / degreesPerPixelY;

                    if (this.updateCall !== null) {
                        cancelAnimationFrame(this.updateCall);
                    }

                    this.event = {
                        clientX: posX + this.left,
                        clientY: posY + this.top,
                    };

                    this.updateCall = requestAnimationFrame(this.updateBind);
                }

                onMouseEnter() {
                    this.updateElementPosition();
                    this.element.style.willChange = "transform";
                    this.setTransition();
                }

                onMouseMove(event) {
                    if (this.updateCall !== null) {
                        cancelAnimationFrame(this.updateCall);
                    }

                    this.event = event;
                    this.updateCall = requestAnimationFrame(this.updateBind);
                }

                onMouseLeave() {
                    this.setTransition();

                    if (this.settings.reset) {
                        requestAnimationFrame(this.resetBind);
                    }
                }

                reset() {
                    this.onMouseEnter();

                    if (this.fullPageListening) {
                        this.event = {
                            clientX: (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.clientWidth,
                            clientY: (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.clientHeight
                        };
                    } else {
                        this.event = {
                            clientX: this.left + ((this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.width),
                            clientY: this.top + ((this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.height)
                        };
                    }

                    let backupScale = this.settings.scale;
                    this.settings.scale = 1;
                    this.update();
                    this.settings.scale = backupScale;
                    this.resetGlare();
                }

                resetGlare() {
                    if (this.glare) {
                        this.glareElement.style.transform = "rotate(180deg) translate(-50%, -50%)";
                        this.glareElement.style.opacity = "0";
                    }
                }

                getValues() {
                    let x, y;

                    if (this.fullPageListening) {
                        x = this.event.clientX / this.clientWidth;
                        y = this.event.clientY / this.clientHeight;
                    } else {
                        x = (this.event.clientX - this.left) / this.width;
                        y = (this.event.clientY - this.top) / this.height;
                    }

                    x = Math.min(Math.max(x, 0), 1);
                    y = Math.min(Math.max(y, 0), 1);

                    let tiltX = (this.reverse * (this.settings.max - x * this.settings.max * 2)).toFixed(2);
                    let tiltY = (this.reverse * (y * this.settings.max * 2 - this.settings.max)).toFixed(2);
                    let angle = Math.atan2(this.event.clientX - (this.left + this.width / 2), -(this.event.clientY - (this.top + this.height / 2))) * (180 / Math.PI);

                    return {
                        tiltX: tiltX,
                        tiltY: tiltY,
                        percentageX: x * 100,
                        percentageY: y * 100,
                        angle: angle
                    };
                }

                updateElementPosition() {
                    let rect = this.element.getBoundingClientRect();

                    this.width = this.element.offsetWidth;
                    this.height = this.element.offsetHeight;
                    this.left = rect.left;
                    this.top = rect.top;
                }

                update() {
                    let values = this.getValues();

                    this.element.style.transform = "perspective(" + this.settings.perspective + "px) " +
                        "rotateX(" + (this.settings.axis === "x" ? 0 : values.tiltY) + "deg) " +
                        "rotateY(" + (this.settings.axis === "y" ? 0 : values.tiltX) + "deg) " +
                        "scale3d(" + this.settings.scale + ", " + this.settings.scale + ", " + this.settings.scale + ")";

                    if (this.glare) {
                        this.glareElement.style.transform = `rotate(${values.angle}deg) translate(-50%, -50%)`;
                        this.glareElement.style.opacity = `${values.percentageY * this.settings["max-glare"] / 100}`;
                    }

                    this.element.dispatchEvent(new CustomEvent("tiltChange", {
                        "detail": values
                    }));

                    this.updateCall = null;
                }

                /**
                 * Appends the glare element (if glarePrerender equals false)
                 * and sets the default style
                 */
                prepareGlare() {
                    // If option pre-render is enabled we assume all html/css is present for an optimal glare effect.
                    if (!this.glarePrerender) {
                        // Create glare element
                        const jsTiltGlare = document.createElement("div");
                        jsTiltGlare.classList.add("js-tilt-glare");

                        const jsTiltGlareInner = document.createElement("div");
                        jsTiltGlareInner.classList.add("js-tilt-glare-inner");

                        jsTiltGlare.appendChild(jsTiltGlareInner);
                        this.element.appendChild(jsTiltGlare);
                    }

                    this.glareElementWrapper = this.element.querySelector(".js-tilt-glare");
                    this.glareElement = this.element.querySelector(".js-tilt-glare-inner");

                    if (this.glarePrerender) {
                        return;
                    }

                    Object.assign(this.glareElementWrapper.style, {
                        "position": "absolute",
                        "top": "0",
                        "left": "0",
                        "width": "100%",
                        "height": "100%",
                        "overflow": "hidden",
                        "pointer-events": "none",
                        "border-radius": "inherit"
                    });

                    Object.assign(this.glareElement.style, {
                        "position": "absolute",
                        "top": "50%",
                        "left": "50%",
                        "pointer-events": "none",
                        "background-image": `linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)`,
                        "transform": "rotate(180deg) translate(-50%, -50%)",
                        "transform-origin": "0% 0%",
                        "opacity": "0"
                    });

                    this.updateGlareSize();
                }

                updateGlareSize() {
                    if (this.glare) {
                        const glareSize = (this.element.offsetWidth > this.element.offsetHeight ? this.element.offsetWidth : this.element.offsetHeight) * 2;

                        Object.assign(this.glareElement.style, {
                            "width": `${glareSize}px`,
                            "height": `${glareSize}px`,
                        });
                    }
                }

                updateClientSize() {
                    this.clientWidth = window.innerWidth ||
                        document.documentElement.clientWidth ||
                        document.body.clientWidth;

                    this.clientHeight = window.innerHeight ||
                        document.documentElement.clientHeight ||
                        document.body.clientHeight;
                }

                onWindowResize() {
                    this.updateGlareSize();
                    this.updateClientSize();
                }

                setTransition() {
                    clearTimeout(this.transitionTimeout);
                    this.element.style.transition = this.settings.speed + "ms " + this.settings.easing;
                    if (this.glare) this.glareElement.style.transition = `opacity ${this.settings.speed}ms ${this.settings.easing}`;

                    this.transitionTimeout = setTimeout(() => {
                        this.element.style.transition = "";
                        if (this.glare) {
                            this.glareElement.style.transition = "";
                        }
                    }, this.settings.speed);

                }

                /**
                 * Method return patched settings of instance
                 * @param {boolean} settings.reverse - reverse the tilt direction
                 * @param {number} settings.max - max tilt rotation (degrees)
                 * @param {startX} settings.startX - the starting tilt on the X axis, in degrees. Default: 0
                 * @param {startY} settings.startY - the starting tilt on the Y axis, in degrees. Default: 0
                 * @param {number} settings.perspective - Transform perspective, the lower the more extreme the tilt gets
                 * @param {string} settings.easing - Easing on enter/exit
                 * @param {number} settings.scale - 2 = 200%, 1.5 = 150%, etc..
                 * @param {number} settings.speed - Speed of the enter/exit transition
                 * @param {boolean} settings.transition - Set a transition on enter/exit
                 * @param {string|null} settings.axis - What axis should be enabled. Can be "x" or "y"
                 * @param {boolean} settings.glare - if it should have a "glare" effect
                 * @param {number} settings.max-glare - the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
                 * @param {boolean} settings.glare-prerender - false = VanillaTilt creates the glare elements for you, otherwise
                 * @param {boolean} settings.full-page-listening - If true, parallax effect will listen to mouse move events on the whole document, not only the selected element
                 * @param {string|object} settings.mouse-event-element - String selector or link to HTML-element what will be listen mouse events
                 * @param {boolean} settings.reset - false = If the tilt effect has to be reset on exit
                 * @param {boolean} settings.reset-to-start - true = On reset event (mouse leave) will return to initial start angle (if startX or startY is set)
                 * @param {gyroscope} settings.gyroscope - Enable tilting by deviceorientation events
                 * @param {gyroscopeSensitivity} settings.gyroscopeSensitivity - Between 0 and 1 - The angle at which max tilt position is reached. 1 = 90deg, 0.5 = 45deg, etc..
                 * @param {gyroscopeSamples} settings.gyroscopeSamples - How many gyroscope moves to decide the starting position.
                 */
                extendSettings(settings) {
                    let defaultSettings = {
                        reverse: false,
                        max: 15,
                        startX: 0,
                        startY: 0,
                        perspective: 1000,
                        easing: "cubic-bezier(.03,.98,.52,.99)",
                        scale: 1,
                        speed: 300,
                        transition: true,
                        axis: null,
                        glare: false,
                        "max-glare": 1,
                        "glare-prerender": false,
                        "full-page-listening": false,
                        "mouse-event-element": null,
                        reset: true,
                        "reset-to-start": true,
                        gyroscope: true,
                        gyroscopeMinAngleX: -45,
                        gyroscopeMaxAngleX: 45,
                        gyroscopeMinAngleY: -45,
                        gyroscopeMaxAngleY: 45,
                        gyroscopeSamples: 10
                    };

                    let newSettings = {};
                    for (var property in defaultSettings) {
                        if (property in settings) {
                            newSettings[property] = settings[property];
                        } else if (this.element.hasAttribute("data-tilt-" + property)) {
                            let attribute = this.element.getAttribute("data-tilt-" + property);
                            try {
                                newSettings[property] = JSON.parse(attribute);
                            } catch (e) {
                                newSettings[property] = attribute;
                            }

                        } else {
                            newSettings[property] = defaultSettings[property];
                        }
                    }

                    return newSettings;
                }

                static init(elements, settings) {
                    if (elements instanceof Node) {
                        elements = [elements];
                    }

                    if (elements instanceof NodeList) {
                        elements = [].slice.call(elements);
                    }

                    if (!(elements instanceof Array)) {
                        return;
                    }

                    elements.forEach((element) => {
                        if (!("vanillaTilt" in element)) {
                            element.vanillaTilt = new VanillaTilt(element, settings);
                        }
                    });
                }
            }

            if (typeof document !== "undefined") {
                /* expose the class to window */
                window.VanillaTilt = VanillaTilt;

                /**
                 * Auto load
                 */
                VanillaTilt.init(document.querySelectorAll("[data-tilt]"));
            }

            return VanillaTilt;

        }());
    </script>
    <!-- //TILT-JS -->
</body>

</html>