<x-layout>
    <x-slot:title>
        Products Base
    </x-slot:title>

    <div class="max-w-3xl mx-auto px-6 py-12">

        <h1 class="text-4xl font-bold text-gray-800 mb-6">
            Welcome to the Products Base Application
        </h1>

        <p class="text-gray-600 text-lg leading-relaxed mb-8">
            This application allows you to view and manage a simple collection of products.
            You can browse all available products, view detailed information about a specific product,
            and update product data using a form submission.
        </p>

        <div class="space-y-8">

            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">
                    Viewing All Products
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Navigate to
                    <a href="/products" class="font-medium text-blue-600">/products</a>
                    to see the full list of products currently stored in the system.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">
                    Viewing a Single Product
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Go to
                    <span class="font-medium text-blue-600">/products/{id}</span>,
                    where <span class="font-medium">{id}</span> is the product's unique identifier.
                    For example:
                    <a href="/products/1" class="font-medium text-blue-600">/products/1</a>.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">
                    Editing a Product
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    On the individual product page, you will find a form that allows you to edit
                    the product’s information. After modifying the fields, submit the form to send
                    a POST request and update the product data.
                </p>
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">
                    Application Structure
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    The application follows a basic MVC structure. Routes direct requests to controllers,
                    controllers interact with models or repositories, and views display the data
                    to the user.
                </p>
            </div>

        </div>

    </div>
</x-layout>
