<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>
@endif

@if(session('danger'))
    <div class="alert alert-danger" role="alert">
        {{session('danger')}}
    </div>
@endif

@yield('content')

</body>
</html>