<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }} <!-- Changed from Products to Product Details for clarity -->
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $product->name }}</h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $product->description }}</p>
                    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2">
                        <div class="px-4 py-5 bg-white space-y-2 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500">Code</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $product->code }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white space-y-2 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500">Quantity</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $product->quantity }}</dd>
                        </div>
                        <div class="px-4 py-5 bg-white space-y-2 sm:p-6">
                            <dt class="text-sm font-medium text-gray-500">Price</dt>
                            <dd class="mt-1 text-sm text-gray-900">${{ number_format($product->price, 2) }}</dd>
                        </div>
                    </dl>
                    <div class="mt-5 flex">
                        <a href="{{ route('products.index') }}" class="text-indigo-600 hover:text-indigo-900">Back to
                            products</a>
                        <a href="{{ route('products.edit', $product->id) }}"
                            class="ml-4 text-indigo-600 hover:text-indigo-900">Edit the product</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-4 text-indigo-600 hover:text-indigo-900"
                                onclick="return confirm('Are you sure?')">Delete the product</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
