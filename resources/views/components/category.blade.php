<div class="px-20 my-16 ">
    <h1 class="font-poppins text-3xl mb-12 font-bold">Choose Firearms for Your Needs</h1>
    <div class="flex gap-12">
        @foreach ($data as $item)
            <div class="w-full h-72 bg-zinc-200 group relative cursor-pointer">
                <img src="/{{ str_replace(' ', '', $item->function_name) }}.jpg"
                    class="h-full w-full object-cover object-center group-hover:grayscale-0 grayscale duration-500"
                    alt="">
                <h1 class="font-quantico italic capitalize">{{ $item->function_name }}</h1>
            </div>
        @endforeach
    </div>
</div>
