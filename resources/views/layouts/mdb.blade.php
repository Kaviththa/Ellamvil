<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>laravel MDB</title>
  
  <link rel="icon" href="{{asset('img/mdb-favicon.ico')}}" type="image/x-icon">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('css/mdb.min.css') }}">
 
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>

        <main class="py-4">
            @yield('content')
        </main>

  
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
 
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
 
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  
  <script type="text/javascript" src="{{asset('js/mdb.min.js') }}"></script>
  
  
  <script type="text/javascript">
  
  </script>

</body>
</html>
