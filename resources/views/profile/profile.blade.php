<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="p-3 my-4 text-gray-900 dark:text-gray-100 text-center dark:bg-gray-800 shadow-sm sm:rounded-lg mx-5">
            <h1 class="text-xl font-bold">Welcome, {{ auth()->user()->name }}</h1>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>Email : {{ auth()->user()->email }}</p>{{-- or =><p>Email : {{ auth()->user()->email }}</p>--}}
                    <h3>Your Products:</h3>
                    <ul class="list-disc text-gray-800 dark:text-gray-100 space-y-1 ms-6">
                        @foreach (auth()->user()->products as $product)
                            <li class="text-gray-800 dark:text-gray-100">{{ $product->name }} - ${{ $product->price }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
