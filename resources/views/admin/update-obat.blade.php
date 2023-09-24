@extends('layouts.main')

@section('container')
<div class="update-obat-form">
  <form action="/admin/update-obat/{{ $obat->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="update-obat-form-bar">
      <input type="text" name="obat_name" placeholder="Medicine Name..." autofocus value="{{ old('obat_name', $obat->obat_name) }}">
      @error('obat_name')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-obat-form-bar">
      <input type="text" name="obat_price" placeholder="Medicine Price..." value="{{ old('obat_price', $obat->obat_price) }}">
      @error('obat_price')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-obat-form-bar">
      <input type="text" name="obat_ingredients" placeholder="Medicine Ingredients..." value="{{ old('obat_ingredients', $obat->obat_ingredients) }}">
      @error('obat_ingredients')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-obat-form-bar">
      <input type="text" name="obat_description" placeholder="Medicine Description..." value="{{ old('obat_description', $obat->obat_description) }}">
      @error('obat_description')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-obat-form-bar">
      <select name="category_id" required>
        <option value="" disabled selected>Medicine Categories...</option>
        @foreach ($categories as $category)
          @if (old('category_id', $obat->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endif
        @endforeach
      </select>
      @error('category_id')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-obat-img">
      <img src="{{ Storage::url($obat->obat_photo)}}" class="obat-img-preview" alt="Gambar Kue" width="350px" height="350px">
      <input type="hidden" name="oldobatImage" value="{{ $obat->obat_photo }}">
    </div>
    <div class="update-obat-form-bar">
      <label for="obat_photo">Upload Medicine Photo </label>
      <input type="file" name="obat_photo" id="obat_photo" onchange="previewImage()">
      @error('obat_photo')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="update-btn">
      <button type="submit">Update</button>
    </div>
  </form>
</div>
@endsection