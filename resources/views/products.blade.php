<x-layout>
    <x-slot:title>
        Products Base
    </x-slot:title>

    <div class="max-w-3xl mx-auto px-6 py-12">

        <!-- Page Header -->
        <h1 class="text-4xl font-bold text-gray-800 mb-6">
            List of All Products
        </h1>

        <p class="text-gray-600 text-lg leading-relaxed mb-10">
            Browse all available products currently stored in the system.
        </p>

        <!-- Products List -->
        <div class="space-y-6 mb-14">

            @forelse ($products as $product)
                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-md transition">

                    <h2 class="text-2xl font-semibold text-gray-800 mb-3">
                        {{ $product->name }}
                    </h2>

                    <p class="text-gray-600 mb-2">
                        Price:
                        <span class="text-blue-600 font-semibold">
                            ${{ number_format($product->price, 2) }}
                        </span>
                    </p>

                    <div class="mt-4">
                        <a href="/products/{{ $product->id }}" class="text-blue-600 font-medium hover:underline">
                            View Product →
                        </a>
                    </div>

                </div>

            @empty

                <div class="bg-gray-100 border border-gray-200 rounded-xl p-6 text-center">
                    <p class="text-gray-600 mb-2">No products found.</p>
                    <p class="text-gray-500 text-sm">
                        You can add products using the form below.
                    </p>
                </div>
            @endforelse

        </div>


        <!-- Add Product Form -->
        <div class="bg-white border border-gray-200 rounded-xl p-8 shadow-sm">

            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                Add New Product
            </h2>

            <form action="/products" method="POST" class="space-y-6">

                @csrf

                <!-- Product Name -->
                <div>
                    <label for="name" class="block text-gray-700 font-medium mb-2">
                        Product Name
                    </label>

                    <input type="text" id="name" name="name" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter product name">
                </div>

                <!-- Product Price -->
                <div>
                    <label for="price" lass="block text-gray-700 font-medium mb-2">
                        Product Price
                    </label>

                    <input type="number" id="price" step="1" name="price" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter product price">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                    Add Product
                </button>

            </form>

        </div>

    </div>

</x-layout>
