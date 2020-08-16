<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"> </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <form method="POST" id="survey-form">
            <div class="container" id="forms">
            @csrf
            <div>
                <input class="form-control" type="text" name="surveyname" placeholder="Название опроса">
            </div>
            <input class="form-control" id="first" type="text" name="lol[]" placeholder="Вопрос">
            </div>
            <div class="container">
            <button type="button" onclick="create()">+</button>
            <input type="submit">
         </div>
        </form>
    </body>
    <script>
    function create() {
        $("<input class='form-control' name='lol[]' type='text' placeholder='Вопрос'>")
        .appendTo("#forms");
    }
    </script>
</html>
