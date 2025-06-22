<x-app-layout>

    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <x-category-tab>
                No Categories
            </x-category-tab>
            <div class="overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 text-gray-900">
                    @forelse ($posts as $post)
                        <x-post-item :post="$post" />
                    @empty
                        <div class="text-center text-gray-900 py-10">
                            <p>No posts available.</p>
                        </div>
                    @endforelse

                </div>
                {{ $posts->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
