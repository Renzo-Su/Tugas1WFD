@extends('layouts.app')

@section('title', $product['name'])

@section('content')
<div class="max-w-3xl mx-auto bg-white text-gray-900 p-8 rounded-lg shadow-2xl mt-20 border border-gray-300">
    <img src="/images/{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover rounded">
    <h1 class="text-4xl font-bold mt-4 text-yellow-500">{{ $product['name'] }}</h1>
    <p class="text-gray-600 mt-2">{{ $product['description'] }}</p>
    <p class="text-2xl font-bold text-yellow-500 mt-2">Harga: {{ $product['price'] }}</p>
    <a href="/catalog" class="block mt-6 bg-yellow-500 text-black py-3 text-center rounded hover:bg-yellow-400">Kembali ke Katalog</a>
</div>
@endsection
