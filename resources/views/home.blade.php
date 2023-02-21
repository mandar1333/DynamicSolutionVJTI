@extends('welcome')
@section('content')
<style>
    .hide {
        opacity: 0;
        transition: all 2s;
    }

    .show {
        opacity: 1;
        transition: all 4s;
        animation: movex 2s;
    }

    .show2 {
        opacity: 1;
        transition: all 3s;
        transition-delay: 1s;
        animation: movex2 2s 1s;
    }

    .show3 {
        opacity: 1;
        transition: all 4s;
        transition-delay: .5s;
        animation: movex 2s .5s;
    }

    .show4 {
        opacity: 1;
        transition: all 3s;
        transition-delay: 1s;
        animation: movex2 2s 1s;
    }

    @keyframes movex {
        0% {
            transform: translateX(-400px);
        }
    }

    @keyframes movex2 {
        0% {
            transform: translateX(-600px);
        }
    }
</style>
<div class="w-full h-fit relative ">
    <div class=" w-[100vw] h-fit  bg-gradient-to-b from-violet-200  overflow-visible shadow-2xl shadow-violet-100">
        <div class=" sm:pb-0 pb-5  sm:aspect-[16/8] aspect-square   flex sm:flex-row flex-col-reverse items-center justify-start max-w-[1340px] m-auto">
            <div class="w-full sm:w-1/2 sm:pl-10 pl-4 ">
                <h1 class="lg:pb-6 leading-5 pb-2 xs:leading-6 xs:pb-3 sm:leading-8 sm:pb-4 md:text-4xl lg:text-5xl sm:text-3xl xs:text-2xl text-xl  text-black font-sans font-bold tracking-wide">Get Your Device Fixed Today </h1>
                <p class="font-sans xs:text-sm sm:text-md md:text-lg md:leading-6 text-xs">Our services provide professional repairs with cost-effective pricing for your devices and gadgets</p>
                <button class=" active:opacity-70 border-2  border-transparent hover:bg-transparent text-violet-700 border-violet-700 active:border-violet-700   hover:bg-violet-700 hover:text-white font-sans sm:px-5 active:bg-white active:text-violet-700 sm:py-3 font-semibold  uppercase mt-5 sm:text-sm text-xs px-2 py-2 md:text-base lg:mt-12 md:mt-6 md:py-4">
                    <a href="# ">Contact now</a>

                </button>
            </div>
            <div class="sm:w-1/2 w-full h-full ">
                <img src="1676798059751.png" alt="" srcset="" class="h-full w-full ">
            </div>
        </div>
    </div>
    <!-- <div class="h-[90%] max-w-[1340px]  w-full  absolute bottom-0 left-1/2 translate-x-[-50%] grid grid-cols-2 px-12">
        <div class="flex flex-col gap-3 items-start justify-center ">
            <h1 class="text-[3vw] font-bold text-white tracking-wide">
                Get Your Device Fixed Today
            </h1>
            <h1 class="text-[3vw] font-bold text-white ">
                Expert Repair Services in Your Neighborhood
            </h1>
            <p class="text-white">
                Our services provide skilled and reliable electronic repairs at a reasonable cost, ensuring both high-quality work and affordability for our customers.
            </p>
            <div class="flex flex-row w-full justify-between">
                <button class="w-40 border-2 h-12 rounded mt-10 text-center text-lg border-white bg-white text-violet-800 
             font-semibold animate-pulse ">Contact Now </button>
            </div>
        </div>
        <img src="assets/SS_techician_wm.png" alt="" class="h-full  ">
    </div> -->
</div>
<div class="pb-24 min-h-[90rem] w-full max-w-[1340px] m-auto sm:px-12 px-4 text-white md:pt-20 lg:pt-24 sm:pt-16 xs:mt-10 ">
    <!-- COMPANY OVERVIEW  -->
    <div class="px-6 py-12 mt-5 bg-violet-700 rounded-tr-[4rem] rounded-bl-[4rem] ">
        <div class="w-full h-fit  flex flex-col items-center ">
            <h1 class="sm:text-2xl md:text-3xl text-lg text-center font-bold md:mb-20 mb-5 pb-2 border-b border-white border-opacity-30">‟ what make us stands out in a crowded market ”</h1>
            <div class="flex flex-col gap-10 ">
                <div class="flex w-full md:flex-row pb-2  flex-col items-center justify-center gap-5 border-b border-white border-opacity-30 md:border-none">
                    <div class="sm:w-1/2 w-10/12 ">
                        <img class="card1 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/business-expert-5665587-4745552.png?f=webp " alt="" srcset="">
                    </div>
                    <div class="card2 sm:w-1/2 w-10/12 h-full flex flex-col  justify-center text-[2vw] font-thin tracking-wider hide">
                        <h1 class=" md:text-2xl text-lg leading-5 mb-2 font-bold ">
                            Expertise and experience in the industry
                        </h1>
                        <p class="xs:text-sm  text-xs ">
                            "Welcome to our company, where our skilled and experienced technicians provide top-notch repairs and service. With our in-depth knowledge of the industry and extensive experience, we offer reliable and efficient solutions for all your repair needs."
                        </p>
                    </div>
                </div>
                <div class="flex w-full md:flex-row flex-col items-center justify-center gap-5 pb-2 border-b border-white border-opacity-30 md:border-none">
                    <div class="sm:w-1/2 w-10/12 md:hidden ">
                        <img class="card4 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/product-protection-5480357-4569719.png?f=webp " alt="" srcset="">
                    </div>
                    <div class=" card3 sm:w-1/2 w-10/12 h-full flex flex-col justify-center text-[2vw] font-thin tracking-wider hide">
                        <h1 class=" md:text-2xl text-lg leading-5 mb-2 font-bold ">
                            High-quality and reliable repairs, backed by warranties
                        </h1>
                        <p class="xs:text-sm  text-xs ">
                            "At our repair service company, we're committed to providing the highest quality repairs and services, using only the best materials and parts. We stand behind our work with warranties, so you can trust that your devices will be in good hands."
                        </p>
                    </div>
                    <div class="sm:w-1/2 w-10/12 hidden md:block">
                        <img class="card4 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/product-protection-5480357-4569719.png?f=webp " alt="" srcset="">
                    </div>
                </div>
                <div class="flex w-full md:flex-row flex-col items-center justify-center gap-5 ">
                    <div class="sm:w-1/2 w-10/12 ">
                        <img class="card1 m-auto w-80 bg-white rounded-lg px-10 bg-opacity-30 shadow-xl hide" src="https://cdn3d.iconscout.com/3d/premium/thumb/rupee-coin-5169249-4314678.png?f=webp" alt="" srcset="">
                    </div>
                    <div class="card2 sm:w-1/2 w-10/12 h-full flex flex-col justify-center text-[2vw] font-thin tracking-wider hide">
                        <h1 class=" md:text-2xl text-lg leading-5 mb-2 font-bold  ">
                            Competitive pricing and transparent pricing structures
                        </h1>
                        <p class="xs:text-sm  text-xs ">
                            "At our repair service company, we believe in offering fair and competitive pricing for all our services. We provide clear and transparent pricing structures so you know exactly what you're paying for. You can count on us for high-quality repairs at a price that won't break the bank."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //COMPANY OVERVIEW -->
    <!-- ABOUT COMPANY -->
    <div class=" border border-white py-10 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem]"> 
        <h1 class="lg:text-5xl md:text-4xl sm:text-3xl text-2xl text-center font-bold mb-10">About Our Company</h1>
        <div class="about-us h-auto w-full grid md:grid-cols-2 gap-5   pr-2 ">
            <div class="w-full  h-full flex flex-row items-center justify-center ">
                <div class="relative bg-white bg-opacity-30  shadow-violet-900 shadow-2xl  rounded-xl ">
                    <img src="https://cdn3d.iconscout.com/3d/premium/thumb/business-goal-5262987-4396863.png?f=webp" class="max-h-[20rem] border-[3px] z-30 border-opacity-20 border-violet-900 h-full m-auto " alt="" srcset="">
                    <!-- <div class="absolute w-full h-full z-0 -top-5 -right-5 border "></div> -->
                </div>
            </div>
            <div class="flex flex-col px-10 justify-center items-center text-sm font-thin " style="text-shadow: 0px 1px 2px #000 ;">
                <li class="">
                    Dynamic Solution is a leading provider of repair and maintenance services for electronic devices in the local community. Since our founding in 2010, we have been committed to providing high-quality, reliable, and affordable repairs to our customers.

                </li>
                <li>
                    Our team of skilled technicians has a wealth of experience in the industry, with expertise in diagnosing and repairing a wide range of electronic devices, including smartphones, laptops, tablets, and more. We use only the highest quality materials and parts in our repairs, and we stand behind our work with warranties for added peace of mind.
                </li>
                <li> We are committed to providing the best possible service to our customers, and we are constantly striving to improve and innovate our services to meet their evolving needs. Thank you for choosing Dynamic Solution for your repair needs.
                </li>
                </li>
            </div>
        </div>
    </div>
    <!-- //ABOUT COMPANY -->
    <!-- OUR SERVICES -->
    <div class="border border-white py-10 pb-16 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem] px-5 flex flex-col justify-center">
        <h1 class="text-5xl text-center font-bold mb-10 mt-5 ">Our Services</h1>
        <div class="grid md:grid-cols-3  xs:grid-cols-2 grid-cols-1 gap-5 items-center content-center justify-center">
            <div class="px-3 py-5 text-center group relative gap-6 hover:text-white text-violet-100 hover:bg-black hover:bg-opacity-30 transition-all bg-white bg-opacity-30 w-full aspect-square border border-transparent hover:border-white rounded-lg  flex flex-col items-center justify-center ">
                <div class="absolute w-full group-hover:opacity-40 group-hover:scale-75 opacity-0 z-10 h-full">
                    <img src="ima/Group 1.png" alt="" srcset="" class="w-full h-full">
                </div>
                <h3 class="text-3xl font-bold z-10">Appliance</h3>
                <p class="z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia repellat aperiam doloribus fugiat autem architecto voluptate minima doloremque quis.</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 mt-2 z-10 hover:bg-white hover:text-black transition-all rounded-full border  ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </div>
            <div class="px-3 py-5 text-center group relative gap-6 hover:text-white text-violet-100 hover:bg-black hover:bg-opacity-30 transition-all bg-white bg-opacity-30 w-full aspect-square border border-transparent hover:border-white rounded-lg  flex flex-col items-center justify-center ">
                <div class="absolute w-full group-hover:opacity-40 group-hover:scale-75 opacity-0 z-10 h-full">
                    <img src="ima/Group 1(2).png" alt="" srcset="" class="w-full h-full">
                </div>
                <h3 class="text-3xl font-bold z-10">Appliance</h3>
                <p class="z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia repellat aperiam doloribus fugiat autem architecto voluptate minima doloremque quis.</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 mt-2 z-10 hover:bg-white hover:text-black transition-all rounded-full border  ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </div>
            <div class="px-3 py-5 text-center group relative gap-6 hover:text-white text-violet-100 hover:bg-black hover:bg-opacity-30 transition-all bg-white bg-opacity-30 w-full aspect-square border border-transparent hover:border-white rounded-lg  flex flex-col items-center justify-center ">
                <div class="absolute w-full group-hover:opacity-40 group-hover:scale-75 opacity-0 z-10 h-full">
                    <img src="ima/Group 1(1).png" alt="" srcset="" class="w-full h-full">
                </div>
                <h3 class="text-3xl font-bold z-10">Appliance</h3>
                <p class="z-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa mollitia repellat aperiam doloribus fugiat autem architecto voluptate minima doloremque quis.</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 p-2 mt-2 z-10 hover:bg-white hover:text-black transition-all rounded-full border  ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </div>
            
        </div>

        <button class=" mt-20"><a href="contact" class="py-3 bg-white bg-opacity-40 hover:bg-transparent active:opacity-50  transition-all text-white  text-xl border border-transparent hover:border-white rounded-md w-56 m-auto px-8">View All</a></button>

    </div>
    <!-- //OUR SERVICES -->
    <!-- WHY CHOOSE US -->
    <div class="w-full border border-white py-10 pb-20 border-opacity-20 rounded-bl-[4rem] mt-32 bg-violet-700 
      rounded-tr-[4rem]  flex flex-col justify-center">
        <h1 class="sm:text-5xl text-2xl text-center font-bold mb-10 mt-5 ">
            Why Choose Us
        </h1>
        <div class="grid md:grid-cols-2  grid-cols-1">
            <div class="flex flex-col  items-start order-2 md:order-1 px-5">
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Expertise and Experience</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Quality and Reliability</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Transparency and Fairness</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Convenience</h1>
                </div>
                <div class=" py-1 sm:py-2  flex flex-row items-center  md:gap-5 gap-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-10 md:h-10  h-8 w-8 xs:h-9 xs:w-9">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>
                    <h1 class="font-semibold  tracking-wider relative before:absolute before:bottom-0 before:rounded-full before:bg-opacity-80 before:w-full before:h-[2px] before:bg-white text-sm xs:text-base sm:text-lg">Customer Service</h1>
                </div>
            </div>
            <div class="relative h-80 order-1 ">
                <div class=" absolute w-40 h-64 left-[2%] z-0 border-dashed animate-pulse  rounded border-2 -top-5 mt-20 ">
                </div>
                <div class=" absolute w-1/2 h-72 max-w-[14rem] min-w-[12rem] right-[2%] md:left-56  z-0 border-dashed animate-pulse  rounded border-2 -top-[6.5rem]   mt-20 ">
                </div>
                <img src="assets/ac_technician.png " alt="" class="w-40 rounded md:mt-20 mt-9 z-10 absolute left-[5%] " srcset="">
                <img src="assets/technician_refridge.jpg" alt="" class="w-1/2 max-w-[14rem] min-w-[12rem] min-h-[18rem] rounded absolute -top-2 right-[5%] md:left-52 " srcset="">
            </div>
        </div>
    </div>
    <!-- //WHY CHOOSE US -->
</div>
<script>
    const observer = new IntersectionObserver((enteries) => {
        enteries.forEach((entry) => {
            console.log(enteries)
            if (entry.isIntersecting && (entry.target.classList[0] == 'card1' || entry.target.classList[0] == 'card3')) {
                entry.target.classList.add('show');
                console.log(entry.target.classList[0])
            }
            if (entry.isIntersecting && (entry.target.classList[0] == 'card2' || entry.target.classList[0] == 'card4')) {
                entry.target.classList.add('show2');
                console.log(entry.target.classList[0])
            }
        });
    });
    const hiddenElements = document.querySelectorAll('.hide');
    hiddenElements.forEach(element => {
        observer.observe(element);
    });
</script>
@endsection