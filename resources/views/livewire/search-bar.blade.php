<div id="search-bar-container" class="flex md:order-2">
    <form role="search">
        <!-- Button which will be shown only when navbar is collapsed -->
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false"
            class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">{{ __('Search') }}</span>
        </button>

        <div class="relative hidden md:block">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">{{ __('Search icon') }}</span>
            </div>
            <input wire:model.live="searchTerm" type="search" id="search-navbar" aria-label="Search"
                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{ __('Search') }}...">
        </div>

        <button data-collapse-toggle="navbar-search" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-search" aria-expanded="false">
            <span class="sr-only">{{ __('Open main menu') }}</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        @foreach ($results as $resultClass)
            @if (isset($resultClass['products']) && $resultClass['products'] > 0)
                @foreach ($resultClass['products'] as $product)
                    <a href="/producto/{{ $product->slug }}">
                        <div class="ml-5 my-2">
                            <span>{{ $product->name }}</span>
                        </div>

                    </a>
                @endforeach
            @endif

            @if (isset($resultClass['complements']) && $resultClass['complements'] > 0)
                @foreach ($resultClass['complements'] as $product)
                    <a href="/complemento/{{ $product->slug }}">
                        <div class="ml-5 my-2">
                            <span>{{ $product->name }}</span>
                        </div>

                    </a>
                @endforeach
            @endif

            @if (isset($resultClass['spare-parts']) && $resultClass['spare-parts'] > 0)
                @foreach ($resultClass['spare-parts'] as $product)
                    <a href="/pieza-de-repuesto/{{ $product->slug }}">
                        <div class="ml-5 my-2">
                            <span>{{ $product->name }}</span>
                        </div>

                    </a>
                @endforeach
            @endif
        @endforeach
    </form>
</div>
