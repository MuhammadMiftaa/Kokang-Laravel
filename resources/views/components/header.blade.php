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
