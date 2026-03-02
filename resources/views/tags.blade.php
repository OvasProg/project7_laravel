<x-layout>
    <x-slot:title>
        Tags Base
    </x-slot:title>

    <div class="max-w-3xl mx-auto px-6 py-12">

        <!-- Page Header -->
        <h1 class="text-4xl font-bold text-gray-800 mb-6">
            List of All Tags
        </h1>

        <p class="text-gray-600 text-lg leading-relaxed mb-10">
            Browse all available tags currently stored in the system.
        </p>

        <!-- Tags List -->
        <div class="space-y-6 mb-14">

            @forelse ($tags as $tag)
                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">

                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">
                        {{ $tag->name }}
                    </h2>

                    <p class="text-gray-600 mb-2">
                        Tag ID:
                        <span class="text-blue-600 font-semibold">
                            {{ $tag->id }}
                        </span>
                    </p>

                    <div class="mt-4">
                        <a href="/tags/{{ $tag->id }}" class="text-blue-600 font-medium hover:underline">
                            View Tag →
                        </a>
                    </div>

                </div>

            @empty

                <div class="bg-gray-100 border border-gray-200 rounded-xl p-6 text-center">
                    <p class="text-gray-600 mb-2">No tags found.</p>
                    <p class="text-gray-500 text-sm">
                        You can add tags through database or admin panel.
                    </p>
                </div>
            @endforelse

        </div>

    </div>

</x-layout>
