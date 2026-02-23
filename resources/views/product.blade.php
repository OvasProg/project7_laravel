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

                </div>

                <!-- Action Area -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="/products" class="text-blue-600 font-medium hover:underline">
                        ← Back to products
                    </a>
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
