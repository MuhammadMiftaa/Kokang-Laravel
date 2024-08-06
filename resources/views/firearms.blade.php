<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    {{-- <x-carousel /> --}}
    <div>
    </div>
    <div class="gap-5 mb-16 content-center p-10 w-full relative grid grid-cols-2" {{-- style="background-image: url('ad-background.jpg'); background-position: center; background-size: cover" --}}>
        <h1 class="text-6xl font-bold font-quantico uppercase text-transparent bg-clip-text col-span-2 z-10 w-fit"
            style="background-image: url('ad-background.jpg'); background-position: center; background-size: auto;">
            Select Category</h1>
        <div class="h-2 ml-5 shadow-2xl shadow-black w-2/5 col-span-2 skew-x-12 mb-5"
            style="background-image: url('ad-background.jpg'); background-position: center; background-size: cover; box-shadow: 0px 0px 10px 1px #000;">
        </div>
        <div
            class="z-10 w-full h-[30rem] overflow-hidden -skew-x-6 bg-gradient-to-br from-red-600 to-blue-600 p-1 hover:bg-white duration-700 cursor-pointer">
            <div class="w-full h-full overflow-hidden group cursor-pointer relative">
                <img src="/pistol.jpg"
                    class="w-full h-full object-cover object-center group-hover:scale-110 duration-500 hover:scale-110 cursor-pointer peer"
                    alt="">
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 opacity-0 hover:opacity-100 bg-black-transparent duration-300 flex justify-center items-end p-10 group">
                    <a href="/firearms/pistol"
                        class="font-quantico text-3xl uppercase font-bold italic text-white hover:tracking-widenpm run duration-200 scale-0 group-hover:scale-100 absolute">
                        Pistol</a>
                </div>
            </div>
        </div>
        <div
            class="z-10 w-full h-[30rem] overflow-hidden -skew-x-6 bg-gradient-to-br from-red-600 to-blue-600 p-1 hover:bg-white duration-700 cursor-pointer">
            <div class="w-full h-full overflow-hidden group cursor-pointer relative">
                <img src="/assaultrifle.jpg"
                    class="w-full h-full  object-cover object-center group-hover:scale-110 duration-500 hover:scale-110 cursor-pointer peer"
                    alt="">
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 opacity-0 hover:opacity-100 bg-black-transparent duration-300 flex justify-center items-end p-10 group">
                    <a href="/firearms/assault-rifle"
                        class="font-quantico text-3xl uppercase font-bold italic text-white hover:tracking-widenpm run duration-200 scale-0 group-hover:scale-100 absolute">
                        Assault Rifle</a>
                </div>
            </div>
        </div>
        <div
            class="z-10 w-full h-[30rem] overflow-hidden -skew-x-6 bg-gradient-to-br from-red-600 to-blue-600 p-1 hover:bg-white duration-700 cursor-pointer">
            <div class="w-full h-full overflow-hidden group cursor-pointer relative">
                <img src="/shotgun.jpg"
                    class="w-full h-full  object-cover object-center group-hover:scale-110 duration-500 hover:scale-110 cursor-pointer peer"
                    alt="">
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 opacity-0 hover:opacity-100 bg-black-transparent duration-300 flex justify-center items-end p-10 group">
                    <a href="/firearms/shotgun"
                        class="font-quantico text-3xl uppercase font-bold italic text-white hover:tracking-widenpm run duration-200 scale-0 group-hover:scale-100 absolute">
                        Shotgun</a>
                </div>
            </div>
        </div>
        <div
            class="z-10 w-full h-[30rem] overflow-hidden -skew-x-6 bg-gradient-to-br from-red-600 to-blue-600 p-1 hover:bg-white duration-700 cursor-pointer">
            <div class="w-full h-full overflow-hidden group cursor-pointer relative">
                <img src="/submachinegun.jpg"
                    class="w-full h-full  object-cover object-center group-hover:scale-110 duration-500 hover:scale-110 cursor-pointer peer"
                    alt="">
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 opacity-0 hover:opacity-100 bg-black-transparent duration-300 flex justify-center items-end p-10 group">
                    <a href="/firearms/submachine-gun"
                        class="font-quantico text-3xl uppercase font-bold italic text-white hover:tracking-widenpm run duration-200 scale-0 group-hover:scale-100 absolute">
                        Submachine Gun</a>
                </div>
            </div>
        </div>
        <div
            class="z-10 w-full h-[30rem] overflow-hidden -skew-x-6 bg-gradient-to-br from-red-600 to-blue-600 p-1 hover:bg-white duration-700 cursor-pointer">
            <div class="w-full h-full overflow-hidden group cursor-pointer relative">
                <img src="/machinegun.jpg"
                    class="w-full h-full  object-cover object-center group-hover:scale-110 duration-500 hover:scale-110 cursor-pointer peer"
                    alt="">
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 opacity-0 hover:opacity-100 bg-black-transparent duration-300 flex justify-center items-end p-10 group">
                    <a href="/firearms/machine-gun"
                        class="font-quantico text-3xl uppercase font-bold italic text-white hover:tracking-widenpm run duration-200 scale-0 group-hover:scale-100 absolute">
                        Machine Gun</a>
                </div>
            </div>
        </div>
        <div
            class="z-10 w-full h-[30rem] overflow-hidden -skew-x-6 bg-gradient-to-br from-red-600 to-blue-600 p-1 hover:bg-white duration-700 cursor-pointer">
            <div class="w-full h-full overflow-hidden group cursor-pointer relative">
                <img src="/sniper.jpg"
                    class="w-full h-full  object-cover object-center group-hover:scale-110 duration-500 hover:scale-110 cursor-pointer peer"
                    alt="">
                <div
                    class="absolute top-0 bottom-0 left-0 right-0 opacity-0 hover:opacity-100 bg-black-transparent duration-300 flex justify-center items-end p-10 group">
                    <a href="/firearms/sniper"
                        class="font-quantico text-3xl uppercase font-bold italic text-white hover:tracking-widenpm run duration-200 scale-0 group-hover:scale-100 absolute">
                        Sniper</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
