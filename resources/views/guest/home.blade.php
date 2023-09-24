@extends('layouts.main')

@section('container')
  @include('components.guest-navbar')
  <div class="guest-first" id="guest">
    <div class="guest-first-text">
      <h3>LET'S APPLY A HEALTHY LIFE FOR <br/>THE FUTURE</h3>
      <p color="#000000">Having a legitimate life is everyone's dream because health cannot be paid for by <br/>exercise even money a the same time. with us, as healthy life will be easily <br> realized with out reliable doctors</p>
    </div>
    <div class="start">
      <a href="/login"><button class="start-btn">Let's Start <img src="{{ asset('assets/telegram.png') }}" alt="" width="33px" height="33px"></button></a>
    </div>
    <div class="guest-first-img">
      <img src="{{ asset('assets/Guest/1.jpg') }}" alt="Kue 1" width="265px" height="310px">
      <img src="{{ asset('assets/Guest/2.jpg') }}" alt="Kue 4" width="255px" height="215px">
      <img src="{{ asset('assets/Guest/3.jpg') }}" alt="Kue 3" width="255px" height="215px">
      <img src="{{ asset('assets/Guest/4.jpg') }}" alt="Kue 2" width="265px" height="310px">
    </div>
  </div>
  <div class="guest-second" id="gallery">
    <div class="guest-second-text">
      <h3>Our Point Selling</h3>
      <p>Sehatin can give you the best option for your health</p>
    </div>
    <br>
    <div class="obat-year-container">
      <button type="button" class="obat-year2022"><span class="dot2022">&#9679;</span> Doctors</button>
      <button type="button" class="obat-year2021"><span class="dot2021">&#9679;</span> Medicine</button>
      <button type="button" class="obat-year2020"><span class="dot2020">&#9679;</span> Hospital</button>
      <button type="button" class="obat-year2019"><span class="dot2019">&#9679;</span> treatment</button>
    </div>
    <br>
    <div class="obat-year2022-img">
      <img class="obat1" src="{{ asset('assets/Doctors/10.jpg') }}" alt="kue1" width="280px" height="250px">
      <img class="obat2" src="{{ asset('assets/Doctors/11.jpg') }}" alt="kue2" width="280px" height="250px">
      <img class="obat3" src="{{ asset('assets/Doctors/12.jpg') }}" alt="kue3" width="280px" height="250px">
      <img class="obat4" src="{{ asset('assets/Doctors/13.jpg') }}" alt="kue4" width="280px" height="280px">
      <img class="obat5" src="{{ asset('assets/Doctors/14.jpg') }}" alt="kue5" width="280px" height="280px">
      <img class="obat6" src="{{ asset('assets/Doctors/15.jpg') }}" alt="kue6" width="280px" height="280px">
    </div>
    <div class="obat-year2021-img">
      <img class="obat1" src="{{ asset('assets/Medicine/obat 3.jpg') }}" alt="kue1" width="300px" height="250px">
      <img class="obat2" src="{{ asset('assets/Medicine/obat 4.jpg') }}" alt="kue2" width="300px" height="250px">
      <img class="obat3" src="{{ asset('assets/Medicine/obat 5.jpeg') }}" alt="kue3" width="300px" height="250px">
      <img class="obat4" src="{{ asset('assets/Medicine/obat 6.jpg') }}" alt="kue4" width="300px" height="280px">
      <img class="obat5" src="{{ asset('assets/Medicine/obat7.jpg') }}" alt="kue5" width="300px" height="280px">
      <img class="obat6" src="{{ asset('assets/Medicine/obat 8.jpeg') }}" alt="kue6" width="300px" height="280px">
    </div>
    <div class="obat-year2020-img">
      <img class="obat1" src="{{ asset('assets/hospital/rs1.jpg') }}" alt="kue1" width="300px" height="250px">
      <img class="obat2" src="{{ asset('assets/hospital/rs2.jpg') }}" alt="kue2" width="300px" height="250px">
      <img class="obat3" src="{{ asset('assets/hospital/rs3.jpeg') }}" alt="kue3" width="300px" height="250px">
      <img class="obat4" src="{{ asset('assets/hospital/rs4.jpg') }}" alt="kue4" width="300px" height="280px">
      <img class="obat5" src="{{ asset('assets/hospital/rs5.jpeg') }}" alt="kue5" width="300px" height="280px">
      <img class="obat6" src="{{ asset('assets/hospital/rs6.jpg') }}" alt="kue6" width="300px" height="280px">
    </div>
    <div class="obat-year2019-img">
      <img class="obat1" src="{{ asset('assets/treatment/operasi1.jpg') }}" alt="kue1" width="300px" height="250px">
      <img class="obat2" src="{{ asset('assets/treatment/operasi2.jpg') }}" alt="kue2" width="300px" height="250px">
      <img class="obat3" src="{{ asset('assets/treatment/operasi3.jpg') }}" alt="kue3" width="300px" height="250px">
      <img class="obat4" src="{{ asset('assets/treatment/operasi4.jpg') }}" alt="kue4" width="300px" height="280px">
      <img class="obat5" src="{{ asset('assets/treatment/operasi5.jpg') }}" alt="kue5" width="300px" height="280px">
      <img class="obat6" src="{{ asset('assets/treatment/operasi6.jpg') }}" alt="kue6" width="300px" height="280px">
    </div>
  </div>

  <br>

  <div class="guest-third" id="guest-about-us">
    <img src="{{ asset('assets/Guest/bluelogo.jpg') }}" alt="About Us" width="350px">
    <div class="guest-third-text">
      <h3>"Not only serving also the story"</h3>
      <h5>&#9679; Sehati</h5>
      <p>Are you one of those who are starting a business or just have dreams of 
        <br/>becoming an entrepreneur? Yes, in doing business it takes courage to act. 
        <br/>Indeed, in every business that is carried out, there must be risks or impacts 
        <br/>that arise. Overcoming fear when starting a business is something that is 
        <br/>needed for a business person.</p>
      <div class="guestthird-exp-text">
        <div class="years-exp-text">
          <h3>5+</h3>
          <h5>Years Of Experience</h5>
        </div>
        <div class="become-sweet-text">
          <h3>200+</h3>
          <h5>Become well Every Day</h5>
        </div>
      </div>
    </div>
  </div>
  @include('components.footer')
@endsection