<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>

</head>
<body>
        include('layouts.header')
        @yield('content') <!-- Ini adalah bagian yang akan diisi oleh halaman-halaman spesifik -->

        <script type="text/javascript">
            $('.date').datepicker({
                format: 'yyyy/mm/dd',
                autoclose: "true"
            })

        </script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
