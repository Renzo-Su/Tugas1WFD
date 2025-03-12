@extends('layouts.app')

@section('title', 'Catalog')

@section('content')
<h1 class="text-4xl font-bold mb-8 text-center text-yellow-500">Kucing yang Tersedia</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
    @foreach ($products as $product)
        <div class="bg-white text-gray-900 p-6 rounded-lg shadow-xl border border-gray-300 hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="/images/{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-80 object-cover rounded">
            <h2 class="text-2xl font-bold mt-4 text-yellow-500">{{ $product['name'] }}</h2>
            <p class="text-gray-600">{{ $product['description'] }}</p>
            <a href="/product/{{ $product['id'] }}" class="block mt-4 bg-yellow-500 text-black py-3 text-center rounded hover:bg-yellow-400">View Details</a>
        </div>
    @endforeach
</div>
@endsection