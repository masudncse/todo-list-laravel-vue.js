<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>

    <title>App: Laravel Vue</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-image: url('https://www.ultrait.me/images/content/72075ea8-6.jpg');">
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-5 p-5" style="background-color: #009688c9;">
                <articles></articles>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix("js/app.js") }}"></script>
</body>
</html>
