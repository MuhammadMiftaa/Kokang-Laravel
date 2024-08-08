<div class="grid grid-cols-3 gap-5 px-10 overflow-hidden mb-28">
    <h1 class="col-span-3 text-center text-4xl font-bold italic font-quantico">Select Weapons</h1>
    @foreach ($data as $item)
        <div
            class="group h-[35rem] w-full bg-black relative before:content-[''] before:absolute before:top-1/2 before:bottom-0 before:left-0 before:right-0 before:bg-gradient-to-t before:from-black before:to-transparent cat-box">
            <img src="/{{ $item->weapon_name }}.jpg" class="h-full w-full object-cover object-center z-20" alt="">
            <h1
                class="font-quantico capitalize text-4xl font-bold italic text-white absolute bottom-10 w-full text-center">
                {{ $item->weapon_name }}</h1>
            <div
                class="absolute top-0 bottom-0 left-0 right-0 bg-black flex justify-center items-center opacity-0 group-hover:opacity-100 bg-black-transparent duration-300">
                <a href="/{{ $item->weapon_name }}"
                    class="font-quantico uppercase cursor-pointer text-xl py-1 px-3 border border-zinc-600 font-light text-zinc-600 hover:text-white scale-0 group-hover:scale-100 hover:border-white duration-500">
                    Check All</a>
            </div>
        </div>
    @endforeach
</div>
