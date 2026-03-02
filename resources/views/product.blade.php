<x-layout>
    <x-slot:title>
        Product {{ $id }}
    </x-slot:title>

    <div class="max-w-3xl mx-auto px-6 py-14">

        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                Product Details
            </h1>

            <p class="text-lg text-gray-600">
                Detailed information about product with ID:
                <span class="text-blue-600 font-semibold">{{ $id }}</span>
            </p>
        </div>

        @if ($product)
            <!-- Product Card -->
            <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition">

                <h2 class="text-3xl font-bold text-gray-800 mb-6">
                    {{ $product->name }}
                </h2>

                <div class="space-y-4">

                    <p class="text-lg text-gray-600">
                        <span class="font-semibold text-gray-700">Product ID:</span>
                        {{ $product->id }}
                    </p>

                    <p class="text-lg text-gray-600">
                        <span class="font-semibold text-gray-700">Price:</span>
                        <span class="text-blue-600 font-bold">
                            ${{ number_format($product->price, 2) }}
                        </span>
                    </p>

                    <!-- Tags Section -->
                    <div class="text-lg text-gray-600">
                        <span class="font-semibold text-gray-700">Tags:</span>

                        <div class="mt-2 flex flex-wrap gap-2">
                            @forelse ($product->tags as $tag)
                                <a href="/tags/{{ $tag->id }}"
                                    class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm hover:bg-blue-200 transition">
                                    {{ $tag->name }}
                                </a>
                            @empty
                                <span class="text-gray-400 text-sm">
                                    No tags available
                                </span>
                            @endforelse

                        </div>
                    </div>


                </div>

                <!-- Action Area -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="/products" class="text-blue-600 font-medium hover:underline">
                        ← Back to products
                    </a>
                </div>

                <!-- Reviews Section -->
                <div class="mt-10 border-t pt-6">

                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                        Reviews ({{ $product->reviews->count() }})
                    </h2>

                    <!-- Reviews List -->
                    <div class="space-y-4 mb-8">

                        @forelse ($product->reviews as $review)
                            <div class="border rounded-xl p-4 bg-gray-50">
                                <p class="text-gray-700">
                                    {{ $review->content }}
                                </p>

                                <p class="text-sm text-blue-600 font-semibold mt-2">
                                    Rating: {{ $review->rating }}/5
                                </p>
                            </div>

                        @empty
                            <p class="text-gray-500">
                                No reviews yet.
                            </p>
                        @endforelse

                    </div>

                    <!-- Review Form -->
                    <form action="/products/{{ $product->id }}/reviews" method="POST" class="space-y-4">

                        @csrf

                        <textarea name="content" required class="w-full border rounded-lg p-3" placeholder="Write review..."></textarea>

                        <input type="number" name="rating" min="1" max="5" value="5"
                            class="w-full border rounded-lg p-3">

                        <button class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                            Submit Review
                        </button>

                    </form>

                </div>

            </div>
        @else
            <!-- Not Found Message -->
            <div class="bg-gray-100 border border-gray-200 rounded-xl p-10 text-center">

                <h2 class="text-2xl font-semibold text-gray-700 mb-3">
                    Product Not Found
                </h2>

                <p class="text-gray-500 mb-6">
                    The product you are looking for does not exist in the database.
                </p>

                <a href="/products" class="text-blue-600 font-medium hover:underline">
                    ← Return to products list
                </a>

            </div>
        @endif

    </div>

</x-layout>
