<footer class="sm:mt-56 mt-32 bg-gray-900">
    <div class="lg:py-32 lg:px-8 sm:py-24 py-16 px-6 max-w-7xl mx-auto">
      <div class="xl:gap-8 xl:grid xl:grid-cols-3	">
        <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" class="h-7" alt="">
        <div class="grid xl:mt-0 xl:col-span-2	gap-8 grid-cols-2	mt-16">
          <div class="md:gap-8 md:grid-cols-2	md:grid">
            <div x-data="{ items: ['Marketing', 'Analytics', 'Commerce', 'Insights'] }">
              <h3 class="text-white leading-6 text-sm font-semibold">Solutions</h3>
              <ul role="list" class="mt-6">
                <template x-for="item in items" :key="item">
                  <li class="mt-3"><a href="#" x-text="item" class="text-gray-300 text-sm leading-6 decoration-inherit"></a></li>
                </template>
              </ul>
            </div>
            <div class="md:mt-0 mt-10" x-data="{ items: ['Pricing', 'Documentation', 'Guides', 'API Status'] }">
              <h3 class="text-white leading-6 text-sm font-semibold">Support</h3>
              <ul role="list" class="mt-6">
                <template x-for="item in items" :key="item">
                  <li class="mt-3"><a href="#" x-text="item" class="text-gray-300 text-sm leading-6 decoration-inherit"></a></li>
                </template>
              </ul>
            </div>
          </div>
          <div class="md:gap-8 md:grid-cols-2	md:grid">
            <div x-data="{ items: ['About', 'Blog', 'Jobs', 'Press', 'Partners'] }">
              <h3 class="text-white leading-6 text-sm font-semibold">Company</h3>
              <ul role="list" class="mt-6">
                <template x-for="item in items" :key="item">
                  <li class="mt-3"><a href="#" x-text="item" class="text-gray-300 text-sm leading-6 decoration-inherit"></a></li>
                </template>
              </ul>
            </div>
            <div class="md:mt-0 mt-10" x-data="{ items: ['Claim', 'Privacy', 'Terms'] }">
              <h3 class="text-white leading-6 text-sm font-semibold">Legal</h3>
              <ul role="list" class="mt-6">
                <template x-for="item in items" :key="item">
                  <li class="mt-3"><a href="#" x-text="item" class="text-gray-300 text-sm leading-6 decoration-inherit"></a></li>
                </template>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>