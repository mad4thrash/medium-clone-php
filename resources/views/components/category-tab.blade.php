            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <ul
                        class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-3xl active"
                                aria-current="page">All</a>
                        </li>
                        @forelse ($categories as $category)
                            <li class="me-2">
                                <a href="#"
                                    class="inline-block px-4 py-2 rounded-3xl hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white"
                                    aria-current="page">{{ $category->name }}</a>
                            </li>
                        @empty
                            {{ $slot }}
                        @endforelse
                    </ul>

                </div>
            </div>
