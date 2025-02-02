<div x-data="{ menuUdemyBusiness: false }" class="relative" @click.away="menuUdemyBusiness = false">
    <div @mouseover="menuUdemyBusiness = true" @click="menuUdemyBusiness = ! menuUdemyBusiness"
        class="hover:text-udemy hover:cursor-pointer">
        Udemy Business
    </div>

    <div x-show="menuUdemyBusiness" class="absolute mt-8 right-0 w-[300px] border border-gray-300 p-4 text-center">
        <span class="text-xl font-semibold">
            Dale a tu equipo acceso a más de 24.000 de los mejores cursos de Udemy en cualquie momento y lugar.
        </span>

        {{-- Botón --}}
        <a href="#" class="block mt-4 p-4 bg-primary hover:bg-primary-light text-white text-lg">
            Prueba Udemy Business
        </a>
    </div>
</div>
