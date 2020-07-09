<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('/css/app.css')}}">    
</head>
<body>
    @include('inc.navbar')
    <div class="container">
    @include('inc.messages')
    @yield('content')
    </div>
    <footer class="text-center">
    <p>Copyright &copy; 2020 TodoList</p>
    </footer>
</body>
</html>