<!DOCTYPE html>
<html data-theme="cupcake" lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{-- 
        Start using Tailwind in your project

        Make sure your compiled CSS is included in the <head>
        then start using Tailwind’s utility classes to style your content.
     --}}
    @vite('resources/css/app.css')
</head>
<body>
   {{ $slot }}
</body>
</html>