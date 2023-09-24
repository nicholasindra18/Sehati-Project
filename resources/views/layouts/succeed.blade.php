<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/succeed.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" /> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Lora:wght@500&display=swap" rel="stylesheet">
    <title>Bake & Take | {{ $title }}</title>
</head>
<body>
    <div class="container">
        @yield('container')
    </div>
</body>
</html>