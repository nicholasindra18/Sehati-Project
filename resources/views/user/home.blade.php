@extends('layouts.main')

@section('container')
  @include('components.user-home-navbar')
  <div class="slideshow-container" id="home">
    <div class="mySlides fade">
      <img src="{{ asset('assets/User/Carousel/Carousel/rs1.jpg')  }}" class="gambar">
    </div>
    <div class="mySlides fade">
      <img src="{{ asset('assets/User/Carousel/Carousel/operasi2.jpg')  }}" class="gambar">
    </div>
    <div class="mySlides fade">
      <img src="{{ asset('assets/User/Carousel/Carousel/obat 5.jpeg')  }}" class="gambar">
    </div>
    <div class="mySlides fade">        
        <img src="{{ asset('assets/User/Carousel/Carousel/rs6.jpg')  }}" class="gambar">
    </div>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

  <div class="view-category" id="category">
    <div class="view-category-title">
      <h1>Category</h1>
    </div>
    <div class="view-categoryBtn-container">
      <button class="chocolate">Light</button>
      <button class="cheese">Medium</button>
      <button class="strawberry">Strong</button>
    </div>
    <div class="add-obat-products">
      <div class="all-products-container" id="chocolate">
        @foreach ($chocolates as $chocolate)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $chocolate->id }}"><img src="{{ Storage::url($chocolate->obat_photo)}}" alt="gambar kue" width="307px" height="257px" class="img-single-obat"></a>
            <div class="single-product-name">{{ $chocolate->obat_name }}</div>
            <div class="single-product-desc">{{ $chocolate->excerpt }}</div>
          </div>
        @endforeach
      </div>
      <div class="all-products-container" id="cheese">
        @foreach ($cheeses as $cheese)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $cheese->id }}"><img src="{{ Storage::url($cheese->obat_photo)}}" alt="gambar kue" width="307px" height="257px" class="img-single-obat"></a>
            <div class="single-product-name">{{ $cheese->obat_name }}</div>
            <div class="single-product-desc">{{ $cheese->excerpt }}</div>
          </div>
        @endforeach
      </div>
      <div class="all-products-container" id="strawberry">
        @foreach ($strawberrys as $strawberry)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $strawberry->id }}"><img src="{{ Storage::url($strawberry->obat_photo)}}" alt="gambar kue" width="307px" height="257px" class="img-single-obat"></a>
            <div class="single-product-name">{{ $strawberry->obat_name }}</div>
            <div class="single-product-desc">{{ $strawberry->excerpt }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="view-all-product" id="menu">
    <div class="view-all-product-title">
      <h1>Love and Passion All In Our Medicine</h1>
      <h4>Sehati now provides a ready good medicine and can make you and your family well again</h4>
    </div>
    <div class="add-obat-products">
      <div class="all-products-container">
        @foreach ($obats as $obat)
          <div class="single-product-container">
            <a href="/user/product-detail/{{ $obat->id }}"><img src="{{ Storage::url($obat->obat_photo)}}" alt="gambar kue" width="307px" height="257px" class="img-single-obat"></a>
            <div class="single-product-name">{{ $obat->obat_name }}</div>
            <div class="single-product-desc">{{ $obat->excerpt }}</div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="about-us" id="user-about-us">
    <div class="about-us-title">
      <h1>Our Nearby Hospital</h1>
    </div>
    <div class="map-responsive" style="margin-top: 70px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.46676492976!2d106.7793130142686!3d-6.201989462481232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sUniversitas%20Bina%20Nusantara%2C%20Kampus%20Anggrek!5e0!3m2!1sid!2sid!4v1654797674686!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </iframe>
    </div> 
    
    <!-- <div class="row-tentang-toko">
      <div class="column-tentang-toko">
        <a class="prev-slide" onclick="push(-1)">&#10094;</a>
        <img class="baker baker1" src="{{ asset('assets/baker/baker.jpg') }}" alt="" width="555px" height="400px">
        <img class="baker baker2" src="{{ asset('assets/baker/baker2.jpeg') }}" alt="" width="555px" height="400px"> 
        <a class="next-slide" onclick="push(1)">&#10095;</a>
      </div>
      <div class="deskripsi-toko">
         Welcome to our obat E-commerce store! We are passionate about bringing you the most delicious and beautifully crafted obats that are perfect for any occasion. Whether you're celebrating a birthday, a wedding, or simply treating yourself to something sweet, our obats are sure to satisfy your cravings and delight your taste buds. At our store, we use only the finest ingredients to create our obats, ensuring that each one is not only delicious but also of the highest quality. Our talented bakers and decorators work tirelessly to bring you a wide variety of obats in different flavors, shapes, and sizes, so you can find the perfect one for your special occasion.
      </div>
    </div> -->
  </div>
  @include('components.footer')
@endsection