<?php

use Illuminate\Support\Facades\Route;
Route::get('/catalog', function () {
    $products = [
        ['id' => 1, 'name' => 'Kucing Bengal', 'image' => 'kucing1.jpg', 'description' => 'Kucing bengal adalah keturunan keempat dari hasil persilangan antara kucing american shorthair dengan kucing asian leopard. Kucing ini berasal dari California, Amerika Serikat.'],
        ['id' => 3, 'name' => 'Kucing British Shorthair', 'image' => 'kucingbritshort.jpeg', 'description' => 'Kucing British Shorthair adalah salah satu ras kucing tertua yang nenek moyang dipercayai memiliki hubungan dengan bangsa Romawi yang pernah dahulu menguasai Inggris.'],
        ['id' => 4, 'name' => 'Kucing Sphinx', 'image' => 'kucingsphinx.jpg', 'description' => 'Kucing sphynx (dahulu bernama Canadian hairless) adalah salah satu ras kucing yang memiliki bulu sangat pendek dan sedikit sekali, kucing sphynx berasal dari Kanada.'],
        ['id' => 5, 'name' => 'Kucing Siam', 'image' => 'kucingsiam.webp', 'description' => 'Kucing siam adalah salah satu ras kucing pertama yang diakui jelas sebagai kucing berjenis oriental. Sesuai dengan namanya, kucing siam berasal dari negara Siam (sekarang Thailand), sehingga ras kucing ini sangat mudah ditemukan di negara Thailand.'],
        ['id' => 6, 'name' => 'Kucing munchkin', 'image' => 'kucingmunchkin.jpg', 'description' => 'Kucing munchkin adalah salah satu ras kucing berkaki pendek yang terbentuk karena mutasi genetik alami. Ras ini baru mulai dikembangbiakkan sekitar tahun 1980-an di Amerika Serikat, negara asalnya.'],
        ['id' => 2, 'name' => 'Kucing Domestik', 'image' => 'kucing2.jpg', 'description' => 'Kucing domestik adalah jenis kucing yang sering dipelihara sebagai hewan peliharaan di rumah. Nama ilmiahnya adalah Felis catus. Kucing domestik memiliki berbagai ras.']

    ];
    return view('catalog', compact('products'));
});

Route::get('/product/{id}', function ($id) {
    $products = [
        1 => ['name' => 'Kucing Bengal', 'image' => 'kucing1.jpg', 'description' => 'Kucing bengal adalah keturunan keempat dari hasil persilangan antara kucing american shorthair dengan kucing asian leopard. Kucing ini berasal dari California, Amerika Serikat.', 'price' => '$2500'],        3 => ['name' => 'Kucing British Shorthair', 'image' => 'kucingbritshort.jpeg', 'description' => 'Kucing British Shorthair adalah salah satu ras kucing tertua yang nenek moyang dipercayai memiliki hubungan dengan bangsa Romawi yang pernah dahulu menguasai Inggris.', 'price' => '$2000'],
        4 => ['name' => 'Kucing Sphinx', 'image' => 'kucingsphinx.jpg', 'description' => 'Kucing sphynx (dahulu bernama Canadian hairless) adalah salah satu ras kucing yang memiliki bulu sangat pendek dan sedikit sekali, kucing sphynx berasal dari Kanada.', 'price' => '$3000'],
        5 => ['name' => 'Kucing Siam', 'image' => 'kucingsiam.webp', 'description' => 'Kucing siam adalah salah satu ras kucing pertama yang diakui jelas sebagai kucing berjenis oriental. Sesuai dengan namanya, kucing siam berasal dari negara Siam (sekarang Thailand), sehingga ras kucing ini sangat mudah ditemukan di negara Thailand.', 'price' => '$3000'],
        6 => ['name' => 'Kucing munchkin', 'image' => 'kucingmunchkin.jpg', 'description' => 'Kucing munchkin adalah salah satu ras kucing berkaki pendek yang terbentuk karena mutasi genetik alami. Ras ini baru mulai dikembangbiakkan sekitar tahun 1980-an di Amerika Serikat, negara asalnya.', 'price' => '$3500'],
        2 => ['name' => 'Kucing Domestik', 'image' => 'kucing2.jpg', 'description' => 'Kucing domestik adalah jenis kucing yang sering dipelihara sebagai hewan peliharaan di rumah. Nama ilmiahnya adalah Felis catus. Kucing domestik memiliki berbagai ras.', 'price' => '$1299'],

    ];
    $product = $products[$id] ?? null;
    if (!$product) {
        abort(404);
    }
    return view('product', compact('product'));
});
Route::get('/', function () {
    return view('home');
});

Route::get('/catalog', function () {
    $products = [
        ['id' => 1, 'name' => 'Kucing Bengal', 'image' => 'kucing1.jpg', 'description' => 'Kucing bengal adalah keturunan keempat dari hasil persilangan antara kucing american shorthair dengan kucing asian leopard. Kucing ini berasal dari California, Amerika Serikat.'],
        ['id' => 3, 'name' => 'Kucing British Shorthair', 'image' => 'kucingbritshort.jpeg', 'description' => 'Kucing British Shorthair adalah salah satu ras kucing tertua yang nenek moyang dipercayai memiliki hubungan dengan bangsa Romawi yang pernah dahulu menguasai Inggris.'],
        ['id' => 4, 'name' => 'KucingSphinx', 'image' => 'kucingsphinx.jpg', 'description' => 'Kucing sphynx (dahulu bernama Canadian hairless) adalah salah satu ras kucing yang memiliki bulu sangat pendek dan sedikit sekali, kucing sphynx berasal dari Kanada.'],
        ['id' => 5, 'name' => 'Kucing Siam', 'image' => 'kucingsiam.webp', 'description' => 'Kucing siam adalah salah satu ras kucing pertama yang diakui jelas sebagai kucing berjenis oriental. Sesuai dengan namanya, kucing siam berasal dari negara Siam (sekarang Thailand), sehingga ras kucing ini sangat mudah ditemukan di negara Thailand.'],
        ['id' => 6, 'name' => 'Kucing munchkin', 'image' => 'kucingmunchkin.jpg', 'description' => 'Kucing munchkin adalah salah satu ras kucing berkaki pendek yang terbentuk karena mutasi genetik alami. Ras ini baru mulai dikembangbiakkan sekitar tahun 1980-an di Amerika Serikat, negara asalnya.'],
        ['id' => 2, 'name' => 'Kucing Domestik', 'image' => 'kucing2.jpg', 'description' => 'Kucing domestik adalah jenis kucing yang sering dipelihara sebagai hewan peliharaan di rumah. Nama ilmiahnya adalah Felis catus. Kucing domestik memiliki berbagai ras.']

    ];
    return view('catalog', compact('products'));
});

Route::get('/product/{id}', function ($id) {
    $products = [
        1 => ['name' => 'Kucing Bengal', 'image' => 'kucing1.jpg', 'description' => 'Kucing bengal adalah keturunan keempat dari hasil persilangan antara kucing american shorthair dengan kucing asian leopard. Kucing ini berasal dari California, Amerika Serikat.', 'price' => '$2500'],
        3 => ['name' => 'Kucing British Shorthair', 'image' => 'kucingbritshort.jpeg', 'description' => 'Kucing British Shorthair adalah salah satu ras kucing tertua yang nenek moyang dipercayai memiliki hubungan dengan bangsa Romawi yang pernah dahulu menguasai Inggris.', 'price' => '$2000'],
        4 => ['name' => 'Kucing Sphinx', 'image' => 'kucingsphinx.jpg', 'description' => 'Kucing sphynx (dahulu bernama Canadian hairless) adalah salah satu ras kucing yang memiliki bulu sangat pendek dan sedikit sekali, kucing sphynx berasal dari Kanada.', 'price' => '$3000'],
        5 => ['name' => 'Kucing Siam', 'image' => 'kucingsiam.webp', 'description' => 'Kucing siam adalah salah satu ras kucing pertama yang diakui jelas sebagai kucing berjenis oriental. Sesuai dengan namanya, kucing siam berasal dari negara Siam (sekarang Thailand), sehingga ras kucing ini sangat mudah ditemukan di negara Thailand.', 'price' => '$3000'],
        6 => ['name' => 'Kucing munchkin', 'image' => 'kucingmunchkin.jpg', 'description' => 'Kucing munchkin adalah salah satu ras kucing berkaki pendek yang terbentuk karena mutasi genetik alami. Ras ini baru mulai dikembangbiakkan sekitar tahun 1980-an di Amerika Serikat, negara asalnya.', 'price' => '$3500'],
        2 => ['name' => 'Kucing Domestik', 'image' => 'kucing2.jpg', 'description' => 'Kucing domestik adalah jenis kucing yang sering dipelihara sebagai hewan peliharaan di rumah. Nama ilmiahnya adalah Felis catus. Kucing domestik memiliki berbagai ras.', 'price' => '$1299']

    ];
    $product = $products[$id] ?? null;
    if (!$product) {
        abort(404);
    }
    return view('product', compact('product'));
});
