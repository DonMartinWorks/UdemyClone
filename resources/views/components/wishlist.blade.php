<div x-data="{ menuWishlist: false }" class="relative" @click.away="menuWishlist = false">
    <svg @mouseover="menuWishlist = true" @click="menuWishlist = ! menuWishlist" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
        class="w-6 h-6 hover:text-udemy hover:cursor-pointer">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
    </svg>

    <div x-show="menuWishlist" class="absolute mt-8 right-0 w-[300px] border border-gray-300 divide-y divide-gray-300">
        <div>
            <a href="#" class="flex gap-3 p-4 pb-2">
                <img src="{{ asset('/assets/images/header/deseo/deseo1.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight line-clamp-2">
                        {{ fake()->sentence }}
                    </p>
                    <p class="my-1 text-xs text-gray-500">{{ fake()->name }}</p>
                    <div>
                        <span class="font-semibold mr-2">11,99 €</span>
                        <span class="text-gray-500 line-through">29,99 €</span>
                    </div>
                </div>
            </a>

            <div class="p-4 pt-0 text-center">
                <a href="#" class="block p-2 border border-primary font-semibold hover:bg-gray-100">
                    Añadir a la cesta
                </a>
            </div>
        </div>

        <div>
            <a href="#" class="flex gap-3 p-4 pb-2">
                <img src="{{ asset('/assets/images/header/deseo/deseo2.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight line-clamp-2">
                        {{ fake()->sentence }}
                    </p>
                    <p class="my-1 text-xs text-gray-500">
                        {{ fake()->name }}
                    </p>
                    <span class="font-semibold">219,99 €</span>
                </div>
            </a>

            <div class="p-4 pt-0 text-center">
                <a href="#" class="block p-2 border border-primary font-semibold hover:bg-gray-100">
                    Añadir a la cesta
                </a>
            </div>
        </div>

        <div class="p-4 text-center">
            <a href="#" class="block p-4 bg-primary hover:bg-primary-light text-white text-base">
                Ir a la lista de deseos
            </a>
        </div>
    </div>
</div>
