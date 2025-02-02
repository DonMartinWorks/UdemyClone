<header class="py-3 px-6 flex items-center flex-wrap gap-6 text-sm">
    <img src="{{ asset('imgs/logo-udemy.svg') }}" alt="img" class="h-8">

    <!-- Categorias -->
    @include('components.menu-category')

    <!-- Search -->
    @include('components.search')

    <!-- Udemy Business -->
    @include('components.business')

    <!-- Instuctor -->
    <div class="hover:text-udemy">Instuctor</div>

    <!-- Mi Aprendizaje -->
    @include('components.learning')

    <!-- Heart Icon -->
    @include('components.wishlist')

    <!-- Shopping Cart Icon -->
    @include('components.shopping-cart')

    <!-- Bell Icon -->
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-6 h-6 hover:text-udemy">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
    </div>

    {{-- User Section --}}
    <div>
        <img src="{{ asset('imgs/avatar.svg') }}" alt="avatar" class="h-8 rounded-full border border-gray-300">
    </div>
</header>
