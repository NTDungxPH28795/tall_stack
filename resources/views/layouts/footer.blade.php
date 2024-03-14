<footer class="sm:mt-56 mt-32 bg-gray-900">
    <div class="lg:py-32 lg:px-8 sm:py-24 py-16 px-6 max-w-7xl mx-auto">
      <div class="xl:gap-8 xl:grid xl:grid-cols-3	">
        <svg viewBox="0 0 47 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-7">
          <path fill="#6366f1" d="M23.5 6.5C17.5 6.5 13.75 9.5 12.25 15.5C14.5 12.5 17.125 11.375 20.125 12.125C21.8367 12.5529 23.0601 13.7947 24.4142 15.1692C26.6202 17.4084 29.1734 20 34.75 20C40.75 20 44.5 17 46 11C43.75 14 41.125 15.125 38.125 14.375C36.4133 13.9471 35.1899 12.7053 33.8357 11.3308C31.6297 9.09158 29.0766 6.5 23.5 6.5ZM12.25 20C6.25 20 2.5 23 1 29C3.25 26 5.875 24.875 8.875 25.625C10.5867 26.0529 11.8101 27.2947 13.1642 28.6693C15.3702 30.9084 17.9234 33.5 23.5 33.5C29.5 33.5 33.25 30.5 34.75 24.5C32.5 27.5 29.875 28.625 26.875 27.875C25.1633 27.4471 23.9399 26.2053 22.5858 24.8307C20.3798 22.5916 17.8266 20 12.25 20Z"/>
          <defs>
              <linearGradient id="%%GRADIENT_ID%%" x1="33.999" x2="1" y1="16.181" y2="16.181"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="%%GRADIENT_TO%%" />
                  <stop offset="1" stop-color="%%GRADIENT_FROM%%" />
              </linearGradient>
          </defs>
      </svg> 
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