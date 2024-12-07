<div class="bg-gray-100 shadow-sm rounded-lg hover:border hover:border-blue-400 p-1">
    <a href="/products">
        <div>
            <img src="{{asset('images/pexels.jpg')}}" alt="product-image" class="rounded object-cover" height="400px"
                 width="500px">
        </div>

        <div class="line-clamp-2 px-3">
            Alarms are saviours that help many of us wake up in the morning. But can this routine habit lead to
            increased
            blood pressure? When consultant neurologist Dr Sudhir Kumar, Apollo Hospitals, Hyderabad highlighted the
            same,
            we decided to take some notes.

            According to Dr Kumar, waking up to an alarm can result in a 74 percent increase in blood pressure (BP), as
            compared to those who wake up naturally (without an alarm), as per a study published in UVA School of
            Nursing.
        </div>

        <div>
            <div class="text-xl flex justify-between px-3 py-2">
            <span class="rounded-md bg-green-200 p-1">
                Outfit
            </span>
                <span>
                $2.99
            </span>

            </div>
        </div>

        <div class="px-3 py-2">
            <a class="group flex items-center rounded-lg border border-indigo-600 bg-indigo-600 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring"
               href="{{auth()->check() ? '/add/to/cart' : '/auth/login'}}">
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

    </a>

</div>
