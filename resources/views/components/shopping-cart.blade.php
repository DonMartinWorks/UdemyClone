<div x-data="{ menuCart: false }" class="relative" @click.away="menuCart = false">
    <div class="relative">
        <svg @mouseover="menuCart = true" @click="menuCart = ! menuCart" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            class="w-6 h-6 hover:text-udemy hover:cursor-pointer">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
        <div
            class="absolute inline-flex items-center justify-center w-5 h-5 bg-udemy-light text-white rounded-full text-xs font-medium -right-3 -top-3">
            2
        </div>
    </div>

    <div x-show="menuCart" class="absolute mt-8 right-0 w-[300px] border border-gray-300 divide-y divide-gray-300">
        <div>
            <a href="#" class="flex gap-3 p-4 pb-2">
                <img src="{{ asset('/assets/images/header/carrito/carrito1.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight line-clamp-2">
                        {{ fake()->sentence }}
                    </p>
                    <p class="my-1 text-xs text-gray-500 line-clamp-1">
                        {{ fake()->name }}
                    </p>
                    <div>
                        <span class="font-semibold mr-2">11,99 €</span>
                        <span class="text-gray-500 line-through">84,99 €</span>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="flex gap-3 p-4 pb-2">
                <img src="{{ asset('/assets/images/header/carrito/carrito2.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight line-clamp-2">
                        {{ fake()->sentence }}
                    </p>
                    <p class="my-1 text-xs text-gray-500">
                        {{ fake()->name }}
                    </p>
                    <div>
                        <span class="font-semibold mr-2">11,99 €</span>
                        <span class="text-gray-500 line-through">79,99 €</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="p-4 ">
            <span class="font-semibold text-lg">Total: 23,98 €</span>
            <span class="text-base text-gray-500 line-through">164,98 €</span>
            <a href="#" class="block mt-2 p-4 bg-primary hover:bg-primary-light text-white text-base text-center">
                Ir a la cesta
            </a>
        </div>
    </div>
</div>
