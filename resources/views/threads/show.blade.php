<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav />

        <section class="flex flex-col col-span-3 gap-y-4">
            <nav class="bg-grey-light rounded-md w-full">
                <ol class="list-reset flex">
                  <li><a href="#" class="text-yellow-600 hover:text-yellow-700">Kategori</a></li>
                  <li><span class="text-gray-500 mx-2">></span></li>
                  <li><a href="#" class="text-yellow-600 hover:text-yellow-700">Dikusi</a></li>
                  <li><span class="text-gray-500 mx-2">></span></li>
                  <li class="text-gray-500">Topik</li>
                </ol>
              </nav>

            <article class="p-5 bg-white shadow rounded-lg">
                <div class="grid grid-cols-8">

                    
                   

                    {{-- Thread --}}
                    <div class="col-span-8 space-y-6 ml-3  pr-3">
                        <div class="space-y-3 ">

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

                            <h2 class="text-xl tracking-wide hover:text-blue-400">This is the heading for the forum post</h2>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum beatae quod eligendi consequatur omnis sequi veritatis quidem reiciendis asperiores sint illum debitis quam voluptates, nemo rem consectetur dolor error neque fuga nobis est magnam! Pariatur illum enim nobis laboriosam suscipit dolore aperiam aut. Id maiores debitis voluptatem esse expedita ullam!
                            </p>
                            <p class="text-gray-500">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum beatae quod eligendi consequatur omnis sequi veritatis quidem reiciendis asperiores sint illum debitis quam voluptates, nemo rem consectetur dolor error neque fuga nobis est magnam! Pariatur illum enim nobis laboriosam suscipit dolore aperiam aut. Id maiores debitis voluptatem esse expedita ullam!
                            </p>
                        </div>

                        <div class="flex justify-between">

                            {{-- Likes --}}
                            <div class="flex space-x-5 text-gray-500">
                                <a href="" class="flex items-center space-x-2">
                                    <x-heroicon-s-arrow-circle-up class="w-5 h-5 text-green-300" />
                                    <span class="text-xs font-bold text-green-300">upvote</span>
                                </a>
                                <a href="" class="flex items-center space-x-2">
                                    <x-heroicon-s-arrow-circle-down class="w-5 h-5 text-red-400" />
                                    <span class="text-xs font-bold text-red-400">downvote</span>
                                </a>
                            </div>

                          
                            {{-- Date Posted --}}
                            <div class="flex items-center text-xs text-gray-500">
                                <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                                Dikirim: 4 jam lalu
                            </div>


                            {{-- Reply --}}
                            <a href="" class="flex items-center space-x-2 text-gray-500">
                                <x-heroicon-o-reply class="w-5 h-5" />
                                <span class="text-sm">Balas</span>
                            </a>
                            
                            {{-- Report --}}
                            
                                
                                <button type="button" class="flex items-center space-x-1 text-gray-500" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    <x-heroicon-s-exclamation-circle class="w-4 h-4" />
                                    <span class="text-sm">Laporkan</span>
                                </button>

                        </div>
                    </div>
                </div>
            </article>

            {{-- Replies --}}

            <div class="p-5 space-y-4 text-gray-500 bg-white border-l border-yellow-300 shadow rounded-lg ml-3 pr-3">
                <div class="grid grid-cols-8">
                   
                       {{-- Avatar --}}
                       <div class="col-span-4 mb-2">
                        <div class="flex items-center space-x-3 cursor-pointer">                                
                            <button class="flex items-center text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                {{-- <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                                <img class="object-cover w-16 h-16 rounded-full" src="{{ asset('img/avatars/person4.jpg') }}" alt="Person One" />
                            </button>
                          <div class="font-semibold dark:text-white text-gray-900 text-lg">
                            <div class="cursor-pointer">Yuli</div>
                                {{-- Post Date --}}
                                <div class="flex items-center space-x-2">
                                  <span class="text-xs text-gray-500">4 jam lalu</span>
                              </div>
                          </div>
                        
                        </div>
                    </div>
                    
                    <div class="col-span-8 space-y-4 ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil tenetur alias maiores, sequi magni nam incidunt a beatae veritatis animi suscipit omnis ipsam, accusantium vitae impedit vero molestiae nostrum illo perspiciatis rerum? Recusandae dicta cumque nulla officiis explicabo aliquid nobis? Consectetur dicta fugiat quas amet corporis facere possimus asperiores harum?
                        </p>
                        <div class="flex justify-between">
                            {{-- Likes --}}
                            <div class="flex space-x-5 text-gray-500">
                                <a href="" class="flex items-center space-x-2">
                                    <x-heroicon-o-heart class="w-5 h-5 text-red-300" />
                                    <span class="text-xs font-bold">30</span>
                                </a>
                            </div>

                            {{-- Date Posted --}}
                            <div class="flex items-center text-xs text-gray-500 mr-4">
                                <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                                Dibalas: 2 menit lalu
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-5 space-y-4 bg-white shadow rounded-lg">
                <h2 class="text-gray-500">Post a reply</h2>
                <x-trix name="about" styling="bg-gray-100 shadow-inner h-40" />
            </div>

            {{-- Modal report--}}
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                  <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                      <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Modal title
                      </h5>
                      <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body relative p-4">
                      <p>This is a vertically centered modal.</p>
                    </div>
                    <div
                      class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                      <button type="button"
                        class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="button"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                        Save changes
                      </button>
                    </div>
                  </div>
                </div>
              </div>

        </section>
    </main>
</x-guest-layout>
