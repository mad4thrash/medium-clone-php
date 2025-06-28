                       <div class="flex gap-2 items-center mb-8 bg-white rounded-2xl shadow-sm dark:bg-gray-800">
                           <div class="p-5 flex-1">
                               <a href="#">
                                   <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                       {{ $post->title }}</h5>
                               </a>
                               <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                   {{ Str::limit($post->content, 100, '...') }}
                               </p>
                               <a href="#">
                                   <x-primary-button>
                                       Read more
                                       <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                           xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                           <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                               stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                       </svg>
                                   </x-primary-button>
                               </a>
                           </div>
                           <a href="#">
                               <img class="rounded-2xl w-48 h-48 object-cover"
                                   src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                           </a>

                       </div>
