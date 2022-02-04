<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halooo ini Crudkuu lhooo</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="{{URL::to('siswa')}}" class="navbar-brand">Laravelkuuu</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('siswa')}}">Melihat Semua Siswa</a></li>
                <li><a href="{{URL::to('siswa/create')}}">Membuat Data Siswa</a></li>
            </ul>
        </nav>

        <h1>Mengedit Siswa</h1>
        <form action="/siswa/{{$siswa->id_siswa}}" method="POST">
            @method('PUT')
            @csrf
            Nama:<br>
            <input type="text" name="nama" value="{{$siswa->nama}}">
            Alamat:<br>
            <input type="text" name="alamat" value="{{$siswa->alamat}}">
            No HP:<br>
            <input type="text" name="no_hp" value="{{$siswa->no_hp}}">
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
