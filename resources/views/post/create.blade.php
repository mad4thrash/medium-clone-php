<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--image -->
                    <div>
                        <x-input-label for="image" :value="__('Image')" />

                        <div class="mt-1">
                            <input type="file" id="image" name="image" class="hidden" accept="image/*"
                                onchange="updateFileName(this)">
                            <label for="image"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-3xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 cursor-pointer">
                                Choose Image
                            </label>
                            <span id="file-name" class="ml-3 text-sm text-gray-600">No file selected</span>
                        </div>

                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" required autofocus />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <!-- Content -->
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')" />
                        <x-text-textarea id="content" class="block mt-1 w-full" name="content" :value="old('content')"
                            required />
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>
                    <x-primary-button class="mt-4">
                        Submit
                    </x-primary-button>

                </form>
            </div>
        </div>
    </div>

    <script>
        function updateFileName(input) {
            const fileName = input.files[0] ? input.files[0].name : 'No file selected';
            document.getElementById('file-name').textContent = fileName;
        }
    </script>
</x-app-layout>
