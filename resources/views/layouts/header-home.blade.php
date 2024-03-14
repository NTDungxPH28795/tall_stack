<div x-data="{ menuOpen: false }">
    <header class="z-50 top-0 inset-x-0	bg-gray-800">
      <nav class="lg:px-8 p-6 justify-between items-center flex ">
        <div class="lg:flex-1 flex">
          <a href="/" class="p-1.5 -m-1.5 decoration-inherit">
            <span class="t">Company</span>
            <svg viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-auto h-8">
              <path fill="#6366f1" d="M23.5 6.5C17.5 6.5 13.75 9.5 12.25 15.5C14.5 12.5 17.125 11.375 20.125 12.125C21.8367 12.5529 23.0601 13.7947 24.4142 15.1692C26.6202 17.4084 29.1734 20 34.75 20C40.75 20 44.5 17 46 11C43.75 14 41.125 15.125 38.125 14.375C36.4133 13.9471 35.1899 12.7053 33.8357 11.3308C31.6297 9.09158 29.0766 6.5 23.5 6.5ZM12.25 20C6.25 20 2.5 23 1 29C3.25 26 5.875 24.875 8.875 25.625C10.5867 26.0529 11.8101 27.2947 13.1642 28.6693C15.3702 30.9084 17.9234 33.5 23.5 33.5C29.5 33.5 33.25 30.5 34.75 24.5C32.5 27.5 29.875 28.625 26.875 27.875C25.1633 27.4471 23.9399 26.2053 22.5858 24.8307C20.3798 22.5916 17.8266 20 12.25 20Z"/>
              <defs>
                  <linearGradient id="%%GRADIENT_ID%%" x1="33.999" x2="1" y1="16.181" y2="16.181"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="%%GRADIENT_TO%%" />
                      <stop offset="1" stop-color="%%GRADIENT_FROM%%" />
                  </linearGradient>
              </defs>
          </svg>
          </a>
        </div>
        <div class="lg:hidden flex">
          <button x-on:click="menuOpen = !menuOpen" type="button" class="text-gray-400 p-2.5 inline-flex rounded-md	items-center justify-center	-m-2.5">
            <span x-show="menu" class="t">Company</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path></svg>
          </button>
        </div>
        <div class="lg:gap-x-12 lg:flex hidden">
          <a href="/product" class="text-white leading-6 text-sm decoration-inherit font-semibold">Product</a>
          <a href="/posts" class="text-white leading-6 text-sm decoration-inherit font-semibold">Post</a>
          <a href="/todos" class="text-white leading-6 text-sm decoration-inherit font-semibold">Todos</a>
          <a href="#" class="text-white leading-6 text-sm decoration-inherit font-semibold">Features</a>
          <a href="#" class="text-white leading-6 text-sm decoration-inherit font-semibold">Marketplace</a>
          <a href="#" class="text-white leading-6 text-sm decoration-inherit font-semibold">Company</a>
        </div>
        <div class="lg:justify-end lg:flex-1 lg:flex hidden">
          <a href="#" class="text-white font-semibold leading-6 text-sm decoration-inherit">Log in<span aria-hidden="true">→</span></a>
        </div>
      </nav>
      <div class="head"></div>
    </header>

    <div>
      <div x-show="menuOpen" x-on:click.away="menuOpen = false" class="fixed inset-0 z-50"></div>
      <div x-show="menuOpen" class="z-50 cit fixed sm:ring-1 sm:max-w-sm py-6 px-6 text-white overflow-y-auto	w-full z-50 right-0 inset-y-0 bg-white">
        <div class="justify-between items-center flex">
          <a href="#" class="p-1.5 -m-1.5 decoration-inherit">
            <span class="t">Your Company</span>
            {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt=""> --}}
            <svg viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-auto">
              <path fill="#6366f1" d="M23.5 6.5C17.5 6.5 13.75 9.5 12.25 15.5C14.5 12.5 17.125 11.375 20.125 12.125C21.8367 12.5529 23.0601 13.7947 24.4142 15.1692C26.6202 17.4084 29.1734 20 34.75 20C40.75 20 44.5 17 46 11C43.75 14 41.125 15.125 38.125 14.375C36.4133 13.9471 35.1899 12.7053 33.8357 11.3308C31.6297 9.09158 29.0766 6.5 23.5 6.5ZM12.25 20C6.25 20 2.5 23 1 29C3.25 26 5.875 24.875 8.875 25.625C10.5867 26.0529 11.8101 27.2947 13.1642 28.6693C15.3702 30.9084 17.9234 33.5 23.5 33.5C29.5 33.5 33.25 30.5 34.75 24.5C32.5 27.5 29.875 28.625 26.875 27.875C25.1633 27.4471 23.9399 26.2053 22.5858 24.8307C20.3798 22.5916 17.8266 20 12.25 20Z"/>
              <defs>
                  <linearGradient id="%%GRADIENT_ID%%" x1="33.999" x2="1" y1="16.181" y2="16.181"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="%%GRADIENT_TO%%" />
                      <stop offset="1" stop-color="%%GRADIENT_FROM%%" />
                  </linearGradient>
              </defs>
          </svg>
          </a>
          <button x-on:click="menuOpen = false" type="button" class="text-gray-700 p-2.5 rounded-md -m-2.5">
            <span class="t">Close menu</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div class="flow-root mt-6">
          <div class="-my-6 acc ack">
            <div class="py-6 abs">
              <a href="/product" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Product</a>
              <a href="/posts" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Post</a>
              <a href="/todos" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Todos</a>
              <a href="#" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Features</a>
              <a href="#" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Marketplace</a>
              <a href="#" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="text-gray-900 leading-7 font-semibold text-base py-2 px-3 block decoration-inherit rounded-lg -mx-3">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


    