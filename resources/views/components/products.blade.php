<div class="flex flex-col gap-3 px-20 py-8 bg-zinc-100">
    <h1 class="font-quantico text-2xl">New</h1>
    <div class="flex gap-3 flex-wrap">
        @foreach ($data as $item)
            <div class="w-64 flex-col justify-between items-center h-fit bg-white p-5">
                <div class="flex justify-between items-center">
                    <h1 class="font-quantico text-xl font-bold">{{ $item->product_name }}</h1>
                    <h2 class="font-poppins text-sm italic rounded text-black">Pistol</h2>
                </div>
                <img src="/1.jpg" class="my-4 px-3 hover:scale-110 duration-500" alt="">
                <div class="flex justify-between text-black items-center">
                    <h1 class="font-quantico font-bold w-fit">{{ $item->price }}</h1>
                    <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                </div>
            </div>
        @endforeach
    </div>
</div>
