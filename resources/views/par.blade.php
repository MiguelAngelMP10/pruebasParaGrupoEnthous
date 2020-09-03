<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <div class="flex-center position-ref full-height">


        <div class="content" id="app">
            <div class="card">
                <div class="card-header h1 text-center">
                    Saber si un numero es par
                </div>
                <div class="card-body">
                    <input class="form-control form-control-lg" type="number"
                        placeholder="Introduca un número para evaluar si es par" v-model="numero">
                    <textarea class="form-control " v-model="respuesta" rows="3" disabled></textarea>
                    <a class="btn btn-outline-primary " role="button" v-on:click="evaluar()">Es par</a>
                </div>
            </div>


        </div>
    </div>
</body>

</html>
