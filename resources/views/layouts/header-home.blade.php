<div x-data="{ menuOpen: false }">
    <header class="z-50 top-0 inset-x-0	bg-gray-800">
      <nav class="lg:px-8 p-6 justify-between items-center flex ">
        <div class="lg:flex-1 flex">
          <a href="/" class="p-1.5 -m-1.5 decoration-inherit">
            <span class="t">Company</span>
            <img class="w-auto h-8 " src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">
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
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600" alt="">
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


    