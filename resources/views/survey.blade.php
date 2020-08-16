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
                <h1>{{$all->name}}</h1>
            @csrf
            <div>
            <input type="hidden" name="surveyid" value="{{$all->id}}">
                @foreach ($all->questions as $question)
                {{$question->question}}
                <input class="form-control" type="text" name="answer[]" placeholder="Ответ">
                    <input type="hidden" name="question[]" value="{{$question->id}}">
                @endforeach
            </div>
            </div>
            <div class="container">
            <input type="submit">
         </div>
        </form>
    </body>
</html>
