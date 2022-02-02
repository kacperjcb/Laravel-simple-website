<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
    <style>


        table.GeneratedTable td, table.GeneratedTable th {
            border-width: 1px;
            border-style: solid;
            padding: 3px;
            text-align: center;

        }


    </style>

    <!-- HTML Code: Place this code in the document's body (between the 'body' tags) where the table should appear -->

    <!-- Codes by Quackit.com -->



</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../">STRONA GŁÓWNA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="omnie">O MNIE </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="portfolio">PORTFOLIO</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="ksiegagosci">KSIĘGA GOŚCI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt">KONTAKT</a>
                </li>
            </ul>

            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }

            </style>
    </nav>
    </div>
</div>

<div class="container">

<form action="{{route('store')}}" method="post" autocomplete="off" accept-charset="UTF-8">
    @csrf
<h3><b>Wpis na listę gości:</b></h3>

Nick:<br>

    <input type="text" name="content" required><br>
    Wiadomość:
    <br>

    <textarea name="content2" cols="36" rows="4" maxlength="100" required=""></textarea>
    <br>
    <input type="submit" name="submit" value="Wpisz się na listę gości">
</form>
    Lista gości:


@if(count($todolists))
    @foreach($todolists as $todolist)
            <table class="GeneratedTable">
                <tr>
                <tr>
                    <th>Nick</th>
                    <th>Wiadomość</th>
                    <th>Usuń</th>
                </tr>


            <form action="{{route('destroy',$todolist->id)}}" method="POST">
<tr>
                        <th>{{$todolist->content}} </th>

                
    <th>  {{$todolist->content2}}
    </th>
            @csrf
                @method('delete')
    <th> <button type="submit" class="btn btn-outline-dark">Delete
                </button>
    </th>
            </form>

        </tr>




    @endforeach

    @endif
        </thead>
</div>
</body>
</html>
