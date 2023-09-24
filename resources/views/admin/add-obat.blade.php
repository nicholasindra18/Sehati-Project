@extends('layouts.main')

@section('container')
<div class="add-obat-form">
  <form action="/admin/add-obat" method="post" enctype="multipart/form-data">
    @csrf
    <div class="add-obat-form-bar">
      <input type="text" name="obat_name" placeholder="Medicine Name..." autofocus value="{{ old('obat_name') }}">
      @error('obat_name')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_price" placeholder="Medicine Price..." value="{{ old('obat_price') }}">
      @error('obat_price')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_ingredients" placeholder="Medicine Ingredients..." value="{{ old('obat_ingredients') }}">
      @error('obat_ingredients')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-obat-form-bar">
      <input type="text" name="obat_description" placeholder="Medicine Description..." value="{{ old('obat_description') }}">
      @error('obat_description')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-obat-form-bar">
      <select name="category_id" required>
        <option value="" disabled selected>Medicine Categories...</option>
        @foreach ($categories as $category)
          @if (old('category_id') == $category->id)
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
    <div class="add-obat-form-bar">
      <label for="obat_photo">Upload Medicine Photo </label><br>
      <input type="file" name="obat_photo" id="obat_photo">
      @error('obat_photo')
        <div class="invalid-msg">{{ $message }}</div>
      @enderror
    </div>
    <div class="add-btn">
      <button type="submit">ADD</button>
    </div>
  </form>
</div>
@endsection