<x-layout>
    <x-slot:title>
        Tag {{ $tag->name }}
    </x-slot:title>

    <div class="max-w-3xl mx-auto px-6 py-14">

        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                Tag Details
            </h1>

            <p class="text-lg text-gray-600">
                Products associated with tag:
                <span class="text-blue-600 font-semibold">
                    {{ $tag->name }}
                </span>
            </p>
        </div>

        <!-- Tag Card -->
        <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition">

            <div class="space-y-4 mb-8">

                <p class="text-lg text-gray-600">
                    <span class="font-semibold text-gray-700">Tag ID:</span>
                    {{ $tag->id }}
                </p>

                <p class="text-lg text-gray-600">
                    <span class="font-semibold text-gray-700">Tag Name:</span>
                    {{ $tag->name }}
                </p>

            </div>

            <!-- Products Section -->
            <div class="border-t border-gray-200 pt-6">

                <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                    Products using this tag
                </h2>

                <div class="space-y-3">

                    @forelse ($tag->products as $product)
                        <a href="/products/{{ $product->id }}"
                            class="block p-4 border rounded-xl hover:bg-blue-50 transition">

                            <div class="font-semibold text-gray-800">
                                {{ $product->name }}
                            </div>

                            <div class="text-blue-600 font-bold">
                                ${{ number_format($product->price, 2) }}
                            </div>

                        </a>

                    @empty

                        <p class="text-gray-500">
                            No products associated with this tag yet.
                        </p>
                    @endforelse

                </div>
            </div>

            <!-- Back Link -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="/products" class="text-blue-600 font-medium hover:underline">
                    ← Back to products
                </a>
            </div>

        </div>
    </div>

</x-layout>
