<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"/> --}}
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/guest/guest.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/guest/loginstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/guest/register.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/guest/forgot-password.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/guest/reset-password.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/user/user.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user/product-detail.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user/favorite.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user/transaction.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user/user-profile.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user/update-profile.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/user/change-password.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/admin/admin.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/admin/add-obat.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/admin/edit-obat.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/admin/update-obat.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/admin/delete-obat.css') }}">

  <title>Sehati | {{ $title }}</title>
</head>
<body>
  <div>
    @yield('container')
  </div>
</body>
<script src="{{ asset('jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</html>