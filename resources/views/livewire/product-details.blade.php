<div>
    <div class="flex gap-2 p-20">
        <img src="{{asset('images/cake.jpg')}}" alt="product-image" class="rounded object-cover" height="300px"
             width="400px">
        <div>
            <span class="p-1 font-medium text-2xl line-clamp-2">Product Title</span>
            <span class="p-1 text-gray-500 line-clamp-4">Apple thinks 249 of my passwords need attention. Some of them have been reused. Some of them have been caught up in data breaches. Some are just bad passwords.
            That’s why, for the past 11 years, a group called the FIDO Alliance has been working to kill passwords — or at least make us less reliant on them. FIDO,
                short for Fast IDentity Online, wants to make signing into your accounts not only more secure but also, as the name implies, faster and easier.
                 </span>

            <div class="flex gap-10">
                <span class="rounded-md bg-green-200 p-1">
                    Outfit
                </span>
                <span>
                    $2.99
                </span>
            </div>

            <div class="flex pt-16">
                <a class="group flex items-center rounded-lg border border-indigo-600 bg-indigo-600 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring p-3"
                   href="#">
                     <span
                         class="font-medium text-white transition-colors group-hover:text-indigo-600 group-active:text-indigo-500 flex w-full justify-center gap-2">

                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="size-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
                        </svg>
                                  Add to Cart
                        </span>
                </a>
            </div>
        </div>
    </div>

    <div class="my-5 px-20 pt-5">
        <span class="text-2xl font-medium">Related Products</span>
        <livewire:product-list/>
    </div>
</div>
