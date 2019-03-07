<!DOCTYPE HTML>
<html>
    <head>
        <title>Try Laravel</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('assets/assets/css/noscript.css') }}" /></noscript>
    </head>
<body>
<table class="table table-bordered">
        <tr>
            <td>ID Film</td>
            <td>Nama Film</td>
            <td>Kategori</td>
            <td>Tahun Rilis</td>
        </tr>
@foreach ($varFilm as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama_film }}</td>
            <td>{{ $row->kategori }}</td>
            <td>{{ $row->tahun_rilis }}</td>
        </tr> 
@endforeach
</body>
</head>
</html>