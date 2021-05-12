<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Batteries</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            setTimeout(function(){
                var replacers = document.querySelectorAll('[data-replace]');
                for(var i=0; i<replacers.length; i++){
                    let replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
                    Object.keys(replaceClasses).forEach(function(key) {
                        replacers[i].classList.remove(key);
                        replacers[i].classList.add(replaceClasses[key]);
                    });
                }
            }, 1);
        });





    </script>

</head>
<body class="">
@include('layouts.nav')

@yield('content')

@include('layouts.footer')
</body>

</html>
