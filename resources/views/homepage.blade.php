<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-hidde">

    <header
        class="after:content-[''] after:absolute after:top-0 after:bottom-0 after:left-0 after:right-0 after:bg-gradient-to-t after:from-black after:to-[rgba(0,0,0,.5)]">
        <img src="/header.jpg" class="h-screen w-screen object-cover object-center relative" alt="">
        <div class="z-10 absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center">
            <h1 class="font-urbanist text-4xl text-white">Your Adventure Begins Here</h1>
            <div class="absolute bottom-10 flex flex-col items-center">
                {{-- <h1 class="font-urbanist font-semibold text-lg text-zinc-800 hover:text-zinc-300 mb-4">
                    To purchase weapons, you must be 18 years or older.
                </h1> --}}
                <div class="flex flex-col items-center" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                    <h2 class="font-urbanist text-xl text-zinc-800 hover:text-zinc-300 cursor-pointer peer">I am 18+
                    </h2>
                    <i class="fa-solid fa-angle-down text-zinc-800 peer-hover:text-zinc-300 cursor-pointer"></i>
                </div>
            </div>
        </div>
    </header>

    <main id="main">

        <nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> --}}
                    <span
                        class="self-center text-2xl font-bold whitespace-nowrap dark:text-white font-montserrat italic hover:tracking-wider duration-700 cursor-pointer">Kokang.</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto md:pr-32" id="navbar-default">
                    <ul
                        class="font-light font-quantico text-sm uppercase flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-white relative bg-black rounded md:bg-transparent md:text-black md:p-0 dark:text-white md:dark:text-black"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/firearms"
                                class="block py-2 px-3 text-zinc-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Firearms</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-zinc-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ammo</a>
                        </li>
                            <a href="#"
                                class="block py-2 px-3 text-zinc-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Grenade</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-zinc-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                                Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden my-10 md:mt-14 md:h-[34rem]">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/header-1.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-screen object-cover object-center"
                        alt="">
                    <div class="absolute top-0 bottom-0 left-0 right-0 flex justify-center items-center flex-col gap-5">
                        <h1 class="text-6xl font-bold font-quantico text-white drop-shadow-2xl uppercase">Lawful And
                            Secure.</h1>
                        <h3
                            class="py-2 px-5 bg-zinc-900 uppercase text-zinc-600 cursor-pointer hover:text-zinc-200 font-quantico border border-zinc-400 font-semibold text-xl">
                            Buy Now</h3>
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/header-2.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-screen object-cover object-center"
                        alt="">
                    <div class="absolute top-0 bottom-0 left-0 right-0 flex justify-center items-center flex-col gap-5">
                        <h1 class="text-6xl font-bold font-quantico text-white drop-shadow-2xl uppercase">Professional
                            Guidance.</h1>
                        <h3
                            class="py-2 px-5 bg-zinc-900 uppercase text-zinc-600 cursor-pointer hover:text-zinc-200 font-quantico border border-zinc-400 font-semibold text-xl">
                            Buy Now</h3>
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/header-3.jpg"
                        class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-screen object-cover object-center"
                        alt="">
                    <div class="absolute top-0 bottom-0 left-0 right-0 flex justify-center items-center flex-col gap-5">
                        <h1 class="text-6xl font-bold font-quantico text-white drop-shadow-2xl uppercase">Exlusive
                            Deals.</h1>
                        <h3
                            class="py-2 px-5 bg-zinc-900 uppercase text-zinc-600 cursor-pointer hover:text-zinc-200 font-quantico border border-zinc-400 font-semibold text-xl">
                            Buy Now</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex overflow-hidden">
            <div class="flex  gap-28 animate-[infinite_20s_linear_infinite] shrink-0">
                <img src="/brands-logo/Beretta-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/Glock-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/SigSauer-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/SmithAndWesson-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/Springfield-Logo.png" alt="" class="h-24">
            </div>
            <div class="flex gap-28 animate-[infinite_20s_linear_infinite] shrink-0 pl-28">
                <img src="/brands-logo/Beretta-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/Glock-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/SigSauer-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/SmithAndWesson-Logo.png" alt="" class="h-24">
                <img src="/brands-logo/Springfield-Logo.png" alt="" class="h-24">
            </div>
        </div>

        <div class="flex px-20 gap-8 mt-24">
            <div
                class="relative w-full h-[32rem] bg-zinc-400 after:content-[''] after:absolute after:bottom-0 after:w-full after:h-72 after:bg-gradient-to-t after:from-black after:to-transparent">
                <img src="/last-release.jpg" class="h-full object-cover object-center" alt="">
                <div
                    class="flex flex-col items-center uppercase font-quantico w-fit cursor-pointer text-zinc-600 hover:text-white font-bold absolute bottom-8 z-10 left-1/2 -translate-x-1/2">
                    <h1 class="text-5xl mb-4 text-zinc-300 text-nowrap">Last Release</h1>
                    <h1 class="border text-lg w-fit border-zinc-300 py-1.5 px-3 bg-[rgba(0,0,0,.8)] duration-200">Shop
                        now</h1>
                </div>
            </div>
            <div
                class="relative w-full h-[32rem] bg-zinc-400 after:content-[''] after:absolute after:bottom-0 after:w-full after:h-72 after:bg-gradient-to-t after:from-black after:to-transparent">
                <img src="/discount.jpg" class="h-full object-cover object-center" alt="">
                <div
                    class="flex flex-col items-center uppercase font-quantico w-fit cursor-pointer text-zinc-600 hover:text-white font-bold absolute bottom-8 z-10 left-1/2 -translate-x-1/2">
                    <h1 class="text-5xl mb-4 text-zinc-300 text-nowrap">35% Off</h1>
                    <h1 class="border text-lg w-fit border-zinc-300 py-1.5 px-3 bg-[rgba(0,0,0,.8)] duration-200">Check
                        it</h1>
                </div>
            </div>
            {{-- <div class="relative w-full h-[32rem] bg-zinc-200 after:content-[''] after:absolute after:bottom-0 after:w-full after:h-72 after:bg-gradient-to-t after:from-black after:to-transparent">
                <img src="/header-1.jpg" class="h-full object-cover object-center" alt="">
                <h1 class="uppercase font-quantico text-lg py-1.5 px-3 bg-[rgba(0,0,0,.8)] cursor-pointer text-zinc-300 border border-zinc-300 hover:text-white font-bold absolute w-fit bottom-5 z-10 left-1/2 -translate-x-1/2">Shop Now</h1>
            </div> --}}
        </div>

        <div class="px-20 my-16 ">
            <h1 class="font-poppins text-3xl mb-12 font-bold">Choose Firearms for Your Needs</h1>
            <div class="flex gap-12">
                <div class="w-full h-72 bg-zinc-200 group relative cursor-pointer">
                    <img src="/selfdefense.jpg"
                        class="h-full w-full object-cover object-center group-hover:grayscale-0 grayscale duration-500"
                        alt="">
                    <h1 class="font-quantico italic">Self-Defense</h1>
                    {{-- <h1 class="py-1 px-3 bg-[rgba(0,0,0,.9)] border border-orange-800] group-hover:block w-fit max-auto my-auto duration-200 font-poppins font-semibold text-white absolute hidden top-1/2 left-1/2 -translate-y-[50%] -translate-x-[50%] ">Check It</h1> --}}
                </div>
                <div class="w-full h-72 bg-zinc-200 group relative cursor-pointer">
                    <img src="/hunting.jpg"
                        class="h-full w-full object-cover object-center group-hover:grayscale-0 grayscale duration-500"
                        alt="">
                    <h1 class="font-quantico italic">Hunting</h1>
                    {{-- <h1 class="py-1 px-3 bg-[rgba(0,0,0,.9)] border border-orange-800] group-hover:block w-fit max-auto my-auto duration-200 font-poppins font-semibold text-white absolute hidden top-1/2 left-1/2 -translate-y-[50%] -translate-x-[50%] ">Check It</h1> --}}
                </div>
                <div class="w-full h-72 bg-zinc-200 group relative cursor-pointer">
                    <img src="/military.jpg"
                        class="h-full w-full object-cover object-center group-hover:grayscale-0 grayscale duration-500"
                        alt="">
                    <h1 class="font-quantico italic">Military</h1>
                    {{-- <h1 class="py-1 px-3 bg-[rgba(0,0,0,.9)] border border-orange-800] group-hover:block w-fit max-auto my-auto duration-200 font-poppins font-semibold text-white absolute hidden top-1/2 left-1/2 -translate-y-[50%] -translate-x-[50%] ">Check It</h1> --}}
                </div>
                <div class="w-full h-72 bg-zinc-200 group relative cursor-pointer">
                    <img src="/sport.jpg"
                        class="h-full w-full object-cover object-center group-hover:grayscale-0 grayscale duration-500"
                        alt="">
                    <h1 class="font-quantico italic">Sports</h1>
                    {{-- <h1 class="py-1 px-3 bg-[rgba(0,0,0,.9)] border border-orange-800] group-hover:block w-fit max-auto my-auto duration-200 font-poppins font-semibold text-white absolute hidden top-1/2 left-1/2 -translate-y-[50%] -translate-x-[50%] ">Check It</h1> --}}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-3 px-20 py-8 bg-zinc-100">
            <h1 class="font-quantico text-2xl">New</h1>
            <div class="flex gap-3 flex-wrap">
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                </div>
                <div
                    class="w-64 flex-col justify-between relative items-center h-fit bg-white p-5 after:content-[''] after:absolute after:bottom-0 after:top-0 after:left-0 after:right-0 after:bg-gradient-to-l after:from-zinc-100 after:from-20% after:to-transparent">
                    <div class="flex justify-between items-center">
                        <h1 class="font-quantico text-xl font-bold">AK-47</h1>
                        <h2 class="font-poppins text-sm italic rounded text-black">Assault Rifle</h2>
                    </div>
                    <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                    <div class="flex justify-between text-black items-center">
                        <h1 class="font-quantico font-bold w-fit">$300</h1>
                        <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                    </div>
                    <i
                        class="fa-solid fa-circle-arrow-right text-6xl text-white hover:text-zinc-200 duration-300 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 cursor-pointer"></i>
                </div>
                {{-- <div class="w-64 flex justify-center items-center text-zinc-600 hover:text-black">
                    <i class="fa-solid fa-circle-arrow-right text-6xl  mx-auto my-auto cursor-pointer"></i>
                </div> --}}
            </div>
        </div>

        <div class="flex flex-col gap-3 p-20 mb-16 relative text-white before:opacity-50 before:content-[''] before:absolute before:top-0 before:bottom-0 before:left-0 before:right-0 before:bg-black"
            style="background-image: url('ad-background.jpg'); background-position: center; background-size: cover">
            <h1 class="font-quantico text-5xl text-center font-bold mb-8 uppercase z-10">Top Gun Deals of the Month
            </h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="w-full p-0.5 bg-gradient-to-br from-red-600 to-blue-700 h-72 relative overflow-hidden">
                    <div
                        class="z-10 flex justify-between items-end absolute bottom-0.5 py-4  bg-gradient-to-t from-black to-transparent top-0 to-50% left-0.5 right-0.5 group px-2 peer">
                        <h1
                            class="font-quantico text-xl group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-l group-hover:from-red-600 group-hover:to-blue-700 duration-500">
                            20% Discount <span class="block font-poppins font-light text-sm group-hover:text-white"><s><i>$299.97</i></s><em class="text-lg font-semibold inline-block ml-3">$239.99</em></span></h1>
                        <h2
                            class="py-1 px-3 text-zinc-400 font-poppins italic text-sm font-light hover:font-bold cursor-pointer hover:text-white duration-300">
                            Purchase Now</h2>
                    </div>
                    <img src="best-1.jpg"
                        class="w-full object-cover object-center h-full hover:scale-105 duration-700 peer-hover:scale-125"
                        alt="">
                </div>
                <div class="w-full p-0.5 bg-gradient-to-br from-red-600 to-blue-700 h-72 relative overflow-hidden">
                    <div
                        class="z-10 flex justify-between items-end absolute bottom-0.5 py-4  bg-gradient-to-t from-black to-transparent top-0 to-50% left-0.5 right-0.5 group px-2 peer">
                        <h1
                            class="font-quantico text-xl group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-l group-hover:from-red-600 group-hover:to-blue-700 duration-500">
                            25% Discount  <span class="block font-poppins font-light text-sm group-hover:text-white"><s><i>$819.99</i></s><em class="text-lg font-semibold inline-block ml-3">$629.99</em></span></h1>
                        <h2
                            class="py-1 px-3 text-zinc-400 font-poppins italic text-sm font-light hover:font-bold cursor-pointer hover:text-white duration-300">
                            Purchase Now</h2>
                    </div>
                    <img src="best-2.jpg"
                        class="w-full object-cover object-center h-full hover:scale-105 duration-700 peer-hover:scale-125"
                        alt="">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-5 px-10 overflow-hidden mb-28">
            <h1 class="col-span-3 text-center text-4xl font-bold italic font-quantico">Select Weapons</h1>
            <div
                class="group h-[35rem] w-full bg-black relative before:content-[''] before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-t before:from-black before:to-transparent after:content-[''] after:-bottom-10 after:-right-16 after:bg-white after:absolute after:h-20 after:w-40 after:-rotate-45">
                <img src="/firearms.jpg" class="h-full w-full object-cover object-center z-20" alt="">
                <h1 class="font-quantico text-4xl font-bold italic text-white absolute bottom-10 w-full text-center">
                    Firearms</h1>
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 bg-black flex justify-center items-center opacity-0 group-hover:opacity-100 bg-[rgba(0,0,0,0.5)] duration-300">
                    <h1
                        class="font-quantico uppercase cursor-pointer text-xl py-1 px-3 border border-zinc-600 font-light text-zinc-600 hover:text-white scale-0 group-hover:scale-100 hover:border-white duration-500">
                        Check All</h1>
                </div>
            </div>
            <div
                class="group h-[35rem] w-full bg-black relative before:content-[''] before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-t before:from-black before:to-transparent after:content-[''] after:-bottom-10 after:-right-16 after:bg-white after:absolute after:h-20 after:w-40 after:-rotate-45">
                <img src="/ammo.jpg" class="h-full w-full object-cover object-center z-20" alt="">
                <h1 class="font-quantico text-4xl font-bold italic text-white absolute bottom-10 w-full text-center">
                    Ammo</h1>
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 bg-black flex justify-center items-center opacity-0 group-hover:opacity-100 bg-[rgba(0,0,0,0.5)] duration-300">
                    <h1
                        class="font-quantico uppercase cursor-pointer text-xl py-1 px-3 border border-zinc-600 font-light text-zinc-600 hover:text-white scale-0 group-hover:scale-100 hover:border-white duration-500">
                        Check All</h1>
                </div>
            </div>
            <div
                class="group h-[35rem] w-full bg-black relative before:content-[''] before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-t before:from-black before:to-transparent after:content-[''] after:-bottom-10 after:-right-16 after:bg-white after:absolute after:h-20 after:w-40 after:-rotate-45">
                <img src="/grenade.jpg" class="h-full w-full object-cover object-center z-20" alt="">
                <h1 class="font-quantico text-4xl font-bold italic text-white absolute bottom-10 w-full text-center">
                    Grenade</h1>
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 bg-black flex justify-center items-center opacity-0 group-hover:opacity-100 bg-[rgba(0,0,0,0.5)] duration-300">
                    <h1
                        class="font-quantico uppercase cursor-pointer text-xl py-1 px-3 border border-zinc-600 font-light text-zinc-600 hover:text-white scale-0 group-hover:scale-100 hover:border-white duration-500">
                        Check All</h1>
                </div>
            </div>
        </div>

    </main>

    <footer
        class="flex justify-between items-center py-3 px-4 bg-gradient-to-br from-zinc-200 to-zinc-400 border-t border-black">
        <h1 class="font-poppins font-bold italic text-zinc-800">Copyright © August 2024</h1>
        <h2 class="font-quantico font-bold text-2xl italic text-black uppercase">Shoot, Shoot, and Kill Them</h2>
        <h3 class="font-urbanist font-light text-zinc-800">Muhammad Miftakul Salam</h3>
    </footer>

    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-[rgb(0,0,0,.9)] border border-zinc-300 shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 font-urbanist text-lg font-normal text-gray-500 dark:text-gray-400">You must be at
                        least 18 years old to purchase weapons on this site. Please confirm your age.</h3>
                    <button data-modal-hide="popup-modal" type="button" onclick="goToMain()"
                        class="text-black font-urbanist bg-zinc-400 hover:bg-white focus:ring-1 focus:outline-none focus:ring-zinc-300 dark:focus:ring-zinc-800 font-medium text-sm inline-flex items-center px-5 py-2.5 text-center">
                        I Confirm I am 18+
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="py-2.5 px-5 font-urbanist ms-3 text-sm font-medium text-zinc-400 focus:outline-none bg-transparent border border-gray-200 focus:z-10 focus:ring-1 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                        I am Below 18</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/68cfd0271a.js" crossorigin="anonymous"></script>
</body>

</html>
