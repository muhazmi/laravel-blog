<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $page_title }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  @include('front.layout.navbar')
  
  <div class="container">
    @yield('content')
  </div>
  
  @include('front.layout.footer')
</body>

</html>
