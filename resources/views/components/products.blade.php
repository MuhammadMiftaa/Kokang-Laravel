<div class="flex relative flex-col gap-3 px-12 pt-10 pb-20 bg-zinc-100">
    <h1 class="font-quantico text-2xl px-14">New</h1>
    <div class="flex gap-3 flex-wrap w-full justify-center">
        @foreach ($data as $item)
            @php
                switch ($item->weapontype_id) {
                    case 1:
                        $type = 'pistol';
                        break;
                    case 2:
                        $type = 'assault-rifle';
                        break;
                    case 3:
                        $type = 'shotgun';
                        break;
                    case 4:
                        $type = 'submachine-gun';
                        break;
                    case 5:
                        $type = 'machine-gun';
                        break;
                    case 6:
                        $type = 'sniper';
                        break;
                    default:
                        $type = 0;
                        break;
                }
            @endphp
            <div
                class="relative w-64 flex-col justify-between items-center h-fit bg-white p-5 last:after:absolute last:after:top-0 last:after:bottom-0 last:after:right-0 last:after:left-0 last:after:bg-gradient-to-tl last:after:from-zinc-100 last:after:to-transparent last:after:from-20%">
                <div class="flex justify-between items-center">
                    <h1 class="font-quantico text-xl w-full truncate pr-4 font-bold">{{ $item->product_name }}</h1>
                    <h2 class="font-poppins text-sm italic rounded text-black">
                        {{ ucwords(str_replace('-', ' ', $type)) }}</h2>
                </div>
                <img src="/product-images/{{ $type }}/{{ $loop->iteration }}.jpg"
                    alt="/product-images/{{ $type }}/{{ $loop->iteration }}.jpg"
                    class="my-4 px-3 hover:scale-110 duration-500 h-32 w-full object-center object-cover" alt="">
                <div class="flex justify-between text-black items-center">
                    <h1 class="font-quantico font-bold w-fit">{{ $item->price }}</h1>
                    <i class="fa-solid fa-cart-plus cursor-pointer hover:text-orange-700"></i>
                </div>
            </div>
        @endforeach
    </div>
    <a href="/firearms"
        class="absolute right-[10%] -mt-1 hover:tracking-wider duration-300 bottom-10 font-poppins italic text-sm inline-block">Check
        All<i class="fa-solid fa-angle-right pl-2 text-xs"></i></a>
</div>
