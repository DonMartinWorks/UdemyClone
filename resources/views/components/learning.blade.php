<div x-data="{ menuMiAprendizaje: false }" class="relative" @click.away="menuMiAprendizaje = false">
    <div @mouseover="menuMiAprendizaje = true" @click="menuMiAprendizaje = ! menuMiAprendizaje"
        class="hover:text-udemy hover:cursor-pointer">
        Mi Aprendizaje
    </div>
    <div x-show="menuMiAprendizaje"
        class="absolute mt-8 right-0 w-[300px] border border-gray-300 divide-y divide-gray-300">
        <div>
            <a href="#" class="flex gap-3 p-4">
                <img src="{{ asset('/assets/images/header/aprendizaje/curso1.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight">
                        {{ fake()->sentence }}
                    </p>
                    <div class="mt-2 h-2 bg-gray-300">
                        <div class="h-2 bg-udemy w-[10%]"></div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="flex gap-3 p-4">
                <img src="{{ asset('/assets/images/header/aprendizaje/curso2.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight">
                        {{ fake()->sentence }}
                    </p>
                    <div class="mt-2 h-2 bg-gray-300">
                        <div class="h-2 bg-udemy"></div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="flex gap-3 p-4">
                <img src="{{ asset('/assets/images/header/aprendizaje/curso3.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight">
                        {{ fake()->sentence }}
                    </p>
                    <div class="mt-2 h-2 bg-gray-300">
                        <div class="h-2 bg-udemy w-[5%]"></div>
                    </div>
                </div>
            </a>
        </div>

        <div>
            <a href="#" class="flex gap-3 p-4">
                <img src="{{ asset('/assets/images/header/aprendizaje/curso4.jpg') }}" alt=""
                    class="h-16 w-16 object-cover">
                <div>
                    <p class="font-semibold leading-tight">
                        {{ fake()->sentence }}
                    </p>
                    <div class="mt-2 h-2 bg-gray-300">
                        <div class="h-2 bg-udemy w-1/4"></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="p-4 text-center">
            <a href="#" class="block p-4 bg-primary hover:bg-primary-light text-white text-lg">
                Ir a Mi Aprendizaje
            </a>
        </div>
    </div>
</div>
