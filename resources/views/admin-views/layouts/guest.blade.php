<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dicta laudantium sunt magni, architecto, expedita possimus eos, recusandae corporis distinctio corrupti alias nobis molestiae. Exercitationem sequi doloribus at error tempora?</p>
        </div>
    </body>
</html>
