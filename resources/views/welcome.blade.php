<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <p><a href="{{route('person.create')}}">create person</a></p>
        <table>
            <thead style="border: 1px solid red">
                <th>name</th>
                <th>age</th>
                <th>n_id</th>
                <th>birth date</th>
            </thead>
            <tbody>
                @foreach ($persons as $person)
                    <tr>{{$person->name}}</tr>
                    <tr>{{$person->age}}</tr>
                    <tr>{{$person->nationalityID}}</tr>
                    <tr>{{$person->birthDate}}</tr>
                    <tr style="color: red"><a href="{{route('person.view',['id'=>$person->personID])}}">view</a></tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
