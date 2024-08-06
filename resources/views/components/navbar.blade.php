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
                @php
                    $navbarlinks = ['Home', 'Firearms', 'Ammo', 'Grenade', 'About'];
                @endphp
                @foreach ($navbarlinks as $link)
                    <li
                        class="{{ request()->is(strtolower($link)) || (request()->is('/') && $link == 'Home') ? 'text-black border-b border-zinc-700 ' : 'text-zinc-700' }}">
                        <a href="{{ $link == 'Home' ? '/' : strtolower($link) }}"
                            class="text-inherit cursor-pointer block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 ">{{ $link }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
