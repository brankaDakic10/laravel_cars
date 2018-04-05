<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body>
       <h2>Information about car:</h2>
       <p >Name: {{$car->title}}</p>
        <p>Producer: {{$car->producer}}</p>
        <p>Number of doors: {{$car->number_of_doors}}</p>

    </body>
</html>
