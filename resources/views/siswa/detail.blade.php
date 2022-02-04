<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haloo Ini Crucku lhooo</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="{{URL::to('siswa')}}" class="navbar-brand"></a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('siswa')}}">Melihat Semua Siswa</a></li>
                <li><a href="{{URL::to('siswa/create')}}">Membuat Data Siswa</a></li>
            </ul>
        </nav>

        <h1>Menampilkan {{$siswa->nama}}</h1>
        <div class="jumbotron text-center">
            <h2>{{$siswa->nama}}</h2>
            <p><strong>Alamat:</strong>{{$siswa->alamat}}</p>
            <p><strong>No HP:</strong>{{$siswa->no_hp}}</p>
        </div>
    </div>
</body>

</html>
