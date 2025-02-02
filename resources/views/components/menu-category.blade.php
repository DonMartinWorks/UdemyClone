<div x-data="{
    menuCategorias: false,
    menuCategoriasDesarrollo: false,
    menuCategoriasNegocios: false,
    menuCategoriasFinanzas: false,
    menuCategoriasDesarrolloDesarrolloWeb: false,
    menuCategoriasDesarrolloCiencias: false
}">
    <div class="hover:text-udemy hover:cursor-pointer" @click="menuCategorias = ! menuCategorias">Explorar</div>
    <div x-show="menuCategorias" class="absolute mt-8 grid grid-cols-3 min-h-[300px]">
        <div x-show="menuCategorias" class="w-[240px] border border-gray-300">
            <ul>
                <li @click="menuCategoriasDesarrollo = ! menuCategoriasDesarrollo"
                    @click.away="menuCategoriasDesarrollo = false"
                    class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Desarrollo
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li @click="menuCategoriasNegocios = ! menuCategoriasNegocios"
                    @click.away="menuCategoriasNegocios = false"
                    class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Negocios
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li @click="menuCategoriasFinanzas = ! menuCategoriasFinanzas"
                    @click.away="menuCategoriasFinanzas = false"
                    class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Finanzas y Contabilidad
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Informática y software
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Productividad en la oficina
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Desarrollo personal
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Diseño
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Marketing
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Estilo de vida
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Fotografía y vídeo
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Salud y Fitness
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="px-4 py-1 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Música
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
                <li class="p-4 flex items-center justify-between hover:cursor-pointer hover:text-udemy">
                    Enseñazas y disciplinas académicas
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </li>
            </ul>
        </div>
        <div x-show="menuCategoriasDesarrollo" class="border border-l-0 border-gray-300">
            <ul>
                <li @mouseover="menuCategoriasDesarrolloDesarrolloWeb = true"
                    @mouseout="menuCategoriasDesarrolloDesarrolloWeb = false"
                    class="p-4 hover:cursor-pointer hover:text-udemy">Desarrollo web</li>
                <li @mouseover="menuCategoriasDesarrolloCiencias = true"
                    @mouseout="menuCategoriasDesarrolloCiencias = false"
                    class="px-4 py-1 hover:cursor-pointer hover:text-udemy">Ciencias de la información</li>
                <li class="p-4 hover:cursor-pointer hover:text-udemy">Desarrollo móvil</li>
            </ul>
        </div>
        <div x-show="menuCategoriasNegocios" class="border border-l-0 border-gray-300">
            <ul>
                <li class="p-4 hover:cursor-pointer hover:text-udemy">Comunicación</li>
                <li class="px-4 py-1 hover:cursor-pointer hover:text-udemy">Emprendimiento</li>
                <li class="p-4 hover:cursor-pointer hover:text-udemy">Gestión Empresarial</li>
            </ul>
        </div>
        <div x-show="menuCategoriasFinanzas" class="p-4">
            <ul class="space-y-4">
                <li>Contabilidad</li>
                <li>Cumplimiento</li>
                <li>Criptomonedas</li>
            </ul>
        </div>
        <div x-show="menuCategoriasDesarrolloDesarrolloWeb" class="p-4 border border-l-0 border-gray-300">
            <ul class="space-y-4">
                <li class="font-medium">Temas populares</li>
                <li>JavaScript</li>
                <li>React JS</li>
                <li>Angular</li>
            </ul>
        </div>
        <div x-show="menuCategoriasDesarrolloCiencias" class="p-4 border border-l-0 border-gray-300">
            <ul class="space-y-4">
                <li class="font-medium">Temas populares</li>
                <li>Python</li>
                <li>Aprendizaje automático</li>
                <li>Aprendizaje profundo</li>
            </ul>
        </div>
    </div>
</div>
