<article class="p-5 bg-white shadow rounded-lg">

    <div class="relative grid grid-cols-8 gap-1">


        {{-- Content --}}
        <div class="col-span-7 space-y-4 pl-3">
          {{-- Avatar --}}   
            <div class="col-span-4 mb-2">
              <div class="flex items-center space-x-3 cursor-pointer">
               
                  <x-user.avatar />
               
                <div class="font-semibold dark:text-white text-gray-900 text-lg">
                  <div class="cursor-pointer">Ujang</div>
                      {{-- Post Date --}}
                      <div class="flex items-center space-x-2">
                        <span class="text-xs text-gray-500">4 jam lalu</span>
                    </div>
                </div>
              
              </div>
            </div>
           
           
            <a href="{{ route('single') }}" class="space-y-2">
                <h2 class="text-xl tracking-wide hover:text-blue-400">This is the heading for the forum post</h2>
                <p class="text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime laboriosam quo recusandae tempora voluptatum dignissimos quidem nemo animi, repellendus saepe?
                </p>
            </a>

       

            {{-- Indicators --}}
            <div class="flex space-x-6">
                {{-- Comments Count --}}
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <span class="text-xs text-gray-500">20  komentar</span>
                </div>

                

                {{-- Views Count --}}
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span class="text-xs text-gray-500">125</span>
                </div>

                {{-- up/down vote --}}
                <div class="flex items-center space-x-2">
                    <ion-icon name="arrow-up-circle-outline" class="w-4 h-4 text-green-400"></ion-icon>
                    <span class="text-xs text-gray-500 pr-4">6</span>

                    <ion-icon name="arrow-down-circle-outline" class="w-4 h-4 text-red-400"></ion-icon>
                    <span class="text-xs text-gray-500">2</span>
                </div>
            </div>

             
        </div>
     {{-- Category --}}
     <div class=" absolute top-1 right-5 col-span-1 space-y-3 mr-3">
        <div>
            <a href="" class="p-1 text-sm text-white bg-indigo-400 rounded">
                Kategori satu
            </a>
        </div>
    </div>
    <div x-data="{ dropdownOpen: false }" class="absolute top-0 right-0 space-y-3 pt-0.5" >
        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white pt-1 focus:outline-none">
          <ion-icon name="ellipsis-vertical" class="h-5 w-5 text-gray-800"></ion-icon>
        </button>
      
        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-9"></div>
      
        <div x-show="dropdownOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute mt-2 py-2 w-36 bg-white rounded-md shadow-xl z-2">
          <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-green-500 hover:text-white">
            Transaksi selesai
          </a>
          <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
            Delete post
          </a>
          <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
            Edit post
          </a>
          <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
            Laporkan
          </a>
        </div>
    </div>
</article>
