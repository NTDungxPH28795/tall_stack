<div class="lg:px-8 sm:mt-56 sm:px-6 bg-white isolate relative">
    <div class="absolute blur-3xl filter px-36 overflow-hidden trans -z-10 -top-3 inset-x-0" aria-hidden="true">
      <div class="mx-auto mi te bg-gradient-to-tr to-purple-600 from-pink-200 opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%);"></div>
    </div>
    <div class="lg:max-w-4xl text-center mx-auto sm:max-w-2xl">
      <h2 class="text-indigo-600 leading-7 font-semibold text-base">Pricing</h2>
      <p class="sm:text-5xl text-gray-900 tracking-tight font-bold mt-2">The right price for you, whoever you are</p>
    </div>
    <p class="text-gray-600 leading-8 text-lg text-center max-w-2xl mx-auto">Qui iusto aut est earum eos quae. Eligendi est at nam aliquid ad quo reprehenderit in aliquid fugiat dolorum voluptatibus.</p>
      <div class="grid lg:grid-cols-2 lg:max-w-4xl sm:gap-x-0 mt-20 gap-x-6 items-center mx-auto grid-cols-1 max-w-lg mt-16">
      <div class="lg:rounded-tr-none lg:rounded-l-3xl lg:mx-0 sm:p-10 sm:rounded-b-none sm:mx-8 p-8 ring-1 ring-color-g" x-data="{ items: ['25 products', 'Up to 10,000 subscribers', 'Advanced analytics', '24-hour support response time'] }">
        <h3 class="text-indigo-600 font-semibold leading-7 text-base">Hobby</h3>
        <p class="flex gap-x-2 items-baseline	mt-4">
          <span class="text-gray-900 tracking-tight font-bold text-5xl">$19</span>
          <span class="text-base text-gray-500">/month</span>
        </p>
        <p class="text-gray-600	leading-7 text-base mt-6">The perfect plan if you're just getting started with our product.</p>
        <ul role="list" class="sm:mt-10 text-gray-600 leading-6 text-sm mt-8 ">
          <template x-for="item in items" :key="item">
            <li class="gap-x-3 flex mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="text-indigo-600 flex-none w-5 h-6"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path></svg>
              <p x-text="item"></p>
            </li>
          </template>
        </ul>
        <a href="#" aria-describedby="tier-hobby" class="sm:mt-10 ring-indigo-200	ring-inset ring-1 text-indigo-600 font-semibold text-sm text-center py-2.5 px-3.5 rounded-md block mt-8 decoration-inherit	">Get started today</a>
      </div>
        <div class="sm:p-10	ring-1 shadow-2xl	p-8 bg-gray-900 rounded-3xl	relative ring-color-g" x-data="{ items: ['Unlimited products', 'Unlimited subscribers', 'Advanced analytics', 'Dedicated support representative', 'Marketing automations', 'Custom integrations'] }">
        <h3 class="text-indigo-400 leading-7 font-semibold text-base ">Enterprise</h3>
        <p class="flex gap-x-2 items-baseline mt-4 ">
          <span class="text-white tracking-tight font-bold text-5xl">$49</span>
          <span class="text-gray-400 text-base">/month</span>
        </p>
        <p class="text-gray-300 leading-7 text-base mt-6">Dedicated support and infrastructure for your company.</p>
        <ul role="list" class="sm:mt-10 text-gray-300 leading-6 text-sm mt-8 ">
          <template x-for="item in items" :key="item">
            <li class="flex gap-x-3 mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="text-indigo-400	flex-none w-5 h-6"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path></svg>
              <p x-text="item"></p>
            </li>
          </template>
        </ul>
        <a href="#" aria-describedby="tier-enterprise" class="sm:mt-10 text-white shadow-sm font-medium text-sm text-center py-2.5 px-3.5 bg-indigo-500 rounded-md	block mt-8 decoration-inherit">Get started today</a>
      </div>
    </div>
  </div>