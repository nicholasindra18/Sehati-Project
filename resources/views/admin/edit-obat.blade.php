@extends('layouts.main')

@section('container')
    @include('components.admin-navbar')
    <div class="main-container">
        <div class="product-container">
            <img src="{{ Storage::url($obat->obat_photo)}}" alt="Gambar Kue" width="350px" height="350px" class="img-kue">
            <div class="nama-kue">{{ $obat->obat_name }}</div>
            <div class="harga-kue">Rp.{{ $obat->obat_price }}</div>
            <div class="category-container">
                <div class="teks-category">Category</div>
                <div class="category-kue">{{ $obat->category->category_name }}</div>
            </div>
        </div>

        <div class="deskripsi-produk">
            <div>Ingredients: </div>
            <div class="deskripsi-bahan">{{ $obat->obat_ingredients }}</div>
            <div class="teks-deskripsi">Description: </div>
            <div class="paragraf-deskripsi">{{ $obat->obat_description }}</div>
        </div>

        <a href="/admin/update-obat/{{ $obat->id }}"><div class="edit-button">Edit</div></a>
    </div>
    @include('components.footer')
@endsection